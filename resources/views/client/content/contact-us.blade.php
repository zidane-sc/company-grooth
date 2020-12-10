@extends('client.layout.app')
@section('content')

<section>
    <div class="container-fluid bg-rounded2  background-cover">

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pt100 pb100">
            <!-- Leaflet map -->
            <div class="map" style="border:2px solid black; border-radius:7px;">
                <div id="mapContainer" style="height: 25rem"></div>
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
{{-- <script>
    window.hereApiKey = "{{ env('HERE_API_KEY') }}";
    window.lat = "{{ $data['contact']->latitude  }}";
    window.lng = "{{ $data['contact']->longitude  }}";
</script>
<script src="{{ asset('backend/dist/js/here.js') }}"></script> --}}
@endsection
