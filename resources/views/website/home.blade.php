@extends('website.layouts.app')
@section('content')
    <!--// Hero Section Start //-->
    <section class="hero-banner" data-scroll-index="1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6 col-md-10 wow fadeInUp">
                    <div class="hero-inner">
                        <h1>
                            تعرف علي
                            منصتنا الابداعية.
                        </h1>
                        <h2>
                            إن البدايات الجديدة دائمًا قادرة على دفع الأعمال إلى الأمام. يلزم توفير تجربة المستخدم
                            قبل تقديم الخدمة. والآن فرصة رائعة للعمل مع عملائنا ودفع علامتك التجارية إلى الأمام.
                        </h2>
                        <a href="{{route('books.index')}}" class="white-btn">
                            <span class="text">عرض الكتب</span>
                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 col-md-12 hero-img-resp wow fadeInUp" data-wow-duration="0.7s"
                     data-wow-delay="0.5s">
                    <div class="hero-img">
                        <div class="border-line-outer">
                            <div class="border-line-inner">
                                <img src="{{asset('')}}uploads/img/dummy/354x354.jpg" title="banner image"
                                     alt="banner image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="hero-social-list">
            <li><a href="javascript:void(0)"><i class="fab fa-github"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
        </ul>

        <a href="mailto:elsecolor@example.com" class="hero-email-link">elsecolor@example.com</a>
    </section>
    <!--// Hero Section End //-->


    <!--// About Section Start //-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <img src="{{asset('')}}uploads/img/dummy/480x600.jpg" alt="About image" title="About image"
                             class="img-fluid">
                        <a class="about-video-btn" href="https://www.youtube.com/watch?v=YqQx75OPRa0"><i
                                class="fa fa-play"></i></a>
                        <div class="video-border-line"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                        <h6>من نحن</h6>
                        <h2>نحن هنا مع 10 سنوات من الخبرة في الاستخدام</h2>
                        <p>
                            نحن نمنع ضياع وقتك وترددك في الأعمال التي قمت بها والمشاريع التي قمت بها ونقدم لك أفضل
                            الحلول.
                            يعبر العديد من عملائي وعلاماتي التجارية عن رضاهم عن العمل معي. يمكننا جذب جمهور كبير
                            وتنمية أعمالك.
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="mb-resp-15">
                                    <li>
                                        <div class="text">
                                            <h5>الاسم :</h5>
                                            <p>محمد ايمن</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <h5>الدوله :</h5>
                                            <p>مصر</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <h5>السن :</h5>
                                            <p>24 سنه</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <div class="text">
                                            <h5>الجامعه :</h5>
                                            <p>اداره الاعمال</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <h5>اللغات :</h5>
                                            <p>عربي,انجليزي,الماني</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <h5>العنوان :</h5>
                                            <p>Etowah, TN 37331 United States</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="primary-btn me-3 mb-3">
                            <span class="text">ابداء الان</span>
                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// About Section End //-->

    <!--// Resume Section Start //-->
    <section class="section pb-minus-76 bg-primary-light" id="myresume">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading-left">
                        <span>المميزات</span>
                        <h2>بعض المميزات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-google"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Google LLC</h6>
                                <h5>Web Designer</h5>
                                <span>2018-2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-wordpress"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Wordpress</h6>
                                <h5>Web Developer</h5>
                                <span>2016-2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-dribbble"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Dribbble</h6>
                                <h5>UI Designer</h5>
                                <span>2012-2014</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-youtube"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Youtube LLC</h6>
                                <h5>Seo Manager</h5>
                                <span>2017-2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-amazon"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Amazon</h6>
                                <h5>Sales Manager</h5>
                                <span>2012-2014</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fab fa-behance"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>Behance</h6>
                                <h5>Graphic Designer</h5>
                                <span>2012-2014</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Resume Section End //-->

    <!--// Counter Section Start //-->
    <section class="section pb-minus-70" id="counters">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading light">
                        <span>بعض الاحصائيات</span>
                        <h2>لقد وثق بي أكثر من 10000 عميل</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <div class="counter-item">
                        <h3 class="counter">5,700</h3>
                        <p>عميل سعيد</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.3s">
                    <div class="counter-item">
                        <h3 class="counter">500</h3>
                        <p>مبيعات</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <div class="counter-item">
                        <h3 class="counter">1,250</h3>
                        <p>كتب</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Counter Section End //-->


    <!--// My Works Start //-->
    <section class="section bg-primary-light" id="porfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading-left">
                        <span>الكتب</span>
                        <h2>الكتب المميزه</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-filter">
                        <a href="#" data-portfolio-filter="*" class="current">الكل</a>
                        <a href="#" data-portfolio-filter=".mockup">ديني</a>
                        <a href="#" data-portfolio-filter=".ui">شخصي</a>
                    </div>
                </div>
            </div>
            <div class="row portfolio-grid" id="portfolio-masonry-wrap">
                <div class="col-md-6 col-lg-4 portfolio-item mockup">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Mockup</span>
                                <h5>Card Mockup</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item mockup">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Mockup</span>
                                <h5>Mockup Box</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item mockup">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Mockup</span>
                                <h5>Coffee Mockup</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item mockup">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Mockup</span>
                                <h5>Square Box</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item ui">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Ui Design</span>
                                <h5>Paper Design</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item mockup">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-img">
                            <img src="{{asset('')}}uploads/img/dummy/600x600.jpg" alt="Portfolio image"
                                 class="img-fluid">
                            <a href="{{asset('')}}uploads/img/dummy/600x600.jpg" class="portfolio-zoom-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="body">
                            <div class="portfolio-details">
                                <span>Mockup</span>
                                <h5>Business Card</h5>
                            </div>
                            <a href="#" class="portfolio-link">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="javascript:void(0)" class="primary-btn">
                        <span class="text">عرض المزيد</span>
                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--// My Works End //-->

    <section id="cta">
        <div class="call-to-action mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="call-to-action-inner">
                            <h2>هل تحتاج إلى كتاب جديد؟</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="call-to-action-btn">
                            <a href="#" data-scroll-nav="7" class="white-btn">
                                <span class="text">تواصل معنا</span>
                                <span class="icon"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--// Frequently Asked Questions Section Start //-->
    <section class="section" id="faqsection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span>التعليمات</span>
                        <h2>الاساله الشائعه</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeadingOne">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemOne"
                               aria-expanded="false" aria-controls="accordionItemOne" class="collapsed">
                                <i class="fas fa-question"></i>
                                <span>سؤال 1 ؟</span>
                            </a>
                        </div>
                        <div id="accordionItemOne" class="collapse" aria-labelledby="accordionHeadingOne" style="">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderTwo">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemTwo"
                               aria-expanded="false" aria-controls="accordionItemTwo">
                                <i class="fas fa-question"></i>
                                <span>How to install this program?</span>
                            </a>
                        </div>
                        <div id="accordionItemTwo" class="collapse" aria-labelledby="accordionHeaderTwo">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderThree">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemThree"
                               aria-expanded="false" aria-controls="accordionItemThree">
                                <i class="fas fa-question"></i>
                                <span>How do I edit the dashboard panel?</span>
                            </a>
                        </div>
                        <div id="accordionItemThree" class="collapse" aria-labelledby="accordionHeaderThree">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 accordion-resp-mt">
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeadingFour">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemFour"
                               aria-expanded="false" aria-controls="accordionItemFour" class="collapsed">
                                <i class="fas fa-question"></i>
                                <span>How do i get new updates for free?</span>
                            </a>
                        </div>
                        <div id="accordionItemFour" class="collapse" aria-labelledby="accordionHeadingFour"
                             style="">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderFive">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemFive"
                               aria-expanded="false" aria-controls="accordionItemFive">
                                <i class="fas fa-question"></i>
                                <span>How can I upload a screenshot?</span>
                            </a>
                        </div>
                        <div id="accordionItemFive" class="collapse" aria-labelledby="accordionHeaderFive">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderSix">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemSix"
                               aria-expanded="false" aria-controls="accordionItemSix">
                                <i class="fas fa-question"></i>
                                <span>How do I activate multiple users?</span>
                            </a>
                        </div>
                        <div id="accordionItemSix" class="collapse" aria-labelledby="accordionHeaderSix">
                            <div class="accordion-body">
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Frequently Asked Questions Section End //-->

    <!--// Contact Section Start //-->
    <section class="section bg-primary-light" id="contact" data-scroll-index="7">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span>التواصل</span>
                        <h2>تواصل معنا</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-item">
                        <div class="icon">
                            <span class="fa fa-map-marker-alt"></span>
                        </div>
                        <div class="body">
                            <h5>العنوان</h5>
                            <p>1395 Nixon Avenue Etowah, TN 37331
                                <br>
                                United States
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info-item">
                        <div class="icon">
                            <span class="fas fa-envelope-open-text"></span>
                        </div>
                        <div class="body">
                            <h5>البريد الالكتروني وركم الهاتف:</h5>
                            <p>elsecolor@gmail.com</p>
                            <p>+1 422-200-5555</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <!-- __BLOCK__ -->
                    <div class="contact-form-wrap">
                        <form action="{{route('contact')}}" method="post" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input name="name" type="text" class="form-control"
                                               placeholder="الاسم" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="البريد الالكتروني" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-group">
                                        <input type="text" name="phone" class="form-control"
                                               placeholder="الهاتف" required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-group">
                                                <textarea name="message" class="form-control"
                                                          placeholder="الرساله" cols="20" rows="8"></textarea>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="form-alerts">
                                    </div>
                                    <div class="contact-btn-left">
                                        <button type="submit" id="contactBtn" class="primary-btn">
                                            <span class="text">ارسال رساله</span>
                                            <span class="icon"><i class="fa fa-arrow-right"></i></span>
                                        </button>
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
    <!--// Contact Section End //-->
@endsection
