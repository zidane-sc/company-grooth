@extends('client.layout.app')

@section('content')

<div class="crumina-module crumina-module-slider container-full-width">
    <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide bg-1 main-slider-bg-light">

                <div class="container">
                    <div class="row table-cell">

                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

                            <div class="slider-content align-center">

                                <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                    The power of Technology

                                    <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                        <use xlink:href="#utouch-icon-arrow-left"></use>
                                    </svg>

                                    <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                        <use xlink:href="#utouch-icon-arrow-left"></use>
                                    </svg>

                                </h1>
                                <h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat.
                                </h6>

                                <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                    <a href="03_products.html" class="btn btn--yellow btn--with-shadow">
                                        Learn More
                                    </a>

                                    <a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
                                        Get Started Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
                                <img src="{{asset('frontAsset/img/slides1.png')}}" alt="slider">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-2 main-slider-bg-light">

                <div class="container table">
                    <div class="row table-cell">

                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content align-both">
                                <h2 class="slider-content-title" data-swiper-parallax="-100">
                                    <span class="c-primary">Lorem</span>
                                    is quality product that will make your life better
                                </h2>
                                <h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna aliquam erat volutpat.
                                </h6>

                                <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                    <a href="#" class="btn btn-market btn--with-shadow">
                                        <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                            <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                        </svg>
                                        <div class="text">
                                            <span class="sup-title">Download on the</span>
                                            <span class="title">App Store</span>
                                        </div>
                                    </a>

                                    <a href="#" class="btn btn-market btn--with-shadow">
                                        <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/google-play.svg')}}" alt="google">
                                        <div class="text">
                                            <span class="sup-title">Download on the</span>
                                            <span class="title">Google Play</span>
                                        </div>
                                    </a>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

                <div class="container table full-height">
                    <div class="row table-cell">
                        <div class="col-lg-6 col-sm-12 table-cell">

                            <div class="slider-content align-both">

                                <h2 class="slider-content-title" data-swiper-parallax="-100">Lorem</h2>

                                <h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
                                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                    dolore magna aliquam erat volutpat.
                                </h6>

                                <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                    <a href="02_company.html" class="btn btn--lime btn--with-shadow">
                                        Get Started Now
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-12 table-cell">
                            <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                <img src="{{asset('frontAsset/img/slides2.png')}}" alt="slider">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--Prev next buttons-->

        <div class="btn-prev with-bg">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                <use xlink:href="#utouch-icon-arrow-left-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-left1">
                <use xlink:href="#utouch-icon-arrow-left1"></use>
            </svg>
        </div>

        <div class="btn-next with-bg">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                <use xlink:href="#utouch-icon-arrow-right-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-right1">
                <use xlink:href="#utouch-icon-arrow-right1"></use>
            </svg>
        </div>

    </div>
</div>

<!-- ... end Main Slider -->

<!-- Info Boxes -->

<section class="medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/smartphone.svg')}}" alt="smartphone">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">


                    </div>

                    <a href="#" class="btn-next">
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                            <use xlink:href="#utouch-icon-arrow-right-1"></use>
                        </svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1">
                            <use xlink:href="#utouch-icon-arrow-right1"></use>
                        </svg>
                    </a>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/music%20(1).svg')}}" alt="smartphone">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds9.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title">Multimedia Archives</a>
                        <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </p>
                    </div>

                    <a href="#" class="btn-next">
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                            <use xlink:href="#utouch-icon-arrow-right-1"></use>
                        </svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1">
                            <use xlink:href="#utouch-icon-arrow-right1"></use>
                        </svg>
                    </a>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/settings%20(4).svg')}}" alt="smartphone">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds10.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title">Quick Settings</a>
                        <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam.
                        </p>
                    </div>

                    <a href="#" class="btn-next">
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                            <use xlink:href="#utouch-icon-arrow-right-1"></use>
                        </svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1">
                            <use xlink:href="#utouch-icon-arrow-right1"></use>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Info Boxes -->


<!-- Slider with vertical tabs -->

