<!-- ======= Banner ======= -->
@extends('layouts.app')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/contact.jpeg)">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>Contact</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Info Start-->
<section class="contact-info">
    <div class="container">
        <div class="row">

            <!--Contact Info Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="contact-info__single">
                    <h4 class="contact-info__title">Business Hours</h4>
                    <p class="contact-info__text" style="font-size: 14px;">
                        Sunday – Thursday: 9:00 AM – 6:00 PM<br>
                        Friday: Closed<br>
                        Saturday: 10:00 AM – 4:00 PM
                    </p>

                    <div class="contact-info__icon">
                        <span class="icon-contact"></span>
                    </div>
                </div>
            </div>
            <!--Contact Info Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="contact-info__single">
                    <h4 class="contact-info__title">Contact</h4>
                    <a
                        href="mailto: info@blesswareqatar.com"> info@blesswareqatar.com</a><br>
                    <a
                        href="mailto:blesswaretech@gmail.com"> blesswaretech@gmail.com</a> <br> <a
                        href="tel:+97477525914">+974 77525914</a></p>

                    <div class="contact-info__icon">
                        <span class="icon-contact"></span>
                    </div>
                </div>
            </div>
            <!--Contact Info Single End-->
            <!--Contact Info Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="contact-info__single">
                    <h4 class="contact-info__title">Location</h4>
                    <p class="contact-info__text">Near ICBF,DOHA,QATAR <br> <br> <br> </p>

                    <div class="contact-info__icon">
                        <span class="icon-location"></span>
                    </div>
                </div>
            </div>
            <!--Contact Info Single End-->
        </div>
    </div>
</section>
<!--Contact Info End-->

<!--Contact Page Form Start-->
<section class="contact-page-form">

    <div class="container">
        <div class="section-title text-center">

            <h2 class="section-title__title">Feel free to write our <br> team anytime</h2>
        </div>
        <form action="assets/inc/sendemail.php" class="contact-page-form__form-box contact-form-validated"
            novalidate="novalidate">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-page-form__input-box">
                        <input type="text" placeholder="Your name" name="name">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-page-form__input-box">
                        <input type="email" placeholder="Email address" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page-form__input-box text-message-box">
                        <textarea name="message" placeholder="Write message"></textarea>
                    </div>
                    <div class="contact-page-form__btn-box">
                        <button type="submit" class="thm-btn contact-page-form__btn">Send a message</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="result"></div>
    </div>
</section>
<!--Contact Page Form End-->

<!--Google Map Start-->
<section class="contact-page-google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map__two" allowfullscreen></iframe>

</section>
<!--Google Map End-->


@endsection