<header class="header fixed-top" style="background-color: var(--secondary-color)" id="header">
    <div id="nav-menu-wrap">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" title="Home" href="#">
                    <img src="{{asset('uploads/img/dummy/your-logo.jpg')}}" alt="Logo White"
                         class="img-fluid logo-transparent">
                    <img src="{{asset('uploads/img/dummy/your-logo.jpg')}}" alt="Logo Black"
                         class="img-fluid logo-normal">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#fixedNavbar"
                        aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                </button>
                <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('home')}}">الرئيسيه</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('home')}}#about">من نحن</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('home')}}#myresume">المميزات</a>
                        </li>

                        @auth
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{route('books.my-books', ['myBooks' => true])}}">كتبي</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{route('home')}}#porfolio">الكتب المميزه</a>
                            </li>
                        @endauth


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('home')}}#faqsection">الاساله الشائعه</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('home')}}#contact">تواصل معنا</a>
                        </li>

                        <li class="nav-item navbar-btn-resp d-flex align-items-center">
                            @auth
                                <a href="{{route('profile')}}" class="primary-btn">
                                    <span class="text">{{auth()->user()->name}}</span>
                                    <span class="icon"><i class="fa fa-user" style="transform: rotate(0deg)"></i></span>
                                </a>
                                <a href="{{route('logout')}}" class="primary-btn me-2">
                                    <span class="text">تسجيل الخروج</span>
                                    <span class="icon"><i class="fa fa-sign-in-alt" style="transform: rotate(0deg)"></i></span>
                                </a>
                            @else
                                <a href="{{route('login')}}" class="primary-btn">
                                    <span class="text">تسجيل الدخول</span>
                                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
