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
								<div class="col-md-6">
									<div class="text-cont" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <span>THE BOOK</span></h2>
										{!! wpautop(get_post(11)->post_content) !!}
									</div>
								</div>
								<div class="col-md-6">
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
								<div class="col-md-6">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(194)->post_content) !!}
									</div>
								</div>
								<div class="col-md-6">
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
								<div class="col-md-6">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(198)->post_content) !!}
									</div>
								</div>
								<div class="col-md-6">
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
								<div class="col-md-6">
									<div class="text-cont text-cont-2" data-aos="fade-up" data-aos-duration="1000">
										<h2>ABOUT <strong>THE BOOK</strong></h2>
										{!! wpautop(get_post(201)->post_content) !!}
									</div>
								</div>
								<div class="col-md-6">
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
	
	<!-- <section id="book-reviews">
		<div id="review-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner">
				<div class="carousel-item book-1 active">
					<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
						<img src="@asset('images/review-head.png')" alt="">
					</div>
					<h2 class="text-center h2-inner">BOOK <span>REVIEWS</span></h2>
					<h3 class="text-center h3-inner">On the Winds of Australia</h3>
				</div>

				<div class="carousel-item book-2">
					
				</div>

				<div class="carousel-item book-3">
				
				</div>


				<div class="carousel-item book-4">
				
				</div>

			</div>
			<a class="carousel-control-prev" href="#review-carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#review-carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section> -->

	<!-- <section id="book-review">
		<div class="owl-carousel owl-theme">
			<div class="owl-item"> Your Content </div>
			<div class="owl-item"> Your Content2 </div>
			<div class="owl-item"> Your Content3 </div>
			<div class="owl-item"> Your Content4 </div>
		</div>
	</section>
 -->

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
					<div class="col-md-5">
						<div class="img-cont" data-aos="fade-up" data-aos-duration="1000">
							{!! get_the_post_thumbnail(13, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
						</div>
					</div>
					<div class="col-md-7">
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
		<div class="container">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-5 book-det">
						<div class="book-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							<div class="img-cont">
								{!! get_the_post_thumbnail(15, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
							</div>
							<div class="book-type">
								@isset($order_fields['hardcover-link'])
									<a href="{{ $order_fields['hardcover-link'] }}" target="_blank" class="btn-style">Hardcover | {{ $order_fields['hardcover-price'] }}</a>
								@endisset

								@isset($order_fields['paperback-link'])
									<a href="{{ $order_fields['paperback-link'] }}" target="_blank" class="btn-style">Paperback | {{ $order_fields['paperback-price'] }}</a>
								@endisset

								@isset($order_fields['ebook-link'])
									<a href="{{ $order_fields['ebook-link'] }}" target="_blank" class="btn-style">E-book | {{ $order_fields['ebook-price'] }}</a>
								@endempty

								@isset($order_fields['kindle-link'])
									<a href="{{ $order_fields['kindle-link'] }}" target="_blank" class="btn-style">Kindle | {{ $order_fields['kindle-price'] }}</a>
								@endisset

								@isset($order_fields['nook-book-link'])
									<a href="{{ $order_fields['nook-book-link'] }}" target="_blank" class="btn-style">Nook Book | {{ $order_fields['nook-book-price'] }}</a>
								@endisset
							</div>
							<div class="book-store">
								<span>Available at</span>
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
							<! /.book-store -->
						</div>
					</div>
					<div class="col-md-7">
						<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
							<h2>{{ get_the_title(15) }}</h2>
							<h3><strong>Excerpt Content Only</strong></h3>
							{!! wpautop(get_post(13)->post_content) !!}
						</div>
						<div class="excerpt-carousel" data-aos="fade-up" data-aos-duration="1000">
							<h3><strong>Excerpt Content Carousel</strong></h3>
							<div id="excerpt-carou2" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner">
									@foreach(get_post_meta(15, 'excerpt_content', true) as $content)
										<div class="carousel-item @if ($loop->first) active @endif">
											{!! $content['excerpt-content'] !!}
										</div>
									@endforeach
								</div><!-- /.carousel-innner -->

								<ol class="carousel-indicators">
									@foreach(get_post_meta(15, 'excerpt_content', true) as $content)
										<li data-target="#excerpt-carou2" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif></li>
									@endforeach
								</ol>
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
						<h2>{{ get_the_title(19) }}</h2>

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
