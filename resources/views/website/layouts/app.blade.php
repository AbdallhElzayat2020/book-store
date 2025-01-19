<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="title" content=" Homepage ">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:title" content=" Homepage ">
    <meta property="og:url" content="http://book-store.test">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta itemprop="image" content="">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="">
    <meta property="twitter:title" content=" Homepage ">
    <meta property="twitter:description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title> كتاب </title>

    <!-- Favicon -->
    <link href="{{ asset('') }}uploads/img/dummy/favicon.png" sizes="128x128" rel="shortcut icon"
        type="image/x-icon" />
    <link href="{{ asset('') }}uploads/img/dummy/favicon.png" sizes="128x128" rel="shortcut icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">


    <!--// Boostrap v5 //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/bootstrap.min.css">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/magnific.popup.min.css">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/animate.min.css">
    <!--// Vegas Slider Css //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/vegas.slider.min.css">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/owl.carousel.min.css">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/vendor/css/owl.carousel.default.min.css">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/fonts/font_awesome/css/all.css">
    <!--// Flat Icons //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/fonts/flat_icons/flaticon.css">


    <style>
        :root {
            --main-color: #ff4500;
            --secondary-color: #171718;
            --scroll-button-color: #00baa3;
            --bottom-button-color: #212529;
            --bottom-button-hover-color: #333;
            --side-button-color: #25d366;

            --title-font: 'Poppins', sans-serif;
            --text-font: 'Roboto', sans-serif;
        }
    </style>



    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/style.css">
    <!--// Theme Color Css //-->

    <!--  helper style css file -->
    <link rel="stylesheet" href="{{ asset('') }}assets/frontend/css/helper-style.css">

    <!--  toastify css file -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @stack('styles')

<body data-bs-spy="scroll" data-bs-target="#fixedNavbar" class="rtl-mode">


    <!--// Page Wrapper Start //-->
    <div class="page-wrapper" id="wrapper">

        <!--// Main Area Start //-->
        <main class="main-area">

            <!--// Header Start //-->
            @include('website.layouts.header')
            <!--// Header End  //-->

            @yield('content')

            <!--// Footer Start //-->
            @include('website.layouts.footer')
            <!--// Footer End //-->


        </main>
        <!--// Main Area End //-->

        <a href="#" class="scroll-top-btn" data-scroll-goto="1">
            <i class="fa fa-arrow-up"></i>
        </a>
        <!--// .scroll-top-btn // -->

        <div id="preloader-wrap">
            <div class="preloader-inner">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!--// Preloader // -->

    </div>
    <!--// Page Wrapper End //-->

    <div class="mobile-widget-container">
        <a href="tel:" class="btn btn-icon">
            <i class="fas fa-phone-alt"></i> Call
        </a>
        <a href="https://wa.me/" class="btn btn-icon">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
    </div>


    <a href="#" class="btn-whatsapp-pulse custom-color-black">
        <i class="fas fa-phone"></i>
    </a>

    <a href="#" class="btn-whatsapp-pulse btn-whatsapp-pulse-border">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a href="#" class="btn-whatsapp-pulse btn-whatsapp-pulse-border-2 custom-color-blue">
        <i class="fab fa-facebook"></i>
    </a>


    <!--// JQuery //-->
    <script src="{{ asset('assets/frontend/vendor/js/jquery.min.js') }}"></script>
    <!--// Bootstrap //-->
    <script src="{{ asset('assets/frontend/vendor/js/bootstrap.min.js') }}"></script>
    <!--// Images Loaded Js //-->
    <script src="{{ asset('assets/frontend/vendor/js/images.loaded.min.js') }}"></script>
    <!--// Wow Js //-->
    <script src="{{ asset('assets/frontend/vendor/js/wow.min.js') }}"></script>
    <!--// Magnific Popup //-->
    <script src="{{ asset('assets/frontend/vendor/js/magnific.popup.min.js') }}"></script>
    <!--// Waypoint Js //-->
    <script src="{{ asset('assets/frontend/vendor/js/waypoint.min.js') }}"></script>
    <!--// Counter Up Js //-->
    <script src="{{ asset('assets/frontend/vendor/js/counter.up.min.js') }}"></script>
    <!--// JQuery Easing Functions //-->
    <script src="{{ asset('assets/frontend/vendor/js/jquery.easing.min.js') }}"></script>
    <!--// Owl Carousel //-->
    <script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
    <!--// Form Validate //-->
    <script src="{{ asset('assets/frontend/vendor/js/validate.min.js') }}"></script>
    <!--// Form Validate //-->
    <script src="{{ asset('assets/frontend/vendor/js/custom.select.plugin.js') }}"></script>
    <!--// Scroll It //-->
    <script src="{{ asset('assets/frontend/vendor/js/scrollit.min.js') }}"></script>
    <!--// Isotope Js //-->
    <script src="{{ asset('assets/frontend/vendor/js/isotope.min.js') }}"></script>


    <!--// Zepto //-->
    <script src="{{ asset('assets/frontend/vendor/js/zepto.min.js') }}"></script>
    <!--// Vegas Slider //-->
    <script src="{{ asset('assets/frontend/vendor/js/vegas.slider.min.js') }}"></script>
    <!--// MB Youtube Player //-->
    <script src="{{ asset('assets/frontend/vendor/js/jquery.mb-ytb.min.js') }}"></script>
    <!--// Main Js //-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


    <!-- Theme Main Js  -->
    <script src="{{ asset('assets/frontend/js/rtl-mode.js') }}"></script>

    <!-- toastify js file -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        @if (session('success'))
            Toastify({
                text: '{{ session('success') }}',
                duration: 3000,
                close: true,
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
            }).showToast();
        @endif

        @if (session('error'))
            Toastify({
                text: '{{ session('error') }}',
                duration: 3000,
                close: true,
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #e74c3c, #e67e22)",
                },
            }).showToast();
        @endif
    </script>

    @stack('scripts')
</body>

</html>
