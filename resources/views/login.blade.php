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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon_pins.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/favicon_pins.png">

</head>

<body class="body counter-scroll">

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

            <header id="header_main" class="header_1 header-fixed">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="wrap-box flex">
                                    <div id="site-logo">
                                        <div id="site-logo-inner">
                                            <a rel="home" class="main-logo">
                                                <img id="logo_header" src="assets/images/logo/logo_epins_fix_2.png">
                                            </a>
                                        </div>
                                    </div><!-- logo -->
                                    <div class="mobile-button">
                                        <span></span>
                                    </div><!-- /.mobile-button -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-nav-wrap">
                    <div class="overlay-canvas-nav"></div>
                    <div class="inner-canvas-nav">
                        <div class="side-bar">
                            <a href="index.html">
                                <img id="logo_header" src="assets/images/logo/logo.png" data-retina="assets/images/logo/logo@2x.png">
                            </a>
                            <div class="canvas-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                                    <g>
                                        <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="widget-search mt-30">
                                <form action="#" method="get" role="search" class="search-form relative">
                                    <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                    <button class="search search-submit" type="submit" title="Search">
                                        <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="tf-section-2 pt-60 widget-box-icon">
                <div class="themesflat-container w920">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section-1">
                                <h2 class="tf-title pb-16">Login</h2>
                                <p class="pb-40">Masukan kredensial Anda untuk mengakses eCatalog PINS</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="widget-login">
                                <form id="commentform" class="comment-form" action="/login" method="POST">
                                    @csrf
                                    <fieldset class="email">
                                        <label>Email *</label>
                                        <input type="email" id="email" placeholder="Masukan alamat email terdaftar" name="email" tabindex="2" value="" aria-required="true" required>
                                    </fieldset>
                                    <fieldset class="password" style="margin-bottom: 10px;">
                                        <label>Password *</label>
                                        <input class="password-input" type="password" id="password" placeholder="Masukan kata sandi Anda" name="password" tabindex="2" value="" aria-required="true" required>
                                        <i class="icon-show password-addon" id="password-addon"></i>
                                    </fieldset>
                                    <fieldset class="text" style="margin-bottom: 10px;">
                                        <div class="captcha" style="margin-bottom: 10px;">
                                            <span>{!! captcha_img('flat') !!}</span>
                                            <button type="button" class="btn btn-sm btn-danger" id="reload" style="margin-left: 10px; height: fit-content">
                                                <h4>
                                                    &#x21bb;
                                                </h4>
                                            </button>
                                        </div>
                                        <input type="text" id="captcha" placeholder="CAPTCHA" name="captcha" tabindex="2" value="" aria-required="true" required>
                                    </fieldset>
                                    @error('captcha')
                                    <div style="color: red !important; margin-bottom: 10px;">
                                        <p style="color: red">* Captha Salah</p>
                                    </div>
                                    @enderror('captcha')
                                    @error('email')
                                    <div style="color: red !important; margin-bottom: 10px;">
                                        <p style="color: red">* Alamat email atau password anda salah</p>
                                    </div>
                                    @enderror('email')
                                    <div class="btn-submit mb-30">
                                        <button class="tf-button style-1 h50 w-100" type="submit">Login<i class="icon-arrow-up-right2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer id="footer">
                <div class="themesflat-container">
                    <div class="footer-bottom">
                        <p>© 2023 PINS INDONESIA</p>
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

    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/count-down.js"></script>

    <script src="assets/js/simpleParallax.min.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/ScrollTrigger.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/tsparticles.min.js"></script>
    <script src="assets/js/tsparticles.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha)
                }
            })
        });
    </script>
</body>

</html>