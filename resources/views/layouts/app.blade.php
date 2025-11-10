<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>InsideOut Solutions LLC :: United Arab Emirates</title>

		<x-header-script />
		


		<!--[if lt IE 9]>
	   		<script src="js/html5shiv.js"></script>
		<![endif]-->



	</head>
	<body class="home">
<!-- =======Header ======= -->
<x-header />
<!-- ======= /Header ======= -->
@yield('content')
<!-- ============= Footer ================ -->
	
<!-- ============= /Footer =============== -->

		<!-- Js File -->

		<!-- j Query -->
		<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container text-center">
				<p>If you have any query regarding finance and taxation…We are available – Contact us</p>
				<a href="{{route('contact-us')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->
		<x-footer />
        <x-footer-script />
	</body>
</html>