<section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

    <div class="swiper-container" data-show-items="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('frontAsset/img/iphone.png')}}" alt="iphone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading custom-color c-white">
                                <h6 class="heading-sup-title">User Interface</h6>
                                <h2 class="heading-title">Discover new horisons</h2>
                                <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per.
                                </div>
                            </div>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                    <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                </svg>
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">App Store</span>
                                </div>
                            </a>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/google-play.svg')}}" alt="google">
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-orange-light bg-6" data-mh="slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('frontAsset/img/iphone2.png')}}" alt="iphone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading custom-color c-white">
                                <h6 class="heading-sup-title">User Interface</h6>
                                <h2 class="heading-title">Discover new horisons</h2>
                                <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per.
                                </div>
                            </div>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                    <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                </svg>
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">App Store</span>
                                </div>
                            </a>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/google-play.svg')}}" alt="google">
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-red bg-7" data-mh="slide">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('frontAsset/img/iphone3.png')}}" alt="iphone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading custom-color c-white">
                                <h6 class="heading-sup-title">User Interface</h6>
                                <h2 class="heading-title">Discover new horisons</h2>
                                <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per.
                                </div>
                            </div>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                    <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                </svg>
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">App Store</span>
                                </div>
                            </a>

                            <a href="#" class="btn btn-market btn--with-shadow">
                                <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/google-play.svg')}}" alt="google">
                                <div class="text">
                                    <span class="sup-title">Download on the</span>
                                    <span class="title">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-slides slider-slides--vertical-line">
            <a href="#" class="slides-item">
                <span class="round primary"></span>01.
            </a>

            <a href="#" class="slides-item">
                <span class="round orange"></span>02.
            </a>

            <a href="#" class="slides-item">
                <span class="round red"></span>03.
            </a>

        </div>

    </div>

</section>

<!-- ... Slider with vertical tabs -->


<!-- Video -->

<section class="bg-8 background-contain pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title">Watch the video</h6>
                    <h2 class="heading-title">How the <span class="c-primary">Utouch</span> works</h2>
                    <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
                        consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                        anteposuerit litterarum formas humanitatis per.
                    </p>
                </div>
                <a href="02_company.html" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
                    <svg class="utouch-icon utouch-icon-arrow-right1">
                        <use xlink:href="#utouch-icon-arrow-right1"></use>
                    </svg>
                    <div class="text">
                        <span class="title">Get Started Now</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-our-video">
                    <div class="video-thumb">
                        <img src="{{asset('frontAsset/img/video-thumb.png')}}" alt="video">
                        <a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
                            <img src="{{asset('frontAsset/img/play.png')}}" alt="play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Video -->


<!-- Counters -->

<section class="bg-secondary-color background-contain bg-10">

    <div class="container">
        <div class="row">
            <div class="counters">
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers counter c-yellow">
                            <span data-speed="2000" data-refresh-interval="3" data-to="6237" data-from="2">6237</span>
                        </div>
                        <h5 class="counter-title">Line of codes</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers counter c-yellow">
                            <span data-speed="2000" data-refresh-interval="3" data-to="4000" data-from="2">4000</span>
                        </div>
                        <h5 class="counter-title">Solutions</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers counter c-yellow">
                            <span data-speed="2000" data-refresh-interval="3" data-to="3" data-from="2">3</span>
                            <div class="units">M+</div>
                        </div>
                        <h5 class="counter-title">Active users</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers counter c-yellow">
                            <span data-speed="2000" data-refresh-interval="3" data-to="8" data-from="2">8</span>
                            <div class="units">M+</div>
                        </div>
                        <h5 class="counter-title">Download</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <h5 class="c-white">Utouch is an awesome app</h5>
                    <p class="c-semitransparent-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- ... end  Counters -->



<!-- Info Boxes -->

<section class="bg-9 background-contain medium-padding120">
    <div class="container">
        <div class="row">
            <div class="display-flex info-boxes">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
                        <div class="info-box-image">
                            <img src="{{asset('frontAsset/svg-icons/chat.svg')}}" alt="chat" class="utouch-icon">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Private Chat Integration</h5>
                            <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt.
                            </p>
                        </div>
                    </div>

                    <div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">
                        <div class="info-box-image">
                            <img src="{{asset('frontAsset/svg-icons/pictures.svg')}}" alt="chat" class="utouch-icon">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Perfect Grafic View</h5>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 align-center">
                    <img class="particular-image" src="{{asset('frontAsset/img/image.png')}}" alt="image">
                    <a href="03_products.html" class="btn btn--red btn--with-shadow">
                        Learn More
                    </a>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
                        <div class="info-box-image">
                            <img src="{{asset('frontAsset/svg-icons/clock.svg')}}" alt="chat" class="utouch-icon">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Lifetime Updates</h5>
                            <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt.
                            </p>
                        </div>
                    </div>

                    <div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">
                        <div class="info-box-image">
                            <img src="{{asset('frontAsset/svg-icons/calendar.svg')}}" alt="chat" class="utouch-icon">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Calendar Sinhronize</h5>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy euismod.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... Info Boxes -->

<!-- Info Boxes -->

