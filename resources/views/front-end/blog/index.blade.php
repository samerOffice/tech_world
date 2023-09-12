@extends('front-end.master')

@section('body')

 <!-- Products Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5" style="margin-top: -60px;">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">         
                <h1 class="display-6" style="font-family: Bahnschrift Light; color: #22beda;">Blogs</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">

                @foreach($blogs as $blog)
                <a href="{{ route('read_blog', $blog->id) }}" class="d-block service-item rounded">
                    <img src="{{asset('public/uploads/'. $blog->blog_image)}}" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h5 class="text-primary" style="font-family: Bahnschrift Light;">{{$blog->blog_title}}</h5>
                        <span class="text-body" style="font-family: Bahnschrift Light;">{{$blog->writer_name}}</span>
                    </div>
                </a>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection

