<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>365 Tech World</title>
    <meta content="width=device-width, user-scalable=no" name="viewport" >

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('public/assets/frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <!-- <link href="{{asset('public/assets/frontend/google fonts/font_family.css')}}" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->

    <link href="{{asset('public/assets/frontend/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/assets/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">



    <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- personal stylesheet -->
    <link href="{{asset('public/assets/frontend/css/album_style.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/css/custom-owl/custom-owl-style.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/css/custom-owl/custom-owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/fonts/icomoon/owl-icon-style.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/frontend/css/book.css')}}" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="{{asset('public/assets/frontend/css/style.css')}}" rel="stylesheet">

    <style type="text/css">

      /*for particle effect*/
      html{scroll-behavior:smooth}
      #particles-js{
          width: 100%;
          height: 100%;
          background-size: cover;
          background-position: 50% 50%;
          position: relative;
          top: 0px;
          z-index:1;
      }


      /*for loader start*/  
      .loader-bg{
          position: fixed;
          z-index: 999999;
          background: white;
          width: 100%;
          height: 100%;
        }
       
      .custom-loader {
        width: 40px;
        height: 40px;
        color:#22beda;
        position: relative;
        background: radial-gradient(10px,currentColor 94%,#0000);
      }
      .custom-loader:before {
        content:'';
        position: absolute;
        inset:0;
        border-radius: 50%;
        background:
          radial-gradient(9px at bottom right,#0000 94%,currentColor) top    left,
          radial-gradient(9px at bottom left ,#0000 94%,currentColor) top    right,
          radial-gradient(9px at top    right,#0000 94%,currentColor) bottom left,
          radial-gradient(9px at top    left ,#0000 94%,currentColor) bottom right;
        background-size:20px 20px;
        background-repeat: no-repeat;
        animation: sp8 1.5s infinite cubic-bezier(0.3,1,0,1);
      }
      @keyframes sp8 {
         33%  {inset:-10px;transform: rotate(0deg)}
         66%  {inset:-10px;transform: rotate(90deg)}
         100% {inset:0    ;transform: rotate(90deg)}
      }

  </style>

  @stack('homepage css')
  
</head>

<body>

  <!-- loader body start -->
  <div class="loader">
     <div class="loader-bg show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="custom-loader"></div>
   </div>
  </div>

  <!-- loader body end -->
   
    <!-- topbar -->
    @include('front-end.partials.topbar')


    @yield('body')
    
  <!-- footer -->
    @include('front-end.partials.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('public/assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/assets/frontend/js/main.js')}}"></script>


    <!-- Summernote -->
<script src="{{asset('public/assets/backend/plugins/summernote/summernote-bs4.min.js')}} "></script>

    <!-- personal script -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="{{asset('public/assets/frontend/js/album_script.js')}}"></script>
    <script src="{{asset('public/assets/frontend/js/custom-owl/custom-owl-main.js')}}"></script>
    <script src="{{asset('public/assets/frontend/js/custom-owl/custom-owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/frontend/js/book.js')}}"></script>


    <!-- auto typing script -->
    <script src="{{asset('public/assets/frontend/js/typed.umd.js')}}"></script>

     @stack('contact_script')
     
     @stack('book_script')
   
    <script>


        // loader script start
        $(function(){
            setTimeout(()=>{
                $(".loader").fadeOut(500);
            },1000)
        });
        $('.loader').show();    
        // loader script end

     // document.addEventListener(“touchstart”, handler, {passive: true});


    var typed = new Typed('#element', {
      strings: ['YOUR VISION, OUR TECH'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });

    var typed2 = new Typed('#element2', {
      strings: ['Responsive Website Design'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });

    var typed3 = new Typed('#element3', {
      strings: ['Web Application Development'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });

    var typed4 = new Typed('#element4', {
      strings: ['Digital Marketing'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });


    var typed5 = new Typed('#element5', {
      strings: ['SEO Services'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });

    var typed6 = new Typed('#element6', {
      strings: ['Custom Software Development'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });


    var typed7 = new Typed('#element7', {
      strings: ['Graphics Design'],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    });



//topbar burger menu (smartphone view) close by clicking
      $( '.burger-menu' ).on("click", function(){
       $('.navbar-toggler').addClass("collapsed");
       $('.navbar-toggler').attr("aria-expanded","false");
       $('#navbarCollapse').removeClass("show");
      });
   
  //perticle effect custom script
      $.getScript("{{asset('public/assets/frontend/js/particles.min.js')}}", function(){
    particlesJS('particles-js',
      {
        "particles": {
          "number": {
            "value": 120,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#87CEEB"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 10,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }
    );

});

    </script>
</body>

</html>