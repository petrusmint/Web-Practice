<?php
wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');
?>
<section class="blog-content">
    <div class="container">
      <div class="bg-holder">
        <div class="content-holder">
        <h1 class="text-center">Blog</h1>
        <div class="row">
            <?php //while (have_posts()) : the_post(); ?>
            <div class="col-lg-8 col-md-12">
                  
                  <div class="blogpost-row blog-detail">
                     
                      <div class="text-cont">
                           <h2><?php echo e(get_the_title()); ?></h2>
                          <div class="date-author">
                             <span class="name"><i class="fas fa-user" aria-hidden="true"></i><?php the_author();?></span>
                            <span class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><?php echo get_the_date("F j, Y");?> </span>
                          </div>
                           <?php (the_content()); ?>

                          
                      </div>
                  </div>
                  <div class="blog-comment">
                      <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

                      
                          
                            <?php (comments_template('/partials/comments.blade.php')); ?>
                  </div>
            </div>
            <?php //endwhile; ?>
            <div class="col-lg-4 col-md-12">
                <?php echo $__env->make('blogsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               
            </div>
        </div>
        </div>
      </div>
    </div>
</section>



