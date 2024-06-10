<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Superio | Just another HTML Template | Home Page 01</title>
      <link href="{{ URL::to('/') }}/assets/css/bootstrap.css" rel="stylesheet">
      <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">
      <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="{{ URL::to('/') }}/assets/images/favicon.png" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   </head>
   <body data-anm=".anm">
      <div class="page-wrapper">
      <div class="preloader"></div>
	  
 	   <div class="page-wrapper dashboard ">

  @include('layouts.header')


  @yield('content')

  @include('layouts.footer')

      <script src="{{ URL::to('/') }}/assets/js/jquery.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/popper.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/chosen.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/bootstrap.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/jquery.fancybox.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/jquery.modal.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/mmenu.polyfills.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/mmenu.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/appear.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/anm.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/ScrollMagic.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/rellax.min.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/owl.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/wow.js"></script>
      <script src="{{ URL::to('/') }}/assets/js/script.js"></script>

@stack('page_scripts')
<script>

</script>
</body>
</html>
