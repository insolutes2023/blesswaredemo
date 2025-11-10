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
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/book.jfif')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Book Keeping & Financial Services</h1>
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
						      	<img class="img-responsive" src="{{asset('assets/images/book-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/book-2.jfif')}}" alt="image">
						      	<h2>ACCOUNTING & MIS REPORTING</h2>
						      	<p>InsideOut Solutions offers a wide spectrum of accounting services that answers to the financial needs of any business in the global market and are committed to keep the highest level of professional standards and quality. This segment is engaged in providing the following services. </p>
								<ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>Financial accounting system design & implementation</li>
								<li><i class="fa fa-arrow-circle-right"></i>Setting up of accounting procedures, costing & budgets</li>
								<li><i class="fa fa-arrow-circle-right"></i>Accounts updation on periodical basis in our own software or client software</li>
								<li><i class="fa fa-arrow-circle-right"></i>Supervision and review of financial accounting records</li>
								<li><i class="fa fa-arrow-circle-right"></i>Financial reporting on periodical basis.</li>
								<li><i class="fa fa-arrow-circle-right"></i>Review and initiate corrective measures on deviations.</li>
                                </ul>
								<p>We also undertake complete outsourcing of accounts department functions for organization of any size. We have a full fledged team of accounting professionals in India working in different time zones who can be engaged as per the requirement of client. Currently we are handling some international clients and few mid-sized companies by outsourcing their whole accounts department work.</p>
						      </div>
						      <div class="tab-pane fade in row active" id="investment">
						      	<img class="img-responsive" src="{{asset('assets/images/book-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/book-2.jfif')}}" alt="image">
						         	<h2>CORPORATE FINANCE & CFO SERVICES</h2>
						      	<p>We offer our expertise to provide optimal capital structure at least cost of capital to the organization. We facilitate to cater to the borrowing needs of the organization by leveraging our strong relationships with the banks and financial institutions.</p>
								<ul class="p0 category_item">
									<li><i class="fa fa-arrow-circle-right"></i>Assessment of working capital needs</li>
									<li><i class="fa fa-arrow-circle-right"></i>Consultancy on bank credit & private equity</li>
									<li><i class="fa fa-arrow-circle-right"></i>Project financing consultancy</li>
									<li><i class="fa fa-arrow-circle-right"></i>Consultancy for fixed assets financing and refinancing</li>
									<li><i class="fa fa-arrow-circle-right"></i>Planning for Reducing Finance Costs</li>
                               </ul>
							   <p>Our CFOs provide part time, interim, and project-based financial expertise to small and medium-sized businesses. In general, the work they do is focused on business and financial strategy; our CFOs know how to use the tools of accounting and finance to help business owners make the best possible decision</p>
						      </div>
						      <div class="tab-pane fade row" id="retairing">
						      	<img class="img-responsive" src="{{asset('assets/images/book-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/book-2.jfif')}}" alt="image">
						          	<h2>BUSINESS VALUATION & RESTRUCTURING</h2>
						      	<p>Ascertaining the value of a transaction and to advise whether take the call or not for the business deal is the focus of this service from InsideOut Solutions </p>
								<p>We offer a complete range of business valuation, mergers and acquisition service. Our experience is extensive with international exposure and familiarity with various cultures and sensibilities translating into value transactions in the complex transaction of mergers and acquisitions. Guidance to arrive the fair value of business which is reliable for third parties and which suits the purpose of the valuation from the management angle in an efficient manner will be undertaken. Our team provides assistance throughout a merger or joint venture setup. From initiating dialogue with potential partners, setting of strategic directions to documentation and business plan, our team will partner with you every step of the way</p>
								<ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>Fair value determination for Tangible and more significantly Intangible Assets of the company</li>
								<li><i class="fa fa-arrow-circle-right"></i>Undertaking Business Valuation based on latest methodologies</li>
								<li><i class="fa fa-arrow-circle-right"></i>In-depth analysis of system, financial & administrative operations</li>
								<li><i class="fa fa-arrow-circle-right"></i>Identifying profit maximization divisions</li>
								<li><i class="fa fa-arrow-circle-right"></i>Pointing out loss making areas</li>
								<li><i class="fa fa-arrow-circle-right"></i>Suggesting better ways of doing operations</li>
								<li><i class="fa fa-arrow-circle-right"></i>Identify opportunities that adds value to our clients business</li>
								<li><i class="fa fa-arrow-circle-right"></i>Lead the negotiation process armed with knowledge of strength weakness</li>
								<li><i class="fa fa-arrow-circle-right"></i>Advice & assistance with funding the acquisition</li>
								<li><i class="fa fa-arrow-circle-right"></i>Implementation & review of transition process</li>
  								</ul>
								<h2>Indian Desk</h2>
								<p>We have an exclusive Indian Desk. We take care of the following services:</p>
								<ul class="p0 category_item">

								<li><i class="fa fa-arrow-circle-right"></i>Set up strategy into Indian Market</li>
								<li><i class="fa fa-arrow-circle-right"></i>Incorporation, Compliance and advisory under the Indian Corporate Tax and FEMA Regulations</li>
								<li><i class="fa fa-arrow-circle-right"></i>Internal Audit, Forensic Study, Business Advisory</li>
								<li><i class="fa fa-arrow-circle-right"></i>International Tax Services  Transfer Pricing, Expat Taxation, International Tax Structuring and Litigation</li>
								<li><i class="fa fa-arrow-circle-right"></i>Investment and Wealth planning in India for Expats</li>
								</ul>
								<h2>Private Equity & Start Up Advisory</h2>
								<p>We advise, mentor and raise capital for lot of startups in India and UAE. Further we are advising lots of Private Equity Firms on their Target identification, Due Diligence, Assurance and Tax Structuring Services. Further we also assist PE firms to raise their funds in the global market.</p>
						      </div>
						      
						     
						     
						     
						    </div>
						</div> <!-- End tab_details -->
						
						<div class="clear_fix"></div>
					
					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
					    <li class="active"><a href="#financial" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;ACCOUNTING & MIS REPORTING</a></li>
					    <li><a href="#investment" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;CORPORATE FINANCE & CFO SERVICES</a></li>
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