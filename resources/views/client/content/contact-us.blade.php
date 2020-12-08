@extends('client.layout.app')
@section('content')


<section>
    <div class="container-fluid bg-rounded2  background-cover">

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pt100 pb100">
            <!-- Leaflet map -->
            <div class="map" style="border:2px solid black; border-radius:7px;">
                <iframe style="width:100%; height: 500px; border-radius:7px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.71211520107!2d107.0010155560105!3d-6.301506688399479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992049d4e85bd%3A0xe276edb888ee431c!2sWorkshop%20JPA!5e0!3m2!1sid!2sid!4v1606724438173!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                <h3 class="heading-title">Contact</h3></h3>
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
<br>
<!-- ... end Contacts -->
@endsection
