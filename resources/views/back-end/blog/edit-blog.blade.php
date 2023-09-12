@extends('back-end.master')

@section('body')
 <!-- general form elements -->
            <div class="container-fluid card card-info" style="padding: 20px">
              <div class="card-header">
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form enctype="multipart/form-data" id="updateBlogForm">
                <div class="card-body">

                	<div>
                		<img src="{{asset('public/uploads/'. $blog->blog_image)}}" alt="" height="100px" width="200px">
                	</div>
                	<br>
                <div class="form-group">
                    <label for="exampleInputFile">Change blog image</label>
                    <div class="input-group">
                      <div class="custom-file">
                       
                        <input type="file" name="blog_image" id="blog_image" class="form-control" onchange="validateFileExtension(this)">
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" class="form-control" id="blog_title" name="blog_title" value="{{$blog->blog_title}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Writer's Name</label>
                    <input type="text" class="form-control" id="writer_name" name="writer_name" value="{{$blog->writer_name}}">
                  </div>

                  <div class="form-group">


                 <div class="form-group row">
		        <div class="col-md-12">
		          <div class="card card-outline card-info">
		            <div class="card-header">
		              <h3 class="card-title"><strong>Description</strong></h3>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
		              <textarea id="summernote" name="blog_description" id="blog_description">{{$blog->blog_description}}</textarea>
		            </div>
		            
		          </div>
		        </div>
		        <!-- /.col-->
		      </div>
		      <!-- ./row -->
                  </div>              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                	<input type="hidden" name="form_row_id" value="{{ $blog->id }}" />
                  <button type="submit" id="" class="btn btn-success float-right">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- general form elements -->
@endsection



@push('edit_blog_script')
<script type="text/javascript">

	function validateFileExtension(fmin) {
        var fm_in_v = fmin.value;
        if (fm_in_v == '') {
            return false;
        }
        var ext = fm_in_v.split('.').pop();
        if (ext == 'png' || ext == 'jpg' || ext == 'jpeg') {
            return false;
        } else {
            // swal('Please select a pdf file','','warning');
            alert('Please select a png, jpg or jpeg file');
            fmin.value = '';
            return false;
        }
    } // end -:- validateFileExtension()





      $(document).ready(function() { 

        $('#updateBlogForm').submit(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            e.preventDefault();
            var formData = new FormData(document.querySelector('#updateBlogForm'));

            
            var blog_title = $(this).closest('form').find('#blog_title').val();
            var writer_name = $(this).closest('form').find('#writer_name').val();
            var blog_description = $(this).closest('form').find('select[name=blog_description]').val();
            var form_row_id = $(this).closest('form').find('input[name=form_row_id]').val();


            // alert(blog_description);
            // return false;
            
            if (blog_title == '') {
                alert('Blog title Should Not Be Empty !');
                return false;
            }
            if (writer_name == '') {
                alert('Writer name Should Not Be Empty !');
                return false;
            }
            if (blog_description == '') {
                alert('Blog description Should Not Be Empty !');
                return false;
            }


            $.ajax({
                type: 'POST',
                url: "{{ route('update_blog') }}",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function() {

                },
                success: function(response) {
                    if(response.success == true){
                       setTimeout(function(){
                               // window.location.reload();
                               var show_blogs = '{{ route('show_blogs') }}';
                               window.location.href = show_blogs;
                            }, 1000);
                       toastr.success(response.message);
                         console.log(response);
                    }else{
                        toastr.error(response.message);
                        console.log(response);
                    }
                    
                },
                error: function(response) {
                    toastr.error(response.message);
                    console.log(response);
                },
                complete: function() {
                    
                }
            }); // end -:- Ajax.
          
        });// end -:- create Event


    });// end -:- Document Ready
</script>
@endpush