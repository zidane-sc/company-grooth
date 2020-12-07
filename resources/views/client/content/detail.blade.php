@extends('client.layout.app')

 @section('content')
 <style>
     .p30{
         padding: 30px;
     }
 </style>
 <div class="content-wrapper">

	<!-- Breadcrcumbs -->

	<div class="container p30">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="#" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="index-2.html">Article</a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					<li class="breadcrumbs-item active">
						<span>Detail</span>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- ... end Breadcrcumbs -->


	<!-- Blog posts-->

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

					<div class="post-thumb">
						<img src="{{asset('frontAsset/img/blog1.jpg')}}" alt="post">
					</div>

					<div class="post__content">

						<a href="#" class="social__item main">
							<svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
						</a>

						<div class="share-product">

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

						<div class="post__date">

							<time class="published" datetime="2017-03-20 12:00:00">
								<a href="#" class="number">20</a>
								<span class="month">March 2017</span>
								<span class="day">Monday</span>
							</time>

						</div>

						<div class="post__content-info">

							<h3 class="post__title entry-title">The Important Standard Post Format</h3>

							<div class="post-additional-info">
								<span class="post__author author vcard">
									By
									<a href="#" class="fn">Admin</a>
								</span>
								<span class="category">
									In
									<a href="16_news.html">News</a>
								</span>
								<span class="post__comments">
									<a href="#">6 <span>Comments</span></a>
								</span>
							</div>

						</div>

						<p class="weight-bold">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurumlaritas est etiam processus.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
							ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
							tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
							iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
							nulla facilisis.
						</p>
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>


						<blockquote>
							<p>Claritas est etiam processus dynamicus, mutationem consuetudium lectorum.</p>
							<h6><span>Christian Miller</span>
								Web Developer</h6>
						</blockquote>

						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
							aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit
							esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
							iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait
							nulla facilisi.
						</p>

						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>

						<img src="{{asset('frontAsset/img/image-post.png')}}" alt="image" class="alignleft">
						<h5>Duis autem vel eum iriure</h5>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
						<ul class="list list--standard">
							<li>
								<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
								<a href="#">Qolor sit amet, consectetuer;</a>
							</li>
							<li>
								<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
								<a href="#">Investigationes demonstraverunt;</a>
							</li>
							<li>
								<svg class="utouch-icon utouch-icon-correct-symbol-1"><use xlink:href="#utouch-icon-correct-symbol-1"></use></svg>
								<a href="#">Dam liber tempor cum soluta</a>
							</li>
						</ul>

						<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas
							est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
							quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis
							per seacula quarta decima et quinta decima.
						</p>

						<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Claritas
							est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum eleifend option.
						</p>

						<div class="post-details-shared">
							<ul class="tags-inline">
								<li>Tags:</li>
								<li>
									<a href="#">
										Entrepreneur
									</a>
									,
								</li>
								<li>
									<a href="#">
										Innovation
									</a>
									,
								</li>
								<li>
									<a href="#">
										Startup
									</a>
									,
								</li>

								<li>
									<a href="#">
										Tech
									</a>
									,
								</li>
								<li>
									<a href="#">
										Trends
									</a>
								</li>
							</ul>

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

				</article>

				{{-- <div class="blog-details-author">

					<div class="img-author">
						<img src="img/author2.png" alt="author">
					</div>
					<div class="author-info">
						<a href="#" class="h6 author-name">Jonathan Millere</a>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
					</div>

					<ul class="socials socials--round socials--colored">
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

				</div> --}}



				{{-- <div class="pagination-arrow">

					<a href="#" class="btn-prev-wrap">
						<div class="btn-prev">
							<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
							<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
						</div>
						<div class="btn-content">
							<div class="btn-content-title">Next Post</div>
							<p class="btn-content-subtitle">Standard Post Format...</p>
						</div>
					</a>

					<a class="list-post" href="#">
						<svg class="utouch-icon utouch-icon-menu-1"><use xlink:href="#utouch-icon-menu-1"></use></svg>
					</a>

					<a href="#" class="btn-next-wrap">
						<div class="btn-content">
							<div class="btn-content-title">Previous Post</div>
							<p class="btn-content-subtitle">Video Post Format...</p>
						</div>
						<div class="btn-next">
							<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
							<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
						</div>
					</a>

				</div> --}}

				{{-- <div class="comments">

					<div class="d-flex--content-inline">
						<h3>6 Comments</h3>

						<a href="#" class="btn btn--green">
							<span class="text">Leave a Comment</span>
						</a>
					</div>

					<ol class="comments__list">

						<li class="comments__item">

							<div class="comment-entry comment comments__article">

								<div class="comments__avatar">

									<img src="img/author3.png" alt="avatar">

								</div>


								<div class="comments__body">

									<div class="d-flex--content-inline">

										<header class="comment-meta comments__header">

											<cite class="fn url comments__author">
												<a href="#" rel="external" class="h6">Susan Simpson</a>
											</cite>

											<div class="comments__time">
												<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
											</div>

										</header>

										<a href="#" class="btn reply">reply</a>
									</div>

									<div class="comment-content comment">
										<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
											lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
											anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
										</p>
									</div>

								</div>

							</div>
						</li>

						<li class="comments__item">

							<div class="comment-entry comment comments__article">

								<div class="comments__avatar">

									<img src="img/author4.png" alt="avatar">

								</div>


								<div class="comments__body">

									<div class="d-flex--content-inline">

										<header class="comment-meta comments__header">

											<cite class="fn url comments__author">
												<a href="#" rel="external" class="h6">Doe Meyer</a>
											</cite>

											<div class="comments__time">
												<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
											</div>

										</header>

										<a href="#" class="btn reply">reply</a>
									</div>

									<div class="comment-content comment">
										<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
											litterarum formas humanitatis per seacula quarta decima et quinta decima.
										</p>
									</div>

								</div>

							</div>

							<ol class="children">

								<li class="comments__item">

									<div class="comment-entry comment comments__article">

										<div class="comments__avatar">

											<img src="img/author8.png" alt="avatar">

										</div>


										<div class="comments__body">

											<div class="d-flex--content-inline">

												<header class="comment-meta comments__header">

													<cite class="fn url comments__author">
														<a href="#" rel="external" class="h6">Jane Nguyen</a>
													</cite>

													<div class="comments__time">
														<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
													</div>

												</header>

												<a href="#" class="btn reply">reply</a>
											</div>

											<div class="comment-content comment">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
													nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
													suscipit lobortis nisl ut aliquip.
												</p>
											</div>

										</div>

									</div>

									<ol class="children">

										<li class="comments__item">

											<div class="comment-entry comment comments__article">

												<div class="comments__avatar">

													<img src="img/author7.png" alt="avatar">

												</div>


												<div class="comments__body">

													<div class="d-flex--content-inline">

														<header class="comment-meta comments__header">

															<cite class="fn url comments__author">
																<a href="#" rel="external" class="h6">Jonathan Miller</a>
															</cite>

															<div class="comments__time">
																<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
															</div>

														</header>

														<a href="#" class="btn reply">reply</a>
													</div>

													<div class="comment-content comment">
														<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
													</div>

												</div>

											</div>
										</li>

									</ol>
								</li>

							</ol>
						</li>

						<li class="comments__item">

							<div class="comment-entry comment comments__article">

								<div class="comments__avatar">

									<img src="img/author3.png" alt="avatar">

								</div>


								<div class="comments__body">

									<div class="d-flex--content-inline">

										<header class="comment-meta comments__header">

											<cite class="fn url comments__author">
												<a href="#" rel="external" class="h6">Susan Simpson</a>
											</cite>

											<div class="comments__time">
												<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
											</div>

										</header>

										<a href="#" class="btn reply">reply</a>
									</div>

									<div class="comment-content comment">
										<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
											lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
											anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
										</p>
									</div>

								</div>

							</div>
						</li>

						<li class="comments__item">

							<div class="comment-entry comment comments__article">

								<div class="comments__avatar">

									<img src="img/author4.png" alt="avatar">

								</div>


								<div class="comments__body">

									<div class="d-flex--content-inline">

										<header class="comment-meta comments__header">
											<cite class="fn url comments__author">
												<a href="#" rel="external" class="h6">Doe Meyer</a>
											</cite>

											<div class="comments__time">
												<time class="published" datetime="2017-03-19 10:07:00">19th March 2017, 10:07 am</time>
											</div>

										</header>

										<a href="#" class="btn reply">reply</a>
									</div>

									<div class="comment-content comment">
										<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
											litterarum formas humanitatis per seacula quarta decima et quinta decima.
										</p>
									</div>

								</div>

							</div>
						</li>
					</ol>

					<form class="form-validate contact-form leave-reply" method="post">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h3>Leave a Comment</h3>
						</div>

						<div class="row">

							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="with-icon">
									<input name="name" placeholder="Your Name" type="text">
									<svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
								</div>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="with-icon">
									<input name="email" placeholder="Email Adress" type="text">
									<svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="with-icon">
									<textarea name="message" class="" required="" placeholder="Your Message" style="min-height: 160px;"></textarea>
									<svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
								</div>
							</div>

							<div class="submit-block">
								<div class="col-lg-4">
									<a href="#" class="btn btn--large btn--green btn--with-shadow full-width">
										<span class="text">Submit</span>
									</a>
								</div>
								<div class="col-lg-8">
									<div class="submit-block-text">
										You may use these HTML tags and attributes: <span> &lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
										&lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt;
										&lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </span>
									</div>
								</div>

							</div>

						</div>
					</form>
				</div> --}}


			</div>


			<!-- Sidebar-->

			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar sidebar-right">

					<aside class="widget w-search">
						<h5 class="widget-title">Search form</h5>
						<form method="get">
							<div class="with-icon">
								<input name="name" placeholder="Type and hit Enter..." type="text">
								<svg class="utouch-icon utouch-icon-search"><use xlink:href="#utouch-icon-search"></use></svg>
							</div>
						</form>
					</aside>

					<aside class="widget w-about">
						<div class="site-logo">
							<a href="index-2.html" class="full-block"></a>
							<img src="{{asset('frontAsset/img/logo.png')}}" alt="Utouch">
							<div class="logo-text">
								<div class="logo-title">Utouch</div>
								<div class="logo-sub-title">app startup</div>
							</div>
						</div>

						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
							notare quam littera gothica, putamus parum claram, anteposuerit formas.
						</p>

						<a href="index-2.html" class="btn btn-border btn--with-shadow c-primary">
							read more
						</a>
					</aside>

					<aside class="widget w-category">
						<h5 class="widget-title">Categories</h5>
						<ul class="category-list">
							<li>
								<a href="#">Entrepreneur
									<span class="cat-count">39</span>
								</a>
							</li>
							<li>
								<a href="#">Innovation
									<span class="cat-count">632</span>
								</a>
							</li>
							<li>
								<a href="#">Startup
									<span class="cat-count">8</span>
								</a>
							</li>
							<li>
								<a href="#">Strategy
									<span class="cat-count">24</span>
								</a>
							</li>
							<li>
								<a href="#">Tech
									<span class="cat-count">2</span>
								</a>
							</li>
							<li>
								<a href="#">Marketing
									<span class="cat-count">16</span>
								</a>
							</li>
							<li>
								<a href="#">Trends
									<span class="cat-count">9</span>
								</a>
							</li>
						</ul>
					</aside>

					<aside class="widget w-popular-products crumina-module crumina-module-slider">
						<h5 class="widget-title">Popular Projects</h5>
						<div class="swiper-container">

							<div class="swiper-wrapper">

								<div class="swiper-slide product-item">
									<div class="product-item-thumb">
										<div class="square-colored bg-product-blue-dark"></div>
										<img src="{{asset('frontAsset/img/case5.jpg')}}" alt="product">
									</div>
									<div class="product-item-content">
										<h6 class="title">Duis autem vel eum iriure dolor in hendrerit in vulputate</h6>
									</div>
								</div>

								<div class="swiper-slide product-item">
									<div class="product-item-thumb">
										<div class="square-colored bg-product-blue"></div>
										<img src="{{asset('frontAsset/img/case1.jpg')}}" alt="product">
									</div>
									<div class="product-item-content">
										<h6 class="title">Duis autem dolor in hendrerit in vulputate</h6>
									</div>
								</div>

								<div class="swiper-slide product-item">
									<div class="product-item-thumb">
										<div class="square-colored bg-product-violet"></div>
										<img src="{{asset('frontAsset/img/case2.jpg')}}" alt="product">
									</div>
									<div class="product-item-content">
										<h6 class="title">Duis autem vel eum iriure dolor in hendrerit in vulputate</h6>
									</div>
								</div>
							</div>
							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>

						</div>
					</aside>




					<aside class="widget w-latest-news">
						<h5 class="widget-title">Latest News</h5>

						<ul class="nav nav-tabs latest-news-control" role="tablist">

							<li role="presentation" class="tab-control">
								<a href="#latest" id="latest-tab" role="tab" data-toggle="tab" aria-controls="latest" class="control-item nav-link active" aria-selected="true">Latest</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#popular" id="popular-tab" role="tab" data-toggle="tab" aria-controls="popular" class="control-item nav-link" aria-selected="false">Popular</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#comments" id="comments-tab" role="tab" data-toggle="tab" aria-controls="comments" class="control-item nav-link" aria-selected="false">Comments</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="latest" aria-labelledby="latest-tab">
								<ul class="latest-news-list">
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news1.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Video Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-23T16:31:34+00:00">23 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news2.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">The Important Standard Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-16T16:31:34+00:00">16 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news3.png')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Quote Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-28T16:31:34+00:00">28 February 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news4.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Photo with Slider Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-02T16:31:34+00:00">2 February 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news5.png')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Link Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-01-18T16:31:34+00:00">18 January 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>

								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="popular" aria-labelledby="popular-tab">
								<ul class="latest-news-list">
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news2.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">The Important Standard Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-16T16:31:34+00:00">16 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news3.png')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Quote Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-28T16:31:34+00:00">28 February 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news1.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Video Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-23T16:31:34+00:00">23 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news4.jpg')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Photo with Slider Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-02T16:31:34+00:00">2 February 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset('frontAsset/img/l-news5.png')}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Link Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-01-18T16:31:34+00:00">18 January 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>

								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="comments" aria-labelledby="comments-tab">
								<p class="product-description-text">
									Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
								</p>
							</div>
						</div>


					</aside>






				</aside>


			</div>

			<!-- End Sidebar-->

		</div>
	</div>

	<!-- End Blog posts-->

</div>

@endsection
