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

                                <p class="main-slider-two__sub-title">Your Trusted Partner in Technology Solutions.</p>
                                <h2 class="main-slider-two__title">Blessware <br>Technologies</h2>
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
                    style="background-image: url(assets/images/backgrounds/banner_1.webp);"></div>
                <!-- /.image-layer -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-two__content">

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

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-two__left">
                    <div class="about-two__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="about-two__img">
                            <img src="assets/images/resources/img_1.jpeg" alt="">
                        </div>




                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-two__right">
                    <div class="section-title text-left">

                        <h2 class="section-title__title"> Innovate with Confidence!</h2>
                    </div>
                    <p class="about-two__text-1"> “Empowering people and businesses through smart technology."</p>
                    <p class="about-two__text-2" style="text-align: justify;">Welcome to Blessware Technologies Qatar, your trusted partner in innovative
                        technology solutions. We specialize in retail sales of computers, peripherals, software, and
                        telecommunications equipment—offering the latest products and cutting-edge services to
                        empower your digital world.</p>
                    <div class="about-two__points-box">

                        <ul class="list-unstyled about-two__points">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Retail sale of computers and IT accessories</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Software solutions and licensing</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Telecommunications devices and networking equipment</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p> Website and digital innovation services</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="about-two__btn-and-call-box">
                        <a href="{{route('about-us')}}" class="thm-btn about-two__btn">Discover more</a>

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

                            <h2 class="section-title__title">IT & Digital Services
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="services-two__right">
                        <p class="services-two__text">We provide end-to-end digital solutions designed to help businesses grow and operate efficiently. From website and eCommerce development to IT consultancy, system integration, and networking solutions, we cover all your technology needs.</p>
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
                            <img src="assets/images/services/1_img.webp" alt="">
                        </div>

                    </div>
                    <div class="services-two__content">

                        <h3 class="services-two__title" style="text-align: center;text-transform:uppercase"> <a href="#">Website, Software and eCommerce development <br><br></a></h3>

                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->

            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/2_img.webp" alt="">
                        </div>

                    </div>
                    <div class="services-two__content">

                        <h3 class="services-two__title" style="text-align: center;text-transform:uppercase"><a href="#">IT consultancy <br>and infrastructure setup <br><br></a></h3>

                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->


            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/websitedevelopment.webp" alt="">
                        </div>

                    </div>
                    <div class="services-two__content">

                        <h3 class="services-two__title" style="text-align: center;text-transform:uppercase"><a href="#">System integration <br>and networking solutions <br><br></a></h3>

                    </div>
                </div>
            </div>
            <!--Services Two Single Start-->


            <!--Services Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__img-box">
                        <div class="services-two__img">
                            <img src="assets/images/services/websitedevelopment.webp" alt="">
                        </div>

                    </div>
                    <div class="services-two__content">

                        <h3 class="services-two__title" style="text-align: center;text-transform:uppercase"><a href="#"> Digital transformation and technology innovation services
                            </a></h3>

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
        <!--<div class="section-title text-center">

            <h2 class="section-title__title">4 easy steps to get the <br> best results</h2>
        </div>-->
        <div class="row">
            <!--Process One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="process-one__single">
                    <div class="process-one__icon">
                        <span class="icon-chat"></span>
                        <div class="process-one__count"></div>
                    </div>
                    <h4 class="process-one__title">Trusted IT Partner</h4>
                    <p class="process-one__text">Over 15 years of dedicated experience providing quality IT products and unmatched service.</p>
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
                    <h4 class="process-one__title">Innovative IT Consulting </h4>
                    <p class="process-one__text">Offering expert IT consultancy and infrastructure setup services for your business.</p>
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
                    <h4 class="process-one__title">Complete Digital World </h4>
                    <p class="process-one__text">Offering a seamless range from retail products to complex digital services.</p>
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
                    <h4 class="process-one__title">Expert Team of Innovators </h4>
                    <p class="process-one__text">Our team comprises technology experts, engineers, and innovators focused on your success.</p>
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

            <h2 class="section-title__title"> Retail Products</h2>
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
                        <img src="assets/images/project/img_2.jpeg" alt="">
                        <div class="project-two__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">

                        <h3 class="project-two__title" style="text-transform:uppercase"><a href="#"> Computers, laptops, and tablets</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->



            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/img_3.jpeg" alt="">
                        <div class="project-two__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">

                        <h3 class="project-two__title" style="text-transform:uppercase"><a href="#"> Computer peripheral units printers, scanners, storage, etc.</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->

            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/img_4.jpeg" alt="">
                        <div class="project-two__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">

                        <h3 class="project-two__title" style="text-transform:uppercase"><a href="#"> Networking and telecommunications equipment</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->


            <!--Project Two Single Start-->
            <div class="item">
                <div class="project-two__single">
                    <div class="project-two__img">
                        <img src="assets/images/project/img_5.jpeg" alt="">
                        <div class="project-two__arrow">
                            <a href="#"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                    <div class="project-two__content">

                        <h3 class="project-two__title" style="text-transform:uppercase"><a href="#"> Software applications and licenses</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Project Two Single End-->



        </div>
    </div>
</section>
<!--Project Two End-->

<section class="cta-three">
    <div class="container">
        <div class="cta-three__inner">
            <div class="cta-three__shape-1 float-bob-y">
                <img src="assets/images/shapes/cta-three-shape-1.png" alt="">
            </div>
            <h3 class="cta-three__title">Shop online through our website for the latest tech products, <br> or contact our support team
                for tailored business solutions</h3>
            <a href="#" class="thm-btn cta-three__btn">Connect us</a>
        </div>
    </div>
</section>





@endsection