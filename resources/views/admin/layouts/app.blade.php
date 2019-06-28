<!DOCTYPE html>
<html lang="tr">
<head>
@include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('main-content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('admin.layouts.footer')
</body>
</html>
