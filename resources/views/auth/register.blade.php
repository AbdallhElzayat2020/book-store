@extends('website.layouts.app')
@section('content')
    <section class="section bg-primary-light" style="margin-top: 4rem">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>انشاء حساب</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <!-- __BLOCK__ -->
                    <div class="contact-form-wrap">
                        <form id="contactForm" action="{{route('register.post')}}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input type="text" name="name" value="{{old('name')}}"
                                               class="form-control"
                                               placeholder="الاسم" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                        @error('name')
                                        <div class="form-validate-icons">
                                            <span class="error"></span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input type="email" id="contactEmail" name="email" value="{{old('email')}}"
                                               class="form-control"
                                               placeholder="البريد الالكتروني" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                        @error('email')
                                        <div class="form-validate-icons">
                                            <span class="error"></span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input type="number" name="phone" value="{{old('phone')}}"
                                               class="form-control"
                                               placeholder="رقم الهاتف" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                        @error('phone')
                                        <div class="form-validate-icons">
                                            <span class="error"></span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input type="password" name="password" autocomplete="off" class="form-control"
                                               placeholder="كلمه المرور" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                        @error('password')
                                        <div class="form-validate-icons">
                                            <span class="error"></span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="form-alerts">
                                    </div>
                                    <div class="contact-btn-left">
                                        <button type="submit" id="contactBtn" class="primary-btn">
                                            <span class="text">انشاء</span>
                                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                        </button>
                                        <a href="{{route('login')}}" class="primary-btn">
                                            <span class="text">تسجيل الدخول</span>
                                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- __ENDBLOCK__ -->

                </div>

            </div>
        </div>

    </section>
@endsection
