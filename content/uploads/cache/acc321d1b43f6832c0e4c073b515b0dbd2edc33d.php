<div class="banner-menu-wrapper">    
    <?php if( is_front_page() ){ ?>
    <section id="banner" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-cont">
                        <img src="<?php echo get_template_directory_uri() ?>/../dist/images/banner-book.png" alt="<?php echo get_bloginfo( 'description' ); ?>">
                    </div>
                </div>  
                <div class="col-md-8">
                    <div data-aos="zoom-in" 
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine"
                        class="content-wrapper">
                          <?php $order_pageID = 15; 
                          $orderfields = get_post_meta( $order_pageID, 'orderfields', true ); ?>
                        <h1 style="display:none"><?php echo get_bloginfo( 'description' ); ?></h1>
                        <h2 style="display:none">Written by: <?php echo get_bloginfo( 'name' ); ?></h2>                   
                        <img src="<?php echo get_template_directory_uri() ?>/../dist/images/banner-text.png" alt="<?php echo get_bloginfo( 'name' ); ?>">
                        <a href="<?php echo $orderfields[0]['buy-the-book-link']; ?>" target="_blank" class="btn-style">Buy the Book</a>
                        <a href="#book-review2" style="
                                display: inline-block;
                                display: none;
                                width: 100%;
                                font-size: 50px;
                                color: #000;
                            "><i class="fas fa-angle-double-down" aria-hidden="true"></i></a>
                    </div>
                </div> 
            </div>                                     
        </div>        
    </section> 
    <?php } ?>
    <header>
        <div class="for-menu">
            <div class="container-fluid">
                <div class="menu-area">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 menu-area">
                            <nav class="navbar navbar-expand-md navbar-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php if(has_nav_menu('primary_navigation')): ?>
                                    <?php echo wp_nav_menu([
                                        'theme_location' => 'primary_navigation', 
                                        'menu_class' => 'navbar-nav',
                                        'container_class' =>'collapse navbar-collapse',
                                        'container_id' => 'navbarNavAltMarkup'
                                        ]);; ?>

                                <?php endif; ?>
                            </nav>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>  