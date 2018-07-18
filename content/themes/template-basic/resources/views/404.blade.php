@extends('layouts.app')
@include('partials.header')
<section id="notfound">
    <div class="not-found">
        <div class="container">
            @include('partials.page-header')
            <div class="row">
                <div class="col-md-12 col-sm-12 wow slideInLeft" data-wow-delay="0.5s">
                	@if (!have_posts())
	                    <div class="alert alert-warning">
	                      <?php _e('Sorry, but the page you were trying to view does not exist. You can go back to <a href="/" title="home">Home</a> page here.', 'sage'); ?>
	                    </div>
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</section>

