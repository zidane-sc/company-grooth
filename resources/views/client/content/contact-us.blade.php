@extends('client.layout.app')
@section('content')


<s<section>
    <div class="container-fluid bg-rounded2  background-cover">

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pt100 pb100">
            <!-- Leaflet map -->
            <div class="map" style="border:2px solid black; border-radius:7px;">
                <iframe style="width:100%; height: 500px; border-radius:7px;" src="{{ $data['contact']->link_maps }}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- End Leaflet map -->
        </div>

        <div class="col-lg-5 col-lg-offset-1 col-md-12 col-sm-12 pt100 pb100">
            <div class="breadcrumbs-wrap inline-items">
                <a href="#" class="btn btn--transparent btn--round">
                    <svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                </a>

                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                    <a href="{{route('main.home')}}">Home</a>
                        <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                    </li>
                    <li class="breadcrumbs-item active">
                        <span>Contact us</span>
                        <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                    </li>
                </ul>
            </div>

            <div class="crumina-module crumina-heading">
                <h3 class="heading-title">Contact Us</h3></h3>
                {{-- <div class="heading-text">Dekat Pabrik Gudang Garam</div> --}}
            </div>
            <div class="widget w-contacts w-contacts--style2 ">
                <div class="contact-item display-flex">
                    <svg class="utouch-icon utouch-icon-placeholder-3"><use xlink:href="#utouch-icon-placeholder-3"></use></svg>
                    <span class="info">{{ $data['contact']->address }}</span>
                </div>
                <div class="contact-item display-flex">
                    <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
                    <div class="info-wrap">
                        <span class="info">{{ $data['contact']->whatsapp }} <span>- Whatsapp</span></span>
                        <span class="info">{{ $data['contact']->phone }} <span>- Phone</span></span>
                    </div>
                </div>
                <div class="contact-item display-flex">
                    <svg class="utouch-icon utouch-icon-message"><use xlink:href="#utouch-icon-message"></use></svg>
                    <a href="#" class="info">{{ $data['contact']->email }}</a>
                </div>


            </div>

        </div>

    </div>
</section>

<!-- ... end Contacts -->
<section class=" crumina-module crumina-module-subscribe-form bg-3 background-cover">
    <div class="container">
        <div class="row  mb30" style="padding: 30px; border-radius:10px;">
            <div class="heading pb30">
                <h2 class="h1 heading-title align-center">Get in touch with us</h2>
            </div>
            <form class="form-validate contact-form" action="{{ route('main.email') }}" style="margin-bottom: 75px">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="with-icon">
                                    <input name="name" placeholder="Your Name" type="text" required>
                                    <svg class="utouch-icon utouch-icon-user">
                                        <use xlink:href="#utouch-icon-user"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="with-icon">
                                    <input class="with-icon" name="phone" placeholder="Phone" type="text" required>
                                    <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys">
                                        <use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="with-icon">
                                    <input name="email" placeholder="Example123@gmail.com" type="email">
                                    <svg class="utouch-icon utouch-icon-message-closed-envelope-1">
                                        <use xlink:href="#utouch-icon-message-closed-envelope-1"></use>
                                    </svg>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="with-icon">
                            <textarea name="message" required placeholder="Details" rows="5"></textarea>
                            <svg class="utouch-icon utouch-icon-edit">
                                <use xlink:href="#utouch-icon-edit"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Heading Style-center">
                        <button type="submit" class="btn btn--primary full-width btn--with-shadow"  style="margin-bottom: 20px; margin-left: 0;">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
