@extends('front-end.master')

@push('homepage css')
<style>
/* parallax Section */
#parallax {
  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('public/assets/frontend/img/for banner.jpg')}}') fixed center center;
  background-size: cover;
  padding: 80px 0;
}

#parallax .parallax-title {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

#parallax .parallax-text {
  color: #fff;
}

#parallax .parallax-btn-container {
  text-align: center;
  padding-top: 20px;
}

#parallax .parallax-btn {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 20px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #fff;
  color: #fff;
}

#parallax .parallax-btn:hover {
  background: #03C4EB;
  border: 2px solid #03C4EB;
}
</style>
@endpush

@section('body')

@include('front-end.slider.slider')

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container" style="margin-top: 50px;">           
        
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">         
                <h1 class="display-6" style="font-family: Bahnschrift Light; color: #22beda;">About Us</h1>
            </div>
            
            <div class="row g-5" >

                <div class="col-lg-6">

                    <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{asset('public/assets/frontend/img/full.jpg')}}" alt="image">
                    <!-- <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{asset('public/assets/frontend/img/about-1 alt.jpg')}}" alt="image">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{asset('public/assets/frontend/img/about-2.jpg')}}" alt="image">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{asset('public/assets/frontend/img/about-4.jpg')}}" alt="image">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{asset('public/assets/frontend/img/about-3.jpg')}}" alt="image">
                        </div>
                    </div> -->
                </div>
                <div  class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    
                    <div class="row g-3 mb-4">
                        
                        <div class="col-sm-8" >
                            <h5 style="font-family: Bahnschrift Light; color: #464655;">Vision</h5>
                            <p class="mb-0" style="text-align: justify;
                                text-justify: inter-word; font-family: Bahnschrift Light; color: #464655;">Easy access to technology and enrich yourself exponentially.</p>
                        </div>

                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{asset('public/assets/frontend/img/vision.jpg')}}"  alt="image">
                        </div>

                    </div>
                    <div class="border-top mb-4"></div>


                    <div class="row g-3 mb-4">
                        <div class="col-sm-8">
                            <h5 style="font-family: Bahnschrift Light; color: #464655;">Mission</h5>
                            <p class="mb-0" style="text-align: justify;
                                text-justify: inter-word; font-family: Bahnschrift Light; color: #464655;">Emerging the business with sophistication and keeping pace with cutting edge technology. Our mission to extend our business worldwide .To reach each corner of the world.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{asset('public/assets/frontend/img/mission.jpg')}}" height="100px" width="100px"alt="image">
                        </div>
                    </div>
                   <div class="border-top mb-4"></div>

                    <div class="row g-3 mb-4">
                        
                        <div class="col-sm-8" >
                            <h5 style="font-family: Bahnschrift Light; color: #464655;">Values</h5>
                            <p class="mb-0" style="text-align: justify;
                                text-justify: inter-word; font-family: Bahnschrift Light; color: #464655;">Enjoy every page of life and celebrate each small success to hold the abstract. Our associations and group bonds generate business value, lessen application risk and speed up the process of visibility in the market. </p>
                        </div>

                        <div class="col-sm-4">
                            <img class=" bg-white w-100" src="{{asset('public/assets/frontend/img/values.jpg')}}" style="margin-top: 10px" alt="image">
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>

                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5 style="font-family: Bahnschrift Light; color: #464655;">Corporate Governance</h5>
                            <p class="mb-0" style="text-align: justify;
                                text-justify: inter-word; font-family: Bahnschrift Light; color: #464655;">With whom we function such as our clients, shareholders, vendors- associates, the communal, and the government everyone is our stakeholders. So, this is our responsibility to ensure righteousness.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{asset('public/assets/frontend/img/teamwork.jpg')}}" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


  <!-- Service Start -->
    <div class="container-xxl py-5" id="service">
        <div class="container" style="margin-top: 50px;">
             <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">         
                <h1 class="display-6" style="font-family: Bahnschrift Light; color: #22beda;">Our Services</h1>
            </div>
            <div class="row g-4">
                

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/web development service.jpg')}}" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">WEBSITE DESIGN & DEVELOPMENT</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('website_design_and_development')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/custom software service.jpg')}}" height="auto" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">CUSTOM SOFTWARE DEVELOPMENT</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('software_development')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/graphics design service.jpg')}}" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">GRAPHICS DESIGN</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('graphics_design')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/digital marketing service.jpg')}}" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">DIGITAL MARKETING</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('digital_marketing')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/seo2.jpg')}}" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">SEO SERVICES</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('seo_service')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/business content.jpg')}}" alt="image">
                        <div class="p-4">                           
                            <h5 class="mb-3" style="font-family: Bahnschrift Light; color: #464655;">BUSINESS CONTENT CREATION</h5>
                        </div>
                        <div class="service-overlay">
                            <a href="{{route('business_content')}}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Explore More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                   
                <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Services</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->


     <!-- Parallax Section Start -->
    <section id="parallax">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-8">
            <h3 class="parallax-title" style="font-family: Bahnschrift Light;">Are you ready to work together for your next project?</h3>
            <p class="parallax-text" style="font-family: Bahnschrift Light">Discuss us for your project</p>
          </div>
          <div class="col-md-4 parallax-btn-container">
            <a class="parallax-btn" href="#contact" style="font-family: Bahnschrift Light">Contact Us</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Parallax Section End -->


    
    <!-- Why choose us Start -->
    <div class="container-fluid highlight my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4" style="font-family: Bahnschrift Light; color: #464655;">Why choose us?</h1>
                        <h5 class="fw-normal lh-base fst-italic mb-5" style="font-family: Bahnschrift Light; color: #464655;">Through our working knowledge we know our solutions, SEO and social media marketing can reach the message whatever it wants to go</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3" style="margin-top: -20px;">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">We listen our clients and on that base we provide our customize solutions</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">We are punctual, authentic and sincere about our services</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">For devising new ideas, service, design we are the top of the time</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">We are young, energetic, promising working team</span>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">We emphasize results and we value your words</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark" style="font-family: Bahnschrift Light; color: #464655;">We deliver our service timely</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Why choose us End -->



    <!-- Contact Start -->
    <div class="container-xxl contact py-5" id="contact">
        <div class="container" style="margin-top: 50px;">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">         
                <h1 class="display-6" style="font-family: Bahnschrift Light; color: #22beda;">Contact Us</h1>
            </div>
           <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">365techworld1@gmail.com</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">+8801817279727</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">Dakhin Banasree Project Road</p>
                    <p class="mb-0">Dhaka, Bangladesh</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Contact Start -->
@endsection