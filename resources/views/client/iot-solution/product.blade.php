@extends('client.layout.app')

 @section('content')
 <style>
     .mb100{
         margin-bottom: 100px;
     }
     .mt20{
         margin-top: 20px
     }
		.w100{
			width: 100%;
		}
    .img-banner{

        background-size: cover;

    }
    .pt40{
        padding-top: 40px;;
    }
    .stunning-bg-1{
        background-image: url("{{asset($data['product']->banner)}}") !important;
    }


 </style>
 <!-- Stunning Header -->

 <div class="crumina-stunning-header stunning-header--content-center stunning-header--min360 stunning-bg-1 stunning-header--bg-photo align-center custom-color c-white" style="height: 700px;">
    <div class="container">
        <div class="stunning-header-content">
            <h6 class="category-link color-icon">Our Product</h6>
            <h2 class="stunning-header-title">{{ $data['product']->name }}</span> app startup is an Inspiring leadership innovation</h2>

            <div class="breadcrumbs-wrap inline-items">
                <a href="#" class="btn btn--primary btn--round">
                    <svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                </a>

                <ul class="breadcrumbs breadcrumbs--bordered">
                    <li class="breadcrumbs-item">
                        <a href="{{route('main.home')}}" class="breadcrumbs-custom">Home</a>
                        <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                    </li>
                    <li class="breadcrumbs-item active">
                        <a href="#" class="breadcrumbs-custom">Iot Solution</a>
                        <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                    </li>
                    <li class="breadcrumbs-item active">
                        <a href="#" class="breadcrumbs-custom">{{ $data['product']->name }}</a>
                        <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="overlay-standard overlay--dark"></div>
</div>

    <section class="medium-padding100 bg-blue-lighteen">
        <div class="container" style=" background-color:white; padding:20px; border-radius:5px;">

                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <h4 style="margin-bottom: 25px">What is {{ $data['product']->name }}</h4>
                    <p style=" text-align: justify;">{{ $data['product']->description }}</p>
                </div>
					<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="text-align:center;" >
                   <img  style="width:100% !important; border: 1px solid black; border-radius: 5px; box-shadow: 0px 0px 153px -54px rgba(0,0,0,0.75);  margin-top:10px;" src="{{asset($data['product']->image_description)}}" alt="gambar">
                </div>
            </div>
        </div>
    </section>

	<!-- Info Boxes -->

	<section class="bg-13 medium-padding120">
		<div class="container">
            <div class="row mb30 mt20">
                <div class="col-lg-12 col-md-12 col-sm-12 mb30"style="margin-top: -60px; text-align:center; ">
                    <h3 class="spr">Advantage Of {{ $data['product']->name }}</h3>
                    <span>Our Smart Factory Solution has the capability to connect multiple sensors to monitor the status, automate, collect data, analyze it and derive useful insights to improve manufacturing operations.</span>
                </div>

				@foreach ($data['product']->advantages as $advantage)
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset($advantage->image)}}">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">{{ $advantage->name }}</h5>
							<p class="info-box-text">{{ $advantage->description }}</p>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</section>

	<!-- ... Info Boxes -->
<!-- FAQS Slider -->
<section class="crumina-module crumina-module-slider pt100  bg-blue-lighteen  bg-13 background-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb30"style="margin-top: -40px; text-align:center; ">

                    <h3 class="spr">Feature Of {{ $data['product']->name }}</h3>
                    <span>Our Smart Factory Solution has the capability to connect multiple sensors to monitor the status, automate, collect data, analyze it and derive useful insights to improve manufacturing operations.</span>
                    {{-- <hr style="text-align:center; width: 12%; height:7px; background-color: #273f5b; border-radius:4px; margin-top:-25px;"> --}}

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container navigation-bottom" data-effect="fade">
                    <div class="slider-slides" style="text-align: center">
                        @foreach ($data['product']->features as $feature)
                        <a href="#" class="slides-item">
                            {{$loop->iteration}}
                        </a>
                        @endforeach

                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($data['product']->features as $feature)

                        <div class="swiper-slide">
                            <div class="col-lg-7 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img style="height: 20rem;" src="{{asset($feature->image)}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12" data-swiper-parallax="-300">
                                <h5 class="slider-faqs-title">{{ $feature->name }}</h5>
                                <ul class="" style="list-style-type:decimal; padding-left:30px;">
									@foreach (json_decode($feature->description) as $description)
										 @if ($description != null)
											<li>
												<span href="#" style="font-size: 17px;">{{$description}}</span>
											</li>
										 @endif
									@endforeach
								</ul>

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

	<!-- Accordion -->

	<section class="medium-padding120">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<div class="crumina-module crumina-heading align-center">
						<h2 class="heading-title">
							<span class="c-primary">FAQ</span> {{ $data['product']->name }}</h2>
					</div>

					@foreach ($data['product']->faqs as $faq)
					<div id="accordion" class="crumina-module crumina-accordion">
						<div class="card accordion-panel">
							<div class="card-header panel-heading" id="headingOne">
								<button class="btn-link accordion-heading" data-toggle="collapse" data-target="#collapse{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapseOne">
									<span class="icons">
										<svg class="utouch-icon utouch-icon-add"><use xlink:href="#utouch-icon-add"></use></svg>
										<svg class="utouch-icon active utouch-icon-minus"><use xlink:href="#utouch-icon-minus"></use></svg>
									</span>
									<span class="title">{{ $faq->question }}</span>
								</button>

							</div>

							<div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<div class="panel-info">
										{{ $faq->answer }}
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</section>

    <!-- ... end Accordion -->
     <!-- Slider with vertical tabs -->
 <div class="mb100" >
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
                <div style="padding: 20px; margin-top:-20px; " >
                    <div class="container" style="background-color: rgb(255, 240, 34); border-radius:5px; box-shadow: 5px 8px 2px rgb(0,0,0,0.4);">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-dark">
                                    <h6 class="heading-sup-title"></h6>
                                    <h2 class="heading-title">Tertarik dengan Produk kami ?</h2>
                                    <div class="heading-text">Produk aplikasi dengan kualitas terbaik yang mampu bersaing dengan vendor lainnya dengan harga yang kompetitif. Untuk melihat demo aplikasi silahkan klik tombol lihat detail.
                                    </div>
                                    <p></p>
                                    <a href="{{ $data['product']->link }}" target="_blank" class="btn btn-border btn--with-shadow c-secondary">
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

</div>

@endsection
