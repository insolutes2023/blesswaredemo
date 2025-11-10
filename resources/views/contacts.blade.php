<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')
<!-- ======= Banner ======= -->
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/contact_ios.webp')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Contact Us</h1>
						<ul>
							<li><a href="{{config('app.url')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Contact Us</li>
						</ul>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ================= /Banner ================ -->
<!-- =================== Contact us container ============== -->
		<section class="contact_us_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
						<h2>Get In Touch With Us</h2>
						<p>You can send your enquiries anytime to us. We will get in touch with you within 24 hours.</p>
					</div> <!-- End section title -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
						<form action="includes/sendemail.php" class="contact-form">
							<input class="form-control name" type="text" name="name" placeholder="Your Name">
							<input class="form-control email" type="email" name="email" placeholder="Your Email">
						    <input class="form-control" type="text" name="subject" placeholder="Subject">
						    <textarea name="message" placeholder="Message"></textarea>
						    <button type="submit" class="submit">submit now <i class="fa fa-arrow-circle-right"></i></button>
						</form> <!-- End form holder -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
						<address>
							<div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
							<div class="address_holder float_left">P.O.Box 191868 <br> Dubai, United Arab Emirates</div>
						</address>
						<address class="clear_fix">
							<div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
							<div class="address_holder float_left">sreenivasan@ios-uae.com</div>
						</address>
						<address class="clear_fix">
							<div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
							<div class="address_holder float_left">+  971 56 9974089</div>
						</address>
					</div>
				</div>
			</div>
		</section>

<!-- =================== /Contact us container ============== -->

<!-- =============== google map ============= -->
		<div class="map" style="margin-top:100px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.045680340505!2d55.161060975208166!3d25.100314977773458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b683cf68555%3A0xeaf6b98c9e436795!2sGoogle%20Dubai!5e0!3m2!1sen!2sin!4v1747814493042!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
<!-- =============== /google map ============= -->


@endsection