@extends('layouts.app')

@section('content')

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


<!--Main Slider Start-->
<section class="main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/banner_1.webp);"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__icon">
                                    <img src="assets/images/icon/main-slider-two-icon.png" alt="">
                                </div>
                                <p class="main-slider-two__sub-title">Welcome to Blessware Technologies Qatar</p>
                                <h2 class="main-slider-two__title">Innovate <br> with Confidence</h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="{{route('about-us')}}" class="thm-btn main-slider__btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/banner_2.webp);"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__icon">
                                    <img src="assets/images/icon/main-slider-two-icon.png" alt="">
                                </div>
                                <p class="main-slider-two__sub-title">Welcome to Renewable Energy</p>
                                <h2 class="main-slider-two__title">Improving the <br> Energy Efficiency</h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image-layer-two"
                    style="background-image: url(assets/images/backgrounds/banner_1.webp);"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">
                                <div class="main-slider-two__icon">
                                    <img src="assets/images/icon/main-slider-two-icon.png" alt="">
                                </div>
                                <p class="main-slider-two__sub-title">Welcome to Renewable Energy</p>
                                <h2 class="main-slider-two__title">Improving the <br> Energy Efficiency</h2>
                                <div class="main-slider-two__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="main-slider-two__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->


<!--About Two Start-->
<section class="about-two">
    <div class="about-two__shape-1 float-bob-x">
        <img src="assets/images/shapes/about-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-two__left">
                    <div class="about-two__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="about-two__img">
                            <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                        </div>
                        <div class="about-two__small-img">
                            <img src="assets/images/resources/about-two-small-img.jpg" alt="">
                        </div>
                        <div class="about-two__big-text">SKILL</div>
                        <div class="about-two__progress">
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-title">Wind Turbines</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="76%">
                                        <div class="count-text">76%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-two__progress-single">
                                <h4 class="about-two__progress-title">Hybrid Energy</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="88%">
                                        <div class="count-text">88%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__big-text-two">Austry</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-two__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About Us</span>
                        <h2 class="section-title__title">Reshaping energy for the future!</h2>
                    </div>
                    <p class="about-two__text-1">Save Money, Save The Environment</p>
                    <p class="about-two__text-2">Dislike men who are so beguiled demoraliz worlds ed by the
                        charms of pleasure of the moment. Lorem ipsum dolor sit At auctor urna nunc id cursus
                        metus aliquam. Eget arcu dictum varius duis at. Condimentum lacinia donec tempor.</p>
                    <div class="about-two__points-box">
                        <div class="about-two__points-img">
                            <img src="assets/images/resources/about-two-points-img.jpg" alt="">
                        </div>
                        <ul class="list-unstyled about-two__points">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Reliability & performance</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Just-in-time manufacturing</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Solar material financing</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="about-two__btn-and-call-box">
                        <a href="about.html" class="thm-btn about-two__btn">Discover more</a>
                        <div class="about-two__call-box">
                            <div class="about-two__call-box-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="about-two__call-box-content">
                                <p class="about-two__call-sub-title">Call Anytime</p>
                                <h4 class="about-two__number"><a href="922460088">+ 92 (246) 0088</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Two End-->

<!--Services Two Start-->
<section class="services-two">
    <div class="services-two__shape-1 float-bob-x">
        <img src="assets/images/shapes/services-two-shape-1.png" alt="">
    </div>
    <div class="services-two__shape-2 float-bob-y">
        <img src="assets/images/shapes/services-two-shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="services-two__top">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="services-two__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">What We’re Offering</span>
                            <h2 class="section-title__title">Inexhaustible and free
                                <br> source of energy
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="services-two__right">
                        <p class="services-two__text">At auctor urna nunc id cursus metus aliquam. Eget arcu
                            dictum varius duis at. Condimentum lacinia donec tempor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-1.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-power-plant"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <p class="services-two__sub-title">Austry</p>
                        <h3 class="services-two__title"><a href="services-2.html">For Agri Land</a></h3>
                        <p class="services-two__text">Lorem ipsum dolor sit amet
                            cons ectetur elit sed.</p>
                        <div class="services-two__learn-more">
                            <a href="services-2.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-2.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-factory-1"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <p class="services-two__sub-title">Austry</p>
                        <h3 class="services-two__title"><a href="services-2.html">For Industries</a></h3>
                        <p class="services-two__text">Lorem ipsum dolor sit amet
                            cons ectetur elit sed.</p>
                        <div class="services-two__learn-more">
                            <a href="services-2.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-3.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-solar-energy"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <p class="services-two__sub-title">Austry</p>
                        <h3 class="services-two__title"><a href="services-2.html">For Residence</a></h3>
                        <p class="services-two__text">Lorem ipsum dolor sit amet
                            cons ectetur elit sed.</p>
                        <div class="services-two__learn-more">
                            <a href="services-2.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->
            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/services-2-4.jpg" alt="">
                        </div>
                        <div class="services-two__icon">
                            <span class="icon-solar-energy-1"></span>
                        </div>
                    </div>
                    <div class="services-two__content">
                        <p class="services-two__sub-title">Austry</p>
                        <h3 class="services-two__title"><a href="services-2.html">For Large Areas</a></h3>
                        <p class="services-two__text">Lorem ipsum dolor sit amet
                            cons ectetur elit sed.</p>
                        <div class="services-two__learn-more">
                            <a href="services-2.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->
        </div>
    </div>
