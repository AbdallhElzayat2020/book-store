@extends('website.layouts.app')
@section('content')

    <!--// My Works Start //-->
    <section class="section bg-primary-light" id="porfolio" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading-left">
                        <h2>الكتب</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="{{route('books.index')}}" id="contactForm" method="get">
                        <div class="contact-form-group">
                            <input type="search" name="search" class="w-100 py-2 px-4 border-0 shadow rounded-pill"
                                   placeholder="بحث">
                            <div class="form-validate-icons">
                                <span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row portfolio-grid" id="portfolio-masonry-wrap">
                @foreach($books as $book)
                    <div class="col-md-6 col-lg-4 portfolio-item ">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-img">
                                <img src="{{asset($book->image)}}" alt="Portfolio image"
                                     class="img-fluid">
                                <a href="{{asset($book->image)}}" class="portfolio-zoom-link">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                            <div class="body">
                                <div class="portfolio-details">
                                    <span>{{$book->price}}</span>
                                    <h5>{{$book->name}}</h5>
                                </div>
                                <a href="{{route('books.show', $book->id)}}" class="portfolio-link">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--// My Works End //-->

@endsection
