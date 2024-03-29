@extends('client.layout.app')

 @section('content')
 <style>
     .pt30{
         padding: 30px;
     }
     .pt50{
         padding-top: 50px;
     }
 </style>
 <div class="content-wrapper">

	<!-- Breadcrcumbs -->

	<div class="container pt30">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="#" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="{{route('main.article')}}">Article</a>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

					<div class="post-thumb">
						<img src="{{asset('storage/'.$data['post']->thumbnail)}}" alt="post">
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

						<div class="post__content-info">

							<h3 class="post__title entry-title">{{ $data['post']->title }}</h3>

							<div class="post-additional-info">
								<span class="category">
									Category:
									<a href="{{route('main.category', $data['post']->category->slug)}}">{{ $data['post']->category->name }}</a>
								</span>
								<span class="post__comments">
									<a href="#"><span>Read By</span> {{ $data['post']->view }} <span>People</span></a>
								</span>
							</div>

						</div>

						<span style="word-wrap: break-word">{!! $data['post']->content !!}</span>

						<div class="post-details-shared">
							<ul class="tags-inline">
								<li>Tags: </li>
								@foreach ($data['post']->tags as $tag)
								@if($loop->last)
								<li>
									<a href="{{ route('main.tags', $tag->slug) }}">
										{{ $tag->name }}
									</a>
									@break
								</li>
								@endif
								<li>
									<a href="{{ route('main.tags', $tag->slug) }}">
										{{ $tag->name }}
									</a>
									,
								</li>
								@endforeach
							</ul>

							<div class="widget w-follow">
								<ul class="tags-inline">
									<li>Published:</li>
									{{ date('d F Y', strtotime($data['post']->created_at))}}
								</ul>
							</div>

							<div class="widget w-follow">
								<ul class="tags-inline">
									<li>Author:</li>
									{{ $data['post']->user->name  }}
								</ul>
							</div>

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
			</div>
		</div>


			<!-- Sidebar-->
        <div class="pt50">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar">
					<aside class="widget w-latest-news">
                        <h5 class="widget-title">Latest News</h5>
                        <hr >
                        <br>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="latest" aria-labelledby="latest-tab">
								<ul class="latest-news-list">
									@foreach ($data['latest'] as $latest)
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset($latest->thumbnail)}}">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="{{ route('main.detail', $latest->slug) }}">{{ $latest->title }}</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="{{ $latest->created_at }}">{{ date('d F Y', strtotime($latest->created_at))}}</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</aside>
				</aside>
			</div>
			<!-- End Sidebar-->

			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar">
					<aside class="widget w-latest-news">
                        <h5 class="widget-title">Popular</h5>
                        <hr >
                        <br>
						<div class="tab-content">
							<div   id="popular" aria-labelledby="popular-tab">
								<ul class="latest-news-list">
									@foreach ($data['popular'] as $popular)
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<div class="post-thumb">
													<img src="{{asset($popular->thumbnail)}}" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="{{ route('main.detail', $popular->slug) }}">{{ $popular->title }}</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="{{ $popular->created_at }}">{{ date('d F Y', strtotime($popular->created_at))}}</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									@endforeach
								</ul>
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
