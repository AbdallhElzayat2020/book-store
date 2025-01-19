@extends('dashboard.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="card-title m-0">الكتب</h2>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#createBook"
            >
                اضافه
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الصوره</th>
                        <th>القسم</th>
                        <th>الكاتب</th>
                        <th>السعر</th>
                        <th>الحاله</th>
                        <th>العمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th>{{$loop->index + 1}}</th>
                            <td>{{$book->name}}</td>
                            <td>
                                <img src="{{asset($book->image)}}" alt="" height="70px">
                            </td>
                            <td>{{$book->category->name}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->price}}</td>

                            <td>

                                @if($book->status == 'visible')
                                    <p class="badge bg-label-success text-small m-0">مفعل</p>
                                @else
                                    <p class="badge bg-label-danger text-small m-0">غير مفعل</p>
                                @endif

                            </td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#updateBook{{$book->id}}"
                                >
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteBook{{$book->id}}"
                                >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Update Book --}}
                        <div class="modal fade" id="updateBook{{$book->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">تعديل القسم</h3>
                                        </div>
                                        <form action="{{route('dashboard.book.update', $book->id)}}"
                                              method="post"
                                              enctype="multipart/form-data"
                                              class="row g-3">
                                            @csrf
                                            @method('PUT')

                                            <div class="col-12">
                                                <label class="form-label w-100" for="category">القسم</label>
                                                <div class="input-group input-group-merge">
                                                    <select id="category" name="category" class="form-select">
                                                        @foreach($categories as $category)
                                                            {
                                                            <option
                                                                value="{{$category->id }}" {{$category->id == $book->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label w-100" for="name">الاسم</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="name"
                                                        name="name"
                                                        value="{{$book->name}}"
                                                        class="form-control credit-card-mask"
                                                        type="text"
                                                        placeholder="الاسم"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label w-100" for="author">الكاتب</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="author"
                                                        name="author"
                                                        value="{{$book->author}}"
                                                        class="form-control credit-card-mask"
                                                        type="text"
                                                        placeholder="الكاتب"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label w-100" for="image">الصوره</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="image"
                                                        name="image"
                                                        class="form-control credit-card-mask"
                                                        type="file"
                                                        placeholder="الصوره"
                                                    />
                                                </div>
                                                <img src="{{asset($book->image)}}" height="80px">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label w-100" for="book">الكتاب</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="book"
                                                        name="book"
                                                        class="form-control credit-card-mask"
                                                        type="file"
                                                        placeholder="الكتاب"
                                                        accept="application/pdf"
                                                    />
                                                </div>
                                                <a href="{{asset($book->book)}}" target="_blank">
                                                    <i class="fa fa-file"></i>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label w-100" for="price">السعر</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="price"
                                                        name="price"
                                                        value="{{$book->price}}"
                                                        class="form-control credit-card-mask"
                                                        type="number"
                                                        placeholder="السعر"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label w-100" for="description">الوصف</label>
                                                <div class="input-group input-group-merge">
                                                <textarea
                                                    id="description"
                                                    name="description"
                                                    class="form-control credit-card-mask"
                                                    placeholder="الوصف"
                                                >{{$book->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="switch">
                                                    <input name="status" type="checkbox" checked class="switch-input"/>

                                                    <span class="switch-label p-0 me-1">الحاله</span>

                                                    <span class="switch-toggle-slider">
                                  <span class="switch-on"></span>
                                  <span class="switch-off"></span>
                                </span>
                                                </label>
                                            </div>


                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary me-sm-3 me-1">تعديل
                                                </button>
                                                <button
                                                    type="reset"
                                                    class="btn btn-label-secondary btn-reset"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                >
                                                    الغاء
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Update Book --}}

                        {{-- Delete Book --}}
                        <div class="modal fade" id="deleteBook{{$book->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">هل انت متاكد من حذف هذا الكتاب </h3>
                                        </div>
                                        <form action="{{route('dashboard.book.destroy', $book->id)}}"
                                              method="post"
                                              class="row g-3">
                                            @csrf
                                            @method('DELETE')
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary me-sm-3 me-1">حذف
                                                </button>
                                                <button
                                                    type="reset"
                                                    class="btn btn-label-secondary btn-reset"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                >
                                                    الغاء
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Delete Book --}}

                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{$books->links()}}
            </div>
        </div>
    </div>


    {{-- Create Book --}}
    <div class="modal fade" id="createBook" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">اضافه قسم جديد</h3>
                    </div>
                    <form action="{{route('dashboard.book.store')}}" method="post" class="row g-3"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label class="form-label w-100" for="category">القسم</label>
                            <div class="input-group input-group-merge">
                                <select id="category" name="category" class="form-select">
                                    <option disabled selected>اختر قسم</option>
                                    @foreach($categories as $category)
                                        {
                                        <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="name">الاسم</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="name"
                                    name="name"
                                    class="form-control credit-card-mask"
                                    type="text"
                                    placeholder="الاسم"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="author">الكاتب</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="author"
                                    name="author"
                                    class="form-control credit-card-mask"
                                    type="text"
                                    placeholder="الكاتب"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="image">الصوره</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="image"
                                    name="image"
                                    class="form-control credit-card-mask"
                                    type="file"
                                    placeholder="الصوره"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="book">الكتاب</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="book"
                                    name="book"
                                    class="form-control credit-card-mask"
                                    type="file"
                                    placeholder="الكتاب"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="price">السعر</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="price"
                                    name="price"
                                    class="form-control credit-card-mask"
                                    type="number"
                                    placeholder="السعر"
                                />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label w-100" for="description">الوصف</label>
                            <div class="input-group input-group-merge">
                                <textarea
                                    id="description"
                                    name="description"
                                    class="form-control credit-card-mask"
                                    placeholder="الوصف"
                                ></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="switch">
                                <input name="status" type="checkbox" checked class="switch-input"/>

                                <span class="switch-label p-0 me-1">الحاله</span>

                                <span class="switch-toggle-slider">
                                  <span class="switch-on"></span>
                                  <span class="switch-off"></span>
                                </span>
                            </label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">حفظ</button>
                            <button
                                type="reset"
                                class="btn btn-label-secondary btn-reset"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            >
                                الغاء
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Create Category --}}
@endsection