<section class="crumina-module crumina-module-slider bg-blue-lighteen background-contain bg-11 medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title">Screenshots</h6>
                    <h2 class="heading-title">Beautiful interface</h2>
                    <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
                        consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                        anteposuerit litterarum formas humanitatis per est usus legentis in iis qui facit eorum
                        claritatem.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="crumina-module crumina-info-box info-box--standard">
                            <div class="info-box-image display-flex">
                                <svg class="utouch-icon utouch-icon-checked">
                                    <use xlink:href="#utouch-icon-checked"></use>
                                </svg>
                                <h6 class="info-box-title">Quick Settings</h6>
                            </div>
                            <p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui
                                nunc nobis videntur parum clari.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="crumina-module crumina-info-box info-box--standard">
                            <div class="info-box-image display-flex">
                                <svg class="utouch-icon utouch-icon-checked">
                                    <use xlink:href="#utouch-icon-checked"></use>
                                </svg>
                                <h6 class="info-box-title">Looks Perfect</h6>
                            </div>
                            <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
                <div class="swiper-container pagination-bottom slider-tripple-right-image" data-show-items="1" data-effect="coverflow" data-centered-slider="false" data-stretch="170" data-depth="195">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('frontAsset/img/img-slide1.png')}}" alt="slide">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontAsset/img/img-slide1.png')}}" alt="slide">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontAsset/img/img-slide1.png')}}" alt="slide">
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Info Boxes -->


<!-- FAQS Slider -->

<section class="crumina-module crumina-module-slider pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb30">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title">FAQ</h6>
                    <h2 class="heading-title">Six important questions on application</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container navigation-bottom" data-effect="fade">
                    <div class="slider-slides">
                        <a href="#" class="slides-item">
                            1
                        </a>

                        <a href="#" class="slides-item">
                            2
                        </a>

                        <a href="#" class="slides-item">
                            3
                        </a>

                        <a href="#" class="slides-item">
                            4
                        </a>

                        <a href="#" class="slides-item">
                            5
                        </a>

                        <a href="#" class="slides-item">
                            6
                        </a>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/dial.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">soluta eleifend congue?</h5>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                                            notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                            humanitatis.
                                        </p>
                                        <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                        <ul class="list list--standard">
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Gectores legere me lius quod</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Mirum est notare quam</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Zril delenit augue duis</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/fingerprint.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">Mirum quam gothica?</h5>
                                <p>Ilaritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                    est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                                    formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list list--standard">
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Gectores legere me lius quod</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Mirum est notare quam</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Zril delenit augue duis</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list list--standard">
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Mirum est notare quam</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Zril delenit augue duis</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Gectores legere me lius quod</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/devices.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">
                                <h5 class="slider-faqs-title">Investigationes quod lectores?</h5>
                                <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Claritas est
                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
                                    quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                    humanitatis.
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="crumina-module crumina-info-box info-box--standard">
                                            <div class="info-box-image display-flex">
                                                <svg class="utouch-icon utouch-icon-checked">
                                                    <use xlink:href="#utouch-icon-checked"></use>
                                                </svg>
                                                <h6 class="info-box-title">Quick Settings</h6>
                                            </div>
                                            <p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui
                                                nunc nobis videntur parum clari.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="crumina-module crumina-info-box info-box--standard">
                                            <div class="info-box-image display-flex">
                                                <svg class="utouch-icon utouch-icon-checked">
                                                    <use xlink:href="#utouch-icon-checked"></use>
                                                </svg>
                                                <h6 class="info-box-title">Looks Perfect</h6>
                                            </div>
                                            <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/payment-method.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">Duis autem vel eum iriure?</h5>
                                <p class="weight-bold">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                                    formas humanitatis. Gest etiam processus dynamicus, qui sequitur.
                                </p>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                    est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                                    formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </p>
                                <a href="03_products.html" class="btn btn-border btn--with-shadow c-secondary">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/chat1.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">wisi minim veniam, quis nostrud?</h5>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit litterarum formas humanitatis.
                                        </p>
                                        <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                        <div class="play-with-title">
                                            <a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
                                                <img src="{{asset('frontAsset/img/play.png')}}" alt="play">
                                            </a>
                                            <h6 class="play-title">Watch the video of instruction</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg-icons/tap.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">Eodem typi nunc videntur?</h5>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                            lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit litterarum formas humanitatis.
                                        </p>
                                        <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                                        <ul class="list list--standard">
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Mirum est notare quam</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Zril delenit augue duis</a>
                                            </li>
                                            <li>
                                                <svg class="utouch-icon utouch-icon-correct-symbol-1">
                                                    <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                                                </svg>
                                                <a href="#">Gectores legere me lius quod</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!--Prev next buttons-->

                    <div class="btn-slider-wrap navigation-left-bottom">

                        <div class="btn-prev">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                                <use xlink:href="#utouch-icon-arrow-left-1"></use>
                            </svg>
                            <svg class="utouch-icon utouch-icon-arrow-left1">
                                <use xlink:href="#utouch-icon-arrow-left1"></use>
                            </svg>
                        </div>

                        <div class="btn-next">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                <use xlink:href="#utouch-icon-arrow-right-1"></use>
                            </svg>
                            <svg class="utouch-icon utouch-icon-arrow-right1">
                                <use xlink:href="#utouch-icon-arrow-right1"></use>
                            </svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end FAQS Slider -->






<!-- ... end Testimonials -->
@endsection
