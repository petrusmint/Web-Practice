<?php $__env->startSection('content'); ?>
  

  <?php if(!have_posts()): ?>
	<section id="notfound">
	<div class="not-found blog-content">
	    <div class="container">
	        <h1 class="h2-head">Not Found</h1>
	        <div class="row">
	            <div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1500">

	                <?php if(!have_posts()): ?>
					    <div class="alert alert-warning">
					    	
					    	<?php 
					    		$text = "Sorry, but the page you were trying to view does not exist. You can go back to <a href='/'>Home</a> page here.";
					    	?>
					    	<?php echo $text; ?>

					      	
							
					    </div>
					    
					 <?php endif; ?>
	            </div>
	        </div>
	    </div>
	</div>
	</section>
 <?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>