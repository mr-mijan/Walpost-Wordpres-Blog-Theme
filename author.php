<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
<main class="main">
<section class="section  ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-11 m-auto">
                       <!--widget-author-->
                
                        <div class="widget-author  ">
                            <div class="author-img">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="image">
                                    <img src="<?php echo get_avatar_url('ID'); ?>" alt="">
                                </a>
                            </div>
                            <div class="author-content">
                                <h6 class="name"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h6>
                                <div class="btn-link"><?php echo count_user_posts($author_id); ?> Articles</div>
                                <p class="bio">
                                <?php echo get_the_author_meta( 'description', $author_id ); ?>
                                </p>
                                <div class="social-media">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#" class="color-facebook"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-instagram"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-twitter"><i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-youtube"><i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                        <a href="#" class="color-pinterest"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    <!--/-->
                   
                </div>
            </div>
        </div>
    </section>

    <section class="mt-90">
        <div class="container-fluid">
            <div class="row">
            <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Post-1-->
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
                    <!--/-->
                </div>
                <?php
                endwhile; else: _e('No post found' ,'walpost');
                endif;
                ?>

                <!--pagination-->
                <?php get_template_part('template-parts/pagination'); ?>
            </div>
        </div>
    </section>

       <?php get_footer(); ?>