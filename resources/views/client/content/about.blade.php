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

</style>
<section class="background-contain bg-15 bg-blue-lighteen pt100">
    <div class="container">
        <div class="row">
            <div class="crumina-module crumina-module-img-bottom">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="crumina-module-img-content medium-padding100">
                        <div class="crumina-module crumina-heading">
                            <h6 class="heading-sup-title">Company</h6>
                            <h2 class="heading-title">Welcome to
                                <span class="c-primary">Utouch!</span> We create high quality products that will make your life better.
                            </h2>
                            <div class="h6 heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</div>
                        </div>

                        <a href="03_products.html" class="btn btn-border btn--with-shadow c-primary">
                            Learn More
                        </a>

                        <a href="15_pricing_tables.html" class="btn btn--green btn--with-shadow">
                            Get trial version
                        </a>

                    </div>
                </div>

                <div class="col-lg-4 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-bottom" src="{{asset('frontAsset/img/man.png')}}" alt="man">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Block IMG-bottom -->
<!-- Our Video -->

<section class="bg-3 background-cover medium-padding120">
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
                    <img  style="margin-top: 0px; width:500px; height:300px;" src="{{asset('storage/'.$data['visi_misi']->image)}}" alt="visi">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                <div class="crumina-module crumina-heading">


                    <h6 class="heading-sup-title  c-black"style="font-size: 28px; text-align:center;">Misi</h6>

                    <ul class="list list--standard">
                        <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                            <a href="#" style="font-size: 18px;">{{$data['visi_misi']->misi}}</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Our Video -->

<!-- Info Boxes -->

<section class="crumina-module crumina-module-slider bg-blue-lighteen medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
                <div class="crumina-module crumina-heading align-center">
                    <h2 class="heading-title">Short Story About Our Company</h2>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="swiper-container pagination-bottom" data-show-items="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="crumina-module crumina-info-box info-box--time-line">

                                <div class="info-box-image bg-primary-color">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg/flag.svg')}}" alt="flag">
                                    <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                        <use xlink:href="#utouch-icon-dot-arrow"></use>
                                    </svg>
                                </div>

                                <div class="info-box-content">
                                    <h6 class="timeline-year c-primary">2013</h6>
                                    <a href="#" class="h6 info-box-title">Claritas est processus</a>
                                    <p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation
                                        qui nunc nobis videntur parum clari.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="crumina-module crumina-info-box info-box--time-line">

                                <div class="info-box-image bg-orange">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg/settings.svg')}}" alt="settings">
                                    <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                        <use xlink:href="#utouch-icon-dot-arrow"></use>
                                    </svg>
                                </div>

                                <div class="info-box-content">
                                    <h6 class="timeline-year c-orange">2015</h6>
                                    <a href="#" class="h6 info-box-title">Typi non claritatem</a>
                                    <p class="info-box-text">Mirum est notare quam littera gothica, quam nunc putamus
                                        parum claram, anteposuerit lectores legere me lius quod ii legunt.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="crumina-module crumina-info-box info-box--time-line">

                                <div class="info-box-image bg-red">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg/team.svg')}}" alt="team">
                                    <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                        <use xlink:href="#utouch-icon-dot-arrow"></use>
                                    </svg>
                                </div>

                                <div class="info-box-content">
                                    <h6 class="timeline-year c-red">2016</h6>
                                    <a href="#" class="h6 info-box-title">Eodem modo typi</a>
                                    <p class="info-box-text">Investigationes demonstraverunt lectores legere me lius quod.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="crumina-module crumina-info-box info-box--time-line">

                                <div class="info-box-image bg-green">
                                    <img class="utouch-icon" src="{{asset('frontAsset/svg/rocket-launch.svg')}}" alt="rocket">
                                    <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                        <use xlink:href="#utouch-icon-dot-arrow"></use>
                                    </svg>
                                </div>

                                <div class="info-box-content">
                                    <h6 class="timeline-year c-green">2017</h6>
                                    <a href="#" class="h6 info-box-title">Duis autem vel eum</a>
                                    <p class="info-box-text">Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper suscipit lobortis nisl ut aliquip.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Prev next buttons-->

                    <div class="btn-slider-wrap navigation-center-bottom">

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

<!-- ... end Info Boxes -->

 <!-- FAQS Slider -->
    <section class="crumina-module crumina-module-slider pt100  bg-light-color  bg-13 background-cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12 mb30"style="margin-top: -60px; text-align:center; ">

                        <h3 class="spr" style="background: url('https://nidhacenter.com/assets_client/images/geo-1.png'); background-size: 59px; background-repeat: no-repeat; background-position: 60%; line-height: 77px;">Our Project</h3>
                        <hr style="text-align:center; width: 12%; height:7px; background-color: #273f5b; border-radius:4px; margin-top:-25px;">

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

                                    <p></p>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... end FAQS Slider -->
    <!-- Slider with vertical tabs -->
<div class="" >
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
                <div style="padding: 20px; margin-top:20px;" >
                    <div class="container" style="background-color: rgb(255, 240, 34); border-radius:5px; box-shadow: 5px 8px 2px rgb(0,0,0,0.4);">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-dark">
                                    <h6 class="heading-sup-title"></h6>
                                    <h2 class="heading-title">Tertarik dengan Produk kami ?</h2>
                                    <div class="heading-text">Produk aplikasi dengan kualitas terbaik yang mampu bersaing dengan vendor lainnya dengan harga yang kompetitif. Untuk melihat demo aplikasi silahkan klik tombol lihat detail.
                                    </div>
                                    <p></p>
                                    <a href="" target="_blank" class="btn btn-border btn--with-shadow c-secondary">
                                        Visit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>
    <!-- ... end Info Boxes -->

<!-- Teammembers -->

<section class="crumina-module crumina-module-slider medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="crumina-module-img-content">
                    <div class="crumina-module crumina-heading">
                        <h3 class="heading-title">Our proffesional instructors</h3>
                        <div class="heading-text">Claritas est etiam processus dynamicus.</div>
                    </div>
                </div>
                <div class="slider-slides with-thumbs align-left">
                    @foreach ($data['teams'] as $team)
                        <a href="#" class="slides-item slide-active">
                            <div class="testimonial-img-author">
                                <img src="{{asset('storage/'.$team->image)}}" alt="author">
                                {{$loop->iteration}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>


            <div class="col-lg-7 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container" data-effect="fade">
                    <div class="swiper-wrapper">
                        @foreach ($data['teams'] as $team)
                        <div class="swiper-slide">
                            <div class="crumina-module crumina-teammembers-item teammember-item--author-in-round thumb--big">

                                <div class="teammembers-thumb" data-swiper-parallax="-100">
                                    <img src="{{asset('storage/'.$team->image)}}" alt="team member">
                                </div>

                                <div class="teammember-content" data-swiper-parallax="-300">

                                    <div class="teammembers-item-prof">{{$team->position}}</div>

                                    <a href="#" class="h5 teammembers-item-name">{{$team->name}}</a>

                                    <p>{{$team->description}}
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

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Teammembers -->



@endsection


