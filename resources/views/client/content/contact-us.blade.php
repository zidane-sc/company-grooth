@extends('client.layout.app')
@section('content')


<section>
    <div class="container-fluid bg-blue-lighteen  background-cover">

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pt100 pb100">
            <!-- Leaflet map -->
            <div class="map" style="border:2px solid black; border-radius:7px;">
                <iframe style="width:100%; height: 500px; border-radius:7px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6320495093437!2d107.00757151430986!3d-6.179979962274804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698925d108f895%3A0xe02f05cd45a95841!2sAyam%20Geprek%20JUARA%20-%20Pondok%20Ungu%20Bekasi!5e0!3m2!1sid!2sid!4v1607573868640!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
<section class=" crumina-module crumina-module-subscribe-form bg-blue-lighteen">
    <div class="container">
        <div class="row  mb30" style="padding: 30px; border-radius:10px;">
            <div class="heading pb30">
                <h2 class="h1 heading-title align-center">Forms Elements With Icon</h2>
            </div>
            <form class="form-validate contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="https://html.crumina.net/html-utouch/modules/forms/submit.php" style="margin-bottom: 75px">
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
                                    <input name="password" placeholder="Password" type="password">
                                    <svg class="utouch-icon utouch-icon-message-closed-envelope-1">
                                        <use xlink:href="#utouch-icon-message-closed-envelope-1"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <select>
                                    <option data-display="Choose country">Choose country</option>
                                    <option value="1">Australia</option>
                                    <option value="2">United States</option>
                                    <option value="3">UK</option>
                                </select>

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

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="with-icon">
                            <textarea name="message" required placeholder="Details" rows="5"></textarea>
                            <svg class="utouch-icon utouch-icon-edit">
                                <use xlink:href="#utouch-icon-edit"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
