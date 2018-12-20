@extends('layouts.app')

@section('content')
	@while(have_posts()) @php(the_post())
	<section id="banner">
		<div class="container">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-5 align-self-md-center">
						<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
							{!! get_the_post_thumbnail(9, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
						</div>
					</div>
					<div class="col-md-7 align-self-md-center">
						<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							{!! get_post(9)->post_content !!}
							<h2>Written by {{ get_bloginfo("name", "display") }}</h2>
							<a href="{{ get_post_meta(9, 'buy the book now link', true) }}" target="_blank"
							   class="btn-style buy-book">{{ get_post_meta(9, 'buy the book now', true) }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /#banner -->

	<section id="book-review">
		<div class="container review-columns" data-aos="fade-up" data-aos-duration="1000">
			<h2 class="text-center">Book Reviews Columns</h2>
			<div class="wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
				<div class="row">
					@foreach ($book_reviews as $review)
						<div class="col-lg-4 review-wrap">
							<div class="review-wrapper">
								<div class="bg-cont">{!! $review['content'] !!}</div>
								<h3>{{ $review['title'] }}
									@if(!empty($review['address']))
										<strong>, {{ $review['address'] }}</strong>
									@endif
								</h3>
							</div>
						</div>
					@endforeach
				</div><!-- /.row -->
			</div><!-- /.wrapper -->
		</div><!-- /.review-columns -->

		<div class="container review-carousel" data-aos="fade-up" data-aos-duration="1000">
			<h2 class="text-center">Book Reviews Carousel</h2>
			<div class="wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
				<div id="reviewCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner">
						@foreach ($book_reviews as $review)
							<div class="carousel-item @if ($loop->first) active @endif">
								<div class="review-cont">
									{!! wpautop($review['content']) !!}
									<h3>— {{ $review['title'] }}
										@if(!empty($review['address']))
											<span>, {{ $review['address'] }}</span>
										@endif
									</h3>
								</div>
							</div>
						@endforeach
					</div><!-- /.carousel-inner -->

					<a class="carousel-control-prev" href="#reviewCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#reviewCarousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>

					<ol class="carousel-indicators">
						@foreach ($book_reviews as $review)
							<li data-target="#reviewCarousel" data-slide-to="{{ $loop->index }}" @if ($loop->first) class="active" @endif></li>
						@endforeach
					</ol>
				</div><!-- /#reviewCarousel -->
			</div><!-- /.wrapper -->
		</div><!-- /.review-carousel -->
	</section><!-- /#book-review -->

	<section id="book">
		<div class="container">
			<div class="wrapper">
				<h2 class="text-center" data-aos="fade-up" data-aos-duration="1000">{{ get_the_title(11) }}</h2>
				<div class="row">
					<div class="col-md-4 order-md-12">
						<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
							{!! get_the_post_thumbnail(11, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
						</div>
					</div>
					<div class="col-md-8">
						<div class="text-cont" data-aos="fade-up" data-aos-duration="1000">
							{!! wpautop(get_post(11)->post_content) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="author">
		<div class="container">
			<div class="wrapper">
				<div class="img-cont" data-aos="fade-up" data-aos-duration="1000">
					{!! get_the_post_thumbnail(13, 'single-post-thumbnail', ['style' => 'height:auto!important']) !!}
				</div>
				<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
					<h2>{{ get_the_title(13) }}</h2>
					{!! wpautop(get_post(13)->post_content) !!}
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
