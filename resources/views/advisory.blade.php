<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')
<!-- ======= Banner ======= -->
<style>
	.history_sec ul

 {
    padding: 0;
    margin-top: 43px;
    padding-left: 20px;
}
.history_sec ul li

 {
    margin-top: 15px;
	color: #898989;
    font-size: 14px;
}

.history_sec ul li i

 {
    color: #233859;
    margin-right: 12px
}
@media (max-width: 767px) {
.row {
    margin-right: 0px; 
    
}
}
	</style>
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/advidory.webp')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Advisory Services</h1>
						<ul>
							<li><a href="{{config('app.url')}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>services</li>
						</ul>
						
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
		<section class="side_tab">
			<div class="container">
				<div class="row">
					<div class="white_bg right_side col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
						<div class="tab_details">
						    <!-- Tab panes -->
						    <div class="tab-content right_info history_sec">
						      <div class="tab-pane fade row" id="financial">
						       <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						      	<h2>BUSINESS FUNDING</h2>
						      	<p>We are providing funding assistance for Startups and SMEs in UAE and India. We are working closely with banks and venture capital funds for debt and equity funding for corporates. We evaluate and recommend companies based on their merit and do independent evaluation of their profitability and liquidity. </p>
							
								
						      </div>
						      <div class="tab-pane fade in row active" id="investment">
						      	 <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						      	<h2>FEASIBILITY STUDIES</h2>
						      	<p>We are providing funding assistance for Startups and SMEs in UAE and India. We are working closely with banks and venture capital funds for debt and equity funding for corporates. We evaluate and recommend companies based on their merit and do independent evaluation of their profitability and liquidity.</p>
								
						      </div>
						      <div class="tab-pane fade row" id="retairing">
						       <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						       	<h2>COMPANY FORMATION</h2>
						      	<p>We are helping people to start business in UAE Mainland, FreeZone & Offshore </p>
								
								
						      </div>

							  <div class="tab-pane fade row" id="setup">
						       <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						         	<h2>SETUP STRATEGY INTO INDIAN MARKET</h2>
						      	<p>Our Indian desk can help to establish a business presence in India by direct investment or through mergers and acquisitions. </p>
								
								
						      </div>
						      
							  <div class="tab-pane fade row" id="international">
						       <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						      	<h2>INTERNATIONAL TAX SERVICES</h2>
						      	<p>InsideOut can help Indian Expats in UAE for wealth planning and can create a portfolio based on their requirements and risk apetite.</p>
								
								
						      </div>
						      

							  <div class="tab-pane fade row" id="setup">
						       <img class="img-responsive" src="{{asset('assets/images/ad-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/ad-2.jfif')}}" alt="image">
						       	<h2>WEALTH PLANNING IN INDIA FOR EXPATS</h2>
						      	<p>InsideOut can help businesses and individuals in tax planning, return filing etc to comply with International direct and indirect taxation laws.</p>
								
								
						      </div>
						      
						     
						     
						     
						    </div>
						</div> <!-- End tab_details -->
						
						<div class="clear_fix"></div>
					
					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
					    <li class="active"><a href="#financial" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;BUSINESS FUNDING</a></li>
					    <li><a href="#investment" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;FEASIBILITY STUDIES</a></li>
					    <li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;COMPANY FORMATION</a></li>
						<li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;SETUP STRATEGY INTO INDIAN MARKET</a></li>
						<li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;INTERNATIONAL TAX SERVICES</a></li>
						<li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;BUSINESS VALUATION & RESTRUCTURING</a></li>
					     </ul>
					  <div class="advisor_side"> <!-- Advisor profile & Download option -->
								<h3>Company Brochure </h3>
						<a href="#"><i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;&nbsp;Download Brochure PDF</a>
					
					  </div> <!-- End Advisor profilr & Download option-->
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section>
@endsection