<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>E-Catalog PINS</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon_pins_removebg.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/favicon_pins_removebg.png') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
        .carousel-item img {
            width: 100%;
            object-fit: cover;
            /* Ensures the image covers the entire area, cropping the excess if needed */
        }

        .swiper-pagination-bulle {
            background: none !important;
        }

        .search-produk::placeholder {
            color: black !important;
            opacity: .5;
        }

        .carousel-control-prev-icon {
            filter: invert(100%);
            /* Makes the icon black */
        }

        /* Change the color of the next icon */
        .carousel-control-next-icon {
            filter: invert(100%);
            /* Makes the icon black */
        }

        /* Adjust the background color of the control buttons if needed */
        .carousel-control-prev,
        .carousel-control-next {
            border-radius: 50%;
            /* Optional: Make the controls circular */
        }
    </style>
    @stack('additional_css')
</head>

<body class="body background-white">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="pt-40">
            <header id="header_main" class="header_1 header-fixed style-white">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="wrap-box flex">
                                    <div id="site-logo">
                                        <div id="site-logo-inner" style="width: 180px;">
                                            <a href="/home" rel="home" class="main-logo">
                                                <img id="logo_header" src="/assets/images/logo/logo_baru_epins.jpeg">
                                            </a>
                                        </div>
                                    </div><!-- logo -->
                                    <div class="mobile-button">
                                        <span></span>
                                    </div><!-- /.mobile-button -->
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                    <div class="flat-wallet flex">
                                        <div class="" id="wallet-header">
                                            <a href="https://wa.me/6281287133571?text=Saya ada pertanyaan seputar e-Catalog PINS Indonesia" target="_blank" id="connectbtn" class="tf-button style-1">
                                                <span>Hubungi Admin</span>
                                            </a>
                                        </div>
                                        <div class="canvas style-1">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-nav-wrap">
                    <div class="overlay-canvas-nav"></div>
                    <div class="inner-canvas-nav">
                        <div class="side-bar">
                            <div class="canvas-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                                    <g>
                                        <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="widget-search mt-30" style="margin-top: 50px !important;">
                                <form action="#" method="get" role="search" class="search-form relative">
                                    <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                    <button class="search search-submit" type="submit" title="Search">
                                        <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widget widget-categories">
                                <h5 class="title-widget">Menu</h5>
                                <ul>
                                    <li>
                                        <div class="cate-item"><a href="/about">About Us</a></div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="/browse_product">Produk</a></div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="/wishlist">Keranjang Belanja</a></div>
                                    </li>
                                    <li>
                                        <div class="cate-item"><a href="/faq">FAQ</a></div>
                                    </li>
                                    @if(Auth::user() && !Auth::user()->is_pins)
                                    <li>
                                        <div class="cate-item"><a href="/change-password">Change Password</a></div>
                                    </li>
                                    @endif
                                </ul>
                            </div>

                            <div class="flat-tabs">
                                <div class="section-menu-left" style="padding: 0 !important;">
                                    <div class="over-content">
                                        <div class="content">
                                            <div class="content">
                                                <ul class="menu-tab">
                                                    <li class="tablinks" data-tabs="settings">
                                                        <a href="/logout">Logout</a>
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.2">
                                                                <path d="M13.7627 6.77369V5.91844C13.7627 4.05303 12.2502 2.54053 10.3848 2.54053H5.91606C4.05156 2.54053 2.53906 4.05303 2.53906 5.91844V16.1209C2.53906 17.9864 4.05156 19.4989 5.91606 19.4989H10.394C12.2539 19.4989 13.7627 17.9909 13.7627 16.131V15.2666" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M19.9907 11.0196H8.95312" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M17.3047 8.34741L19.9887 11.0195L17.3047 13.6925" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                        </svg>
                                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0709 10.2942C8.66986 10.2942 8.35275 10.6059 8.35275 11C8.35275 11.385 8.66986 11.7059 9.0709 11.7059H14.6668V16.0875C14.6668 18.3334 12.8108 20.1667 10.5165 20.1667H5.97448C3.68948 20.1667 1.8335 18.3425 1.8335 16.0967V5.91254C1.8335 3.65754 3.69881 1.83337 5.98381 1.83337H10.5352C12.8108 1.83337 14.6668 3.65754 14.6668 5.90337V10.2942H9.0709ZM17.9945 7.82856L20.6712 10.4961C20.8087 10.6336 20.882 10.8077 20.882 11.0002C20.882 11.1836 20.8087 11.3669 20.6712 11.4952L17.9945 14.1627C17.857 14.3002 17.6737 14.3736 17.4995 14.3736C17.3162 14.3736 17.1328 14.3002 16.9953 14.1627C16.7203 13.8877 16.7203 13.4386 16.9953 13.1636L18.462 11.7061H14.667V10.2944H18.462L16.9953 8.83689C16.7203 8.56189 16.7203 8.11272 16.9953 7.83772C17.2703 7.55356 17.7195 7.55356 17.9945 7.82856Z" fill="#e63946" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav-wrap">
                    <div class="overlay-mobile-nav"></div>
                    <div class="inner-mobile-nav">
                        <div class="mobile-nav-close">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                                <g>
                                    <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                </g>
                            </svg>
                        </div>
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <ul id="menu-mobile-menu" class="menu" style="border-top: 0 !important;">
                                <li class="menu-item">
                                    <a class="item-menu-mobile" href="/about">About Us</a>
                                </li>
                                <li>
                                    <div class="item-menu-mobile"><a href="/browse_product">Produk</a></div>
                                </li>
                                <li>
                                    <div class="item-menu-mobile"><a href="/wishlist">Keranjang Belanja</a></div>
                                </li>
                                <li>
                                    <a class="item-menu-mobile" href="/faq">FAQ</a>
                                </li>
                                @if(Auth::user() && !Auth::user()->is_pins)
                                <li>
                                    <div class="item-menu-mobile"><a href="/change-password">Change Password</a></div>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        <!-- <div class="widget-search mt-30">
                            <form action="#" method="get" role="search" class="search-form relative">
                                <input type="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                <button class="search search-submit" type="submit" title="Search">
                                    <i class="icon-search"></i>
                                </button>
                            </form>
                        </div> -->
                        <div class="flat-tabs" style="margin-top: 15px;">
                            <div class="section-menu-left" style="padding: 0 !important;">
                                <div class="over-content">
                                    <div class="content">
                                        <ul class="menu-tab">
                                            <li class="tablinks" data-tabs="settings">
                                                <a href="/logout">Logout</a>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.2">
                                                        <path d="M13.7627 6.77369V5.91844C13.7627 4.05303 12.2502 2.54053 10.3848 2.54053H5.91606C4.05156 2.54053 2.53906 4.05303 2.53906 5.91844V16.1209C2.53906 17.9864 4.05156 19.4989 5.91606 19.4989H10.394C12.2539 19.4989 13.7627 17.9909 13.7627 16.131V15.2666" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M19.9907 11.0196H8.95312" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M17.3047 8.34741L19.9887 11.0195L17.3047 13.6925" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0709 10.2942C8.66986 10.2942 8.35275 10.6059 8.35275 11C8.35275 11.385 8.66986 11.7059 9.0709 11.7059H14.6668V16.0875C14.6668 18.3334 12.8108 20.1667 10.5165 20.1667H5.97448C3.68948 20.1667 1.8335 18.3425 1.8335 16.0967V5.91254C1.8335 3.65754 3.69881 1.83337 5.98381 1.83337H10.5352C12.8108 1.83337 14.6668 3.65754 14.6668 5.90337V10.2942H9.0709ZM17.9945 7.82856L20.6712 10.4961C20.8087 10.6336 20.882 10.8077 20.882 11.0002C20.882 11.1836 20.8087 11.3669 20.6712 11.4952L17.9945 14.1627C17.857 14.3002 17.6737 14.3736 17.4995 14.3736C17.3162 14.3736 17.1328 14.3002 16.9953 14.1627C16.7203 13.8877 16.7203 13.4386 16.9953 13.1636L18.462 11.7061H14.667V10.2944H18.462L16.9953 8.83689C16.7203 8.56189 16.7203 8.11272 16.9953 7.83772C17.2703 7.55356 17.7195 7.55356 17.9945 7.82856Z" fill="#e63946" />
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <!-- Footer -->
            <footer id="footer" class="bg-white">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content flex flex-grow">
                                <div class="widget-last">
                                    <div class="widget-menu style-4">
                                        <ul>
                                            <li><a href="#">0215082079</a></li>
                                            <li><a href="#">product@pins.co.id</a></li>
                                            <li><a href="#">
                                                    The Telkom Hub, Tower II lt.42
                                                    <br>
                                                    Jl. Gatot Subroto Kav. 52, Jakarta Selatan 12710
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="title-widget mt-30">Social Media</h5>
                                    <div class="widget-social">
                                        <ul class="flex">
                                            <li><a href="https://www.instagram.com/p/C78uqMxSCwB/?igsh=bm42N3dkZG1tdTd5" class="icon-instagram"></a></li>
                                            <li><a href="https://www.linkedin.com/company/pt-pins-indonesia/" class="icon-linkedin2"></a></li>
                                            <li><a href="https://www.facebook.com/pinstheiotcompany" class="icon-facebook"></a></li>
                                            <li><a href="https://youtu.be/SC5jOcUB4Y4?si=3OBmJnbqpN43JlEu" class="icon-youtube"></a></li>
                                        </ul>
                                    </div>
                                    <h6 class="title-widget mt-10">
                                        <a href="https://www.pins.co.id/#/nav/home">www.pins.co.id</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom" style="margin-top: 0 !important">
                        <p>� 2024 PINS INDONESIA</p>
                        <ul class="flex">
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer><!-- /#footer -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    @yield('js')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/count-down.js') }}"></script>
    <script src="{{ asset('assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('assets/js/tsparticles.min.js') }}"></script>
    <script src="{{ asset('assets/js/tsparticles.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>