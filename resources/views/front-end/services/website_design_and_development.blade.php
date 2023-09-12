@extends('front-end.master')

@section('body')

 <!--  Start -->
    <div class="container-xxl py-5" id="">
        <div class="container">        
            <div class="row g-4" style="margin-top: 10px">
            	<div class=" col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/web development service.jpg')}}" height="100px" alt="image">                     
                    </div>
                </div>

            	<div class="col-md-6 wow fadeInUp">
			  <p class="" style="font-family: Bahnschrift Light; color: #464655; font-size: 20px; text-align: justify;
			  text-justify: inter-word;">
                <span style="font-weight: bold;">Website design and development:</span> 
                The world is becoming smaller day by day because of fast growing technology. Nowadays any information is available and accessible. A well-designed website helps us to communicate easily and it's strong presence helps to make clients interactive. 365 tech world team designs user friendly and easily accessible websites for the business world. Our website design and development service includes:

                <div class="row">
                    <div class="col-6">
                        <ul style="font-family: Bahnschrift Light; color: #464655; font-size: 18px;">
                            <li>Stunning Visual Design.</li>
                            <li>Compelling Content.</li>
                            <li>Seamless Navigation.</li>
                            <li>Engaging Interaction.</li>                           
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul style="font-family: Bahnschrift Light; color: #464655; font-size: 18px; ">
                            <li>Search Engine Optimization.</li>
                            <li>Multi-device optimization.</li>
                            <li>Great performance.</li>
                            <li>High security.</li>
                        </ul>
                    </div>
                </div>
                
             </p>
          	</div>
            </div>

             <!-- technologies we use start -->
        <div class="row g-4" style="margin-top: 10px">
            <h2 style="text-align: center; font-family: Bahnschrift Light; color: #464655; ">Technologies We Serve In</h2>
      <div class="container-fluid" data-aos="fade-up">
        <div class="row gy-4">
            <!-- html5 -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/html5-logo-alt.png')}}" class="img-fluid" title="html5" alt="html5">
          </div>
          
          <!-- css3 -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/css3-logo.png')}}" height="50px" class="img-fluid" title="css3" alt="css3">
          </div>

          <!-- javascript -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/js-logo-alt.png')}}" class="img-fluid" title="javascrpit" alt="javascrpit">
          </div>

           <!-- php -->
           <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/php-logo.png')}}" class="img-fluid" title="php" alt="php">
          </div>

           <!-- laravel -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/laravel-logo.png')}}" class="img-fluid" title="laravel" alt="laravel">
          </div>

           <!-- jquery -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/jquery-logo.png')}}" class="img-fluid" title="jquery" alt="jquery">
          </div>
          
          <!-- wordpress -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/wordpress-logo.png')}}" class="img-fluid" title="wordpress" alt="wordpress">
          </div>

          <!-- bootstrap -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/bootstrap-logo.png')}}" class="img-fluid" title="bootstrap" alt="bootstrap">
          </div>

          <!-- mysql server -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/mysql-logo.png')}}" class="img-fluid" title="mysql" alt="mysql">
          </div>

          <!-- ms sql server -->
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{asset('public/assets/frontend/img/ms sql server-logo.png')}}" class="img-fluid" title="ms sql server" alt="ms sql server">
          </div>  
        </div>
      </div>
      <!-- technologies we use end -->
        </div>
        </div>
    </div>
    <!--  End -->


    @endsection