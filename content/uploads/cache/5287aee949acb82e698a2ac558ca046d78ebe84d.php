<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="book-review2">
    <div class="container">
        <div class="review-wrapper">
            <div class="wrap">
                <?php
                    $count = 0;
                    $args = array(
                       'posts_per_page'   => 3,
                       'offset'           => 0,
                       'orderby'          => 'date',
                       'order'            => 'ASC',
                       'post_type'        => 'readersdiscussions',
                       'post_status'      => 'publish',
                       'suppress_filters' => true 
                     );
                     $posts_array = get_posts( $args );                      
                ?>
                <div class="row">
                    <?php
                    foreach ( $posts_array as $post_review ) : setup_postdata( $post );
                       if( $count == 0 ){
                          $aos = 'data-aos="fade-right"
                                   data-aos-easing="ease-in-sine"';
                       }else if( $count > 0 && $count < count($posts_array)-1 ){
                          $aos = 'data-aos="fade-down"
                                   data-aos-easing="ease-in-sine"';
                       }else{
                          $aos = 'data-aos="fade-left"
                                   data-aos-easing="ease-in-sine"';
                       } 

                       $bookreview_perm= esc_url( get_permalink( $post_review->ID ) ); 
                       $address = get_post_meta( $post_review->ID, 'address', true ); 
                        echo '<div '. $aos .' class="col-md-12 col-sm-12">
                            <img src="'. get_template_directory_uri().'/../dist/images/review-quote.png">
                            <div class="review-cont">
                                '.  wpautop($post_review->post_content)  .'
                                <h3>—'. $post_review->post_title .'';
                            if(!empty($address)) {
                                echo '<span>, '.$address.'</span>';
                            }
                        echo '</h3>
                             </div>
                             </div>';
                        
                        $count++;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="book">
    <div class="container">
        <?php 
            $book_pageID = 11;
        ?>
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div data-aos="fade-up-right"
                     data-aos-easing="ease-in-sine"
                     class="img-cont">
                    <?php if (has_post_thumbnail( $book_pageID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $book_pageID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'description' ); ?>">
                    <?php endif; ?>       
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div data-aos="fade-up-left"
                     data-aos-easing="ease-in-sine"
                     class="text-cont">
                    <h2>About <strong>the Book</strong></h2>
                    <?php
                        $query = new WP_Query('page_id='.$book_pageID.'');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="author">
    <div class="container">
        <?php 
            $author_pageID = 13;
        ?>
        <div class="row">
          <div class="col-md-7 col-sm-12 order-lg-first order-md-first order-last">
              <div data-aos="fade-left"                     
                   data-aos-easing="ease-in-sine"
                   class="text-cont">
                  <h2>About <strong>the Author</strong></h2>
                  <?php
                      $query = new WP_Query('page_id='.$author_pageID.'');
                  ?>
                  <?php
                      while($query->have_posts()): $query->the_post();
                      the_content();
                  ?>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
              </div>
          </div>
          <div class="col-md-5 col-sm-12">
              <div data-aos="fade-right"                     
                   data-aos-easing="ease-in-sine"
                   class="img-cont">
                  <?php if (has_post_thumbnail( $author_pageID ) ): ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $author_pageID ), 'single-post-thumbnail' ); ?>
                      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                  <?php endif; ?>      
              </div>
          </div>            
        </div>
    </div>
</section>
<section id="order">
    <div class="container">
        <?php 
            $order_pageID = 15;
            $order_char_limit = 3500;
            $orderfields = get_post_meta( $order_pageID, 'orderfields', true ); 
        ?>  
        <div class="row">
            <div class="col-md-5 col-sm-12 order-lg-last order-md-last">
                <div class="right-wrapper">
                  <div data-aos="zoom-in-down"                     
                       data-aos-easing="ease-in-sine"
                       class="img-cont">
                      <?php if (has_post_thumbnail( $order_pageID ) ): ?>
                          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $order_pageID ), 'single-post-thumbnail' ); ?>
                          <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'description' ); ?>">
                      <?php endif; ?>    
                  </div>
                  <div class="book-type">
                      <?php                          
                          if( $orderfields[0]['hardcover-link'] != ""){
                            echo '<a href="'. $orderfields[0]['hardcover-link'] .'" target="_blank" class="btn-style">Hardcover | '. $orderfields[0]['hardcover-price'] .'</a>';
                          }
                          if( $orderfields[0]['e-book-link'] != ""){
                            echo '<a href="'. $orderfields[0]['e-book-link'] .'" target="_blank" class="btn-style">E-Book | '. $orderfields[0]['e-book-price'] .'</a>'; 
                          }
                          if( $orderfields[0]['kindle-link'] != ""){
                            echo '<a href="'. $orderfields[0]['kindle-link'] .'" target="_blank" class="btn-style">Kindle | '. $orderfields[0]['kindle-price'] .'</a>'; 
                          }
                          if( $orderfields[0]['paperback-link'] != ""){
                            echo '<a href="'. $orderfields[0]['paperback-link'] .'" target="_blank" class="btn-style">Paperback | '. $orderfields[0]['paperback-price'] .'</a>';
                          }
                      ?>
                  </div>
                </div>                
            </div>
            <div class="col-md-7 col-sm-12">
                <div data-aos="zoom-in-down"                     
                     data-aos-easing="ease-in-sine"
                     class="text-cont">
                    <h2>Excerpts</h2>
                    <?php
                        $query = new WP_Query('page_id='.$order_pageID.'');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>                    
                    <div class="book-store">
                        <p>Book copies are available at</p>
                        <?php
                          if( $orderfields[0]['litfire-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['litfire-image'] , 'single-post-thumbnail' );
                              echo '<a href="'. $orderfields[0]['litfire-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          if( $orderfields[0]['amazon-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['amazon-image'] , 'single-post-thumbnail' );
                              echo '<a class="amazon" href="'. $orderfields[0]['amazon-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          if( $orderfields[0]['barnes-and-noble-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['barnes-and-noble-image'] , 'single-post-thumbnail' );
                              echo '<a href="'. $orderfields[0]['barnes-and-noble-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div data-aos="zoom-out-right"
                     
                     data-aos-easing="ease-in-sine"
                     class="text-social-cont">
                    <h2>Get <strong>In Touch</strong></h2>
                    <?php
                        $query = new WP_Query('page_id=19');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php  
                        wp_nav_menu(['menu' =>  'Footer Social Menu', 'menu_class' => 'footer-social footer-social-circle']); 
                    ?>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div data-aos="zoom-out-left"                     
                     data-aos-easing="ease-in-sine"
                     class="form-cont">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>