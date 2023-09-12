@extends('front-end.master')

@section('body')



    <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s" style="background : transparent; padding-right: 0; padding-left: 0;">
            <img class="w-100" src="{{asset('public/assets/frontend/img/contact.jpg')}}" height="20%" width="100%" alt="Image" style="opacity: 0.9">
        </div>
    <!-- Page Header End -->


  <!-- Contact Start -->
    <div class="container-xxl contact py-5" id="contact" style="margin-top: -70px">
        <div class="container">
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
<br>


   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <br>
  <br>

     <div class="row g-5" style="background-image: url('{{ asset('public/assets/frontend/img/bg.jpg')}}'); background-size: cover; opacity: 0.7 ">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="mb-4" style="font-family: Bahnschrift Light; color: #464655;" id="feedback">If you have any queries please share with us. We will contact you as soon as possible.</h5>

                    @if ($message = Session::get('success'))                  

                    <input type="text" name="" value="{{ $message }}" id="success" hidden="true">
                    
                    @endif
                    <form action="{{route('submit_website_user_form')}}" method="post" id="ss">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="site_user_name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="site_user_email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="site_user_mail_subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px" name="site_user_mail_body" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" id="btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="margin-bottom: 20px">
                    <div class="h-100" >
                        <iframe class="w-100 rounded"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=South Banasree Project, Dakhin Banasree Project Road, Dhaka&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                       
                    </div>
                </div>
                
            </div>

        </div>
        </div>
    </div>
    <!-- Contact Start -->
@endsection



@push('contact_script')
  <script>                                        
var msg = $('#success').val();
$("#feedback").text(msg);

$("#ss").on('submit',function(){
    $('.loader').show();  
})
</script>
@endpush