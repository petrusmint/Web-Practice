@extends('layouts.app')
@include('partials.header')
<section id="blog">
    <div class="container">
        <div class="blog-content">
            @include('partials.page-header')
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 wow slideInLeft" data-wow-delay="0.5s">
                    <div class="blogpost-wrap">
                        @if (!have_posts())
                          <div class="alert alert-warning">
                            {{ __('Sorry, no results were found.', 'sage') }}
                          </div>
                          {!! get_search_form(false) !!}
                        @endif

                        @while (have_posts()) @php the_post() @endphp
                          @include('partials.content-'.get_post_type())
                        @endwhile
                        
                        {!! get_the_posts_navigation() !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInRight" data-wow-delay="0.5s">
                    @include('blogsidebar')
                </div>
            </div>
        </div>
    </div>
</section>

