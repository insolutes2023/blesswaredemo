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
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/tax.jfif')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Tax Services</h1>
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
						      <img class="img-responsive" src="{{asset('assets/images/tax-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/tax-2.jfif')}}" alt="image">
						          	<h2>Tax Audit</h2>
								<h4>What is TAX Audit in the UAE?</h4>
						      	<p>Tax Audit is an examination of liability of a taxable person by the Federal Tax Authority. Tax Audit is conducted by the authority to check whether the tax liability is paid within the due date and whether such liabilities are properly arrived as per the provisions of the relevant laws such as UAE VAT law, UAE Excise Tax law, etc.</p>
								  <h4>What are our roles in Tax Audit?</h4>
								  <p>The Tax Auditor may do the tax audit either by visiting the taxable persons location or by asking certain documents to submit to the authority for tax audit. It is the responsibility of a taxable person to comply with the requirements of the provisions of the tax laws.</p>
								  <p>InsideOut Solutions as TAX experts guide and support the taxable persons in the UAE to comply the tax requirements so that the business will be ready to face tax audit at any time by the authority. Our review of documents, systems and procedures of a taxable person on compliance of Tax laws is known as Tax Compliance Review.</p>
								  <h4>How we proceed with VAT Compliance Review?</h4>
								<ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>Accounting and operational software system review</li>
								<li><i class="fa fa-arrow-circle-right"></i> Review of compliance of Output Tax</li>
								<li><i class="fa fa-arrow-circle-right"></i>Review of compliance of Input Tax</li>
								<li><i class="fa fa-arrow-circle-right"></i>Review of periodical VAT returns</li>
								<li><i class="fa fa-arrow-circle-right"></i> Payment of Tax due amount</li>
								
                                </ul>
								
						      </div>
						      <div class="tab-pane fade in row active" id="investment">
						       <img class="img-responsive" src="{{asset('assets/images/tax-1.jfif')}}" alt="image">
						      <img class="img-responsive" src="{{asset('assets/images/tax-2.jfif')}}" alt="image">
						    	<h2>VAT IMPLEMENTATION</h2>
						      	<p>VAT is implemented in the UAE with effect from 1st January 2018. VAT (Value Added Tax) is an indirect tax which is charged at every level of supply of goods or services or both. Businesses need to take necessary steps for VAT implementation in UAE into their operations. We offer support to businesses for VAT implementation in Dubai, Abu Dhabi as well as Sharjah and all other northern emirates.</p>
								<h4>Steps involved in VAT Implementation Services</h4>
								<p>We believe that the businesses should be guided properly for VAT implementation in UAE to comply with UAE VAT law and develop a sustainable tax strategy. The procedure for effective VAT implementation is as follows:</p>
								<ul class="p0 category_item">
									<li><i class="fa fa-arrow-circle-right"></i>Understand the business model</li>
                                    <li><i class="fa fa-arrow-circle-right"></i>Training to the Management & Employees</li>
									<li><i class="fa fa-arrow-circle-right"></i>Analyzing the impact of VAT on your business</li>
									<li><i class="fa fa-arrow-circle-right"></i>Identifying a VAT team leader VAT Implementation Project manager</li>
									<li><i class="fa fa-arrow-circle-right"></i>Registration for VAT</li>
									<li><i class="fa fa-arrow-circle-right"></i>Accounting systems under VAT</li>
									<li><i class="fa fa-arrow-circle-right"></i>Invoicing under VAT</li>
									<li><i class="fa fa-arrow-circle-right"></i>IT Migration</li>
									<li><i class="fa fa-arrow-circle-right"></i>Filing of Return VAT Return</li>
                               </ul>
							   <h4>VAT Return Filing Servivce</h4>
							   <p>VAT Returns Filing has to be done through online portal of the Federal Tax Authority (FTA) available under e-services. The form used for VAT return filing is called Form VAT 201. A taxable person is responsible to submit VAT return in the UAE in the prescribed format given by the FTA. Every taxable person is required to submit the VAT Return within 28 days from the end of each Tax period prescribed by the FTA. This must be in accordance with the provisions of the UAE VAT law. The taxable person is also liable to remit the amount of tax due to the FTA within the time frame specified by the UAE VAT Law; ie within 28 days from the end of each tax period.</p>
							   <h4>How do we help you for filing your VAT Return Form VAT201?</h4>
							   <p>Our Tax professionals in InsideOut Solutions can support you in the following areas:</p>
							   <ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>We will visit your office on a periodical basis (weekly/monthly/Quarterly) to compile the information for filing the VAT Return. At the end of each VAT return period, we prepare the VAT return on behalf of your company in accordance with the provisions of UAE VAT law.</li>
								<li><i class="fa fa-arrow-circle-right"></i>We ensure that the VAT returns are filed within the specified time in each tax period.</li>
								<li><i class="fa fa-arrow-circle-right"></i>Proper guidance for the payment of Minimal Tax Liability as per the provisions of the UAE VAT Law will be advised.</li>
								<li><i class="fa fa-arrow-circle-right"></i>Optimal Tax Planning for the company will be done.</li>
								<li><i class="fa fa-arrow-circle-right"></i>We will be available to represent in front of the authority on behalf of you as and when required.</li>

  								</ul>
								  <h2>How the VAT returns Form VAT201 are filed?</h2>
								  <p>VAT Returns are to be filed through online portal of the FTA. One has to access the VAT Return Form by login into the e-services of the FTA portal by using the respective user name and password. Our Tax Expert will help you fill the VAT return form with all relevant information within the due date prescribed by the authority.</p>
								  <h2>What are the information to be provided in the VAT Return?</h2>
								  <p>The VAT return discloses the Tax amount due (or refundable as the case may be) for a particular Tax Period. One has to disclose the total output tax payable as well as the input credit available against such Output separately. Excess of Output Tax over and above the Input Tax for a tax period is the amount of Tax Liability to be paid.</p>
								  <p>Tax amount disclosed under Output Tax over and above the Input Tax is the amount to be paid to the FTA for a particular tax period within the due date.</p>
						      </div>
						      <div class="tab-pane fade row" id="retairing">
						       <img class="img-responsive" src="{{asset('assets/images/tax-1.jfif')}}" alt="image">
						      <img class="img-responsive " src="{{asset('assets/images/tax-2.jfif')}}" alt="image">
						     	<h2>VAT Registration & Return Filing</h2>
						      	<p>InsideOut can help in UAE VAT registration, Returns filing, VAT reconsideration submissions/ Appeal procedures, Tax agent services, VAT refund applications and other compliance matters under FTA laws.</p>
								
							
						      </div>
						      
						     
						     
						     
						    </div>
						</div> <!-- End tab_details -->
						
						<div class="clear_fix"></div>
					
					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
					    <li class="active"><a href="#financial" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tax Audit</a></li>
					    <li><a href="#investment" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;VAT IMPLEMENTATION</a></li>
					    <li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;VAT Registration & Return Filing</a></li>
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