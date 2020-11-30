@extends('client.layout.app')

@section('content')
<style>


    .card__one {
        transition: transform .5s;
    }

    .card__one::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 2s cubic-bezier(.165, .84, .44, 1);
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .15);
        content: '';
        opacity: 0;
        z-index: -1;
    }

    .card__one:hover,
    .card__one:focus {
        transform: scale3d(1.036, 1.036, 1);
        -webkit-box-shadow: -1px -1px 16px -4px rgba(0, 0, 0, 0.53);
        -moz-box-shadow: -1px -1px 16px -4px rgba(0, 0, 0, 0.53);
        box-shadow: -1px -1px 16px -4px rgba(0, 0, 0, 0.53);


    }

</style>

<div class="crumina-module crumina-module-slider container-full-width">
    <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide bg-1 main-slider-bg-light">

                <div class="container">
                    <div class="row table-cell">
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
                                    <span class="c-primary">Utouch</span>
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

                                <h2 class="slider-content-title" data-swiper-parallax="-100">Rise Up With the Most Interesting App</h2>

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
<!-- Slider with vertical tabs -->

<section class="crumina-module crumina-module-slider slider-tabs-vertical-line p-5">
            <div class="bg-light-color bg-1 " style="padding: 20px;" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">

                            <div class="m-auto">
                                <img src="{{asset('frontAsset/img/bg-gedung.jpg')}}" alt="iphone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading custom-color c-dark">
                                <h6 class="heading-sup-title"></h6>
                                <h2 class="heading-title">Lorem  Ipsum</h2>
                                <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- ... Slider with vertical tabs -->
<hr style="width: 70%; height:7px; background-color: #273f5b; border-radius:4px;">
<!-- Info Boxes -->

<section class="medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('frontAsset/img/icon-1.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title">Lorem ipsum</a>
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
                        <img class="utouch-icon" src="{{asset('frontAsset/img/icon-9.png')}}" alt="smartphone">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds9.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title">Lorem Ipsum</a>
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
                <div class="crumina-module crumina-info-box info-box--standard-hover" >

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('frontAsset/img/icon-3.png')}}" alt="smartphone">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds10.png')}}" alt="cloud">
                    </div>

                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title">Lorem ipsum</a>
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

<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-2 col-xs-12">

    <div class="slider-content align-center">

        <h1 class="slider-content-title with-decoration" style="margin-top: 50px;">
            Lorem Ipsum

            <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                <use xlink:href="#utouch-icon-arrow-left"></use>
            </svg>

            <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                <use xlink:href="#utouch-icon-arrow-left"></use>
            </svg>
        </h1>
        <h6 class="slider-content-text">Lorem ipsum dolor sit
            amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </h6>

    </div>
</div>
<br>
    <div class=" bg-light-color bg-17 " style="padding: 20px;">

        <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style=" padding-top:20px;">

                    <div class="info-box-image card__one">
                        <img style="width: 55%; height:200px;" class="member-image"  src="{{asset('frontAsset/img/icon-3.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style="padding-top:20px;">

                    <div class="info-box-image">
                        <img style="width: 55%; height:200px;"  src="{{asset('frontAsset/img/web-dev2.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style="  padding-top:20px;">

                    <div class="info-box-image">
                        <img style="width: 55%; height:200px;"  src="{{asset('frontAsset/img/web-dev3.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style=" padding-top:20px;">

                    <div class="info-box-image">
                        <img style="width: 55%; height:200px;"  src="{{asset('frontAsset/img/web-dev4.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style=" padding-top:20px;">

                    <div class="info-box-image">
                        <img style="width: 55%; height:200px;"  src="{{asset('frontAsset/img/web-dev5.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style=" padding-top:20px;">

                    <div class="info-box-image">
                        <img style="width: 55%; height:200px;"  src="{{asset('frontAsset/img/author1.jpg')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ... Slider with vertical tabs -->
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-2 col-xs-12">

    <div class="slider-content align-center">

        <h1 class="slider-content-title with-decoration" style="margin-top: 50px;">
            Our Team

            <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                <use xlink:href="#utouch-icon-arrow-left"></use>
            </svg>

            <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                <use xlink:href="#utouch-icon-arrow-left"></use>
            </svg>
        </h1>
        <h6 class="slider-content-text">Lorem ipsum dolor sit
            amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
            laoreet dolore magna aliquam erat volutpat.
        </h6>

    </div>
</div>
<br>
    <div class=" bg-light-color bg-17 " style="padding: 20px;">

        <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style=" padding-top:20px;">

                    <div class="info-box-image card__one">
                        <img style="width: 55%; height:200px;" class="member-image"  src="{{asset('frontAsset/img/icon-3.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                        <div class="member-text">
                            <h5 class="member-name">John Doe</h5>
                            <div class="member-tag"><span class="member-role">Direktur</span></div>

                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style="padding-top:20px;">

                    <div class="info-box-image card__one">
                        <img style="width: 55%; height:200px;" class="member-image"  src="{{asset('frontAsset/img/icon-3.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                        <div class="member-text">
                            <h5 class="member-name">Prenky Hermawan</h5>
                            <div class="member-tag"><span class="member-role">HRD</span></div>

                          </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover" style="  padding-top:20px;">

                    <div class="info-box-image card__one">
                        <img style="width: 55%; height:200px;" class="member-image"  src="{{asset('frontAsset/img/icon-3.png')}}" alt="icon">
                        <img class="cloud" src="{{asset('frontAsset/img/clouds8.png')}}" alt="cloud">
                        <div class="member-text">
                            <h5 class="member-name">John Blesa</h5>
                            <div class="member-tag"><span class="member-role">Lead Developer</span></div>

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection
