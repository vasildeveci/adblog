<!DOCTYPE html>
<html>
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
@include('admin.layouts.footer')
</body>
</html>
