<?php
 /**
 * Template Name: Home 06
 */
?>
<?php get_header(); ?>


        <main class="main">
            <!--slider-style6-->
            <div class="slider-style6">
                <div class="swiper-wrapper">
                    <!--slider-1-->
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '',
                            );
                            $query = new WP_Query( $args );
                        
                            if ($query-> have_posts() ) : 
                            while($query-> have_posts()  ) : $query-> the_post();
                        ?>
                        <!--Post-1-->
                        <div class="slider-item  swiper-slide ">
                        <div class="post-card">
                            <div class="post-card-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                            </div>
                                <div class="post-card-content">
                            <div class="entry-cat">
                                <span class="categorie"><?php the_category(); ?></span>
                            </div>

                            <h5 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>

                            <div class="post-exerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <ul class="entry-meta list-inline">
                                <li class="post-author-img"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <img src="<?php echo get_avatar_url('ID'); ?>" alt=""></a></li>
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                <li class="post-date"> <span class="dot"></span><?php echo get_the_date(); ?></li>
                            </ul>
                    </div>
                        </div> 
                            </div>
                         <?php
                            endwhile; else: _e('No post found' ,'oredoo');
                            endif;
                        ?>
                           <!--pagination-->  
             
                    </div>
                    <div class="swiper-pagination"></div>
                        </div>
               

                <!--pagination-->  
                <div class="swiper-pagination"></div>
            </div>
        
            <!--blog-grid-->
            <section class="blog-list">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 side-content">
                            <div class="theiaStickySidebar">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--Post-1-->
                                    <?php 
                                        if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                                        elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                                        else { $paged = 1; }  
                                        $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => get_theme_mod('home_template_9_setting'),
                                        'paged'     => $paged,
                                        );
                                        $query = new WP_Query( $args );
                                    
                                        if ($query-> have_posts() ) : 
                                        while($query-> have_posts()  ) : $query-> the_post();
                                    ?>
                                    <div class="post-list">
                                        <div class="post-list-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        </a>
                                        </div>
                                        <div class="post-list-content">
                                            <div class="entry-cat">
                                                <span class="categorie"><?php the_category(); ?></span>
                                            </div>

                                            <h4 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>                           
                                            </h4>

                                            <div class="post-exerpt">
                                                <?php the_excerpt(); ?>                                            
                                            </div>

                                            <ul class="entry-meta list-inline">
                                                <li class="post-author-img"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <img src="<?php echo get_avatar_url('ID'); ?>" alt=""></a></li>
                                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                                <li class="post-date"> <span class="dot"></span><?php echo get_the_date(); ?></li>
                                                <li class="post-date"> <span class="dot"></span><?php display_reading_time(); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile; else: _e('No post found' ,'oredoo');
                                        endif;
                                    ?>
                                    <!--/-->
                                </div>
                            
                             
                                <div class="col-lg-12">
                                <div class="pagination">
                                    <?php
                                        echo paginate_links(array(
                                            'total' => $query->max_num_pages,
                                            'current'      => max( 1, $paged ), // For Active Current Class
                                            'prev_text'    => __('<i class="las la-arrow-left"></i>','oredoo'),
                                            'next_text'    => __('<i class="las la-arrow-right"></i>','oredoo'),
                                        ));
                                    ?>
                            </div> 
                        </div>
                             
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-3 max-width side-sidebar">
                            <div class="theiaStickySidebar">
                                 <?php dynamic_sidebar( 'sidebar_1' ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->

    <?php get_footer();?>