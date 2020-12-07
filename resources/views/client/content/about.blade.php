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

<!-- Zoom Image -->

<section class="bg-primary-color medium-padding100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-zoom-image">
                    <img src="{{asset('frontAsset/img/smartphone.png')}}" alt="smartphone">
                    <div class="zoom-round-img">
                        <img src="{{asset('frontAsset/img/zoom-img.png')}}" alt="zoom">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading custom-color c-white">
                    <h2 class="heading-title">Simple and Powerful Dashboard</h2>
                    <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per.
                    </div>
                </div>
                <ul class="list list--breez">
                    <li>
                        <svg class="utouch-icon utouch-icon-checked">
                            <use xlink:href="#utouch-icon-checked"></use>
                        </svg>
                        <a href="#">Claritas est etiam processus dynamicus</a>
                    </li>
                    <li>
                        <svg class="utouch-icon utouch-icon-checked">
                            <use xlink:href="#utouch-icon-checked"></use>
                        </svg>
                        <a href="#">Investigationes demonstraverunt lectores legere</a>
                    </li>
                    <li>
                        <svg class="utouch-icon utouch-icon-checked">
                            <use xlink:href="#utouch-icon-checked"></use>
                        </svg>
                        <a href="#">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod</a>
                    </li>
                    <li>
                        <svg class="utouch-icon utouch-icon-checked">
                            <use xlink:href="#utouch-icon-checked"></use>
                        </svg>
                        <a href="#">Qum soluta nobis eleifend</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ... end Zoom Image -->
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
<!-- Accordion -->

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">
                        <span class="c-primary">Utouch</span> the app, challenge your teammates</h2>
                </div>

                <div id="accordion" class="crumina-module crumina-accordion">
                    <div class="card accordion-panel">
                        <div class="card-header panel-heading" id="headingOne">
                            <button class="btn-link accordion-heading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="icons">
                                    <svg class="utouch-icon utouch-icon-add"><use xlink:href="#utouch-icon-add"></use></svg>
                                    <svg class="utouch-icon active utouch-icon-minus"><use xlink:href="#utouch-icon-minus"></use></svg>
                                </span>
                                <span class="title">Claritas est etiam processus dynamicus</span>
                            </button>

                        </div>

                        <div id="collapseOne" class="panel-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="panel-info">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat odio dignissim qui blandit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-panel">
                        <div class="card-header panel-heading" id="headingTwo">

                            <button class="btn-link accordion-heading collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <span class="icons">
                                    <svg class="utouch-icon utouch-icon-add"><use xlink:href="#utouch-icon-add"></use></svg>
                                    <svg class="utouch-icon active utouch-icon-minus"><use xlink:href="#utouch-icon-minus"></use></svg>
                                </span>
                                <span class="title">Gectores legere me lius quod</span>
                            </button>

                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="panel-info">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat odio dignissim qui blandit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-panel">
                        <div class="card-header panel-heading" id="headingThree">

                            <button class="btn-link accordion-heading collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <span class="icons">
                                    <svg class="utouch-icon utouch-icon-add"><use xlink:href="#utouch-icon-add"></use></svg>
                                    <svg class="utouch-icon active utouch-icon-minus"><use xlink:href="#utouch-icon-minus"></use></svg>
                                </span>
                                <span class="title">Investigationes demonstraverunt lectores legere</span>
                            </button>

                        </div>

                        <div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="panel-info">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat odio dignissim qui blandit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-panel">
                        <div class="card-header panel-heading" id="headingFour">
                            <button class="btn-link accordion-heading collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <span class="icons">
                                    <svg class="utouch-icon utouch-icon-add"><use xlink:href="#utouch-icon-add"></use></svg>
                                    <svg class="utouch-icon active utouch-icon-minus"><use xlink:href="#utouch-icon-minus"></use></svg>
                                </span>
                                <span class="title">Mirum est notare quam littera</span>
                            </button>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="panel-info">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat odio dignissim qui blandit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12">
                <img src="{{asset('frontAsset/img/product-img2.png')}}" alt="image">
            </div>
        </div>
    </div>
</section>

<!-- ... end Accordion -->



<!-- Teammembers -->

<section class="crumina-module crumina-module-slider medium-padding100 bg-3 background-cover">
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


