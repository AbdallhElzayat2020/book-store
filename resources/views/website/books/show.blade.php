@extends('website.layouts.app')
@section('content')
    <!--// My Works Start //-->
    <section class="section bg-primary-light" id="porfolio" style="margin-top: 30px">
        <div class="container">
            <div class="row gap-3 d-flex  justify-content-between portfolio-grid h-auto pt-4" id="portfolio-masonry-wrap">


                <div class="col-lg-5 bg-white rounded p-4">
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <h6>الاسم : </h6>
                        <span>{{ $book->name }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <h6>الكاتب : </h6>
                        <span>{{ $book->author }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <h6>السعر : </h6>
                        <span>{{ $book->price }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <h6>الفئة : </h6>
                        <span>{{ $book->category->name }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <h6>عمليات الشراء : </h6>
                        <span>300 عملية شراء</span>
                    </div>
                    @if ($book->bookSales()->where('user_id', auth()->id())->count() > 0)
                        <a href="{{ route('books.open', $book->id) }}" class="white-btn">
                            <span class="text">فتح الكتاب</span>
                            <span class="icon"><i class="fa fa-book"></i></span>
                        </a>
                    @else
                        <a href="{{ route('books.pay', $book->id) }}" class="white-btn">
                            <span class="text">شراء الكتاب</span>
                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    @endif
                </div>
                <div class="col-lg-6 mt-3">
                    <img class="img-fluid my-3" src="{{ asset($book->image) }}" alt="{{ $book->name }}">
                    <p style="word-wrap: break-word; overflow-wrap: break-word; word-break: break-word;">
                        {{ $book->description }}</p>
                </div>
            </div>

        </div>
    </section>
    <!--// My Works End //-->
@endsection
