@extends('FrontEnd.layout.app')
@section('content')

    <!--Page Title-->
    <section class="bredcrumb">
        <div class="bg-image text-center" style="background-image: url('{{asset('/assets/images/resources/banner.jpg')}}');">
            <h1>about us</h1>
        </div>
        <div class="">
            <ul class= "middle">
                <li><a href="index.html">Home</a></li>
                <li><a class="inner" href="#">About us</a></li>
            </ul>
        </div>
    </section>
    <!--Page Title Ends-->

    <section class="about">
        <div class="container">
            <div class="item-list">
                <div class="row">

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <h4>INEXT solutions is a Business e-Solutions Company</h4>
                        <p> that helps you to eliminate the obstacles you encounter through your business.
                            We don't believe in the "one-size-fits-all” our team helps you identify the problem and provide the proper solution which fit your business/case.
                            We are not selling IT and Software solution but we are using the proper software to solve business issue
                        </p>
<br><hr><br>
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
                            <div class="text">Tools to help you get more leads, find how your sales is going and provide solutions to increase efficiency. Also, helps you to find sales defects in your process and fix it.</div>
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
                            <div class="text">Business &amp team performance tracking and help team collaboration and Robotic processing.</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
