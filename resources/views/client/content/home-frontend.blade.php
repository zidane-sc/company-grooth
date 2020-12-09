@extends('client.layout.app')

 @section('content')
<style>
    .img-banner{
        height: 680px;
        background-size: cover;

    }
    .slider-thumb{
        padding: 0 !important;
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
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="course-details">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <h3>Description</h3>
                                <p class="weight-bold">Quam nunc putamus parum claram, anteposuerit litterarum formas
                                    humanitatis per seacula quarta decima et quinta decima modo typi, qui nunc.</p>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                                    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum
                                    eleifend option congue nihil imperdiet.
                                </p>

                                <h5>Sertification</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                    consequat. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </p>

                                <h5>Learning Outcomes</h5>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                    nisl ut aliquip ex ea commodo consequat est etiam processus dynamicus.
                                </p>
                                <ul class="list list--standard">
                                    <li>
                                        <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                        <a href="#">Over 37 lectures and 55.5 hours of content!</a>
                                    </li>
                                    <li>
                                        <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                        <a href="#">Testing Training Included.</a>
                                    </li>
                                    <li>
                                        <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                        <a href="#">Learn Software Testing and Automation basics from a professional trainer
                                            from your own desk.</a>
                                    </li>
                                    <li>
                                        <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                        <a href="#">Practical learning experience with live project work and examples.</a>
                                    </li>
                                    <li>
                                        <svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
                                        <a href="#">Testing Training Included.</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="course-features">
                                    <h5 class="title">Course Features</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ... end Course Details -->
<!--Information -->
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
<!-- ... End information -->

    <hr style="width: 70%; height:6px; opacity:0.8; background-color:black; border-radius:5px;">

<!-- Info Boxes -->
<section class="medium-padding100">
    <div class="container">
        <div class="row">
            @foreach ($data['section_two'] as $section)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">

                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('storage/'.$section->image)}}" >
                    </div>
                    <div class="info-box-content " style="margin-top: -2rem;">
                        <a href="#" class="h5 info-box-title">{{$section->title}}</a>
                        <p class="info-box-text" style=" text-align:justify;">{{$section->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ... end Info Boxes -->

{{-- Visi & Misi --}}
<section class="bg-blue-lighteen medium-padding120">
    <div class="container bg-11 background-cover">
        <div class="row">
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

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 " style="margin-top: 50px">
                <h6 class="heading-sup-title c-black" style="font-size: 28px; text-align:center;">Visi</h6>
                <div class="heading-text c-black"><p style="font-size: 18px;">{{$data['visi_misi']->visi}} </p></div>
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
{{-- End Visi & Misi --}}


@endsection
