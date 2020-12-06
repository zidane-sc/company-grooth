@extends('client.layout.app')

 @section('content')
<style>


    .card__one {
        transition: transform .5s;
        text-align: center;
        margin-top:40px;
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
    .img-banner{
        height: 680px;
        background-size: cover;

    }

    .member-content {
    margin-bottom: 30px;
}

.member-content .member-text {
    padding: 20px;
}

.member-content .member-text .member-name {
    margin-bottom: 7px;
}

.member-content .member-text .member-tag {

    font-weight: 500;
}
.slider-thumb{
    padding: 0 !important;
}

</style>

<div class="crumina-module crumina-module-slider container-full-width">
    <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($data['banners'] as $banner)
            <div class="swiper-slide  main-slider-bg-light">
                <div class="slider-thumb img-banner">
                    <img width="1400px;" src="{{ asset('storage/'.$banner->image) }}" alt="slider">
                </div>
            </div>
            @endforeach

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

	<!-- Our Video -->

    <section class="bg-blue-lighteen medium-padding120">
        <div class="container bg-11 background-cover">
            <div class="row">
                {{-- <div class="row"> --}}
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style="margin-top: -50px;">

                        <div class=" align-center">

                            <h1 class="slider-content-title with-decoration" style="margin-top: 50px; color:black; font-size:40px;"  >
                                VISI <span class="c-primary">&</span> MISI

                                <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                    <use xlink:href="#utouch-icon-arrow-left"></use>
                                </svg>

                                <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                    <use xlink:href="#utouch-icon-arrow-left"></use>
                                </svg>

                            </h1>
                            <span>Informasi tentang kami</span>
                        </div>
                    </div>
                {{-- </div> --}}
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                    <h6 class="heading-sup-title c-black" style="font-size: 28px; text-align:center;">Visi</h6>
                    <div class="heading-text c-black"><p style="font-size: 18px;">{{$data['visi_misi']->visi}}</p>
                    </div>
                    <div class="video-thumb">
                        <img  style="margin-top: 0px; width:500px; height:300px;" src="{{asset('storage/'.$data['visi_misi']->image_misi)}}" alt="visi">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                    <div class="crumina-module crumina-heading">


                        <h6 class="heading-sup-title  c-black"style="font-size: 28px; text-align:center;">Misi</h6>
                        <ul class="list list--standard">
                            <li>
                                <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                <a href="#" style="font-size: 18px;">Claritas est Claritas est Claritas est etiam processus dynamicus</a>
                            </li>
                            <li>
                                <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                <a href="#" style="font-size: 18px;">Ypi non habent claritatem insitam</a>
                            </li>
                            <li>
                                <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                <a href="#"style="font-size: 18px;">Ut wisi enim ad minim veniam, quis nostrud</a>
                            </li>
                            <li>
                                <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                <a href="#" style="font-size: 18px;">Mirum est notare quam</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<!-- ... end Our Video -->
<!-- Slider with vertical tabs -->
<div class="bg-22 background-cover pt100">
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
        <div class="bg-22 background-cover ">
            <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style="margin-top: -50px;">
                    <div class=" align-center">
                        <h1 class="slider-content-title with-decoration" style="margin-top: 50px; color:black; font-size:40px;"  >
                            INTERNET <span class="c-primary">OF</span> THINGS

                            <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                <use xlink:href="#utouch-icon-arrow-left"></use>
                            </svg>

                            <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                <use xlink:href="#utouch-icon-arrow-left"></use>
                            </svg>

                        </h1>
                        <span>Informasi tentang kami</span>
                    </div>
                </div><br>
                <div style="padding: 20px; margin-top:20px;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">

                                <div class="m-auto">
                                    <img src="{{asset('frontAsset/img/bg-gedung.jpg')}}" alt="iphone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-black">
                                    <h6 class="heading-sup-title"></h6>
                                    <h2 class="heading-title">Internet of Things</h2>
                                    <div class="heading-text">Dengan perkembangan zaman yang sangat cepat, internet sudah menjadi hal yang biasa dewasa ini.
                                        Dengan adanya teknologi Internet of Thing atau lebih sering disebut dengan IoT, objek tertentu dapat memiliki kemampuan untuk mentranfer data melalui jaringan tanpa memerlukan interaksi dari manusia ke manusia maupun dari manusia ke perangkat komputer.
                                    </div>
                                    <p></p>
                                    <a href="" target="_blank" class="btn btn-border btn--with-shadow c-black">
                                        Visit
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
    </section>

<!-- ... Slider with vertical tabs -->
    <hr style="width: 70%; height:6px; opacity:0.8; background-color:black; border-radius:5px;">
    <!-- Info Boxes -->

    <!-- Info Boxes -->

    <section class="medium-padding120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('frontAsset/img/icon-5.png')}}" alt="smartphone">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Automation</h5>
                            <p class="info-box-text">IoT mampu merubah suatu proses manual menjadi suatu proses otomatis, sehingga proses interaksi antara mesin dan manusia dapat diminimalisir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('frontAsset/img/icon-9.png')}}" alt="smartphone">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Cloud Computing</h5>
                            <p class="info-box-text">Data - data yang dihasilkan dari proses IoT dapat disimpan baik secara Cloud maupun dalam komputer lokal, yang dapat digunakan lebih lanjut lagi kedepannya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('frontAsset/img/icon-3.png')}}" alt="smartphone">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">Data Management</h5>
                            <p class="info-box-text">Data yang sudah tersimpan tadi dapat diatur dan dikelola sesuai kebutuhan, seperti melihat trend pemakaian dari suatu mesin dll.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ... Info Boxes -->

