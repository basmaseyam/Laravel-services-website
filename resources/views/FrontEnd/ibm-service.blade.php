@extends('FrontEnd.layout.app')

@section('content')

    <!--Page Title-->
    <section class="bredcrumb">
        <div class="bg-image text-center" style="background-image: url('{{asset('/assets/images/resources/banner.jpg')}}');">
            <h1>International Business Matchmaking</h1>
        </div>
        <div class="">
            <ul class= "middle">
                <li><a href="/">Home</a></li>
                <li><a class="inner" href="#">International Business Matchmaking</a></li>
            </ul>
        </div>
    </section>
    <!--Page Title Ends-->

    <section class="service-single">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="outer-box">
                        <div class="img-box"><img src="{{asset('images/resources/service-1.png')}}" alt=""></div>


                        <div class="content-box">
                            <div class="sec-title">
                                <h4>Business Consulting</h4>
                            </div>

                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria accusantium doloremque laudantium</p>
                            </div>

                            <div class="text style-two">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque at optio vero neque incidunt saepe reiciendis accusamus atque, ullam quam beatae numquam quibusdam voluptatibus iusto dolores? Facere accusantium .</p>
                            </div>


                        </div>
                    </div>

                    <div class="sec-title">
                        <h2 class="left">We Deliver High-Quality Solutions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, atque eveniet deleniti dolorem nostrum distinctio cum alias nulla quos autem. consectetur adipisicing elit.</p>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">

                                <div class="choose-icon">
                                    <img src="images/services/1.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Transaction</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">

                                <div class="choose-icon">
                                    <img src="images/services/2.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Exchange</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">

                                <div class="choose-icon">
                                    <img src="images/services/3.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Investment</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">
                                <div class="choose-icon">
                                    <img src="images/services/4.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Escrow Service</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">
                                <div class="choose-icon">
                                    <img src="images/services/5.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Mining</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-choose-item">
                                <div class="choose-icon">
                                    <img src="images/services/6.png" class="center-block" alt="">
                                </div>
                                <div class="choose-text">
                                    <h3><a href="#">Business Shopping</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ipsa quam copti sit eveniet modi dolor error.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action -->
    <div class="promotion" style="padding-top:0">
        <div class="container">
            <div class="inner_promotion">
                <div class="row">
                    <div class="col-sm-12 col-md-10">
                        <div class="sec-title text-left">
                            <h2 class="left">Looking for an excelent business solution ?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum illum ratione atque praesentium laudantium quaerat laborum consectetur </p>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-2">
                        <a href="contact.html" class="thm-btn inverse ">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
