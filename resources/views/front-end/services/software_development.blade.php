@extends('front-end.master')

@section('body')

 <!--  Start -->
    <div class="container-xxl py-5" id="">
        <div class="container">        
            <div class="row g-4" style="margin-top: 10px">

            	<div class=" col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/custom software service.jpg')}}" height="100px" alt="image">                     
                    </div>
                </div>

            <div class="col-md-6 wow fadeInUp">
			  <p class="" style="font-family: Michroma; color: #464655; font-size: 20px; text-align: justify;
			  text-justify: inter-word;">
                <span style="font-weight: bold;">Custom software development:</span> 
                To cope with new technology, custom software development is mandatory. Its flexibility and compatibility in the website is very important for a business because for thatone’s business can scale up or down. Custom software development provides someone the accessibility to engrave the software as well as it allows the business operations to be more user friendly and manageable and can modify the software according to client’s desire. If someone needs to customize software, then 365 tech world is the best who is always welcoming the clients to see the dream and actualize their vision. It is agreat opportunity for someone to work with his/her vision and visually see the structure in reality and for that 365 Tech World is the best choice.
             </p>
          </div>
        </div>


         <!-- technologies we use start -->
        <div class="row g-4" style="margin-top: 10px">
            <h2 style="text-align: center; font-family: Michroma; color: #464655; ">Technologies We Serve In</h2>
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