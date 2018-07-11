<div class="blogpost-row blog-detail">
    <div class="text-cont">
      <h2><?php the_title(); ?></h2>
      <div class="date-author">
         <span class="name"><i class="fa fa-user" aria-hidden="true"></i><?php the_author();?></span>
          <span class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><?php echo get_the_date("F j, Y");?> </span>
      </div>
      @php the_content() @endphp
    </div>
</div>
<div class="blog-comment">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @php comments_template('/partials/comments.blade.php') @endphp
</div>