<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/about_ios.webp')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>About Us</h1>
						<ul>
							<li><a href="{{config('app.url')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>About us</li>
						</ul>
						
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->

<!-- ============ Our history ========== -->
		<section class="history_sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 left-side">
						<h2>What We Do</h2>
						<p>We offer complete bookkeeping, auditing. VAT consultancy services and other financial consultancy for small- and medium-sized businesses and individuals. Our way of approach is more of customized based on client requirements and hence pricing is determined on case to case basis and affordabality to clients.</p>
						
					</div>
					<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 right_side">
						<img class="img-responsive" src="{{asset('assets/images/who-we-are.jpg')}}" alt="image">
						
					</div>
				</div>
			</div>
		</section>
<!-- ============ /Our history ========== -->

<!-- ======= Testimonial & Company Values ======= -->
		<section class="testimonial_sec clear_fix">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company">
						<h2>Our Company Values</h2>
						<div class="company-tab">
							<ul class="nav nav-pills nav-justified">
							    <li class="active"><a data-toggle="pill" href="#menu1">Our Vision</a></li>
							    <li><a data-toggle="pill" href="#menu2">Our Mission</a></li>
							   
						  	</ul>
						  
							 <div class="tab-content">
							    <div id="menu1" class="tab-pane fade in active">
							      <h3>Our Vision</h3>
							      <p>To be the most trusted and reliable professional services firm in the Middle East recognized by our clients for excellence in knowledge and for timely delivery.</p>
							    
							    </div>
							    <div id="menu2" class="tab-pane fade">
							      <h3>Our Mission</h3>
							      <p>To render our clients with the highest quality professional services. and act as a consultant which helps to achieve versatile growth in their business.</p>
							     
							    </div>
							   
							 </div>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End Container -->
		</section> <!-- testimonial -->
<!-- ======= /Testimonial & Company Values ======= -->


@endsection