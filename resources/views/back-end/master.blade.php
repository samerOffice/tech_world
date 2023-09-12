<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/dist/css/google_font_family.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="{{asset('public/assets/backend/ionicons/2.0.1/css/ionicons.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/dist/css/adminlte.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/summernote/summernote-bs4.min.css')}}">

  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/toastr/toastr.min.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('public/assets/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    
    <!-- Right navbar link (logout section) -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Login Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ Auth::user()->name }}&nbsp;<i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;Profile</a>
          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                                       document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

 @include('back-end.partials.sidebar')


   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('body')
  </div>
  <!-- /.content-wrapper -->



  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">365 Tech World</a>.</strong>
    All rights reserved.  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- jQuery -->
<script src="{{asset('public/assets/backend/plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/assets/backend/plugins/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- ChartJS -->
<script src="{{asset('public/assets/backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/assets/backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/assets/backend/plugins/jqvmap/jquery.vmap.min.js')}} "></script>
<script src="{{asset('public/assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/assets/backend/plugins/jquery-knob/jquery.knob.min.js')}} "></script>
<!-- daterangepicker -->
<script src="{{asset('public/assets/backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/daterangepicker/daterangepicker.js')}} "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}} "></script>
<!-- Summernote -->
<script src="{{asset('public/assets/backend/plugins/summernote/summernote-bs4.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('public/assets/backend/plugins/toastr/toastr.min.js')}}"></script>


@stack('add_blog_script')
@stack('edit_blog_script')
@stack('delete_blog_script')

<script>
  // DataTables  & Plugins 
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


//summernote
  $(function () {
    $('#summernote').summernote();
  })
</script>



<script src="{{asset('public/assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>



<!-- AdminLTE App -->
<script src="{{asset('public/assets/backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/assets/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/assets/backend/dist/js/pages/dashboard.js')}}"></script>


</body>
</html>
