@extends('front-end.master')

@section('body')

 <!-- Employees Start -->
    <div class="container-xxl py-5" id="">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">         
                <h1 class="display-6" style="font-family: Bahnschrift Light; color: #22beda;">Our Team</h1>
            </div>
            <p class="mb-5" style="font-family: Bahnschrift Light; color: #464655; font-size: 20px;">We are a group of young enthusiastic, energetic, trustworthy web developers, Graphics designers, content developers who are sitting here to serve you 24 hours. As a company we hold the lantern of technology which enlightens your business world. So, meet us and tell us about your journey and be a part of our state-of-the-art technology. Thank you.</p>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/rajib.png')}}" style="width: 22rem;" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">Rajib Ahmed</h5>
                            <p style="font-family: Bahnschrift Light; color: #464655;">Chief Executive Officer</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/shawon.png')}}" style="width: 21rem;" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">Mohammad Arafat Uzzaman</h5>
                            <p style="font-family: Bahnschrift Light; color: #464655;">Chief Marketing Officer</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/pappu.png')}}" style="width: 19rem;" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">Md. Abdur Rob Pappu</h5>
                            <p style="font-family: Bahnschrift Light; color: #464655;">Country Manager</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                    <img class="img-fluid" src="{{asset('public/assets/frontend/img/eva.png')}}" style="width: 23rem;" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">Kamrun Nahar</h5>
                            <p style="font-family: Bahnschrift Light; color: #464655;">Communication Manager & Content Writer</p>
                        </div>
                       
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/samer.png')}}" style="width: 19rem;" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">Abul Kauser Samer</h5>
                            <p style="font-family: Bahnschrift Light; color: #464655;">Software Engineer</p>
                        </div>
                        
                    </div>
                </div>
                   
                <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Services</a>
                </div> -->
            </div>
<br>
<br>
            <div class="text-center" style="" >
            <a href="{{route('member_individual')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Learn More<i class="fa fa-arrow-right ms-2"></i></a>
            </div>
            </div>
        </div>
    </div>
    <!-- Employees End -->


    @endsection