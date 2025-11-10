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
<section class="p0 container-fluid banner about_banner" style="background: url({{asset('assets/images/audit.jfif')}}) no-repeat center;">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Audit & Assurance</h1>
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
						      	<img class="img-responsive" src="{{asset('assets/images/audit-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/audit-2.jfif')}}" alt="image">
						       
						      	<p>InsideOut Solutions offers the complete range of Audit and Assurance services to meet the business needs of client in this dynamic global environment. Through the years of immense experience and knowledge in this segment of external and internal audit, we have tailor made services with the most credible approach</p>
								
								<p>This segment is engaged in providing the following services:</p>
								<h2>FINANCIAL STATEMENT AUDIT</h2>
								<p>A financial statement audit is an independent appraisal of the financial statements prepared by the organization. The cardinal objective of a financial statement audit is to provide an independent assurance that the management has, in its financial statements, presented a true and fair view of a companys financial performance. The result of this examination is a report by the auditor, attesting to the fairness of presentation of the financial statements and related disclosures. The auditors report must accompany the financial statements when they are issued to the intended recipients. </p>
						      </div>
						      <div class="tab-pane fade in row active" id="investment">
						       	<img class="img-responsive" src="{{asset('assets/images/audit-1.jfif')}}" alt="image">
						      	<img class="img-responsive " src="{{asset('assets/images/audit-2.jfif')}}" alt="image">
						    	<p>InsideOut Solutions offers the complete range of Audit and Assurance services to meet the business needs of client in this dynamic global environment. Through the years of immense experience and knowledge in this segment of external and internal audit, we have tailor made services with the most credible approach.</p>
                                <p>This segment is engaged in providing the following services:</p>
						      	<h2>INTERNAL AUDIT</h2>
						      	<p>Internal auditing is an independent, objective assurance and consulting activity intended to add value and develop an organizations operations. It helps an organization achieve its objectives by bringing a methodical, meticulous and disciplined approach to assess and enhance the effectiveness of risk management, control, and governance processes.</p>
								
							   <p>Internal Auditors roles include supervising, evaluating, investigating and analyzing organizational risk and controls; and reviewing and confirming information and compliance with policies, procedures, and laws. Working together with management, the internal auditors provide assurance that as far as possible risks are significantly reduced and that the organizations corporate governance is forceful and capable. In addition Internal auditors make recommendations for And, when there is room for improvement, internal auditors make recommendations for augmenting processes, policies, and procedures.</p>
							   <p>The scope of internal auditing is broad and wide. It may involve subjects like organizations governance, risk management and management controls. The efficiency and effectiveness of operations (including safeguarding of assets), the reliability of financial and management reporting and compliance with laws and regulations are also part of internal audit scope. Internal auditing may also involve conducting proactive fraud audits to identify potentially fraudulent acts; participating in fraud investigations under the direction of fraud investigation professionals, and conducting post investigation fraud audits to identify control breakdowns and establish financial loss.</p>
							   <p>Internal auditing activity also relates to corporate governance which is accomplished primarily through participation in meetings and discussions with members of the Board of Directors. Governance is the policies, processes and structures used by the organizations leadership to direct activities, achieve objectives, and protect the interests of diverse stakeholder groups in a manner consistent with ethical standards. The internal auditor is often considered one of the four pillars of corporate governance, the other pillars being the Board of Directors, management, and the external auditor.</p>
							   <p>Internal auditors typically issue reports at the end of each audit that summarize their findings, recommendations, and any responses or action plans from management. An audit report may have an executive summary; a body that includes the specific issues or findings identified and related recommendations or action plans; and appendix information such as detailed graphs and charts or process information.</p>
						      </div>
						      <div class="tab-pane fade row" id="retairing">
						      		<img class="img-responsive" src="{{asset('assets/images/audit-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/audit-2.jfif')}}" alt="image">
						    	<p>InsideOut Solutions offers the complete range of Audit and Assurance services to meet the business needs of client in this dynamic global environment. Through the years of immense experience and knowledge in this segment of external and internal audit, we have tailor made services with the most credible approach.</p>

                                 <p>This segment is engaged in providing the following services:</p>
						      	<h2>DUE DILIGENCE AUDIT</h2>
								  <ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>Due diligence is an investigation or examination of a business or person prior to signing a contract, or an act with a certain standard of care.</li>
											</ul>
						      	<p>The investigation or examination could be carried out for a potential objective for merger, acquisition, privatization, or similar corporate finance transaction normally by a buyer.</p>
								<p>It can be a legal obligation, but the term will more commonly apply to voluntary investigations. A common example of due diligence in various industries is the process through which a potential acquirer evaluates a company which he has targeted or its assets for an acquisition.</p>
								
								
								<p>The theory behind due diligence holds that performing this type of investigation contributes significantly to informed decision making by enhancing the amount and quality of information available to decision makers and by ensuring that this information is systematically used to deliberate in a reflexive manner on the decision at hand and all its costs, benefits, and risks.</p>
								
						      </div>

							  <div class="tab-pane fade row" id="retairings">
						      	<img class="img-responsive" src="{{asset('assets/images/audit-1.jfif')}}" alt="image">
						      	<img class="img-responsive" src="{{asset('assets/images/audit-2.jfif')}}" alt="image">
						    	<p>InsideOut Solutions offers the complete range of Audit and Assurance services to meet the business needs of client in this dynamic global environment. Through the years of immense experience and knowledge in this segment of external and internal audit, we have tailor made services with the most credible approach.</p>

                                 <p>This segment is engaged in providing the following services:</p>
						      	<h2>INVESTIGATION / FORENSIC AUDIT</h2>
								 
						      	<p>Investigative Auditing consists of the detection, tracing, quantification and prevention of fraud, money laundering and terror finance. Investigative Auditing involves the examination of accounts and the use of accounting procedures to discover financial irregularities and to follow the movement of funds and assets in organizations.</p>
								<p>The objects of Investigative Auditing include, inter alia</p>
								<ul class="p0 category_item">
								<li><i class="fa fa-arrow-circle-right"></i>Identification of suspects</li>
								<li><i class="fa fa-arrow-circle-right"></i>Determination of damages</li>
								<li><i class="fa fa-arrow-circle-right"></i>Quantification of damages</li>
								<li><i class="fa fa-arrow-circle-right"></i>Prevention of damage</li>
								<li><i class="fa fa-arrow-circle-right"></i>Identification of financial activity</li>
								<li><i class="fa fa-arrow-circle-right"></i>Tracing of financial assets</li>
											</ul>
								
								
								
								
						      </div>
						      
						     
						     
						     
						    </div>
						</div> <!-- End tab_details -->
						
						<div class="clear_fix"></div>
					
					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
					  
					  <li class="active"><a href="#investment" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;INTERNAL AUDIT</a></li>
					  <li><a href="#financial" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;FINANCIAL STATEMENT AUDIT</a></li>
					 <li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;DUE DILIGENCE AUDIT</a></li>
					 <li><a href="#retairings" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;INVESTIGATION / FORENSIC AUDIT</a></li>
					     
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