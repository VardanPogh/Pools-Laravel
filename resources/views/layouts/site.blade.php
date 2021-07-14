<?php use Illuminate\Support\Facades\Route;
$currentUrl = Route::getFacadeRoot()->current()->uri();
?>
<html>
<head>
    <title>SPLASHTEMP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/sass/main.css">
    <link rel="stylesheet" href="/sass/responsive.css">
    @if($currentUrl === '/')
        <link rel="stylesheet" href="/css/fullpage.css">
    @endif
</head>

<body>
<!-- Start Header -->
<header class="navigation-wrap">
    <div class="inner-wrap">
        <div class="menu">
            <div class="logo">
                <a href="/"><img src="../img/logo.png" alt=""></a>
            </div>
            <ul>
                <li><a href="/">Blog</a></li>
                <li><a href="/">Contact</a></li>
            </ul>
            <div class="m-lines">
                <div class="vh-centered">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<div>
    @yield('content')


    {{--    <div class="blog-wrap">--}}
    {{--        <div class="inner-wrap">--}}
    {{--            <h2>Blog</h2>--}}
    {{--            <div class="item-wrap">--}}
    {{--                <div class="item">--}}
    {{--                    <h2><i class="fas fa-clock"></i>1h ago Gary NG</h2>--}}
    {{--                    <div class="img" style="background-image: url(../img/img10.png);"></div>--}}
    {{--                    <h3>Why is Pool Temperature Important?</h3>--}}
    {{--                    <p>Have you ever jumped into a nice, cool swimming pool on a super-hot day? It’s either refreshing--}}
    {{--                        or a nightmarish shock to your system.</p>--}}
    {{--                    <button class="btn">View More</button>--}}
    {{--                </div>--}}
    {{--                <div class="item">--}}
    {{--                    <h2><i class="fas fa-clock"></i>1h ago Gary NG</h2>--}}
    {{--                    <div class="img" style="background-image: url(../img/img11.png);"></div>--}}
    {{--                    <h3>Why is Pool Temperature Important?</h3>--}}
    {{--                    <p>Have you ever jumped into a nice, cool swimming pool on a super-hot day? It’s either refreshing--}}
    {{--                        or a nightmarish shock to your system.</p>--}}
    {{--                    <button class="btn">View More</button>--}}
    {{--                </div>--}}
    {{--                <div class="item">--}}
    {{--                    <h2><i class="fas fa-clock"></i>1h ago Gary NG</h2>--}}
    {{--                    <div class="img" style="background-image: url(../img/img12.png);"></div>--}}
    {{--                    <h3>Why is Pool Temperature Important?</h3>--}}
    {{--                    <p>Have you ever jumped into a nice, cool swimming pool on a super-hot day? It’s either refreshing--}}
    {{--                        or a nightmarish shock to your system.</p>--}}
    {{--                    <button class="btn">View More</button>--}}
    {{--                </div>--}}
    {{--                <div class="item">--}}
    {{--                    <h2><i class="fas fa-clock"></i>1h ago Gary NG</h2>--}}
    {{--                    <div class="img" style="background-image: url(../img/img13.png);"></div>--}}
    {{--                    <h3>Why is Pool Temperature Important?</h3>--}}
    {{--                    <p>Have you ever jumped into a nice, cool swimming pool on a super-hot day? It’s either refreshing--}}
    {{--                        or a nightmarish shock to your system.</p>--}}
    {{--                    <button class="btn">View More</button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="contact-wrap">
        <div class="inner-wrap">
            <h2>Contact Us</h2>
            <div class="item-wrap">
                <div class="item contact-info">
                    <h2>Address</h2>
                    <p><a href=""><i class="fas fa-map-marker-alt"></i>Calgary, AB</a></p>
                    <h2>Call Us</h2>
                    <p><a href=""><i class="fas fa-phone"></i>1-403-993-0066</a></p>
                    <h2>Email</h2>
                    <p><a href="mailto:jeremy@splashtemp.com"><i class="fas fa fa-envelope"></i>jeremy@splashtemp.com</a></p>
                    <h2>Follow us</h2>
                    <p class="social">
                        <a href=""><img src="../img/twitter.svg" alt=""></a>
                        <a href=""><img src="../img/instagram.svg" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="popup temperature_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap product_view_popup">
                    <h2>Temperature</h2>
                    <div class="chart">
                        <h2>Pool Temperature</h2>
                        <div class="chart-ul">
                            <ul class="sliver-back">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <!-- <li></li>
                                <li></li> -->
                            </ul>

                            <ul class="temp-back h-centered">
                                <li class="temp5"><span></span></li>
                                <li class="temp5"><span></span></li>
                                <li class="temp5"><span></span></li>

                                <li class="temp4"><span></span></li>
                                <li class="temp4"><span></span></li>

                                <li class="temp3"><span></span></li>
                                <li class="temp3"><span></span></li>
                                <li class="temp3"><span></span></li>

                                <li class="temp2"><span></span></li>
                                <li class="temp2"><span></span></li>
                                <li class="temp2"><span></span></li>
                                <li class="temp2"><span></span></li>
                                <li class="temp2"><span></span></li>

                                <li class="temp1 active"><span></span></li>
                                <li class="temp1 active"><span></span></li>
                                <li class="temp1 active"><span></span></li>

                                <!-- <li class="temp1"><span></span></li>
                                <li class="temp1"><span></span></li> -->
                            </ul>
                        </div>

                        <div class="min-max-temp">
                            <div>Min temp (Celsius) <span>24</span></div>
                            <div>Max temp (Celsius) <span>40</span></div>
                        </div>

                        <div class="temperature-guide">
                            <h2>Temperature Guide</h2>
                            <ul>
                                <li rel="temp1" class="temp1 active">Hot Tub Temperature: 38 – 40<sup>o</sup>C (100 –
                                    105<sup>o</sup>F)
                                </li>
                                <li rel="temp2" class="temp2">Therapy Temperature (ideal for young children): 32 –
                                    36<sup>o</sup>C (95 – 99<sup>o</sup>F)
                                </li>
                                <li rel="temp3" class="temp3">Comfortable but initial ‘shock’: 29 – 31<sup>o</sup>C (85
                                    – 94<sup>o</sup>F)
                                </li>
                                <li rel="temp4" class="temp4">Ideal for lane swimming: 27 – 28<sup>o</sup>C (85 –
                                    94<sup>o</sup>F)
                                </li>
                                <li rel="temp5" class="temp5">Competitive lane swimming: 24 – 26<sup>o</sup>C (85 –
                                    94<sup>o</sup>F)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

</div>

<footer>
    <div class="inner-wrap">
        <div class="footer-wrap">
            <div class="logo">
                <a href=""><img src="../img/logo1.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/js/slimscroll.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@if($currentUrl === '/')
    <script type="text/javascript" src="/js/fullpage.js"></script>
    <script>
        $(document).ready(function () {
            $('#fullpage').fullpage({
                sectionSelector: '.page',
                scrollOverflow: true,
                navigation: true,

                afterLoad: function (anchor, index) {
                    console.log(index)
                    if (index == 4) {
                        $('#fp-nav').addClass('black-nav');
                    } else {
                        $('#fp-nav').removeClass('black-nav');
                    }
                }
            });
        });
    </script>
@endif

</body>
</html>
