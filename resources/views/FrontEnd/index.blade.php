@extends('FrontEnd.layout.app')


@section('content')
    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>

                <li data-transition="fade">
                    <img src="{{asset('/assets/images/slider/1.jpg')}}"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="190"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1>INEXT Solutions </h1>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="280"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h2> Business Consulting</h2>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="340"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <p>Anything your business need we have its ultimate solution</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="430"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn yellow-bg" href="contact.html">contact us</a>
                            </div>
                        </div>
                    </div>

                </li>
                <li data-transition="fade">
                    <img src="{{asset('/assets/images/slider/2.jpg')}}"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="190"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1>INEXT Solutions</h1>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="280"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h2> Software Tools</h2>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="340"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <p>Tailor-made software tools for your business</p>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="55"
                         data-y="top" data-voffset="430"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn yellow-bg"  href="#">contact us</a>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->
    <section class="about about-2" style="padding-bottom:0">
        <div class="container">
            <div class="item-list">
                <div class="row">

                    <div class="col-md-6 col-xs-12">
                        <div class="item">
                            <figure class="image-box">
                                <img src="{{asset('/assets/images/background/about-1.jpg')}}" alt="" class="img-responsive">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="item clearfix">
                            <div class="sec-title">
                                <h2 class="left">Who we are?</h2>
                            </div>
                            <div class="content-box">
                                <h4>INEXT solutions is a Business e-Solutions Company</h4>
                                <p> that helps you to eliminate the obstacles you encounter through your business.
                                    We don't believe in the "one-size-fits-all” our team helps you identify the problem and provide the proper solution which fit your business/case.
                                    We are not selling IT and Software solution but we are using the proper software to solve business issue
                                </p>
                                <a href="#" class="thm-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-features">
        <div class="container">
            <div class="small-features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-features">
                            <div class="media">
                                <img class="mr-3" src="{{asset('/assets/images/icons/leader.png')}}" alt=" image">
                                <div class="media-body">
                                    <h5 class="mt-0">Business with Thought Leadership</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-features">
                            <div class="media">
                                <img class="mr-3" src="{{asset('/assets/images/icons/world-map.png')}}" alt="image">
                                <div class="media-body">
                                    <h5 class="mt-0">Global consumer insights for business</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-features">
                            <div class="media">
                                <img class="mr-3" src="{{asset('/assets/images/icons/money.png')}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Segment of focused investors </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-services rotated-bg">
        <div class="container">
            <div class="sec-title">
                <h2 class="center">Our Services</h2>
                <p> INEXT can help you in your next step in business with these services</p>
            </div>
            <div class="row clearfix">
                <!--Start single service icon-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-service-item">

                        <div class="service-left-bg"></div>
                        <div class="service-icon">
                            <img src="{{asset('/assets/images/icons/service-1.png')}}" alt="">
                        </div>
                        <div class="service-text">
                            <h4><a href="#">International Business Matchmaking</a></h4>
                            <p>We find the best partner for your business through our vast list of leads and contacts.<br><br> </p>
                        </div>
                    </div>
                </div>
                <!--End single service icon-->
                <!--Start single service icon-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-service-item">

                        <div class="service-left-bg"></div>
                        <div class="service-icon">
                            <img src="{{asset('/assets/images/icons/service-2.png')}}" alt="">
                        </div>
                        <div class="service-text">
                            <h4><a href="#">Software Tools</a></h4>
                            <p>We provide tailor-made software tools to match your business need we have different tools which serve different parts in business like sales, marketing, management and quality. </p>
                        </div>
                    </div>
                </div>
                <!--End single service icon-->

            </div>
        </div>
    </section>

    <section class="about more">
        <div class="container">
            <div class="item-list">
                <div class="row">

                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="sec-title">
                            <h2 class="left">Our Mission & Vission</h2>
                            <p>INEXT  is the key to solve all your business problems. Our team will be dedicated to know the flow in your business and provide you with the solution through these 3 pillars:</p>
                        </div>

                        <ul class="s-list list-unstyled mb-20">
                            <li><span class="fa fa-check"></span>Efficiency</li>
                            <li><span class="fa fa-check"></span>Accuracy</li>
                            <li><span class="fa fa-check"></span>Transparency</li>
                        </ul>
                        <ul class="about-links text-left">
                            <li><a href="#" class="thm-btn style-two">Learn More</a></li>

                        </ul>

                    </div>
                    <div class="col-md-5 col-sm-10 col-xs-12">
                        <div class="item">
                            <figure class="image-box">
                                <img src="{{asset('/assets/images/about/2.jpg')}}" alt="" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action -->
    <div class="promotion">

        <div class="container">
            <div class="inner_promotion">
                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <div class="sec-title text-left">
                            <h2 class="left">Looking for an excellent business solution ?</h2>
                            <p>You are just one click away from the solution your bubsiness problem </p>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-2">
                        <a href="contact.html" class="thm-btn inverse ">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="how-it-work" class="how-it-work">
        <div class="container text-center">
            <div class="sec-title">
                <h2 class="center">Our main Features</h2>
                <p>Here's what we offer</p>
            </div>
            <div class="how-one-container">
                <!--how it work Box-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="how-box-one" style="background: linear-gradient(rgba(3, 61, 117, 0.9),rgba(3, 61, 117, 0.9)),url({{asset('/assets/images/news/1.jpg')}});">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{asset('/assets/images/icons/how-1.png')}}" alt="">
                            </div>
                            <h4><a href="#">Sales Tools</a></h4>
                            <div class="text">Tools to help you get more leads, find how your sales is going and provide solutions to increase efficiency. Also, helps you to find sales defects in your process and fix it.<br><br></div>
                        </div>
                    </div>
                </div>

                <!--how it work Box-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="how-box-one" style="background: linear-gradient(rgba(3, 61, 117, 0.9),rgba(3, 61, 117, 0.9)),url({{asset('/assets/images/news/2.jpg')}});">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{asset('/assets/images/icons/how-2.png')}}" alt="">
                            </div>
                            <h4><a href="#">Marketing Tools</a></h4>
                            <div class="text">Using the power of social media to expand your customers and enhancing your business interface by web design and development. Also, provide content that is more relatable to your customers.</div>
                        </div>
                    </div>
                </div>

                <!--how it work Box-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="how-box-one" style="background: linear-gradient(rgba(3, 61, 117, 0.9),rgba(3, 61, 117, 0.9)),url({{asset('/assets/images/news/3.jpg')}});">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{asset('/assets/images/icons/how-3.png')}}" alt="">
                            </div>
                            <h4><a href="#">Performance &amp Management Tools</a></h4>
                            <div class="text">Business &amp team performance tracking and help team collaboration and Robotic processing.<br><br></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="get-quote-section" style=" background-image:url('{{asset('/assets/images/resources/getquote-bg-img.jpg')}}');">
        <div class="container">
            <div class="row clearfix">

                <!--Form Column-->
                <div class="form-column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <!--Title-->
                    <div class="sec-title ">
                        <h2 class="left">Request A Call Back</h2>
                        <p>Fill this form and on of our experts will contact you shortly </p>
                    </div>

                    <div class="form-box default-form">
                        <form method="post" action="php/form-to-email.php">

                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-inner"><input type="text" name="form_name" value="" placeholder="Name" required=""></div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-inner"><input type="email" name="form_email" value="" placeholder="Email" required=""></div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-inner"><input type="text" name="form_phone" value="" placeholder="Phone"></div>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-inner"><input type="text" name="form_subject" value="" placeholder="subject"></div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-inner"><textarea name="form_message" placeholder="Message"></textarea></div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-inner theme-btn"><button type="submit" class="thm-btn">Submit Now</button></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <figure class="image"><img src="{{asset('/assets/images/resources/man-with-tab.png')}}" alt=""></figure>
                </div>

            </div>
        </div>
    </section>








@endsection


