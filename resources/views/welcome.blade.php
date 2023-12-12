<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>potoub</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('welcome/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('welcome/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('welcome/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('welcome/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('welcome/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="" /></div>
      </div>
      <!-- end loader -->
      <div class="wrapper">
      <!-- end loader -->
     
       
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1><br> Presensi <br>Siswa</h1>
                                 <p>HALLO JANGAN LUPA ABSEN YA!!</p>
                                 <a class="read_more" href="{{ route('auth.login') }}">Login</a>
                              </div>
                           </div>
                          
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="{{ asset('welcome/js/jquery.min.js')}}"></script>
      <script src="{{ asset('welcome/js/popper.min.js')}}"></script>
      <script src="{{ asset('welcome/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('welcome/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('welcome/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('welcome/js/custom.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {
               lat: 40.645037,
               lng: -73.880224
             },
           });
         
           var image = 'images/maps-and-flags.png';
           var beachMarker = new google.maps.Marker({
             position: {
               lat: 40.645037,
               lng: -73.880224
             },
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

