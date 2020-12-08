@extends('client.layout.app')

 @section('content')
 <div class="content-wrapper">


	<!-- Stunning Header -->

	<div class="crumina-stunning-header stunning-bg-5 stunning-header--content-center stunning-header--bg-photo stunning-header--min640 custom-color c-white fill-white">
		<div class="container">
			<div class="stunning-header-content">
				<h6 class="category-link c-lime-light">Courcse</h6>
				<h2 class="h1 stunning-header-title">Investigationes demonstraverunt lectores legere quam nunc putamus</h2>
				<div class="inline-items">
					<div class="author-block inline-items">
						<div class="author-avatar">
							<img src="{{asset('frontAsset/img/author1.jpg')}}" alt="author">
						</div>
						<div class="author-info">
							<div class="author-prof">Speaker</div>
							<h6 class="author-name">Frank Doe</h6>
						</div>
					</div>
					<div class="icon-text-item inline-items">
						<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
						<div class="text">June 25-27, Melbourne</div>
					</div>
					<a href="10_events_details_course.html" class="btn btn--large btn--orange-light btn--with-shadow f-right">
						Take This Course
					</a>
				</div>
			</div>
		</div>

		<div class="overlay-standard overlay--green"></div>
	</div>

	<!-- ... end Stunning Header -->


	<!-- Course Details -->

	<section class="negative-margin-top80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="course-details">

						<ul class="nav nav-tabs course-details-control" role="tablist">

							<li role="presentation" class="tab-control">
								<a href="#description" id="description-tab" role="tab" data-toggle="tab" aria-controls="description" class="control-item nav-link active" aria-selected="true">Description</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="description" aria-labelledby="description-tab">
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
											<ul class="course-features-list">
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-copy"><use xlink:href="#utouch-icon-copy"></use></svg>
														Lectures
													</div>
													<div class="value">6</div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
														Duration
													</div>
													<div class="value">69 hours</div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-upward-arrow"><use xlink:href="#utouch-icon-upward-arrow"></use></svg>
														Skill level
													</div>
													<div class="value">Beginner</div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-worlwide"><use xlink:href="#utouch-icon-worlwide"></use></svg>
														Language
													</div>
													<div class="value">English</div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-placeholder-4"><use xlink:href="#utouch-icon-placeholder-4"></use></svg>
														Location
													</div>
													<div class="value">95 South Park Avenue, NY</div>
												</li>
												<li>
													<div class="feature-item">
														<svg class="utouch-icon utouch-icon-users"><use xlink:href="#utouch-icon-users"></use></svg>
														Students
													</div>
													<div class="value">50</div>
												</li>
											</ul>
										</div>
									</div>

									<div class="post-details-shared">
										<div class="widget w-follow">
											<ul class="socials socials--round">

												<li>Share:</li>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Course Details -->

<!-- FAQS Slider -->
    <section class="crumina-module crumina-module-slider pt100  bg-light-color  bg-13 background-cover">
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
                                    <a href="{{$portfolio->link}}" target="_blank" class="btn btn-border btn--with-shadow c-black">
                                        Visit
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
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

    <!-- ... end FAQS Slider -->
    <!-- Slider with vertical tabs -->
<div class="" >
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line ">
                <div style="padding: 20px; margin-top:20px;" >
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
