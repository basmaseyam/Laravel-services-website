<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>INEXT Solutions</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/flaticon.css')}}" />
    <!--favicon-->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon/favicon.ico')}}">

</head>

<body>
<div class="boxed_wrapper">
    <div class="crypto-top-strip crypto-bgcolor">
        <div class="container">
            <div class="row">
                <aside class="col-md-6">
                    <ul class="crypto-userinfo">
                        <li><i class="fa fa-envelope-o"></i> info@inext-solutions.com</li>
                        <li><i class="fa fa-phone"></i> +18 053 380 372</li>
                    </ul>
                </aside>
            </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <div class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="main-logo">
                        <a href="#"><img src="{{asset('/assets/images/logo/INEXT-Logo-v2.png')}}" alt="" style="width: 30%; height: 50px;"></a>
                    </div>
                </div>
                <div class="col-md-5 menu-column">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li class="current"><a href="#">home</a></li>

                                <li><a href="#">about</a>
                                </li>

                                <li class="dropdown"><a href="#">service</a>
                                    <ul>
                                        <li><a href="#">International Business Matchmaking</a></li>
                                        <li><a href="#">Software Tools</a></li>
                                    </ul>
                                </li>





                                <li><a href="contact#">Contact</a></li>
                            </ul>

                            <ul class="mobile-menu clearfix">

                                <li><a href="index#">home</a></li>

                                <li class="current"><a href="#">about</a></li>

                                <li class="dropdown"><a href="#">service</a>
                                    <ul>
                                        <li><a href="#">International Business Matchmaking</a></li>
                                        <li><a href="#">Software Tools</a></li>
                                    </ul>
                                </li>



                                <li><a href="#">Contact</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="right-area">
                        <div class="link_btn float_right">
                            <a href="#" class="thm-btn">GET A Quote?</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
           @yield('content')

<footer class="footer footer-classic">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-text">
                    <a href="#">
                        <img src="{{asset('/assets/images/footer/INEXT-Logo-footer-v2.png')}}" alt="logo" style="width: 80%;height: 80px;">
                    </a>
                    <p>
                        INEXT solutions is a Business e-Solutions Company that helps you to eliminate the obstacles you encounter through your business.
                    </p>

                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="links">
                    <h3>Links</h3>
                    <ul class="">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">International Business Matchmaking</a></li>
                        <li><a href="#">Software Tools</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="location">
                    <h3>Location</h3>
                    <ul>
                        <li><i class="fa fa-home"></i>
                               <br>890 Hampshire Road Suite A<br>
                            Westlake Village , CA 91361

                            <br>USA.</li>
                        <li><i class="fa fa-phone"></i> <a href="">+18 053 380 372</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto.html"> info@inext-solutions.com </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- COPY RIGHT -->
        <div class="copyright">
            <hr>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="copyRight_text text-center">
                        <p> © 2020 <a href="#">INEXT Solutions</a>  All Copyright Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>



<!-- Scroll Top Button -->
<button class="scroll-top tran3s color2_bg">
    <span class="fa fa-angle-up"></span>
</button>
<!-- pre loader  -->
<div class="preloader"></div>

<!-- jQuery js -->
<script src="{{asset('/assets/js/jquery.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- jQuery ui js -->
<script src="{{asset('/assets/js/jquery-ui.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>

<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="{{asset('/assets/js/gmap.js')}}"></script>

<!-- mixit up -->
<script src="{{asset('/assets/js/wow.js')}}"></script>
<script src="{{asset('/assets/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap-select.min.js')}}"></script>

<!-- revolution slider js -->
<script src="{{asset('/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- fancy box -->
<script src="{{asset('/assets/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('/assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('/assets/js/nouislider.js')}}"></script>
<script src="{{asset('/assets/js/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('/assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('/assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>
<script id="map-script" src="{{asset('/assets/js/default-map.js')}}"></script>

</div>

</body>

</html>
