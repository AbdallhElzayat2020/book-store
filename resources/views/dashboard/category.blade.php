@extends('dashboard.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="card-title m-0">الاقسام</h2>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#createCategory"
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
                        <th>الحاله</th>
                        <th>العمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th>{{$loop->index + 1}}</th>
                            <td>{{$category->name}}</td>
                            <td>

                                @if($category->status == 'visible')
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
                                    data-bs-target="#updateCategory{{$category->id}}"
                                >
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteCategory{{$category->id}}"
                                >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Update Category --}}
                        <div class="modal fade" id="updateCategory{{$category->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">تعديل القسم</h3>
                                        </div>
                                        <form action="{{route('dashboard.category.update', $category->id)}}"
                                              method="post"
                                              class="row g-3">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-12">
                                                <label class="form-label w-100" for="name">الاسم</label>
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        id="name"
                                                        name="name"
                                                        value="{{$category->name}}"
                                                        class="form-control credit-card-mask"
                                                        type="text"
                                                        placeholder="الاسم"
                                                        aria-describedby="modalAddCard2"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12 my-4">
                                                <label class="switch">
                                                    <input name="status" type="checkbox" class="switch-input"
                                                        {{$category->status == 'visible' ? 'checked' : ''}}/>

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
                        {{-- Update Category --}}

                        {{-- Delete Category --}}
                        <div class="modal fade" id="deleteCategory{{$category->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">هل انت متاكد من حذف هذا القسم ( عند مسح القسم سيتم مسح جميع الكتب التابعه له )</h3>
                                        </div>
                                        <form action="{{route('dashboard.category.destroy', $category->id)}}"
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
                        {{-- Delete Category --}}

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Create Category --}}
    <div class="modal fade" id="createCategory" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">اضافه قسم جديد</h3>
                    </div>
                    <form action="{{route('dashboard.category.store')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label class="form-label w-100" for="name">الاسم</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="name"
                                    name="name"
                                    class="form-control credit-card-mask"
                                    type="text"
                                    placeholder="الاسم"
                                    aria-describedby="modalAddCard2"
                                />
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
