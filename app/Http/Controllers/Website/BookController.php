<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookSale;
use CURLFile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use MyFatoorah\Library\API\Payment\MyFatoorahPayment;

class BookController extends Controller
{
    /**
     * @var array
     */
    public $mfConfig = [];


    /**
     * Initiate MyFatoorah Configuration
     */
    public function __construct()
    {
        $this->mfConfig = [
            'apiKey' => config('myfatoorah.api_key'),
            'isTest' => config('myfatoorah.test_mode'),
            'countryCode' => config('myfatoorah.country_iso'),
        ];
    }

    public function index(Request $request)
    {
        $books = Book::query()
            ->latest()
            ->when($request->search, function ($book) use ($request) {
                return $book->where('name', 'LIKE', "%{$request->search}%")
                    ->orWhere('author', 'LIKE', "%{$request->search}%")
                    ->orWhere('description', 'LIKE', "%{$request->search}%");
            })
            ->paginate(20);
        return view('website.books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('website.books.show', compact('book'));
    }

    public function myBooks()
    {
        $books = Book::query()->whereHas('bookSales', function ($bookSale) {
            $bookSale->where('user_id', auth()->id());
        })->get();
        return view('website.books.my_books', compact('books'));
    }

    public function pay(Book $book)
    {
        try {
            //For example: pmid=0 for MyFatoorah invoice or pmid=1 for Knet in test mode
            $paymentId = request('pmid') ?: 0;
            $sessionId = request('sid') ?: null;
            $orderId = auth()->id() . now();
            $curlData = [
                'CustomerName' => auth()->user()->name,
                'CustomerReference' => $book->id,
                'InvoiceValue' => $book->price,
                'DisplayCurrencyIso' => 'KWD',
                'CustomerEmail' => auth()->user()->email,
                'CallBackUrl' => route('books.callback'),
                'ErrorUrl' => route('books.callback'),
                'Language' => 'ar',
            ];


            $mfObj = new MyFatoorahPayment($this->mfConfig);
            $payment = $mfObj->getInvoiceURL($curlData, $paymentId, $orderId, $sessionId);

            return redirect($payment['invoiceURL']);
        } catch (Exception $ex) {
            $exMessage = __('myfatoorah.' . $ex->getMessage());
            return response()->json(['IsSuccess' => 'false', 'Message' => $exMessage]);
        }

    }


    public function callback(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://apitest.myfatoorah.com/v2/GetPaymentStatus',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode([
                'Key' => $request->paymentId,
                'KeyType' => 'PaymentId',
            ]),
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $this->mfConfig['apiKey'],
                'Content-Type: application/json',
            ],
        ]);

        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        if ($response->IsSuccess == true) {

            if ($response->Data->InvoiceStatus == 'Paid') {
                $bookSale = new BookSale();
                $bookSale->user_id = auth()->id();
                $bookSale->book_id = $response->Data->CustomerReference;
                $bookSale->price = $response->Data->InvoiceValue;
                $bookSale->payment_id = $request->paymentId;
                $bookSale->status = $response->Data->InvoiceStatus;
                $bookSale->save();


                return redirect()->route('books.show', $response->Data->CustomerReference)->with('success', 'تم شراء الكتاب بنجاح');
            }

        }

        return redirect()->route('books.show', $response->Data->CustomerReference)->with('error', 'حدث خطاء اثناء عمليه الدفع برجاء المحاوله مره اخري');

    }

    public function open(Book $book)
    {

        if ($book->bookSales()->where('user_id', auth()->id())->count() <= 0) {
            return redirect()->route('books.show', $book->id)->with('error', 'لا يمكنك الوصول الي هذا الكتاب');
        }

        $username = 'bdrango';
        $apiKey = '6f158d811f43d2429ea77c53ddc619a7';

        $apiUrl = 'https://api.pdfcrowd.com/convert/24.04/';

        $filePath = $book->book;

        if (!file_exists($filePath)) {
            die("الملف $filePath غير موجود.");
        }

        $data = [
            'input_format' => 'pdf',
            'output_format' => 'html',
            'file' => new CURLFile($filePath)
        ];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$apiKey");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        return $response;
    }

}
