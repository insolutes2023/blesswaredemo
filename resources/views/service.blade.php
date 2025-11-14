<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/services.jpeg)">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>Services</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{config('app.url')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services Page Five Start-->
<section class="services-page-five">
    <div class="container">
        <div class="row">
            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/img_8.jpeg" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">Website and eCommerce development</a></h3>
                            <p class="services-five__text">Aliq is notm hendr erit a augue insu image pellen
                                simply
                                free text.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->
            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/img_9.jpeg" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">IT consultancy and infrastructure setup</a></h3>
                            <p class="services-five__text">Aliq is notm hendr erit a augue insu image pellen
                                simply
                                free text.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->
            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/img_10.jpeg" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">System integration and networking solutions</a></h3>
                            <p class="services-five__text">Aliq is notm hendr erit a augue insu image pellen
                                simply
                                free text.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->
            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/img_11.jpeg" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">Custom software development</a></h3>
                            <p class="services-five__text">Aliq is notm hendr erit a augue insu image pellen
                                simply
                                free text.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->
            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/img_12.jpeg" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">Digital transformation and technology innovation services
                                </a></h3>
                            <p class="services-five__text">Aliq is notm hendr erit a augue insu image pellen
                                simply
                                free text.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->

        </div>
    </div>
</section>
<!--Services Page Five End-->


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