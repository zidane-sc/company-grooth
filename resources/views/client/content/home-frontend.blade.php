@extends('client.layout.app')

@section('content')
<style>
    .img-banner {
        height: 680px;
        background-size: cover;

    }

    .slider-thumb {
        padding: 0 !important;
    }

    .mt20 {
        margin-top: 20px
    }

    .mb50 {
        margin-bottom: 50px;
    }

    .pt50 {
        padding-top: 50px;
    }

</style>

{{-- Banner --}}
<div class="crumina-module crumina-module-slider container-full-width">
    <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">
        <div class="swiper-wrapper">
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
        <!-- end prev next button -->
    </div>
</div>
{{-- End Banner --}}

{{-- deskripsi --}}
<section class=" bg-primary-color" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt20">
                <div class="course-details">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="text-align:justify;">
                                <h3>Description</h3>

                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                    decima.
                                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum
                                    eleifend option congue nihil imperdiet.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="course-features" style="text-align: center;">
                                    <h5 class="title" style="text-align: center;">Course Features</h5>
                                    <img width="100%"
                                        style=" box-shadow: 0px 0px 153px -54px rgba(0,0,0,0.75); border-radius:5px; border: 0.5px solid black;"
                                        src="{{asset('storage/'.$data['section_one']->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... End Deskripsi -->

<!--Information -->
<div class="bg-blue-lighteen ">
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
        <div class="bg-22 background-cover ">
            <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 mb50">
                    <div class=" align-center">
                        <h1 class="slider-content-title with-decoration"
                            style="margin-top: 50px; color:black; font-size:40px;">
                            INTERNET <span class="c-primary">OF</span> THINGS

                            <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                <use xlink:href="#utouch-icon-arrow-left"></use>
                            </svg>

                            <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                <use xlink:href="#utouch-icon-arrow-left"></use>
                            </svg>

                        </h1>
                        <span>Why choose us?</span>
                    </div>
                </div><br>
                <div style="padding: 20px; margin-top:20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="m-auto">
                                    <img src="{{asset('storage/'.$data['section_one']->image)}}" alt="iphone">
                                </div>
                            </div>
                            <div class="col-lg-7 col-lg-offset-0 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-black">
                                    <h6 class="heading-sup-title"></h6>
                                    <h2 class="heading-title">{{$data['section_one']->title}}</h2>
                                    <p>{{$data['section_one']->description}}</p>
                                    <p></p>
                                    <a href="{{$data['section_one']->link}}" target="_blank"
                                        class="btn btn-border btn--with-shadow c-black">
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
    <!-- ... End information -->

    <hr style="width: 70%; height:6px; opacity:0.8; background-color:black; border-radius:5px;">

    <!-- Info Boxes -->
    <section class="pt50">
        <div class="container">
            <div class="row">
                @foreach ($data['section_two'] as $section)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('storage/'.$section->image)}}">
                        </div>
                        <div class="info-box-content " style="margin-top: -2rem;">
                            <h5 class=" info-box">{{$section->title}}</h5>
                            <p class="info-box-text" style=" text-align:justify;">{{$section->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<!-- ... end Info Boxes -->

{{-- Visi & Misi --}}
<section class="bg-3 medium-padding120">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12"
                style="margin-top: -50px;">
                <div class=" align-center">
                    <h1 class="slider-content-title with-decoration"
                        style="margin-top: 50px; color:black; font-size:40px;">
                        VISI <span class="c-primary">&</span> MISI

                        <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                            <use xlink:href="#utouch-icon-arrow-left"></use>
                        </svg>

                        <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                            <use xlink:href="#utouch-icon-arrow-left"></use>
                        </svg>

                    </h1>
                    <span>Information about us</span>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                <h6 class="heading-sup-title c-black" style="font-size: 28px; text-align:center;">Visi</h6>
                <p>{{$data['visi_misi']->visi}} </p>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title  c-black" style="font-size: 28px; text-align:center;">Misi</h6>
                    <ul class="" style="list-style-type:decimal; padding-left:30px;">
                        @foreach ($data['misi'] as $misi)
                        @if ($misi != null)
                        <li>
                            <span href="#" style="font-size: 17px;">{{$misi}}</span>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Visi & Misi --}}


@endsection