</section>
<!--Services Two End-->



<!--Process One Start-->
<section class="process-one">
    <div class="process-one__bg" style="background-image: url(assets/images/backgrounds/process-one-bg.jpg);">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Working Process</span>
            <h2 class="section-title__title">4 easy steps to get the <br> best results</h2>
        </div>
        <div class="row">
            <!--Process One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="process-one__single">
                    <div class="process-one__icon">
                        <span class="icon-chat"></span>
                        <div class="process-one__count"></div>
                    </div>
                    <h4 class="process-one__title">Consult Now</h4>
                    <p class="process-one__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                        incididunt ut labore et magna aliqua.</p>
                </div>
            </div>
            <!--Process One Single End-->
            <!--Process One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="process-one__single">
                    <div class="process-one__icon">
                        <span class="icon-solar-energy-2"></span>
                        <div class="process-one__count"></div>
                    </div>
                    <h4 class="process-one__title">Generate Power</h4>
                    <p class="process-one__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                        incididunt ut labore et magna aliqua.</p>
                </div>
            </div>
            <!--Process One Single End-->
            <!--Process One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="process-one__single">
                    <div class="process-one__icon">
                        <span class="icon-electric-generator"></span>
                        <div class="process-one__count"></div>
                    </div>
                    <h4 class="process-one__title">Solar the Power</h4>
                    <p class="process-one__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                        incididunt ut labore et magna aliqua.</p>
                </div>
            </div>
            <!--Process One Single End-->
            <!--Process One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="process-one__single">
                    <div class="process-one__icon">
                        <span class="icon-plug"></span>
                        <div class="process-one__count"></div>
                    </div>
                    <h4 class="process-one__title">Use and Save</h4>
                    <p class="process-one__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                        incididunt ut labore et magna aliqua.</p>
                </div>
            </div>
            <!--Process One Single End-->
        </div>
    </div>
</section>
<!--Process One End-->

<!--Project Two Start-->
<section class="project-two">
    <div class="project-two__shape-1 float-bob-x">
        <img src="assets/images/shapes/project-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Featured Project</span>
            <h2 class="section-title__title">Let's checkout our all <br> latest project</h2>
        </div>
        <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":1
                        },
                        "992":{
                            "items": 1
                        },
                        "1200":{
                            "items": 1
                        }
                    }

                }'>
            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/project-2-1.jpg" alt="">
                        <div class="project-two__arrow">
                            <a href="project-details.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">01. Project</p>
                        <h3 class="project-two__title"><a href="project-details.html">Leading Transition</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->
            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/project-2-2.jpg" alt="">
                        <div class="project-two__arrow">
                            <a href="project-details.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">02. Project</p>
                        <h3 class="project-two__title"><a href="project-details.html">Leading Transition</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->
            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/project-2-3.jpg" alt="">
                        <div class="project-two__arrow">
                            <a href="project-details.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">03. Project</p>
                        <h3 class="project-two__title"><a href="project-details.html">Leading Transition</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->
            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/project-2-4.jpg" alt="">
                        <div class="project-two__arrow">
                            <a href="project-details.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">04. Project</p>
                        <h3 class="project-two__title"><a href="project-details.html">Leading Transition</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->
            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/project-2-5.jpg" alt="">
                        <div class="project-two__arrow">
                            <a href="project-details.html"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">
                        <p class="project-two__sub-title">05. Project</p>
                        <h3 class="project-two__title"><a href="project-details.html">Leading Transition</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->
        </div>
    </div>
</section>
<!--Project Two End-->

<!--Brand One Start-->
<section class="brand-two">
    <div class="container">
        <h4 class="brand-two__title">The Business Partners</h4>
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-5.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-1.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-2.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-3.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-4.png" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="assets/images/brand/brand-2-5.png" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Counter Two Start-->
<section class="counter-two">
    <div class="counter-two__bg" style="background-image: url(assets/images/backgrounds/counter-two-bg.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="counter-two__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Renewable Energy</span>
                        <h2 class="section-title__title">Commercial, industrial
                            residential and solar
                            systems!</h2>
                    </div>
                    <p class="counter-two__text-1">Austry will help you get things complete reality.</p>
                    <div class="counter-two__btn-box">
                        <a href="contact.html" class="counter-two__btn thm-btn">contact us</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="counter-two__right">
                    <ul class="list-unstyled counter-two__counter">
                        <li>
                            <div class="counter-two__single">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="801" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p class="counter-two__text-2">Happy Clients</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-two__single">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="341" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p class="counter-two__text-2">Completed Projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-two__single">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="28" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p class="counter-two__text-2">Years Experiance</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-two__single">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="160" data-speed="1500">00</h3>
                                    <span class="counter-two__plus">+</span>
                                </div>
                                <p class="counter-two__text-2">Qualified Engineers</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter Two End-->



@endsection