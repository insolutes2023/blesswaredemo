@extends('layouts.app')

@section('content')
	<section class="rev_slider_wrapper me-fin-banner">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="fade">
					<img src="{{asset('assets/images/slides/1.jpg')}}"  alt="">
					<div class="tp-caption sfb tp-resizeme banner-h1" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="290" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Audit,  Assurance<br> & Accounting
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-border" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="400" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="800">
						<span></span>
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-text" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="435" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1100">
						<p>Expertise in International Accounting & Auditing Standards </p>
				    </div>
					<div class="tp-caption sfl tp-resizeme " 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="510" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1400">
						<a class="banner-button" href="">Contact Us <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
					<div class="tp-caption sfr tp-resizeme " 
				        data-x="left" data-hoffset="580" 
				        data-y="top" data-voffset="510" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1700">
						<a class="banner-button blue-bg" href="">View More <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
				</li>
				<li data-transition="fade">
					<img src="{{asset('assets/images/slides/2.jpg')}}"  alt="">
					<div class="tp-caption sfb tp-resizeme banner-h1" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="290" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Welcome to <br>InsideOut
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-border" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="400" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="800">
						<span></span>
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-text" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="435" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1100">
						<p> One stop solution for all financial consulting services</p>
				    </div>
					<div class="tp-caption sfb tp-resizeme " 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="510" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1400">
						<a class="banner-button" href="">Contact Us <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
				</li>
			</ul>
		</div>
	</section>
<!-- ======= /revolution slider section ======= -->


<!-- ======= Welcome section ======= -->
		<section class="welcome_sec">
			<div class="container">
				<div class="row welcome_heading">
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						<h2>We offer <br>Different Services</h2>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
						<p>The core competence of InsideOut Solutions lies in the area of Accounting & Financial Services, VAT consultancy & Return Filing, Audit & Assurance Services, Business & Management Consulting, Indian Tax Return Services, Company Incorporation Services.</p>
					</div>
				</div> <!-- End Row -->
				<div class="row welcome welcome_details">
					<div class="col-lg-6 col-md-12">
						<div class="welcome_item">
							<img src="{{asset('assets/images/home_box/1.jpg')}}" alt="images">
							<div class="welcome_info">
								<h3>Book keeping & Financial Services</h3>
								<p>Accounting and bookkeeping can play a vital role in increasing the profitability and accountability of an organization. The professional expertise, knowledge of InsideOut can help business in leveraging it to their advantage.</p>
							</div>
						</div>
						<div class="welcome_item welcome_item_bottom">
							<img src="{{asset('assets/images/home_box/3.jpg')}}" alt="images">
							<div class="welcome_info">
								<h3>Audit and Assurance</h3>
								<p>InsideOut offers a complete range of Audit and Assurance services to meet the business needs of the client through the years of immense experience and knowledge in this segment of the external and internal audit.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 bottom_row">
						<div class="welcome_item">
							<img src="{{asset('assets/images/home_box/2.jpg')}}" alt="images">
							<div class="welcome_info">
								<h3>Advisory Services</h3>
								<p>At InsideOut we do consulting in UAE Corporate tax laws, UAE Economic Substance Reporting/ UBO laws, UAE Anti Money Laundering compliances, Company formation in UAE Mainland/ Free zones, Economic & Feasibility Studies, International Taxation etc.</p>
							</div>
						</div>
						<div class="welcome_item welcome_item_bottom">
							<img src="{{asset('assets/images/home_box/4.jpg')}}" alt="images">
							<div class="welcome_info">
								<h3>Value Added Tax (VAT)</h3>
								<p>InsideOut can help in UAE VAT law consulting, VAT registration, VAT implementation, Tax audit, Returns filing, VAT reconsideration submissions/ Appeal procedures, Tax agent services, VAT refund applications and other compliance matters under FTA laws.</p>
							</div>
						</div>
					</div>
				</div> <!-- End Row -->
			</div> <!-- End container -->
		</section> <!-- End welcome_sec -->
<!-- ======= /Welcome section ======= -->

<!-- ======= Who We Are ======= -->
		<section class="we_are">
			<div class="left_side float_left">
				<div class="we_are_opacity">
					<div class="we_are_border">
						<h2>We are Est. 2014</h2>
					</div>
				</div>
			</div> <!-- End Left_Side -->
			<div class="right_side float_right">
				<div class="we_are_deatails">
					<h2>Who We Are</h2>
					<p>The core competence of InsideOut Solutions lies in the area of Accounting & Financial Services, VAT Consulting & Return Filing, Audit & Assurance Services, Business & Management Consulting, UAE Federal Corporate Tax Laws Consulting, UAE Economic Substance Reporting/ UBO laws, UAE Anti Money Laundering law compliances, Economic & Feasibility Studies, Company Incorporation Services.</p>
					<p>The diversity of skills and technical expertise available with InsideOut across various industries and business segments, helps to efficiently manage all clients with various professional requirements.</p>
					<div class="list_item">
						<img src="{{asset('assets/images/icon-1.png')}}" alt=""><p>Dedicated <br>Team</p>
						<img src="{{asset('assets/images/icon-2.png')}}" alt=""><p>Best <br>Advisors</p>
						<img src="{{asset('assets/images/icon-3.png')}}" alt=""><p class="support">24/7 <br>Supports</p>
					</div>
				</div>
			</div> <!-- End right_side -->
		</section> <!-- End We Are -->
<!-- ======= /Who We Are ======= -->



<!-- ======== Latest News ======== -->
		
<!-- ======== /Latest News ======== -->

<!-- ======== Our Partner & Get in touch ======== -->
<section class="container-fluid partner_touch_sec">
  <div class="container">
    <div class="row">
      <div class="our_partner col-lg-12">
        <h2>Our Clients</h2>
       
        <div class="owl-carousel owl-theme">
          <div class="item"><img src="{{asset('assets/images/partner-1.png')}}" alt="Partner 1"></div>
          <div class="item"><img src="{{asset('assets/images/partner-2.png')}}" alt="Partner 2"></div>
          <div class="item"><img src="{{asset('assets/images/partner-3.png')}}" alt="Partner 3"></div>
          <div class="item"><img src="{{asset('assets/images/partner-4.png')}}" alt="Partner 4"></div>
          <div class="item"><img src="{{asset('assets/images/partner-5.png')}}" alt="Partner 5"></div>
          <div class="item"><img src="{{asset('assets/images/partner-6.png')}}" alt="Partner 6"></div>
        </div>

      </div> <!-- End our_partner -->
    </div> <!-- End Row -->
  </div> <!-- End Container -->
</section>




<!-- ============= Footer ================ -->
	
@endsection