@extends('website.layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endpush
@section('content')
    <!--// Hero Section Start //-->
    <section class="hero-banner" style="margin-top: 100px;" data-scroll-index="1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6 col-md-10 wow fadeInUp">
                    <div class="hero-inner">
                        <h1>
                            منصة علامة التعليميه
                        </h1>
                        <h2 style="font-size: 25px; line-height: 1.5">


                            لان المهارة هي العنصر الاهم في العملية التعليمية نحن في علامة نختصر لك الزمن ونقدم لك اسرع الطرق
                            للحصول علي
                            <br> <span
                                style="color: var(--main-color); background-color: #fff ; border-radius: 5px; padding: 6px; margin: 8px 0 ;">
                                المهارات التي
                                لا تعلمها
                                المدارس</span>
                        </h2>
                        <a href="{{ route('books.index') }}" class="white-btn">
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
                                <img src="{{ asset('assets/frontend/images/cover.png') }}" title="banner image"
                                    alt="banner image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="hero-social-list">
            <li><a href="https://www.instagram.com/fawaz_al.abdali/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li><a href="https://www.tiktok.com/@fawaz_al.abdali" target="_blank"><i class="fab fa-tiktok"></i></a>
            </li>

            </li>
        </ul>

        <a href="mailto:info@alamah.top" class="hero-email-link">info@alamah.top</a>
    </section>
    <!--// Hero Section End //-->

    <!--// About Section Start //-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/frontend/images/cover.png') }}" alt="About image" title="About image"
                            class="img-fluid">
                        <a class="about-video-btn" href="https://www.youtube.com/watch?v=YqQx75OPRa0"><i
                                class="fa fa-play"></i></a>
                        <div class="video-border-line"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                        <h6>علامة</h6>
                        <h2>كتبنا الكترونية لا توجد نسخ مطبوعة</h2>
                        <p>
                            نحن نمنع ضياع وقتك وترددك في الأعمال التي قمت بها والمشاريع التي قمت بها ونقدم لك أفضل
                            الحلول.
                            يعبر العديد من عملائي وعلاماتي التجارية عن رضاهم عن العمل معي. يمكننا جذب جمهور كبير
                            وتنمية أعمالك.
                        </p>
                        <a href="{{ route('books.index') }}" class="primary-btn me-3 mb-3">
                            <span class="text">اشترك الان</span>
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
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa fa-user"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>

                                <h5>حسن الكلام <br>
                                    دليل ميسر لطلاقة الحديث والردود الذكية
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-1"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>أول برنامج عربي يهتم بمهارات المشافهة</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-book"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>كتبنا إليكترونية لايوجد لدينا نسخ مطبوعة</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-video"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5> نهتم بالجانب العملي وامتلاك المهارة</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-people-group"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>حساب واحد يكفيك أنت وأسرتك
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-file-signature"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-person-burst"></span>
                                    <i class=""></i>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>
                                    البرنامج الإثرائي من تقديم المدرب فواز العبدلي
                                    صانع محتوى ومدرب مهارات ومستشار في البراند الشخصي
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <div class="resume-item">
                        <div class="body">
                            <div class="icon-outer-line">
                                <div class="icon-inner-line">
                                    <span class="fa-solid fa-coins"></span>
                                </div>
                            </div>
                            <div class="text">
                                <h6>علامة</h6>
                                <h5>
                                    محتوى نظري و ١٠ ساعات تدريبية
                                    و١٠٠ مادة إثرائية بطريقة التكرار المتباعد لترسيخ المعلومة
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--// Resume Section End //-->

    <!--// Counter Section Start //-->
    {{-- <section class="section pb-minus-70" id="counters">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading light">
                        <h2>بعض الاحصائيات</h2>
                        <h5 class="text-white">لقد وثق بي أكثر من 3000 شخص </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <div class="counter-item">
                        <h3 class="counter">3000</h3>
                        <h5 style="font-size: 30px;color: #fff">🌍 دول</h5>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.3s">
                    <div class="counter-item">
                        <h3 class="counter">3000</h3>
                        <h5 style="font-size: 30px;color: #fff">📚 قارئ</h5>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <div class="counter-item">
                        <h3 class="counter">30</h3>
                        <h5 style="font-size: 30px;color: #fff">🎓 فيديوهات تدريبية</h5>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">
                    <div class="counter-item">
                        <h3 class="counter">4.9</h3>
                        <h5 style="font-size: 30px;color: #fff">🌟 تقييمات</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
            </div>
            <div class="row portfolio-grid" id="portfolio-masonry-wrap">
                @foreach ($books as $book)
                    <div class="col-md-6 col-lg-4 portfolio-item ">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-item-img">
                                <img src="{{ asset($book->image) }}" alt="Portfolio image" class="img-fluid">
                                <a href="{{ asset($book->image) }}" class="portfolio-zoom-link">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                            <div class="body">
                                <div class="portfolio-details">
                                    <span>{{ $book->category->name }}</span>
                                    <span>{{ $book->price }} ريال </span>
                                    <h5>{{ $book->name }}</h5>
                                </div>
                                <a href="{{ route('books.show', $book->id) }}" class="portfolio-link">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{ route('books.index') }}" class="primary-btn">
                        <span class="text">عرض المزيد</span>
                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--// My Works End //-->

    {{-- testimonial --}}
    <section id="testimonials" class="swiper mySwiper py-5 bg-dark">
        <!-- العنوان -->
        <div class="container text-center mb-5">
            <h2 class="display-5 fw-bold text-white">آراء العملاء </h2>
            <p class="lead text-muted fs-3">تعرف على آراء عملائنا الكرام وتجاربهم معنا.</p>
        </div>

        <!-- السلايدر -->
        <div class="swiper-wrapper">

            <!-- البطاقة الثانية -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">المعلى الصميدعي</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    هذا البرنامج ملهم للشباب ليمكنهم من حسن الأداء اللفظي والردود الذكية وتحسين سرعة البديهة وتجاوز المواقف
                    المحرجة .
                    فمن حفظه وعمل به سيرى فرقا كبيرا في حياته.
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
            <!-- البطاقة التالتة -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">الحسين الداهري</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    هو السهل الممتنع حيث يسمو بك ويرفعك عن كلام العامة ليصعد بك الى منطق أعلى من آيات وأحاديث وحكم وأمثال
                    وأشعار السابقين. ويقوي ملكتك الأدبية والابداعية.
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
            <!-- البطاقة التالتة -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">سكينة بنت مؤيد</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    عمل رائع وفريد من نوعه وينبغي أن يكون مرجعا في ذهن كل شاب وشابة.
                    حتى يرتقي بشخصيته الاجتماعية.
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
            <!-- البطاقة التالتة -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">بدر العامري / عمان</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    برنامج جميل جدا جدا..
                    ومناسب للشباب والشبات.
                    يقوي الشخصية ويزيد الهيبة والثقة
                    اتمنى لكم التوفيق والسداد والنجاح..
                    بارك الله لكم وسدد خطاكم ..
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
            <!-- البطاقة التالتة -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2"> د مرشد ديفيدز / جنوب افريقيا</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    برنامج حسن الكلام دليل أساسي لكل من يسعى لتعزيز مهاراته في التواصل، خاصة في عصر يتراجع فيه الحديث ذو
                    المعنى الحقيقي. يقدم البرنامج مهارات عملية في سياق ثقافتنا، وأمثلة من الواقع، ونصائح قابلة للتطبيق، مما
                    يمنح القرّاء القدرة على خوض المحادثات بثقة ووضوح وتعاطف. سواء كان هدفك تعزيز العلاقات الشخصية أو تحقيق
                    التميز المهني، فإن هذا الكتاب يقدم رؤى قيّمة يسهل تطبيقها
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>
            <!-- البطاقة الأولى -->
            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">أبو مروان</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    محتوى
                    توعوي؛ تحفيزي؛ تعليمي؛ تنشيطي؛ تثقيفي؛ تدريبي على تنميق العبارات؛ وتحسين الدفاعات عن النفس؛ ويعلمك فنون
                    القتال مع أهل التنمر بأجمل العبارات وينبهك عليها.
                    ويساعدك ويحبب لك كتب الأدب والشعر.
                    حري بكل بيت أن يكون موجودا فيه.
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>

            <div class="swiper-slide mx-2 p-4 bg-dark bg-opacity-75 shadow-lg rounded text-center">
                <img src="{{ asset('assets/frontend/images/user.webp') }}" alt="صورة العميل" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px;">
                <h5 class="fw-bold text-white mb-2">د محمد العبدالكريم</h5>
                <p class="text-white mb-3 fs-3">
                    <b> حسن الكلام</b>
                    <br>
                    كم يجذبك بعض الأشخاص ببراعة حديثهم وآخرين بحسن اجاباتهم والبعض بحسن السرد وغيرهم بذكاء التخلص من
                    الإحراج.. هذه الملكات والمهارات يمكن اكتسابها بالمصاحبة أو بالممارسة وبحضور هذا البرنامج
                </p>
                <div class="text-warning">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </div>


        </div>

        <!-- أزرار التنقل -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>

        <!-- النقاط -->
        <div class="swiper-pagination mt-3"></div>
    </section>
    {{-- testimonial --}}

    <!--// Frequently Asked Questions Section Start //-->
    <section class="section" id="faqsection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span>التعليمات</span>
                        <h2>الأسئلة الشائعة</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeadingOne">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemOne"
                                aria-expanded="false" aria-controls="accordionItemOne" class="collapsed">
                                <span>ماذا تقدمون؟</span>
                            </a>
                        </div>
                        <div id="accordionItemOne" class="collapse" aria-labelledby="accordionHeadingOne"
                            style="">
                            <div class="accordion-body">
                                <p>
                                    نحن نهتم بالمهارات التي لاتعلمها المدارس
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderTwo">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemTwo"
                                aria-expanded="false" aria-controls="accordionItemTwo">

                                <span>انتم شركة تدريب </span>
                            </a>
                        </div>
                        <div id="accordionItemTwo" class="collapse" aria-labelledby="accordionHeaderTwo">
                            <div class="accordion-body">
                                <p>
                                    نحن متجر يقدم كتاب وإثراء
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderThree">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemThree"
                                aria-expanded="false" aria-controls="accordionItemThree">

                                <span>هل هناك خدمات أخرى</span>
                            </a>
                        </div>
                        <div id="accordionItemThree" class="collapse" aria-labelledby="accordionHeaderThree">
                            <div class="accordion-body">
                                <p>
                                    نقدم استشارات مرتبطة بهذه المهارات
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

                                <span>هل كتبكم مطبوعة</span>
                            </a>
                        </div>
                        <div id="accordionItemFour" class="collapse" aria-labelledby="accordionHeadingFour"
                            style="">
                            <div class="accordion-body">
                                <p>
                                    ليس لدينا كتب مطبوعة كل ملفاتنا اليكترونية pdf
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="accordionHeaderFive">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordionItemFive"
                                aria-expanded="false" aria-controls="accordionItemFive">

                                <span>لماذا لاتطبع الكتب</span>
                            </a>
                        </div>
                        <div id="accordionItemFive" class="collapse" aria-labelledby="accordionHeaderFive">
                            <div class="accordion-body">
                                <p>
                                    لأننا نهتم بالمهارات فالإثراء لدينا يهتم بأن يمتلك المتدرب مهارة وليس معلومة
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
                            <p>
                                المملكة العربية السعودية،
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
                            <h5>البريد الالكتروني ورقم الهاتف:</h5>
                            <p>info@alamah.top</p>
                            <p style="direction: ltr">00966501212021</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <!-- __BLOCK__ -->
                    <div class="contact-form-wrap">
                        <form action="{{ route('contact') }}" method="post" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form-group">
                                        <input name="name" type="text" class="form-control" placeholder="الاسم"
                                            required>
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
                                        <input type="text" name="phone" class="form-control" placeholder="الهاتف"
                                            required>
                                        <div class="form-validate-icons">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-group">
                                        <textarea name="message" class="form-control" placeholder="رسالتك" cols="20" rows="8"></textarea>
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

    @push('scripts')
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                },
            });
        </script>
    @endpush
@endsection
