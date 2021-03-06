
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Buyorsellpets</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{ URL::asset('public/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{ URL::asset('public/assets/css/general.css')}}" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="{{ URL::asset('public/assets/css/custom.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('public/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/assets/css/owl.theme.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('public/assets/css/style.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('public/assets/css/animate.css')}}" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="./public/assets/css/magnific-popup.css"> 
	
	<script src="./public/assets/js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>
<body id="home">
@include('templates.partials.alerts')
	@yield('content')


    <!-- JavaScript -->
    <script src="{{ URL::asset('public/assets/js/jquery-1.10.2.js')}}"></script>
    <script src="{{ URL::asset('public/assets/js/bootstrap.js')}}"></script>
	<script src="{{ URL::asset('public/assets/js/owl.carousel.js')}}"></script>
	<script src="{{ URL::asset('public/assets/js/script.js')}}"></script>
	<!-- StikyMenu -->
	<script src="{{ URL::asset('public/assets/js/stickUp.min.js')}}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery.corner.js')}}"></script> 
	<script src="{{ URL::asset('public/assets/js/wow.min.js')}}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ URL::asset('public/assets/js/classie.js')}}"></script>
	<script src="{{ URL::asset('public/assets/js/uiMorphingButton_inflow.js')}}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ URL::asset('public/assets/js/jquery.magnific-popup.js')}}"></script> 
</body>

</html>