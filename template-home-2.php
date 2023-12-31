<?php
 /**
 * Template Name: Home 05
 */
?>
<?php get_header(); ?>

        <main class="main">
            <!--slider-style-2-->
            <div class="slider-style2">
                <div  class="swiper swiper-top">
                   <div class="swiper-wrapper">
                      <!--slider1-->
                      <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '4',
                            );
                            $query = new WP_Query( $args );
                        
                            if ($query-> have_posts() ) : 
                            while($query-> have_posts()  ) : $query-> the_post();
                        ?>
                      <div class="swiper-slide slider-item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9 col-md-12">
                                    <div class="slider-item-inner">
                                        <div class="slider-item-content">
                                        <div class="entry-cat ">
                                            <span class="categorie"><?php the_category(); ?></span>
                                        </div>
                                        <h1 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h1>
                                        <div class="post-exerpt">
                                            <?php the_excerpt(); ?>                                       
                                        </div>
                                        
                                        <ul class="entry-meta list-inline">
                                            <li class="post-author-img"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <img src="<?php echo get_avatar_url('ID'); ?>" alt=""></a></li>
                                            <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                            <li class="post-date"> <span class="dot"></span><?php echo get_the_date(); ?></li>
                                            <li class="post-date"> <span class="dot"></span><?php display_reading_time(); ?></li>
                                            <li class="post-date"> <span class="dot"></span><?php comments_number(); ?></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                    ?>
                   </div>
                </div>
      
                <div thumbsSlider="" class="swiper swiper-bottom container-fluid" >
                    <div class="swiper-wrapper ">
                        <!--slider1-->
                            <?php 
                                $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '4',
                                );
                                $query = new WP_Query( $args );
                            
                                if ($query-> have_posts() ) : 
                                while($query-> have_posts()  ) : $query-> the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="post-item">
                                    <img src="<?php the_post_thumbnail_url(); ?>"  alt="">
                                    <div class="details">
                                        <p class="entry-title"> 
                                            <span><?php the_title(); ?></span>
                                            </p>
                                        <ul class="entry-meta list-inline">
                                            <li class="post-date"> <i class="fas fa-clock"></i><?php echo get_the_date(); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile; else: _e('No post found' ,'oredoo');
                            endif;
                        ?>
                    </div>
                </div>      
            </div>
             
        
            <!--blog-grid-->
            <section class="mt-90">
                <div class="container-fluid">
                    <div class="row">
                        <!--Post-1-->
                        <?php 
                            if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                            elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                            else { $paged = 1; }  
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '',
                            'paged'     => $paged,
                            );
                            $query = new WP_Query( $args );
                        
                            if ($query-> have_posts() ) : 
                            while($query-> have_posts()  ) : $query-> the_post();
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6">
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
                                    <li class="post-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a> </li>
                                    <li class="post-date"> <span class="dot"></span><?php echo get_the_date(); ?></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <?php
                            endwhile; else: _e('No post found' ,'oredoo');
                            endif;
                        ?>
                    <!--/-->
                    </div>
            
                    <!--pagination-->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pagination text-center">
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
            </section><!--/-->
            
  <?php get_footer(); ?>