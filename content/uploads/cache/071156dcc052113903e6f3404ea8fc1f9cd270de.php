<?php $__env->startSection('content'); ?>
  



  

  

    <section class="blog-content">
        <div class="container">
            <div class="bg-holder">
                <div class="content-holder">
                    <h1 class="text-center h2-head">Blog</h1>
                    <div class="row">
                        <div class="col-lg-8 col-md-12" data-aos="fade-up-right" data-aos-duration="1500" data-aos-delay="500">
                            <?php if(!have_posts()): ?>
                            <div class="alert alert-warning">
                              <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

                            </div>
                            <?php endif; ?>
                            

                            <?php while(have_posts()): ?> <?php (the_post()); ?>
                                <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endwhile; ?>
                            
                            <div class="blog-pagination clearfix">
                                <?php echo get_the_posts_navigation(); ?>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12" data-aos="fade-up-left" data-aos-duration="1500" data-aos-delay="500">
                           
                           <?php echo $__env->make('blogsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>