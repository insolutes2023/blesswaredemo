<footer>
	<div class="top_footer container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 part1">
					<a href=""><img src="{{asset('assets/images/logo-white.png')}}" alt="Logo" style="width:60%;"></a>
					<p>InsideOut Solutions provide whole range of financial and taxation services to small & medium enterprises and individuals ranging from accounting, consultancy, tax return filing, auditing, software support etc at affordable price.</p>

					<ul class="p0">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>

					</ul>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 part2">
					<h5>Quick Links</h5>
					<ul class="p0">
						<li><a href="{{config('app.url')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Home</a></li>
						<li><a href="{{route('about-us')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;About Us</a></li>
						<li><a href="{{route('book-keeping-financial-services')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Services</a></li>
						<li><a href="{{route('contact-us')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Contact Us</a></li>

					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 part2">
					<h5>Our Services</h5>
					<ul class="p0">
						<li><a href="{{route('book-keeping-financial-services')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Book Keeping & Financial Services</a></li>
						<li><a href="{{route('audit-assurance')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Audit & Assurance</a></li>
						<li><a href="{{route('tax-services')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Value Added Tax Services</a></li>
						<li><a href="{{route('advisory-services')}}"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;Advisory Services</a></li>

					</ul>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 part2">
					<h5>Contact Information</h5>
					<ul class="p0">
						<li><a>InsideOut Solutions LLC,P.O.Box 191868 Dubai, United Arab Emirates</a></li>
						<li><a>Ph: + 971 56 9974089</a></li>
						<li><a>Email: sreenivasan@ios-uae.com</a></li>
					</ul>
				</div>
			</div> <!-- End row -->
		</div>
	</div> <!-- End top_footer -->
	<div class="bottom_footer container-fluid">
		<div class="container">
			<p class="float_left">Copyright &copy; InsideOut Solutions LLC {{date('Y')}}. All rights reserved. </p>
		</div>
	</div> <!-- End bottom_footer -->
</footer>