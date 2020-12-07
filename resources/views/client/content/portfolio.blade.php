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

							<li role="presentation" class="tab-control">
								<a href="#curriculum" id="curriculum-tab" role="tab" data-toggle="tab" aria-controls="curriculum" class="control-item nav-link" aria-selected="false">Curriculum</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#instructors" id="instructors-tab" role="tab" data-toggle="tab" aria-controls="instructors" class="control-item nav-link" aria-selected="false">Instructors</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#reviews" id="reviews-tab" role="tab" data-toggle="tab" aria-controls="reviews" class="control-item nav-link" aria-selected="false">Reviews (3)</a>
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
							<div role="tabpanel" class="tab-pane fade" id="curriculum" aria-labelledby="curriculum-tab">
								<h3>Curriculum</h3>
								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
									litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo
									typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Claritas est
									etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum eleifend option
									congue nihil imperdiet.
								</p>
								<ul class="curriculum-list">
									<li>
										<div class="lection">
											<svg class="utouch-icon utouch-icon-play-button-2"><use xlink:href="#utouch-icon-play-button-2"></use></svg>
											<a href="#" class="h6 title">Lectores legere me lius quod est etiam processus dynamicus</a>
											<a href="#" class="btn btn-x-small btn--green-light">
												Preview
											</a>
										</div>
										<div class="lection-time">
											<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
											60 min
										</div>
									</li>
									<li>
										<div class="lection">
											<svg class="utouch-icon utouch-icon-copy"><use xlink:href="#utouch-icon-copy"></use></svg>
											<a href="#" class="h6 title">Eodem modo typi, qui nunc nobis videntur parum</a>
										</div>
										<div class="lection-time">
											<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
											30 min
										</div>
									</li>
									<li>
										<div class="lection">
											<svg class="utouch-icon utouch-icon-musical-note-2"><use xlink:href="#utouch-icon-musical-note-2"></use></svg>
											<a href="#" class="h6 title">Nam liber tempor cum soluta</a>
											<a href="#" class="btn btn-x-small btn--green-light">
												Preview
											</a>
										</div>
										<div class="lection-time">
											<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
											45 min
										</div>
									</li>
									<li>
										<div class="lection">
											<svg class="utouch-icon utouch-icon-picture"><use xlink:href="#utouch-icon-picture"></use></svg>
											<a href="#" class="h6 title">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</a>
										</div>
										<div class="lection-time">
											<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
											20 min
										</div>
									</li>
									<li>
										<div class="lection">
											<svg class="utouch-icon utouch-icon-copy"><use xlink:href="#utouch-icon-copy"></use></svg>
											<a href="#" class="h6 title">Nam liber tempor cum soluta</a>
										</div>
										<div class="lection-time">
											<svg class="utouch-icon utouch-icon-clock-1"><use xlink:href="#utouch-icon-clock-1"></use></svg>
											45 min
										</div>
									</li>
								</ul>
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
							<div role="tabpanel" class="tab-pane fade" id="instructors" aria-labelledby="instructors-tab">

								<h3>Meet Our Instructors</h3>
								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
									litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi,
									qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Claritas est etiam
									processus dynamicus, qui sequitur mutationem consuetudium lectorum eleifend option
									congue nihil imperdiet.
								</p>

								<div class="row">

									<div class="testimonials-wrap">
										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-quote-right" data-mh="test-item">
												<div class="testimonial-img-author">
													<img src="{{asset('frontAsset/img/author7.png')}}" alt="author">
													<a href="#" class="social__item main item--small">
														<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
													</a>

													<div class="share-product share-product--item-right">

														<ul class="socials">
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

															<li>
																<a href="#" class="social__item rss">
																	<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.8 16C12.8 8.978 7.022 3.2 0 3.2V0c8.777 0 16 7.223 16 16h-3.2zM2.194 11.61c1.21 0 2.195.985 2.195 2.196 0 1.21-.99 2.194-2.2 2.194C.98 16 0 15.017 0 13.806c0-1.21.983-2.195 2.194-2.195zM10.606 16h-3.11c0-4.113-3.383-7.497-7.496-7.497v-3.11c5.818 0 10.606 4.79 10.606 10.607z"/></svg>
																</a>
															</li>
														</ul>

													</div>
												</div>

												<div class="author-info">
													<a href="#" class="h6 author-name">Jonathan Miller</a>
													<div class="author-company">Web Developer</div>
												</div>

												<h6 class="testimonial-text">
													Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est.
												</h6>

												<a href="#" class="btn btn-x-small btn--grey-light btn--with-icon btn-reverse-bg-green">
													<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
													<div class="text">
														<span class="title">Message</span>
													</div>
												</a>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-quote-right" data-mh="test-item">
												<div class="testimonial-img-author">
													<img src="{{asset('frontAsset/img/author8.png')}}" alt="author">
													<a href="#" class="social__item main item--small">
														<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
													</a>

													<div class="share-product share-product--item-right">

														<ul class="socials">
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

															<li>
																<a href="#" class="social__item rss">
																	<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.8 16C12.8 8.978 7.022 3.2 0 3.2V0c8.777 0 16 7.223 16 16h-3.2zM2.194 11.61c1.21 0 2.195.985 2.195 2.196 0 1.21-.99 2.194-2.2 2.194C.98 16 0 15.017 0 13.806c0-1.21.983-2.195 2.194-2.195zM10.606 16h-3.11c0-4.113-3.383-7.497-7.496-7.497v-3.11c5.818 0 10.606 4.79 10.606 10.607z"/></svg>
																</a>
															</li>
														</ul>

													</div>
												</div>

												<div class="author-info">
													<a href="#" class="h6 author-name">Britney Simpson</a>
													<div class="author-company">Manager</div>
												</div>

												<h6 class="testimonial-text">
													Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est.
												</h6>

												<a href="#" class="btn btn-x-small btn--grey-light btn--with-icon btn-reverse-bg-green">
													<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
													<div class="text">
														<span class="title">Message</span>
													</div>
												</a>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-quote-right" data-mh="test-item">
												<div class="testimonial-img-author">
													<img src="{{asset('frontAsset/img/author9.png')}}" alt="author">
													<a href="#" class="social__item main item--small">
														<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
													</a>

													<div class="share-product share-product--item-right">

														<ul class="socials">
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

															<li>
																<a href="#" class="social__item rss">
																	<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.8 16C12.8 8.978 7.022 3.2 0 3.2V0c8.777 0 16 7.223 16 16h-3.2zM2.194 11.61c1.21 0 2.195.985 2.195 2.196 0 1.21-.99 2.194-2.2 2.194C.98 16 0 15.017 0 13.806c0-1.21.983-2.195 2.194-2.195zM10.606 16h-3.11c0-4.113-3.383-7.497-7.496-7.497v-3.11c5.818 0 10.606 4.79 10.606 10.607z"/></svg>
																</a>
															</li>
														</ul>

													</div>
												</div>

												<div class="author-info">
													<a href="#" class="h6 author-name">Christian Bush</a>
													<div class="author-company">JS Developer</div>
												</div>

												<h6 class="testimonial-text">
													Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est.
												</h6>

												<a href="#" class="btn btn-x-small btn--grey-light btn--with-icon btn-reverse-bg-green">
													<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
													<div class="text">
														<span class="title">Message</span>
													</div>
												</a>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-quote-right" data-mh="test-item">
												<div class="testimonial-img-author">
													<img src="{{asset('frontAsset/img/author9.png')}}" alt="author">
													<a href="#" class="social__item main item--small">
														<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
													</a>

													<div class="share-product share-product--item-right">

														<ul class="socials">
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

															<li>
																<a href="#" class="social__item rss">
																	<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.8 16C12.8 8.978 7.022 3.2 0 3.2V0c8.777 0 16 7.223 16 16h-3.2zM2.194 11.61c1.21 0 2.195.985 2.195 2.196 0 1.21-.99 2.194-2.2 2.194C.98 16 0 15.017 0 13.806c0-1.21.983-2.195 2.194-2.195zM10.606 16h-3.11c0-4.113-3.383-7.497-7.496-7.497v-3.11c5.818 0 10.606 4.79 10.606 10.607z"/></svg>
																</a>
															</li>
														</ul>

													</div>
												</div>

												<div class="author-info">
													<a href="#" class="h6 author-name">Jane Nguyen</a>
													<div class="author-company">Copyrighter</div>
												</div>

												<h6 class="testimonial-text">
													Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est.
												</h6>

												<a href="#" class="btn btn-x-small btn--grey-light btn--with-icon btn-reverse-bg-green">
													<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
													<div class="text">
														<span class="title">Message</span>
													</div>
												</a>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="crumina-module crumina-testimonial-item testimonial-item-quote-right" data-mh="test-item">
												<div class="testimonial-img-author">
													<img src="{{asset('frontAsset/img/author7.png')}}" alt="author">
													<a href="#" class="social__item main item--small">
														<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
													</a>

													<div class="share-product share-product--item-right">

														<ul class="socials">
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

															<li>
																<a href="#" class="social__item rss">
																	<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M12.8 16C12.8 8.978 7.022 3.2 0 3.2V0c8.777 0 16 7.223 16 16h-3.2zM2.194 11.61c1.21 0 2.195.985 2.195 2.196 0 1.21-.99 2.194-2.2 2.194C.98 16 0 15.017 0 13.806c0-1.21.983-2.195 2.194-2.195zM10.606 16h-3.11c0-4.113-3.383-7.497-7.496-7.497v-3.11c5.818 0 10.606 4.79 10.606 10.607z"/></svg>
																</a>
															</li>
														</ul>

													</div>
												</div>

												<div class="author-info">
													<a href="#" class="h6 author-name">Chris Brown</a>
													<div class="author-company">Graphic Designer</div>
												</div>

												<h6 class="testimonial-text">
													Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt est.
												</h6>

												<a href="#" class="btn btn-x-small btn--grey-light btn--with-icon btn-reverse-bg-green">
													<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
													<div class="text">
														<span class="title">Message</span>
													</div>
												</a>
											</div>
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
							<div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<h3>Reviews</h3>
									<p class="weight-bold">Quam nunc putamus parum claram, anteposuerit litterarum formas
										humanitatis per seacula quarta decima et quinta decima modo.
									</p>

									<ul class="reviews-list">
										<li class="crumina-module crumina-reviews-item">

											<div class="reviews-thumb">
												<img src="{{asset('frontAsset/img/teammember8.jpg')}}" alt="review author">
											</div>

											<div class="reviews-content">

												<div class="author-rait-wrap">
													<a href="#" class="h6 reviews-item-name">Susan Meyer</a>
													<ul class="rait-stars">
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
															</a>
														</li>
													</ul>
												</div>

												<h6 class="title">Gectores legere me lius quod usus legentis</h6>

												<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
													lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
													anteposuerit litterarum formas humanitatis per seacula quarta decima et
													quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
													sollemnes in futurum.
												</p>

											</div>
										</li>
										<li class="crumina-module crumina-reviews-item">

											<div class="reviews-thumb">
												<img src="{{asset('frontAsset/img/teammember7.jpg')}}" alt="review author">
											</div>

											<div class="reviews-content">

												<div class="author-rait-wrap">
													<a href="#" class="h6 reviews-item-name">Doe Simpson</a>
													<ul class="rait-stars">
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
															</a>
														</li>
													</ul>
												</div>

												<h6 class="title">Claritas est etiam processus</h6>

												<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
													anteposuerit litterarum formas humanitatis per seacula quarta decima et
													quinta decima. Eodem modo typi, qui nunc nobis videntur.
												</p>

											</div>
										</li>
										<li class="crumina-module crumina-reviews-item">

											<div class="reviews-thumb">
												<img src="{{asset('frontAsset/img/teammember6.jpg')}}" alt="review author">
											</div>

											<div class="reviews-content">

												<div class="author-rait-wrap">
													<a href="#" class="h6 reviews-item-name">Jane Nguyen</a>
													<ul class="rait-stars">
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
															</a>
														</li>
														<li>
															<a href="#">
																<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
															</a>
														</li>
													</ul>
												</div>

												<h6 class="title">Typi non habent claritatem insitam</h6>

												<p>Qst etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
													Mirum est notare quam littera gothica, quam nunc putamus parum claram,
													anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
												</p>

											</div>
										</li>
									</ul>
								</div>
								<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
									<div class="raiting-details">
										<h2 class="overall-rating c-yellow">4.86</h2>
										<h6 class="title">Average Rating</h6>
										<ul class="rait-stars">
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
												</a>
											</li>
										</ul>
										<p class="text">4.86 average based on 3 ratings.</p>

										<div class="skills">
											<div class="skills-item">
												<div class="skills-item-info">
													<span class="skills-item-title">5 Stars</span>
													<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="5" data-from="0"></span></span>
												</div>
												<div class="skills-item-meter">
													<span class="skills-item-meter-active bg-yellow" style="width: 100%"></span>
												</div>
											</div>

											<div class="skills-item">
												<div class="skills-item-info">
													<span class="skills-item-title">4 Stars</span>
													<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="1" data-from="0"></span></span>
												</div>

												<div class="skills-item-meter">
													<span class="skills-item-meter-active bg-yellow" style="width: 20%"></span>
												</div>
											</div>

											<div class="skills-item">
												<div class="skills-item-info">
													<span class="skills-item-title">3 Stars</span>
													<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="0" data-from="0"></span></span>
												</div>

												<div class="skills-item-meter">
													<span class="skills-item-meter-active bg-yellow" style="width: 0%"></span>
												</div>
											</div>

											<div class="skills-item">
												<div class="skills-item-info">
													<span class="skills-item-title">2 Stars</span>
													<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="0" data-from="0"></span></span>
												</div>

												<div class="skills-item-meter">
													<span class="skills-item-meter-active bg-yellow" style="width: 0%"></span>
												</div>
											</div>

											<div class="skills-item">
												<div class="skills-item-info">
													<span class="skills-item-title">1 Stars</span>
													<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="0" data-from="0"></span></span>											</div>

												<div class="skills-item-meter">
													<span class="skills-item-meter-active bg-yellow" style="width: 0%"></span>
												</div>
											</div>
										</div>
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
	</section>

	<!-- ... end Course Details -->


	<!-- Curriculum Events -->

	<section class="crumina-module crumina-module-slider medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>You May Also Like</h3>

					<div class="swiper-container top-navigation" data-show-items="3">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="curriculum-event c-green"  >
										<div class="curriculum-event-thumb">
											<img src="{{asset('frontAsset/img/curriculum1.jpg')}}" alt="image">
											<div class="category-link c-lime-light">Course</div>
											<div class="curriculum-event-content">
												<div class="author-block inline-items">
													<div class="author-avatar">
														<img src="{{asset('frontAsset/img/author1.jpg')}}" alt="author">
													</div>
													<div class="author-info">
														<div class="author-prof">Speaker</div>
														<a href="#" class="h6 author-name">Frank Doe</a>
													</div>
												</div>
											</div>
											<div class="overlay-standard overlay--green"></div>
										</div>
										<div class="curriculum-event-content">
											<div class="icon-text-item display-flex">
												<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
												<div class="text">January 3-6, Kiev</div>
											</div>
											<a href="09_events_details_conference_workshops.html" class="h5 title">Lorem ipsum dolor sit amet</a>
										</div>
									</div>
							</div>
							<div class="swiper-slide">
								<div class="curriculum-event c-primary"  >
										<div class="curriculum-event-thumb">
											<img src="{{asset('frontAsset/img/curriculum2.jpg')}}" alt="image">
											<div class="category-link c-primary">Presentation</div>
											<div class="curriculum-event-content">
												<div class="author-block inline-items">
													<div class="author-avatar">
														<img src="{{asset('frontAsset/img/author1.jpg')}}" alt="author">
													</div>
													<div class="author-info">
														<div class="author-prof">Speaker</div>
														<a href="#" class="h6 author-name">Frank Doe</a>
													</div>
												</div>
											</div>
											<div class="overlay-standard overlay--blue"></div>
										</div>
										<div class="curriculum-event-content">
											<div class="icon-text-item display-flex">
												<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
												<div class="text">April 10-13, Berlin</div>
											</div>
											<a href="09_events_details_conference_workshops.html" class="h5 title">Nam liber tempor cum soluta nobis est</a>
										</div>
									</div>
							</div>
							<div class="swiper-slide">
								<div class="curriculum-event c-yellow"  >
										<div class="curriculum-event-thumb">
											<img src="{{asset('frontAsset/img/curriculum3.jpg')}}" alt="image">
											<div class="category-link c-yellow-light">Training</div>
											<div class="curriculum-event-content">
												<div class="author-block inline-items">
													<div class="author-avatar">
														<img src="{{asset('frontAsset/img/author1.jpg')}}" alt="author">
													</div>
													<div class="author-info">
														<div class="author-prof">Speaker</div>
														<a href="#" class="h6 author-name">Frank Doe</a>
													</div>
												</div>
											</div>
											<div class="overlay-standard overlay--yellow"></div>
										</div>
										<div class="curriculum-event-content">
											<div class="icon-text-item display-flex">
												<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
												<div class="text">May 17-19, California</div>
											</div>
											<a href="09_events_details_conference_workshops.html" class="h5 title">Nam liber tempor cum soluta nobis est</a>
										</div>
									</div>
							</div>
						</div>
						<div class="btn-slider-wrap navigation-top-right">

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

	<!-- ... end Curriculum Events -->

</div>
@endsection
