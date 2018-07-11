@extends('layouts.app')
<section id="blog">
    <div class="container">
        <div class="blog-content">
            @include('partials.page-header')
            <h1 class="like-h2">Blog</h1>
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

<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