<!-- FAQS Slider -->

<section class="crumina-module crumina-module-slider bg-blue-lighteen pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12 mb30"style="margin-top: -60px; text-align:center; ">
                {{-- <div class="col-md-12 text-center" style="text-align:center;"> --}}
                    <h3 class="spr" style="background: url('https://nidhacenter.com/assets_client/images/geo-1.png'); background-size: 59px; background-repeat: no-repeat; background-position: 60%; line-height: 77px;">Our Project</h3>
                    <hr style="text-align:center; width: 12%; height:7px; background-color: #273f5b; border-radius:4px; margin-top:-25px;">
                {{-- </div> --}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container navigation-bottom" data-effect="fade">
                    <div class="slider-slides" >
                        @foreach ($data['portfolios'] as $portfolio)

                        <a href="#" class="slides-item">
                            {{$loop->iteration}}
                        </a>
                        @endforeach
{{-- {{dd($data['portfolios'])}} --}}
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($data['portfolios'] as $portfolio)

                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('storage/'.$portfolio->image)}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">{{$portfolio->name}}</h5>
                                <p>{{$portfolio->description}} </p>
                                <a href="{{$portfolio->link}}" target="_blank" class="btn btn-border btn--with-shadow c-secondary">
                                    Visit
                                </a>
                                <p></p>
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="swiper-slide">
                            <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img class="utouch-icon" src="{{asset('frontAsset/img/web-dev4.png')}}" alt="image">
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
                                    <img class="utouch-icon" src="{{asset('frontAsset/img/web-dev3.png')}}" alt="image">
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
                                    <img class="utouch-icon" src="{{asset('frontAsset/img/web-dev1.png')}}" alt="image">
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
                        </div> --}}

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
<!-- Teammembers -->

<section class="crumina-module crumina-module-slider medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading align-center">
                    <h6 class="heading-sup-title">Speakers</h6>
                    <h3 class="heading-title">Meet Our Specialists</h3>
                </div>
                <div class="swiper-container navigation-bottom" data-show-items="2">

                    <div class="swiper-wrapper">
                        @foreach ($data['teams'] as $team)
                        <div class="swiper-slide">
                            <div class="crumina-module crumina-teammembers-item teammember-item--author-in-round thumb--big">

                                <div class="teammembers-thumb">
                                    <img src="{{asset('storage/'.$team->image)}}" alt="team member">
                                </div>

                                <div class="teammember-content">

                                    <div class="teammembers-item-prof">{{$team->position}}</div>

                                    <a href="#" class="h5 teammembers-item-name">{{$team->name}}</a>

                                    <p>Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                        est etiam est etiam processus dynamicus, qui sequitur.
                                    </p>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="#" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!--Prev next buttons-->

                    <div class="btn-slider-wrap navigation-center-bottom">

                        <div class="btn-prev">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                            <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                        </div>

                        <div class="btn-next">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                            <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ... end Teammembers -->
@endsection
