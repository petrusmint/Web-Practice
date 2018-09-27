<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
	<?php
		$orderFields = get_post_meta( 15, 'order_fields', true );
	?>
  	<section id="banner">
  		<div class="container">
  			<div class="wrapper">
  				<div class="row">
  					<div class="col-md-5 align-self-md-center">
  						<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
							<?php
								if(has_post_thumbnail(9)) {
									$bookImg = wp_get_attachment_image_src(get_post_thumbnail_id(9), 'single-post-thumbnail');
									echo '<img src="'.$bookImg[0].'" alt="'.get_bloginfo('description').'"/>';
								}
							?>
						</div>
  					</div>
  					<div class="col-md-7 align-self-md-center">
  						<div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
	  						<?php
								$content_post = get_post(9);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo wpautop($content);
							?>

		  					<h2>Written by <?php echo e(get_bloginfo("name", "display")); ?></h2>
		  					<a href="<?php echo get_post_meta(9, 'buy the book now link', true); ?>" target="_blank" class="btn-style buy-book"><?php echo get_post_meta(9, 'buy the book now', true); ?></a>
		  				</div>
  					</div>
  				</div>
  			</div>
  		</div>
    </section>
    <section id="book-review">
		<?php
			$args = array (
				'posts_per_page'		=> 3,
				'offset'				=> 0,
				'orderby'				=> 'date',
				'order'					=> 'DESC',
				'post_type'				=> 'bookreviews',
				'post_status'			=> 'publish',
				'suppress_filters'		=> true
			);
			$posts_array = get_posts($args);
		?>
    	<div class="container review-columns" data-aos="fade-up" data-aos-duration="1000">
			<h2 class="text-center">Book Reviews Columns</h2>
			<div class="wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
    			<div class="row">
	    			<?php
	    				foreach ($posts_array as $review) :
	    					$address = get_post_meta($review->ID,'address', true);
	    					echo '<div class="col-lg-4 review-wrap">
	    						  <div class="review-wrapper">
	    							<div class="bg-cont">
	    							'.wpautop($review->post_content).'
	    							</div>
	    							<h3>'.$review->post_title.'';
									if(!empty($address)) {
										echo '<strong>, '.$address.'</strong>';
									}
	    					echo  '</h3>
	    							
	    						   
								  </div>
								  </div>';
						endforeach;
	    			?>
	    		</div>
    		</div>
    	</div>
    	<div class="container review-carousel" data-aos="fade-up" data-aos-duration="1000">
    		<h2 class="text-center">Book Reviews Carousel</h2>
    		<div class="wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
    			<div id="reviewCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
	    			<div class="carousel-inner">
		    			<?php
		    				$count = 0;
	                        $status = '';
	                        $carouIn = '<ol class="carousel-indicators">';
		    				foreach ($posts_array as $review) :
		    					$address = get_post_meta($review->ID,'address', true);
		    					if($count == 0)
	                            {
	                              $status = 'active';
	                            }
	                            else{
	                              $status = '';
	                            }
	                            $carouIn.= '<li data-target="#reviewCarousel" data-slide-to="'.$count.'" class="'.$status.'"></li>';
		    					echo '<div class="carousel-item '.$status.'">
                                    <div class="review-cont">
                                       '.  wpautop($review->post_content)  .'
                                       <h3>—'. $review->post_title ;
                                        if(!empty($address)) {
                                            echo '<span>, '.$address.'</span>';
                                        }
                           		echo '</h3>
                                    </div>
                                	</div>';
							$count++;
							endforeach;
							$carouIn.='</ol>';
		    			?>
		    		</div>
		    		<a class="carousel-control-prev" href="#reviewCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#reviewCarousel" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
		    		<?php
                        echo $carouIn;
                    ?>
	    		</div>
    		</div>
    	</div>
	</section>
	<section id="book">
		<div class="container">
			<div class="wrapper">
				<h2 class="text-center" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(11); ?></h2>
				<div class="row">
					<div class="col-md-4 order-md-12">
						<div class="img-cont text-center" data-aos="fade-up" data-aos-duration="1000">
							<?php
								if(has_post_thumbnail(11)) {
									$bookImg = wp_get_attachment_image_src(get_post_thumbnail_id(11), 'single-post-thumbnail');
									echo '<img src="'.$bookImg[0].'" alt="'.get_bloginfo('description').'"/>';
								}
							?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="text-cont" data-aos="fade-up" data-aos-duration="1000">
							<?php
								$content_post = get_post(11);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo wpautop($content);
							?>
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
        			<?php if (has_post_thumbnail( 13 ) ): ?>
	                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 13 ), 'single-post-thumbnail' ); ?>
	                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
	                <?php endif; ?>  
	            </div>
	            <div class="text-cont text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <h2><?php echo get_the_title(13); ?></h2>
                    <?php
						$content_post = get_post(13);
						$content = $content_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo wpautop($content);
					?>
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
								<?php if (has_post_thumbnail( 15 ) ): ?>
				                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 15 ), 'single-post-thumbnail' ); ?>
				                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
				                <?php endif; ?>  
							</div>
							<div class="book-type">
								<?php
									if(!empty($orderFields[0]['hardcover-link'])) {
										echo '<a href="'.$orderFields[0]['hardcover-link'].'" target="_blank" class="btn-style">Hardcover | '.$orderFields[0]['hardcover-price'].'</a>';
									}
									if(!empty($orderFields[0]['paperback-link'])) {
										echo '<a href="'.$orderFields[0]['paperback-link'].'" target="_blank" class="btn-style">Paperback | '.$orderFields[0]['paperback-price'].'</a>';
									}
									if(!empty($orderFields[0]['ebook-link'])) {
										echo '<a href="'.$orderFields[0]['ebook-link'].'" target="_blank" class="btn-style">E-book | '.$orderFields[0]['ebook-price'].'</a>';
									}
									if(!empty($orderFields[0]['kindle-link'])) {
										echo '<a href="'.$orderFields[0]['kindle-link'].'" target="_blank" class="btn-style">Kindle | '.$orderFields[0]['kindle-price'].'</a>';
									}
									if(!empty($orderFields[0]['nook-book-link'])) {
										echo '<a href="'.$orderFields[0]['nook-book-link'].'" target="_blank" class="btn-style">Nook Book | '.$orderFields[0]['nook-book-price'].'</a>';
									}
								?>
							</div>
							<div class="book-store">
								<span>Available at</span>
								<?php
									if(!empty($orderFields[0]['litfire-link'])) {
										$litfire = wp_get_attachment_image_src( $orderFields[0]['litfire-image'], 'full', false );
										echo '<a href="'.$orderFields[0]['litfire-link'].'" target="_blank" class="litfire"><img src="'.$litfire[0].'" alt="litfire"/></a>';
									}
									if(!empty($orderFields[0]['amazon-link'])) {
										$amazon = wp_get_attachment_image_src( $orderFields[0]['amazon-image'], 'full', false );
										echo '<a href="'.$orderFields[0]['amazon-link'].'" target="_blank" class="amazon"><img src="'.$amazon[0].'" alt="amazon"/></a>';
									}
									if(!empty($orderFields[0]['barnes-noble-link'])) {
										$barnes = wp_get_attachment_image_src( $orderFields[0]['barnes-noble-image'], 'full', false );
										echo '<a href="'.$orderFields[0]['barnes-noble-link'].'" target="_blank" class="barnes"><img src="'.$barnes[0].'" alt="Barnes and Noble"/></a>';
									}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="excerpt-content" data-aos="fade-up" data-aos-duration="1000">
							<h2><?php echo get_the_title(15); ?></h2>
							<h3><strong>Excerpt Content Only</strong></h3>
							<?php
								$content_post = get_post(15);
								$content = $content_post->post_content;
								$content = apply_filters('the_content', $content);
								$content = str_replace(']]>', ']]&gt;', $content);
								echo wpautop($content);
							?>
						</div>
						<div class="excerpt-carousel" data-aos="fade-up" data-aos-duration="1000">
							<h3><strong>Excerpt Content Carousel</strong></h3>
							<div id="excerpt-carou2" class="carousel slide" data-ride="carousel" data-interval="false">
								<?php
									$contents = get_post_meta(15,'excerpt_content', true );
								?>
								<div class="carousel-inner">
									<?php
										$count = 0;
										$status= '';
										$carouIn = '<ol class="carousel-indicators">';
										foreach ( $contents as $content ) :
											if($count == 0)
							               {
							                  $status = 'active';
							               }
							               else{
							                  $status = '';
							               }
											$carouIn.= '<li data-target="#excerpt-carou2" data-slide-to="'.$count.'" class="'.$status.'"></li>';
											echo '<div class="carousel-item '.$status.'">
													'. $content['excerpt-content'] .'
												</div>';
										$count++;
										endforeach;
										$carouIn.= '</ol>';
									?>
								</div>
								<?php
									echo $carouIn;
								?>
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
						<h2><?php echo e(get_the_title(19)); ?></h2>
			            <?php
							$content_post = get_post(19);
							$content = $content_post->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]&gt;', $content);
							echo wpautop($content);
						?>
			            <?php  
			                wp_nav_menu(['menu' =>  'Footer Social Menu', 'menu_class' => 'footer-social']); 
			            ?>
					</div>
				</div>
				<div class="col-md-7">
					<div class="form-cont" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
			        	<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>