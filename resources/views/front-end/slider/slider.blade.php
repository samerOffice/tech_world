
    <div class="container-fluid px-0 mb-5">

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">         
             <img class="w-100 fadeInUp" src="{{asset('public/assets/frontend/img/wire.jpg')}}" height="auto" alt="Image" style="opacity: 1">
                    <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row"> 
                                <!-- particle effect -->
                                <div id="particles-js"></div>
                                
                          <div class="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">

                                <h3 class="text-white animated zoomIn" style="margin-top: 10px; font-family: Bahnschrift Light; font-weight: 300;">Welcome to </h3>
                                    <h1 class="mb-4 animated fadeInUp" style="color: #bb820e;font-family: Bahnschrift Light; font-size: 60px">365 Tech World</h1>
                                    <div>
                                    <h4><span class="animated fadeInUp" style="color: white; font-family: Bahnschrift Light;" id="element"></span></h4>
                                   </div>                               
                                  <!-- <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Learn More</a> -->                                 
                            </div>                              
                        </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/web design alt.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                <h1><span style="color: white; font-family: Bahnschrift Light;" id="element2"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('website_design_and_development')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>

                <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/web develop alt.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                   <h1><span style="color: white; font-family: Bahnschrift Light;" id="element3"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('website_design_and_development')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>


                <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/graphics design.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                   <h1><span style="color: black !important; font-family: Bahnschrift Light;" id="element7"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('graphics_design')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>

                 <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/marketing.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                   <h1><span style="color: white; font-family: Bahnschrift Light;" id="element4"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('digital_marketing')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
               
                <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/seo.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                   <h1><span style="color: white; font-family: Bahnschrift Light;" id="element5"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('seo_service')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>


                <div class="carousel-item" >                   
                   <img class="w-100" src="{{asset('public/assets/frontend/img/software development.jpg')}}" height="auto" width="auto" alt="Image" style="opacity: 0.9">          
                      <div class="carousel-caption" style="background-color: transparent;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                   <h1><span style="color: white !important; font-family: Bahnschrift Light;" id="element6"></span></h1>
                                   <br>
                                   <br>
                                    <a href="{{route('software_development')}}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>

                

            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
      
    </div>
