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
                            <p class="services-five__text">We build high-performance, responsive websites and robust eCommerce platforms tailored to your business needs. From seamless user interfaces to secure payment integration, we ensure a smooth shopping experience that drives conversions. Elevate your online presence with scalable solutions designed to grow alongside your brand in the digital marketplace.</p>

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
                            <p class="services-five__text">Our expert consultancy optimizes your technology roadmap to align with business goals. We provide end-to-end infrastructure setup, including hardware procurement, server management, and cloud readiness. By streamlining your IT environment, we enhance operational efficiency, reduce downtime, and ensure your business is supported by a resilient, future-proof technological foundation.</p>

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
                            <p class="services-five__text">We bridge the gap between disparate platforms through seamless system integration and secure networking. Our services ensure data flows efficiently across your organization while maintaining top-tier security. From VPN setups to complex API integrations, we create a unified, high-speed environment that empowers your team to collaborate and perform better.</p>

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
                            <p class="services-five__text">Get software that works exactly the way you do. We specialize in developing bespoke applications, from enterprise-level tools to custom apps. Our development process focuses on scalability, security, and user-centric design, ensuring you receive a unique digital product that solves your specific challenges and boosts productivity.</p>

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
                            <p class="services-five__text">Stay ahead of the competition by embracing the latest in digital innovation. We help businesses modernize legacy systems and integrate emerging technologies like AI and automation. Our digital transformation services redefine how you deliver value, optimizing your internal workflows and creating a more engaging, tech-driven experience for your customers.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!--Services Five Single End-->

            <!--Services Five Single Start-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-five__single">
                    <div class="services-five__img">
                        <img src="assets/images/services/computer_training.webp" alt="">
                    </div>
                    <div class="services-five__content-box">

                        <div class="services-five__content">
                            <h3 class="services-five__title"><a href="#">Computer Training
                                </a></h3>
                            <p class="services-five__text">Empower your workforce with our comprehensive computer training programs. We offer hands-on coaching in essential software, cybersecurity best practices, and advanced digital tools. Whether for corporate teams or individuals, our curriculum is designed to bridge the skill gap, ensuring everyone stays proficient in today’s rapidly evolving technological landscape.</p>

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
                <img src="assets/images/shapes/computer_training.webp" alt="">
            </div>
            <h3 class="cta-three__title">Shop online through our website for the latest tech products, <br> or contact our support team
                for tailored business solutions</h3>
            <a href="#" class="thm-btn cta-three__btn">Connect us</a>
        </div>
    </div>
</section>


@endsection