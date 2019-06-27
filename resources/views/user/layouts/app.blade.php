<!DOCTYPE html>
<html lang="tr">

<head>

@include('user.layouts.head')
@section('head')
    @show
</head>

<body>

  <!-- Navigation -->
@include('user.layouts.nav')

  <!-- Page Header -->
@include('user.layouts.header')

  <!-- Main Content -->
@section('main-content')  
    @show

  <hr>

  <!-- Footer -->
@include('user.layouts.footer')
</body>

</html>
