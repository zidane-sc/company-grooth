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
 </style>
	<section class="background-contain bg-17 pt100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
					<div class="crumina-module crumina-heading align-center">
						<h6 class="heading-sup-title">Our Products</h6>
						<h2 class="heading-title">
							<span class="c-primary">Utouch</span> app startup is an Inspiring leadership innovation</h2>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12">
					<img src="{{asset('frontAsset/img/product-img.png')}}" alt="image" class="display-block">
				</div>
			</div>
		</div>
	</section>

    <section class="medium-padding100 bg-blue-lighteen">
        <div class="container" style=" background-color:white; padding:20px; border-radius:5px;">

                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <h4 style="margin-bottom: 25px">Dark background text selection</h4>
                    <p style=" text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Eodem modo typi,
                        qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Mirum est notare quam littera gothica,
                        quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta
                        decima et quinta decima.
                    </p>
                </div>
								<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="text-align:center;" >
                   <img  style="width:100% !important; border: 1px solid black; border-radius: 5px; box-shadow: 0px 0px 153px -54px rgba(0,0,0,0.75);  margin-top:10px;" src="{{asset('frontAsset/img/blog4.jpg')}}" alt="gambar">
                </div>
            </div>
        </div>
    </section>

	<!-- Info Boxes -->

	<section class="bg-13 medium-padding120">
		<div class="container">
            <div class="row mb30 mt20">
                <div class="col-lg-12 col-md-12 col-sm-12 mb30"style="margin-top: -60px; text-align:center; ">
                    <h3 class="spr">Advantage Of KLHK MALINDO</h3>
                    <span>Our Smart Factory Solution has the capability to connect multiple sensors to monitor the status, automate, collect data, analyze it and derive useful insights to improve manufacturing operations.</span>
                </div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/smartphone.svg')}}'" alt="smartphone">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Online Shopping</h5>
							<p class="info-box-text">Investigationes demonstraverunt lectores legere me lius quod.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/music%20(1).svg')}}" alt="smartphone">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Multimedia Archives</h5>
							<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/settings%20(4).svg')}}" alt="smartphone">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Quick Settings</h5>
							<p class="info-box-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/alarm.svg')}}" alt="alarm">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Push Notifications</h5>
							<p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/cloud-computing%20(1).svg')}}" alt="alarm">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Cloud Integration</h5>
							<p class="info-box-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/chat1.svg')}}" alt="alarm">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Private Chat</h5>
							<p class="info-box-text">Investigationes demonstraverunt lectores legere me lius quod.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--classic" data-mh="box--classic">
						<div class="info-box-image">
							<img class="utouch-icon" src="{{asset('frontAsset/svg-icons/chat1.svg')}}" alt="alarm">
						</div>
						<div class="info-box-content">
							<h5 class="info-box-title">Private Chat</h5>
							<p class="info-box-text">Investigationes demonstraverunt lectores legere me lius quod.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... Info Boxes -->
<!-- FAQS Slider -->
<section class="crumina-module crumina-module-slider pt100  bg-blue-lighteen  bg-13 background-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb30"style="margin-top: -40px; text-align:center; ">

                    <h3 class="spr">Feature Of KLHK MALINDO</h3>
                    <span>Our Smart Factory Solution has the capability to connect multiple sensors to monitor the status, automate, collect data, analyze it and derive useful insights to improve manufacturing operations.</span>
                    {{-- <hr style="text-align:center; width: 12%; height:7px; background-color: #273f5b; border-radius:4px; margin-top:-25px;"> --}}

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-container navigation-bottom" data-effect="fade">
                    <div class="slider-slides" style="text-align: center">
                        @foreach ($data['portfolios'] as $portfolio)

                        <a href="#" class="slides-item">
                            {{$loop->iteration}}
                        </a>
                        @endforeach

                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($data['portfolios'] as $portfolio)

                        <div class="swiper-slide">
                            <div class="col-lg-7 col-md-12 col-sm-12" data-swiper-parallax="-100">
                                <div class="slider-faqs-thumb">
                                    <img style="height: 20rem;" src="{{asset('storage/'.$portfolio->image)}}" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12" data-swiper-parallax="-300">
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

	<!-- Accordion -->

	<section class="medium-padding120">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<div class="crumina-module crumina-heading align-center">
						<h2 class="heading-title">
							<span class="c-primary">FAQ</span> the app, challenge your teammates</h2>
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

</div>

@endsection
