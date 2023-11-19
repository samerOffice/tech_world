
<!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top" style="background-color: black !important">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0" style="background-color: black !important;">
                <a href="{{route('homepage')}}" class="navbar-brand">
                    <img class="img-fluid" src="{{asset('public/assets/frontend/img/logo5.png')}}" style="margin-top:-5px" alt="Logo">
                </a>
                <button type="button" style="background-color: #06d8ff !important" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">

                        <!-- home -->
                        <a href="{{route('homepage')}}" class="nav-item nav-link active burger-menu" style="font-family: Michroma; font-size: 15px; " title="home">Home</a>

                         <!-- about us -->
                        <div class="nav-item dropdown">
                            <a href="#"  title="about" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-family: Michroma; font-size: 15px; color : #d7d7d8" title="about">About</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="#about" title="about" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">About Us</a>
                                <a href="{{route('team')}}" title="team" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Our Squad</a>
                            </div>
                        </div>
                         
                         <!-- services -->
                        <!-- <a href="#service" title="service" class="nav-item nav-link burger-menu" style="font-family: Michroma; font-size: 19px;">Services</a> -->

                        <div class="nav-item dropdown">
                            <a href="#" title="services" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-family: Michroma; font-size: 15px; color : #d7d7d8" title="services">Services</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="{{route('website_design_and_development')}}" title="website design and development" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Website Design & Development</a>
                                <a href="{{route('software_development')}}" title="software development" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Software Development</a>
                                <a href="{{route('graphics_design')}}" title="graphics design" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Graphics Design</a>
                                <a href="{{route('digital_marketing')}}" title="digital_marketing" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Digital Marketing</a>
                                <a href="{{route('seo_service')}}" title="seo" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">SEO Services</a>
                                <a href="{{route('business_content')}}" title="business content creation" class="dropdown-item burger-menu" style="font-family: Michroma; font-size: 14px;">Business Content Creation</a>
                               
                            </div>
                        </div>

                        <!-- career -->
                        <a href="#" title="career" class="nav-item nav-link burger-menu" style="font-family: Michroma; font-size: 15px; color : #d7d7d8">Career</a>

                        <!-- blog -->
                        <a href="{{route('blog')}}" title="blog" class="nav-item nav-link burger-menu" style="font-family: Michroma; font-size: 15px; color : #d7d7d8">Blog</a>

                        <!-- contact us -->
                        <a href="{{route('contact')}}" title="contact" class="nav-item nav-link burger-menu" style="font-family: Michroma; font-size: 15px; color : #d7d7d8">Contact</a>
                    </div>
                  
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->