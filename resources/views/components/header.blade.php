<header>
			<div class="container-fluid top_header">
				<div class="container">
					<p class="float_left">Welcome to InsideOut Solutions LLC, established in 2014</p>
					<div class="float_right" style="margin-top:10px">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							
						</ul>
					</div>
				</div> <!-- end container -->
			</div><!-- end top_header -->
			<div class="bottom_header top-bar-gradient" style="padding-bottom: 10px;padding-top: 10px;">
				<div class="container clear_fix">
					<div class="float_left logo custom-logos" >
						<a href="index.html">
							<img src="{{asset('assets/images/logo.png')}}" alt="Me Finance" class="logo-image" style="">
						</a>
					</div>
					<div class="float_right address" style="margin-top: 12px;">
						<div class="top-info">
							<div class="icon-box">
								<span class=" icon icon-Pointer"></span>							
							</div>
							<div class="content-box">
								<p> Sharjah Media City, <br><span>Sharjah, UAE</span></p>
							</div>
						</div>
						<div class="top-info">
							<div class="icon-box">
								<span class="separator icon icon-Phone2"></span>							
							</div>
							<div class="content-box">
								<p>+ 971 56 9974089 <br><span>sreenivasan@ios-uae.com</span></p>
							</div>
						</div>
						<div class="top-info">
							<div class="icon-box">
								<span class="separator icon icon-Timer"></span>
							</div>
							<div class="content-box">
								<p>Mon - Sat, 9am - 6pm <br><span>Sunday Closed</span></p>
							</div>
						</div>
					</div>
				</div> <!-- end container -->
			</div> <!-- end bottom_header -->
		</header> <!-- end header -->
        <section class="mainmenu-area stricky">
			<div class="container">
				<nav class="clearfix">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header clearfix">
				      <button type="button" class="navbar-toggle collapsed">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="fa fa-th fa-2x"></span>
				      </button>
				    </div>
					<div class="nav_main_list custom-scroll-bar pull-left" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav" id="hover_slip">
							<li><a href="{{config('app.url')}}">Home</a></li>
							<li class="arrow_down"><a href="{{route('about-us')}}">About Us</a>
							
							</li>
							<li class="arrow_down"><a href="#">Services</a>
								<div class="sub-menu">
									<ul>
										<li><a href="{{route('book-keeping-financial-services')}}">Book Keeping & Financial Services</a></li>
										<li><a href="{{route('audit-assurance')}}">Audit & Assurance</a></li>
										<li><a href="{{route('tax-services')}}">Value Added Tax Services</a></li>
										<li><a href="{{route('advisory-services')}}">Advisory Services</a></li>
									</ul>
								</div>
							</li>
						
						
						
							<li><a class="contact" href="{{route('contact-us')}}">Contact Us</a></li>
						</ul>						
					</div>
					<div class="find-advisor pull-right">
						<a href="#" class="advisor ">+ 971 56 9974089</a>
					</div>
				</nav> <!-- End Nav -->
			</div> <!-- End Container -->
		</section>