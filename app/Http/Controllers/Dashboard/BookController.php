<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()->latest()->paginate(15);
        $categories = Category::query()->latest()->where('status', 'visible')->get();
        return view('dashboard.books.index', compact('books', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255|unique:books,name',
                'category' => 'required|exists:categories,id',
                'author' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:4000',
                'book' => 'required|file',
            ],
            [
                'category.required' => 'حقل قسم الكتاب مطلوب.',
                'name.required' => 'حقل اسم الكتاب مطلوب.',
                'name.string' => 'حقل اسم الكتاب يجب أن يكون نصًا.',
                'name.max' => 'حقل اسم الكتاب يجب ألا يزيد عن 255 حرفًا.',
                'name.unique' => 'اسم الكتاب موجود بالفعل.',

                'author.required' => 'حقل اسم المؤلف مطلوب.',
                'author.string' => 'حقل اسم المؤلف يجب أن يكون نصًا.',
                'author.max' => 'حقل اسم المؤلف يجب ألا يزيد عن 255 حرفًا.',

                'description.required' => 'حقل الوصف مطلوب.',
                'description.string' => 'حقل الوصف يجب أن يكون نصًا.',

                'price.required' => 'حقل السعر مطلوب.',
                'price.numeric' => 'حقل السعر يجب أن يكون رقمًا.',
                'price.min' => 'حقل السعر يجب أن يكون رقمًا موجبًا.',

                'image.required' => 'حقل الصورة مطلوب.',
                'image.image' => 'حقل الصورة يجب أن يكون صورة.',
                'image.mimes' => 'حقل الصورة يجب أن يكون من نوع jpeg, png, jpg.',

                'book.required' => 'حقل الكتاب مطلوب.',
                'book.file' => 'حقل الكتاب يجب أن يكون ملف.',
            ]
        );

        $book = new Book();
        $book->name = $request->name;
        $book->category_id = $request->category;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->image = $request->image->move('images/books', $request->file('image')->getClientOriginalName());
        $book->book = $request->book->move('books', $request->file('book')->getClientOriginalName());
        $book->status = $request->status ? 'visible' : 'hidden';
        $book->save();

        return back()->with('success', 'تم اضافه الكتاب بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'category' => 'required|exists:categories,id',
            'name' => 'required|string|max:255|unique:books,name,' . $book->id,
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image',
            'book' => 'nullable|file'
        ], [
            'category.required' => 'حقل قسم الكتاب مطلوب.',
            'name.required' => 'حقل اسم الكتاب مطلوب.',
            'name.string' => 'حقل اسم الكتاب يجب أن يكون نصًا.',
            'name.max' => 'حقل اسم الكتاب يجب ألا يزيد عن 255 حرفًا.',
            'name.unique' => 'اسم الكتاب موجود بالفعل.',

            'author.required' => 'حقل اسم المؤلف مطلوب.',
            'author.string' => 'حقل اسم المؤلف يجب أن يكون نصًا.',
            'author.max' => 'حقل اسم المؤلف يجب ألا يزيد عن 255 حرفًا.',

            'description.required' => 'حقل الوصف مطلوب.',
            'description.string' => 'حقل الوصف يجب أن يكون نصًا.',

            'price.required' => 'حقل السعر مطلوب.',
            'price.numeric' => 'حقل السعر يجب أن يكون رقمًا.',
            'price.min' => 'حقل السعر يجب أن يكون رقمًا موجبًا.',

            'image.image' => 'حقل الصورة يجب أن يكون صورة.',

            'book.file' => 'حقل الكتاب مطلوب.',
        ]);


        $book->category_id = $request->category;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->price = $request->price;
        if ($request->hasFile('book')) {
            if (file_exists($book->book)) {
                unlink($book->book);
            }
            $book->book = $request->book->move('books', $request->file('book')->getClientOriginalName());
        }
        if ($request->hasFile('image')) {
            if (file_exists($book->image)) {
                unlink($book->image);
            }
            $book->image = $request->image->move('images/books', $request->file('image')->getClientOriginalName());
        }
        $book->status = $request->status ? 'visible' : 'hidden';
        $book->save();

        return back()->with('success', 'تم تعديل الكتاب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if (file_exists($book->image)) {
            unlink($book->image);
        }
        if (file_exists($book->book)) {
            unlink($book->book);
        }
        $book->delete();

        return back()->with('success', 'تم حذف الكتاب بنجاح');
    }
}
