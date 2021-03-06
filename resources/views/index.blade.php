<!DOCTYPE HTML>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Forum </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.min.css')}}" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}" media="all" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Switcher CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/switcher-style.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" media="all" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favcion.png')}}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
<!-- Page loader -->
<div id="preloader"></div>
<!-- header section start -->
<header class="header">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="logo">
                    <a href="#home" style="font-size: 25px;color: white">
                        Forum
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-6">
                <div class="responsive-menu"></div>
                <div class="mainmenu">
                    <ul id="primary-menu">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#feature">Testimonials</a></li>
                        <li><a class="nav-link" href="#contact">Contact Us</a></li>
                        <li><a class="appao-btn" href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!-- header section end -->
<!-- hero area start -->
<section class="hero-area" id="home">
    <div class="hero-area-slider">
        <div class="hero-area-single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-area-content">
                            <h1>It’s all about Promoting your Business</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            <a href="#" class="appao-btn">Google Play</a>
                            <a href="#" class="appao-btn">App Store</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="{{asset('assets/img/hand-mockup.png')}}" alt="Hand Mockup" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-area-content">
                            <h1>It’s all about Promoting your Business</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            <a href="#" class="appao-btn">Google Play</a>
                            <a href="#" class="appao-btn">App Store</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="{{asset('assets/img/hand-mockup.png')}}" alt="Hand Mockup" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-area-content">
                            <h1>It’s all about Promoting your Business</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            <a href="#" class="appao-btn">Google Play</a>
                            <a href="#" class="appao-btn">App Store</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="{{asset('assets/img/hand-mockup.png')}}" alt="Hand Mockup" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- counter section start -->
<section class="counter-area ptb-90">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-sm-12">
                <div class="single-counter-box">
                    <i class="icofont icofont-heart-alt"></i>
                    <h1>
                        <span class="counter">
                             <a href="https://info.flagcounter.com/yXPR"><img src="https://s05.flagcounter.com/count2/yXPR/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                        </span>
                    </h1>
                    <p>Total Visotors</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- counter section end -->

<section class="blog-area ptb-90" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Our Latest Blog<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-post">
                    <div class="post-thumbnail">
                        <a href="#"><img src="{{asset('assets/img/blog/blog1.jpg')}}" alt="blog"></a>
                    </div>
                    <div class="post-details">
                        <div class="post-author">
                            <a href="#"><i class="icofont icofont-user"></i>John</a>
                            <a href="#"><i class="icofont icofont-speech-comments"></i>Comments</a>
                            <a href="#"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
                        </div>
                        <h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post">
                    <div class="post-thumbnail">
                        <a href="blog.html"><img src="{{asset('assets/img/blog/blog2.jpg')}}" alt="blog"></a>
                    </div>
                    <div class="post-details">
                        <div class="post-author">
                            <a href="blog.html"><i class="icofont icofont-user"></i>John</a>
                            <a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
                            <a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
                        </div>
                        <h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-md-none d-lg-block">
                <div class="single-post">
                    <div class="post-thumbnail">
                        <a href="blog.html"><img src="{{asset('assets/img/blog/blog3.jpg')}}" alt="blog"></a>
                    </div>
                    <div class="post-details">
                        <div class="post-author">
                            <a href="blog.html"><i class="icofont icofont-user"></i>John</a>
                            <a href="blog.html"><i class="icofont icofont-speech-comments"></i>Comments</a>
                            <a href="blog.html"><i class="icofont icofont-calendar"></i>21 Feb 2018</a>
                        </div>
                        <h4 class="post-title"><a href="blog.html">Lorem ipsum dolor sit</a></h4>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- blog section end -->
<!-- footer section start -->
<footer class="footer" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>Get in Touch</h4>
                    <p class="form-message"></p>
                    <form id="contact-form" action="#" method="POST">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <input type="text" name="subject" placeholder="Your Subject">
                        <textarea placeholder="Messege" name="message"></textarea>
                        <button type="submit" name="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-address">
                    <h4>Address</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    <ul>
                        <li>
                            <div class="contact-address-icon">
                                <i class="icofont icofont-headphone-alt"></i>
                            </div>
                            <div class="contact-address-info">
                                <a href="callto:#">+8801712435941</a>
                                <a href="callto:#">+881934180093</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-address-icon">
                                <i class="icofont icofont-envelope"></i>
                            </div>
                            <div class="contact-address-info">
                                <a href="https://colorlib.com/cdn-cgi/l/email-protection#c9ea">Jsoftbd87gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-address-icon">
                                <i class="icofont icofont-web"></i>
                            </div>
                            <div class="contact-address-info">
                                <a href="#">www.jsoftbd.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-form">
                        <input type="text" id="email" placeholder="Your email address here">
                        <button onclick="subscribe()" id="subscribe_btn">Subcribe</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-area">
                    <ul>
                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                    </ul>
                    <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer section end -->
<a href="#" class="scrollToTop">
    <i class="icofont icofont-arrow-up"></i>
</a>
<div class="switcher-area" id="switch-style">
    <div class="display-table">
        <div class="display-tablecell">
            <a class="switch-button" id="toggle-switcher"><i class="icofont icofont-wheel"></i></a>
            <div class="switched-options">
                <div class="config-title">Home variation:</div>
                <ul>
                    <li><a href="index.html">Home - Fixed Text</a></li>
                    <li class="active"><a href="index-slider.html">Home - Slider Effect</a></li>
                    <li><a href="index-video.html">Home - Video Background</a></li>
                </ul>
                <div class="config-title">Other Pages</div>
                <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-detail.html">Blog Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a href='https://www.counters-free.net/'>Counters-Free.net</a>
<script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=ecda6fa06f9e34e7897515c6892249ba1eef4aae'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/438691/t/3"></script>
<!-- jquery main JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Slick nav JS -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- owl carousel JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Popup JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter JS -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Counterup waypoints JS -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- YTPlayer JS -->
<script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- jQuery Easing JS -->
<script src="{{asset('assets/js/jquery.easing.1.3.html')}}"></script>
<!-- Gmap JS -->
<script src="{{asset('assets/js/gmap3.min.js')}}"></script>
<!-- Google map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
<!-- Custom map JS -->
<script src="{{asset('assets/js/custom-map.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('assets/js/wow-1.3.0.min.js')}}"></script>
<!-- Switcher JS -->
<script src="{{asset('assets/js/switcher.js')}}"></script>
<!-- main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    subscribe = function () {
        $("#subscribe_btn").html("<i class=\"fa fa-fw fa-spinner fa-spin\"></i>");

        $.ajax({
            url: '/add/users/subscription',
            type: 'POST',
            data: {email: $("#email").val()},

            success: function (response) {

                setTimeout(function(){

                    $("#subscribe_btn").html("Subscribed <i class=\"icofont icofont-check\"></i>");

                    $('#email').val('');
                },2000);
            }
        });
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>