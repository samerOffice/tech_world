@extends('front-end.master')

@section('body')

 <!--  Start -->
    <div class="container-xxl py-5" id="">
        <div class="container">        
            <div class="row g-4" style="margin-top: 10px">
            	<div class=" col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/assets/frontend/img/graphics design service.jpg')}}" height="100px" alt="image">                     
                    </div>
                </div>

            	<div class="col-md-6 wow fadeInUp">
			  <p class="" style="font-family: Bahnschrift Light; color: #464655; font-size: 20px; text-align: justify;
			  text-justify: inter-word;">
                <span style="font-weight: bold;">Graphics design:</span> 
                In the empire of digital marketing, it is must to hold the audience's interest and for that there is no alternative rather than graphics design. Graphics design is that tool which creates an eye-catching view and it ties someone to know more about a particular topic. Visual content always says something more than written content. For digital marketing campaigns such as social media graphics,eye-catching display ads, attention grabbing website banners, lucrative social media graphics content always try to convey about the brand, always try to give a message about the product or services very effectively which boost the overall company success. Our 365 Tech world team always gives someone a comfort to work with a working friendly zone where one can visualize his or her dream project. So, be with us and grab the opportunity. Our graphics design services are:
                 <div class="row">
                    <div class="col-6">
                        <ul style="font-family: Bahnschrift Light; color: #464655; font-size: 18px;">
                            <li>Minimalist Logo Design.</li>
                            <li>Illustration.</li>
                            <li>Image Editing.</li>                           
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul style="font-family: Bahnschrift Light; color: #464655; font-size: 18px; ">
                            <li>T-Shirts & Merchandise.</li>
                            <li>Industrial & Product Design.</li>
                            <li>Social Media Design.</li>
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
                

          <!-- adobe photoshop -->
          <div class="col-xl-2 col-6  client-logo">
            <img src="{{asset('public/assets/frontend/img/ps-logo.png')}}" class="img-fluid" title="adobe photoshop" alt="adobe photoshop">
          </div>
          
          
          <!-- adobe illustrator -->
          <div class="col-xl-2 col-6  client-logo">
            <img src="{{asset('public/assets/frontend/img/ai-logo.png')}}" height="50px" class="img-fluid" title="adobe illustrator" alt="adobe illustrator">
          </div>


          <!-- adobe design -->
          <div class="col-xl-2 col-6  client-logo">
            <img src="{{asset('public/assets/frontend/img/adobe design-logo.png')}}" height="50px" class="img-fluid" title="adobe design" alt="adobe design">
          </div>

           <!-- canva -->
          <div class="col-xl-2 col-6  client-logo">
            <img src="{{asset('public/assets/frontend/img/canva-logo.png')}}" class="img-fluid" title="canva" alt="canva">
          </div>

           <!-- picsart -->
          <div class="col-xl-2 col-6  client-logo">
            <img src="{{asset('public/assets/frontend/img/picsart-logo.png')}}" class="img-fluid" title="picsart" alt="picsart">
          </div>
           
        </div>
      </div>
      <!-- technologies we use end -->
        </div>
    </div>
</div>
    <!--  End -->


    @endsection