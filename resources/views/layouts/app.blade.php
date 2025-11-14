<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> Blessware Technologies Qatar </title>
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/favicon.webp" />
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon.webp" />
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.webp" />
	<link rel="manifest" href="assets/images/favicons/favicon.webp" />
	<meta name="description" content="Blessware Technologies Qatar " />

	<x-header-script />


</head>

<body>








	<div class="page-wrapper">

		<x-header />

		@yield('content')

		<x-footer />


	</div><!-- /.page-wrapper -->


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="130"
						alt="" /></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@packageName__.com">needhelp@austry.com</a>
				</li>
				<li>
					<i class="fa fa-phone-alt"></i>
					<a href="tel:666-888-0000">666 888 0000</a>
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<div class="mobile-nav__top">
				<div class="mobile-nav__social">
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-facebook-square"></a>
					<a href="#" class="fab fa-pinterest-p"></a>
					<a href="#" class="fab fa-instagram"></a>
				</div><!-- /.mobile-nav__social -->
			</div><!-- /.mobile-nav__top -->



		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<i class="icon-magnifying-glass"></i>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
	<x-footer-script />
</body>

</html>