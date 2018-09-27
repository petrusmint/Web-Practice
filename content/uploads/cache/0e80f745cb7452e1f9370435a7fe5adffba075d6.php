<style type="text/css">
	header, footer{
		display: none !important;
	}
	.main-content-wrap {
		padding:0 !important;
	}
</style>
<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <section id="maintenance" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg'); min-height: 762px;"></section>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>