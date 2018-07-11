@extends('layouts.app')
@include('partials.header')
<section id="blog">
    <div class="container">
        <div class="blog-content">
            @include('partials.page-header')
            <div class="row">                
                <div class="col-md-8 col-sm-12">
                  <?php while (have_posts()) : the_post(); ?>
                    @include('partials.content-single-'.get_post_type())          
                  <?php endwhile; ?>            
                </div>                
                <div class="col-md-4 col-sm-12 wow slideInRight" data-wow-delay="0.5s">
                    @include('blogsidebar')
                </div>
            </div>
        </div>
    </div>
</section>