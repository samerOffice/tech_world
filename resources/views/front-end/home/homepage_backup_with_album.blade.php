@extends('front-end.master')

@section('body')


@include('front-end.slider.slider')


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container" style="margin-top: 50px;">

            
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="" style="color: #22beda;" style="font-family: 'SuisseIntl';">About Us</h2>
            </div>
            
            <div class="row g-5" >

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{asset('public/assets/frontend/img/about-1 alt.jpg')}}" alt="image">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{asset('public/assets/frontend/img/about-2.jpg')}}" alt="image">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{asset('public/assets/frontend/img/about-4.jpg')}}" alt="image">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{asset('public/assets/frontend/img/about-3.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div  class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    
                    <div class="row g-3 mb-4">
                        
                        <div class="col-sm-8" >
                            <h5>Vision</h5>
                            <p class="mb-0" style="text-align: justify;">Easy access to technology and enrich yourself exponentially.</p>
                        </div>

                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{asset('public/assets/frontend/img/vision.jpg')}}"  alt="image">
                        </div>

                    </div>
                    <div class="border-top mb-4"></div>


                    <div class="row g-3 mb-4">
                        <div class="col-sm-8">
                            <h5>Mission</h5>
                            <p class="mb-0" style="text-align: justify;">Emerging the business with sophistication and keeping pace with cutting edge technology. Our mission to extend our business worldwide .To reach each corner of the world.</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{asset('public/assets/frontend/img/mission.jpg')}}" height="100px" width="100px"alt="image">
                        </div>
                    </div>
                   <div class="border-top mb-4"></div>

                    <div class="row g-3 mb-4">
                        
                        <div class="col-sm-8" >
                            <h5>Values</h5>
                            <p class="mb-0" style="text-align: justify;">Enjoy every page of life and celebrate each small success to hold the abstract. Our associations and group bonds generate business value, lessen application risk and speed up the process of visibility in the market. </p>
                        </div>

                        <div class="col-sm-4">
                            <img class=" bg-white w-100" src="{{asset('public/assets/frontend/img/values.jpg')}}" style="margin-top: 10px" alt="image">
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>

                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Corporate Governance</h5>
                            <p class="mb-0" style="text-align: justify;">With whom we function such as our clients, shareholders, vendors- associates, the communal, and the government everyone is our stakeholders. So, this is our responsibility to ensure righteousness.</p>
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


    <!-- Services Start -->
    <div class="container-fluid product py-5 my-5" id="service">
        <div class="container py-5">

            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="" style="color: #22beda;" style="font-family: 'SuisseIntl';">Our Services</h2>
            </div>


             <!-- web desgin title -->
            
            <div id="web_design_text" class="">
                <h2 style="margin-left: 200px; text-align: left;">WEB DESIGN</h2>
            </div>
            
            <!-- web application title -->
            <div id="web_app_text" class="hidden_display">
                <h2 style="margin-left: auto; margin-right: 200px; text-align: center;">WEB APPLICATION DEVELOPMENT</h2>
            </div>

            <!-- custom software title -->
            <div id="cus_soft_text" class="hidden_display">
                <h2 style="text-align: center;">CUSTOM SOFTWARE DEVELOPMENT</h2>
            </div>

            <!-- graphics design title -->
            <div id="graphics_design_text" class="hidden_display">
                <h2 style="text-align: center;">GRAPHICS DESIGN</h2>
            </div>

            <!-- digital marketing and SEO title -->
            <div id="digital_market_text" class="hidden_display">
                <h2 style="margin-left: 250px; text-align: center;">DIGITAL MARKETING & SEO SERVICES</h2>
            </div>

            <!-- Business Content Creation title -->
            <div id="business_content_text" class="hidden_display">
                <h2 style="margin-left: 250px; margin-right: -130px; text-align: center;">BUSINESS CONTENT CREATION</h2>
            </div>
           

      <div class="container custom_album">

            <!-- Web Design -->
            <div class="panel active" id="web_design" style="background-image: url('{{ asset('public/assets/frontend/img/web design service.jpg')}}');">
           </div>
           
        <!--Web Application Development -->  
        <div class="panel" id="web_app" style="background-image: url('{{ asset('public/assets/frontend/img/web development service.jpg')}}');">
        </div>

        <!-- Custom software Development -->
        <div class="panel" id="cus_soft" style="background-image: url('{{ asset('public/assets/frontend/img/custom software service.jpg')}}');">
        </div>

        <!-- Graphics Design -->
        <div class="panel" id="graphics_design" style="background-image: url('{{ asset('public/assets/frontend/img/graphics design service.jpg')}}');">
        </div>

        <!-- Digital Marketing & SEO Services -->
        <div class="panel" id="digital_market" style="background-image: url('{{ asset('public/assets/frontend/img/digital marketing service.jpg')}}');">
        </div>

        <!-- Business Content Creation -->
        <div class="panel" id="business_content" style="background-image: url('{{ asset('public/assets/frontend/img/business content.jpg')}}');">
        </div>
        </div>

        </div>
    </div>
    <!-- Products End -->


    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{asset('public/assets/frontend/img/article.jpg')}}" alt="image">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">The history of tea leaf in the world</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Video Start -->
    <div class="container-fluid video my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4">Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span></h1>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Great tea assortment</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Spices & additives</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Unique accessories</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Good for health & beauty</span>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Store Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Online Store</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/store-product-1.jpg')}}" alt="image">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/store-product-2.jpg')}}" alt="image">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/store-product-3.jpg')}}" alt="image">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Store End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
                <h1 class="display-6">What our clients say about our tea</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{asset('public/assets/frontend/img/testimonial-1.jpg')}}" alt="image">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{asset('public/assets/frontend/img/testimonial-2.jpg')}}" alt="image">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{asset('public/assets/frontend/img/testimonial-3.jpg')}} " alt="image">
                        <div class="text-start ms-3">
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">Contact us right now</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">info@example.com</p>
                            <p class="mb-0">support@example.com</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">+012 345 67890</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">123 Street</p>
                            <p class="mb-0">New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->
@endsection