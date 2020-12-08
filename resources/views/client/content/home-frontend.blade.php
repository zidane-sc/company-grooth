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
                                    <img src="{{asset('storage/'.$data['section_one']->image)}}" alt="iphone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-black">
                                    <h6 class="heading-sup-title"></h6>
                                    <h2 class="heading-title">{{$data['section_one']->title}}</h2>
                                    <div class="heading-text">{{$data['section_one']->description}}
                                    </div>
                                    <p></p>
                                    <a href="{{$data['section_one']->link}}" target="_blank" class="btn btn-border btn--with-shadow c-black">
                                        Visit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

<!-- ... Slider with vertical tabs -->
    <hr style="width: 70%; height:6px; opacity:0.8; background-color:black; border-radius:5px;">
    <!-- Info Boxes -->

    <!-- Info Boxes -->

    <section class="medium-padding120">
        <div class="container">
            <div class="row">
                @foreach ($data['section_two'] as $section)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('storage/'.$section->image)}}" alt="smartphone">
                        </div>
                        <div class="info-box-content">
                            <h5 class="info-box-title">{{$section->title}}</h5>
                        <p class="info-box-text">{{$section->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<!-- ... Info Boxes -->

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
                    <div class="heading-text c-black"><p style="font-size: 18px;">{{$data['visi_misi']->visi}} </p>
                    </div>
                    <div class="video-thumb">
                        <img  style="margin-top: 0px; width:500px; height:300px;" src="{{asset('storage/'.$data['visi_misi']->image)}}" alt="visi">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                    <div class="crumina-module crumina-heading">


                        <h6 class="heading-sup-title  c-black"style="font-size: 28px; text-align:center;">Misi</h6>
                        <ul class="" style="list-style-type:decimal; padding-left:30px;">
                            @foreach ($data['misi'] as $misi)
                            @if ($misi != null)

                            <li>
                                {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg> --}}
                            <span href="#" style="font-size: 19px;">{{$misi}}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<!-- ... end Our Video -->



 <!-- FAQS Slider -->
 {{-- <section class="crumina-module crumina-module-slider pt100  bg-light-color  bg-13 background-cover">
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
</section> --}}

<!-- ... end FAQS Slider -->

@endsection
