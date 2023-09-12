@extends('back-end.master')

@section('body')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial No.</th>
                    <th>Blog Title</th>
                    <th>Writer Name</th>
                    <th>Image</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $i = 1 @endphp
                  @foreach($blogList as $blogL)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$blogL->blog_title}}</td>
                    <td>{{$blogL->writer_name}}</td>              
                    <td><img src="{{asset('public/uploads/'. $blogL->blog_image)}}" alt="" height="100px" width="200px"></td>
                    <td><button class="btn btn-success"><a href="{{route('edit_blog', $blogL->id)}}" style="color: white">Edit</a></button> | <button class="btn btn-danger"><a  onclick="return confirm('Are you sure?')" href="{{route('delete_blog', $blogL->id)}}" style="color: white;">Delete</a></button></td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial No.</th>
                    <th>Blog Title</th>
                    <th>Writer Name</th> 
                    <th>blog_image</th>
                    <th>Edit</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection




@if ($message = Session::get('success'))
  <input type="text" name="" value="{{ $message }}" id="success" hidden="true">

  @push('delete_blog_script')
  <script>
    var msg = $('#success').val();
    toastr.success(msg)
  </script>
 @endpush

@endif 