<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/about.jpeg)">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>About us</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{config('app.url')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->



<!--About Five Start-->
<section class="about-five" style="padding-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-five__left">
                    <div class="about-five__img-box wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="about-five__img">
                            <img src="assets/images/resources/img_6.jpeg" alt="">
                        </div>
                        <div class="about-five__img-2">
                            <img src="assets/images/resources/img_7.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-five__right">
                    <div class="section-title text-left">

                        <h2 class="section-title__title">Empowering people and businesses through smart technology</h2>
                    </div>
                    <p class="about-five__text">Blessware Technologies Qatar is a forward-thinking technology company dedicated to
                        providing quality IT and telecommunications products, innovative digital solutions, and
                        unmatched service experiences.
                        Founded with a passion for innovation and customer excellence, we serve both retail and
                        corporate clients with the latest tech products, ensuring they stay ahead in today’s
                        fast-evolving digital landscape.
                        Our team brings together technology experts, engineers, and innovators who share one
                        goal—helping you achieve success through technology.</p>
                    <ul class="list-unstyled about-five__points">
                        <li>
                            <div class="icon"><span class="fa fa-check"></span></div>
                            <div class="text">
                                <p>Retail sale of computers and IT accessories</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><span class="fa fa-check"></span></div>
                            <div class="text">
                                <p>Software solutions and licensing</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><span class="fa fa-check"></span></div>
                            <div class="text">
                                <p>Telecommunications devices and networking equipment</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon"><span class="fa fa-check"></span></div>
                            <div class="text">
                                <p>Website and digital innovation services</p>
                            </div>
                        </li>
                    </ul>

                    <div class="about-five__btn-box" style="padding-top: 50px;">
                        <a href="{{route('contact-us')}}" class="thm-btn about-five__btn">Connect us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Five End-->

<!--FAQ One Start-->
<section class="faq-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 card">
                <div class="faq-one__left" style="padding-top: 10px;
    border-bottom-width: 10px;
    padding-bottom: 10px;">
                    <div class="section-title text-left">

                        <h2 class="section-title__title" style="font-size: 30px;">Our Mission</h2>
                    </div>
                    <div class="faq-one__icon-box">
                        <div class="faq-one__icon">
                            <span class="icon-right-arrow"></span>
                        </div>
                        <div class="faq-one__icon-text">
                            <p> To deliver innovative technology solutions that enhance productivity,
                                connectivity, and customer experience through quality products and trusted services.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 card">
                <div class="faq-one__left">
                    <div class="section-title text-left" style="padding-top: 10px;
    border-bottom-width: 10px;
    padding-bottom: 10px;">

                        <h2 class="section-title__title" style="font-size: 30px;"> Our Vision</h2>
                    </div>
                    <div class="faq-one__icon-box">
                        <div class="faq-one__icon">
                            <span class="icon-right-arrow"></span>
                        </div>
                        <div class="faq-one__icon-text">
                            <p> To become Qatar’s most trusted name in technology retail and innovation,
                                empowering individuals and businesses to grow confidently in the digital era.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--FAQ One End-->







@endsection