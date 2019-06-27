@extends('layouts.app')

@section('content')
	@while(have_posts()) @php(the_post())
	<section id="banner">
		<div id="carousel-cover" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner">
				<div class="carousel-item page-1 active">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<!-- Carousel -->				
								<div class="col-md-5 align-self-md-center">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(9, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
								<div class="col-md-7 align-self-md-center">
									<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										{!! get_post(9)->post_content !!}										
										<a href="{{ get_post_meta(9, 'buy the book now link', true) }}" target="_blank"
										class="btn-style buy-book">{{ get_post_meta(9, 'buy the book now', true) }}</a>
										<img src="@asset('images/hand.png')" alt="Mary A. Lonergan" class="hand">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item page-2">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<!-- Carousel -->				
								<div class="col-md-5 align-self-md-center">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(180, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
								<div class="col-md-7 align-self-md-center">
									<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										{!! get_post(180)->post_content !!}										
										<a href="{{ get_post_meta(180, 'buy the book now link', true) }}" target="_blank"
										class="btn-style buy-book">{{ get_post_meta(180, 'buy the book now', true) }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item page-3">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<!-- Carousel -->				
								<div class="col-md-5 align-self-md-center">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(183, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
								<div class="col-md-7 align-self-md-center">
									<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										{!! get_post(183)->post_content !!}										
										<a href="{{ get_post_meta(183, 'buy the book now link', true) }}" target="_blank"
										class="btn-style buy-book">{{ get_post_meta(183, 'buy the book now', true) }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item page-4">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<!-- Carousel -->				
								<div class="col-md-5 align-self-md-center">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(188, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
								<div class="col-md-7 align-self-md-center">
									<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										{!! get_post(188)->post_content !!}										
										<a href="{{ get_post_meta(188, 'buy the book now link', true) }}" target="_blank"
										class="btn-style buy-book">{{ get_post_meta(188, 'buy the book now', true) }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#carousel-cover" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel-cover" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section><!-- /#banner -->
	<section id="book">
		<div id="BookCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
				<li data-target="#BookCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#BookCarousel" data-slide-to="1"></li>
				<li data-target="#BookCarousel" data-slide-to="2"></li>
				<li data-target="#BookCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="wrapper">				
							<div class="row">
								<div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">
									<div class="text-cont" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <span>THE BOOK</span></h2>
										{!! wpautop(get_post(11)->post_content) !!}
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-sm-1 order-1">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(11, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">				
							<div class="row">
								<div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(194)->post_content) !!}
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-sm-1 order-1">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(194, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">				
							<div class="row">
								<div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(198)->post_content) !!}
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-sm-1 order-1">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(198, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">				
							<div class="row">
								<div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(201)->post_content) !!}
									</div>
								</div>
								<div class="col-lg-6 col-md-12 order-lg-2 order-md-1 order-sm-1 order-1">
									<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
										{!! get_the_post_thumbnail(201, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

<div id="owl-demo" class="owl-carousel owl-theme">
	<section class="item">
		<div class="review-1">
			<div class="container">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-12">
							<div class="img-cont">
								<img src="@asset('images/review-head.png')" alt="">
							</div>
							<h2 class="text-center h2-inner">BOOK <span>REVIEWS</span></h2>
							<h3 class="text-center h3-inner">Catacombs of Hell</h3>
							<div id="review-1-inner" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									@php($count=1)
									@foreach ($book_reviews as $review)
										@if ($review['category']=="Catacombs of Hell")
										<div class="carousel-item @if ($count==1) active @endif">
											@php($count++)
											<div class="review-cont">
												{!! wpautop($review['content']) !!}
												<h3>— {{ $review['title'] }}
													@if(!empty($review['address']))
														<span>{{ $review['address'] }}</span>
													@endif
												</h3>
											</div>
										</div>
										@endif
									@endforeach
								</div>
								<ol class="carousel-indicators">
									@php($count=0)
									@foreach ($book_reviews as $review)
										@if ($review['category']=='Catacombs of Hell')
										<li data-target="#review-1-inner" data-slide-to="{{$count}}" @if ($count==0) class="active" @endif></li>
										@php($count++)
										@endif
									@endforeach
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="item">
		<div class="review-2">
			<div class="container">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-12">
							<div class="img-cont">
								<img src="@asset('images/review-head.png')" alt="">
							</div>
							<h2 class="text-center h2-inner">BOOK <span>REVIEWS</span></h2>
							<h3 class="text-center h3-inner">On the Winds of Australia</h3>
							<div id="review-2-inner" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									@php($count=1)
									@foreach ($book_reviews as $review)
										@if ($review['category']=="On the Winds of Australia")
										<div class="carousel-item @if ($count==1) active @endif">
											@php($count++)
											<div class="review-cont">
												{!! wpautop($review['content']) !!}
												<h3>— {{ $review['title'] }}
													@if(!empty($review['address']))
														<span>{{ $review['address'] }}</span>
													@endif
												</h3>
											</div>
										</div>
										@endif
									@endforeach
								</div>
								<ol class="carousel-indicators">
									@php($count=0)
									@foreach ($book_reviews as $review)
										@if ($review['category']=='Catacombs of Hell')
										<li data-target="#review-2-inner" data-slide-to="{{$count}}" @if ($count==0) class="active" @endif></li>
										@php($count++)
										@endif
									@endforeach
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="item">		
		<div class="review-3">
		<div class="container">
			<div class="wrapper">
					<div class="row">
						<div class="col-md-12">
							<div class="img-cont">
								<img src="@asset('images/review-head.png')" alt="">
							</div>
							<h2 class="text-center h2-inner">BOOK <span>REVIEWS</span></h2>
							<h3 class="text-center h3-inner">The Covehill Ladies</h3>
							<div id="review-3-inner" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									@php($count=1)
									@foreach ($book_reviews as $review)
										@if ($review['category']=="The Covehill Ladies")
										<div class="carousel-item @if ($count==1) active @endif">
											@php($count++)
											<div class="review-cont">
												{!! wpautop($review['content']) !!}
												<h3>— {{ $review['title'] }}
													@if(!empty($review['address']))
														<span>{{ $review['address'] }}</span>
													@endif
												</h3>
											</div>
										</div>
										@endif
									@endforeach
								</div>
								<ol class="carousel-indicators">
									@php($count=0)
									@foreach ($book_reviews as $review)
										@if ($review['category']=='The Covehill Ladies')
										<li data-target="#review-3-inner" data-slide-to="{{$count}}" @if ($count==0) class="active" @endif></li>
										@php($count++)
										@endif
									@endforeach
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="item">		
		<div class="review-4">
			<div class="container">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-12">
							<div class="img-cont">
								<img src="@asset('images/review-head.png')" alt="">
							</div>
							<h2 class="text-center h2-inner">BOOK <span>REVIEWS</span></h2>
							<h3 class="text-center h3-inner">Strangers Under Amazon's Canopy</h3>
							<div id="review-4-inner" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner" role="listbox">
									@php($count=1)
									@foreach ($book_reviews as $review)
										@if ($review['category']=='Strangers under Amazons Canopy')
										<div class="carousel-item @if ($count==1) active @endif">
											@php($count++)
											<div class="review-cont">
												{!! wpautop($review['content']) !!}
												<h3>— {{ $review['title'] }}
													@if(!empty($review['address']))
														<span>{{ $review['address'] }}</span>
													@endif
												</h3>
											</div>
										</div>
										@endif
									@endforeach
								</div>
								<ol class="carousel-indicators">
									@php($count=0)
									@foreach ($book_reviews as $review)
										@if ($review['category']=='Strangers under Amazons Canopy')
										<li data-target="#review-4-inner" data-slide-to="{{$count}}" @if ($count==0) class="active" @endif></li>
										@php($count++)
										@endif
									@endforeach
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	
	<section id="author">
		<div class="container">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-5 col-md-12">
						<div class="img-cont" data-aos="fade-up" data-aos-duration="1000">
							{!! get_the_post_thumbnail(13, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
						</div>
					</div>
					<div class="col-lg-7 col-md-12">
						<div class="author-bg">
							<img src="@asset('images/about-author.jpg')" alt="">
						</div>
						<div class="text-cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						<h2>{{ get_the_title(13) }}</h2>
							{!! wpautop(get_post(13)->post_content) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







	<section id="order">
		<div id="OrderCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">
				<li data-target="#OrderCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#OrderCarousel" data-slide-to="1"></li>
				<li data-target="#OrderCarousel" data-slide-to="2"></li>
				<li data-target="#OrderCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-2">
									<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
										<h2>EXCERPTS</h2>
										{!! wpautop(get_post(15)->post_content) !!}
									</div>
									<div class="book-store" data-aos="fade-up" data-aos-duration="1000">
											<span class="available">Book copies are available at</span>
											@isset($order_fields['litfire-link'])
												<a href="{{ $order_fields['litfire-link'] }}" target="_blank"
												class="litfire">{!! wp_get_attachment_image($order_fields['litfire-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields['amazon-link'])
												<a href="{{ $order_fields['amazon-link'] }}" target="_blank" class="amazon">
													{!! wp_get_attachment_image($order_fields['amazon-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields['barnes-noble-link'])
												<a href="{{ $order_fields['barnes-noble-link'] }}" target="_blank" class="barnes-noble">
													{!! wp_get_attachment_image($order_fields['barnes-noble-image'], 'full') !!}
												</a>
											@endisset
										</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-1 book-det">
									<div class="book-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										<div class="img-cont">
											{!! get_the_post_thumbnail(15, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
										</div>
										<div class="book-type">
											@isset($order_fields['paperback-link'])
												<a href="{{ $order_fields['paperback-link'] }}" target="_blank" class="btn-style">Paperback | {{ $order_fields['paperback-price'] }}</a>
											@endisset
										</div>
									</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-2">
									<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
										<h2 class="order-green">EXCERPTS</h2>
										{!! wpautop(get_post(224)->post_content) !!}
									</div>
									<div class="book-store" data-aos="fade-up" data-aos-duration="1000">
											<span class="available">Book copies are available at</span>
											@isset($order_fields1['litfire-link'])
												<a href="{{ $order_fields1['litfire-link'] }}" target="_blank"
												class="litfire">{!! wp_get_attachment_image($order_fields1['litfire-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields1['amazon-link'])
												<a href="{{ $order_fields1['amazon-link'] }}" target="_blank" class="amazon">
													{!! wp_get_attachment_image($order_fields1['amazon-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields1['barnes-noble-link'])
												<a href="{{ $order_fields1['barnes-noble-link'] }}" target="_blank" class="barnes-noble">
													{!! wp_get_attachment_image($order_fields1['barnes-noble-image'], 'full') !!}
												</a>
											@endisset
										</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-1 book-det">
									<div class="book-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										<div class="img-cont">
											{!! get_the_post_thumbnail(224, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
										</div>
										<div class="book-type">
											@isset($order_fields1['ebook-link'])
												<a href="{{ $order_fields1['ebook-link'] }}" target="_blank" class="btn-style btn-green">E-book | {{ $order_fields1['ebook-price'] }}</a>
											@endisset
											@isset($order_fields1['paperback-link'])
												<a href="{{ $order_fields1['paperback-link'] }}" target="_blank" class="btn-style btn-green">Paperback | {{ $order_fields1['paperback-price'] }}</a>
											@endisset
										</div>
									</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-2">
									<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
										<h2 class="order-green">EXCERPTS</h2>
										{!! wpautop(get_post(228)->post_content) !!}
									</div>
									<div class="book-store" data-aos="fade-up" data-aos-duration="1000">
											<span class="available">Book copies are available at</span>
											@isset($order_fields2['litfire-link'])
												<a href="{{ $order_fields2['litfire-link'] }}" target="_blank"
												class="litfire">{!! wp_get_attachment_image($order_fields2['litfire-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields2['amazon-link'])
												<a href="{{ $order_fields2['amazon-link'] }}" target="_blank" class="amazon">
													{!! wp_get_attachment_image($order_fields2['amazon-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields2['barnes-noble-link'])
												<a href="{{ $order_fields2['barnes-noble-link'] }}" target="_blank" class="barnes-noble">
													{!! wp_get_attachment_image($order_fields2['barnes-noble-image'], 'full') !!}
												</a>
											@endisset
										</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-1 book-det">
									<div class="book-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										<div class="img-cont">
											{!! get_the_post_thumbnail(228, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
										</div>
										<div class="book-type">
											@isset($order_fields2['paperback-link'])
												<a href="{{ $order_fields2['paperback-link'] }}" target="_blank" class="btn-style btn-green">Paperback | {{ $order_fields2['paperback-price'] }}</a>
											@endisset
										</div>
									</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<div class="col-lg-7 col-md-7 col-sm-12 order-lg-1 order-md-1 order-sm-2 order-2">
									<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
										<h2 class="order-green">EXCERPTS</h2>
										{!! wpautop(get_post(231)->post_content) !!}
									</div>
									<div class="book-store" data-aos="fade-up" data-aos-duration="1000">
											<span class="available">Book copies are available at</span>
											@isset($order_fields3['litfire-link'])
												<a href="{{ $order_fields3['litfire-link'] }}" target="_blank"
												class="litfire">{!! wp_get_attachment_image($order_fields3['litfire-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields3['amazon-link'])
												<a href="{{ $order_fields3['amazon-link'] }}" target="_blank" class="amazon">
													{!! wp_get_attachment_image($order_fields3['amazon-image'], 'full') !!}
												</a>
											@endisset

											@isset($order_fields3['barnes-noble-link'])
												<a href="{{ $order_fields3['barnes-noble-link'] }}" target="_blank" class="barnes-noble">
													{!! wp_get_attachment_image($order_fields3['barnes-noble-image'], 'full') !!}
												</a>
											@endisset
										</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 order-lg-2 order-md-2 order-sm-1 order-1 book-det">
									<div class="book-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
										<div class="img-cont">
											{!! get_the_post_thumbnail(231, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
										</div>
										<div class="book-type">
											@isset($order_fields3['paperback-link'])
												<a href="{{ $order_fields3['paperback-link'] }}" target="_blank" class="btn-style btn-green">Paperback | {{ $order_fields3['paperback-price'] }}</a>
											@endisset
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

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="text-social-cont" data-aos="fade-up" data-aos-duration="1000">
						<h2>GET IN <span>TOUCH</span></h2>

						{!! wpautop(get_post(19)->post_content) !!}
						{!! wp_nav_menu(['menu' => 'Footer Social Menu', 'menu_class' => 'footer-social']) !!}
					</div>
				</div>
				<div class="col-md-7">
					<div class="form-cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						{!! do_shortcode('[contact-form-7 id="4" title="Contact form"]') !!}
					</div>
				</div>
			</div>
		</div>
	</section>
	@endwhile
@endsection
