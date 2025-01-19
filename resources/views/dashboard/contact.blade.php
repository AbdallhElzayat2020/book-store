@extends('dashboard.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title m-0">التواصل</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>البريد الالكتروني</th>
                        <th>الهاتف</th>
                        <th>الرساله</th>
                        <th>تاريخ الارسال</th>
                        <th>العمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <th>{{$loop->index + 1}}</th>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->message}}</td>
                            <td>{{$contact->created_at}}</td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteCategory{{$contact->id}}"
                                >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>


                        {{-- Delete Contact --}}
                        <div class="modal fade" id="deleteCategory{{$contact->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">هل انت متاكد من الحذف</h3>
                                        </div>
                                        <form action="{{route('dashboard.contact.destroy', $contact->id)}}"
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
                        {{-- Delete Contact --}}

                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{$contacts->links()}}
            </div>
        </div>
    </div>
@endsection
