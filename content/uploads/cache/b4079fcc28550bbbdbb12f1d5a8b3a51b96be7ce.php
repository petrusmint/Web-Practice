<div class="search-cont">
    <?php get_search_form(); ?>
</div>
<div class="blogside-wrap">
    <div class="bg-holder">
        <div class="form-cont">
            <h2>Contact Us</h2>
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
        </div>
        <div class="author-maincont">
            <div class="author-cont">
                <div class="img-cont">
                    <div class="img-cont2">
                        <?php 
                            $author_pageID = 13;
                            $authorFields = get_post_meta( $author_pageID, 'custom_image_field', true );
                        ?>
                        <?php
                            if(!empty($authorFields['custom-image-field'])){
                                echo '<img class="hidden" src="'.$authorFields['custom-image-field'].'" alt="litfire"/>';
                            }   
                        ?>
                    </div>
                </div>
                <div class="text-cont">
                    <h3><?php echo bloginfo('name'); ?></h3>
                    <?php
                        $query = new WP_Query('page_id=13');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        //the_content();
                        $content = get_the_content();
                        $content = preg_replace("/\< *[img][^\>]*[.]*\>/i","",$content,1); 
                        if(strlen($content) > 110)
                            
                             $content = substr($content, 0, 110).' . . . '; 
                        else
                        $content =  $content;
                   
                         echo wpautop(strip_shortcodes($content));
                    ?>
                    <?php endwhile; ?>
                    
                    <?php wp_reset_postdata(); ?>  
                    <div class="read-more-cont">
                        <a href="<?php echo get_home_url(); ?>/#author" class="read-more">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-cont">
            <?php
                dynamic_sidebar('sidebar-primary');
            ?>
        </div>     
    </div> 
</div>