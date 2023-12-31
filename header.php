<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head();?>
 </head>
 
 <body <?php //body_class(); ?>>
<?php wp_body_open(); ?>

     <!-- wrapper -->
    <div id="wrapper" class="wrapper">
         <!--loading -->
         <div class="loading">
             <div class="circle"></div>
         </div>
         <!--/-->
 
          <!-- Header -->
        <header class="header fixed-top">
            <div class="header-main navbar-expand-xl">
                <div class="container-fluid">
                    <div class="header-main">
                    <div class="site-branding">
                        <!-- logo -->
                        <?php if (has_custom_logo('custom-logo')){
                        ?> <a class="navbar-brand"><?php the_custom_logo(); ?></a> <?php
                        } 
                        else{ 
                        ?><a href="<?php echo get_home_url(); ?>" class="text-logo"><?php bloginfo(); ?></a><?php
                        }
                        ?>
                    </div>
                    
                    <div class="main-menu header-navbar">
                        <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'Primary_Menu',
                                    'container' => '',
                                    'menu_class' => 'navbar-nav',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'items_wrap' => '<ul id="%1$s" class="  %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker(),
                                ));
                            ?>
                        </div>
                        <!--/-->
                        </nav>
                    </div>

                        <!-- header actions -->
                        <div class="header-action-items">
                            <!--theme-switch-->
                            <div class="theme-switch-wrapper switch-icon">
                                <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <span class="slider round ">
                                    <i class="lar la-sun icon-light"></i>
                                    <i class="lar la-moon icon-dark"></i>
                                </span>
                                </label>
                            </div>

                            <!--search-icon-->
                            <div class="search-icon"> <a href="#search">  <i class="fas fa-search"></i></a></div>

                            <!--navbar-toggler-->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>  
                    </div>
                </div> 
            </div>
        </header><!--/-->