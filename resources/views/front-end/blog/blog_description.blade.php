@extends('front-end.master')

@section('body')



 <div class="container-xxl py-5" id="">
        <div class="container">        
              <br>
            	<div class=" col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative text-center">
                        <img class="img-fluid" src="{{asset('public/uploads/'. $blog->blog_image)}}" height="auto" width="1000px" alt="image">
                    </div>
                </div>

                <br>
                 
                 <div class="row">
                     <div class="col-md-2">
                    
                </div>
                <div class="col-md-8 wow fadeInUp">
              <p class="" style="font-family: Bahnschrift Light; color: #464655; font-size: 20px; text-align: justify;
              text-justify: inter-word;">
                <span style="font-weight: bold; margin-left: 10px">{{$blog->blog_title}}</span>
                <textarea  class="summernoteEx">{{ $blog->blog_description }}</textarea>
             </p>
            </div>
             <div class="col-md-2">
                
             </div>
                 </div>

                
        </div>
    </div>

@endsection


@push('book_script')
  <script>

  $(document).ready(function(){


  	  $('textarea').summernote({
             toolbar: false,
             contenteditable : false
         });
      
        $('.summernoteEx').next().find(".note-editable").attr("contenteditable", false);


        $(".summernoteEx").summernote({
		    height: "200"
		  });
       
        

  });
     
</script>
@endpush