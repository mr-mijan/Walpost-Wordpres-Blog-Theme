<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
        <main class="main">
            <!--post-default-->
            <section class="mt-60  mb-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 side-content">
                            <div class="theiaStickySidebar">
                            <!--Post-single-->
                            <div class="post-single">
                                <div class="post-single-image">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="post-single-content">
                                    <span class="categorie"><?php the_category(); ?></span>
                                    <h3 class="title"><?php the_title(); ?> </h3>
                                    <ul class="entry-meta list-inline">
                                        <li class="post-author-img"><img src="<?php echo get_avatar_url('ID'); ?>" alt=""></li>
                                        <li class="post-author"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></li>
                                        <li class="post-date"> <span class="dot"></span><?php echo get_the_date(); ?></li>
                                        <li class="post-timeread"> <span class="dot"></span> 15 min Read</li>
                                        <li class="post-comment"> <span class="dot"></span><?php comments_number(); ?></li>
                                    </ul>
                                
                                </div>
                        
                                <div class="post-single-body">
                                    <?php the_content(); ?>
                                </div>

                                <div class="post-single-footer">
                                    <div class="tags">
                                        <ul class="list-inline">
                                            <?php
                                                $before = '<span class="text-bold">Tags: </span>';
                                                $seperator = ''; // blank instead of comma
                                                $after = '';
                                                the_tags( $before, $seperator, $after );
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="social-media">
                                        <ul class="list-inline">
                                            <?php if (function_exists('display_custom_social_share')) : ?>
                                                    <?php display_custom_social_share(); ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>                           
                                </div>
                            </div> <!--/-->

                            <!--next & previous-posts-->
                            <div class="row">
                                <?php
                                // Start the loop
                                while (have_posts()) : the_post();

                                // Previous and next post navigation with featured images
                                    $prev_post = get_previous_post();
                                    $next_post = get_next_post();
                                ?>
                                <div class="col-md-6">
                                <?php if ($prev_post) : ?>
                                    <div class="widget">
                                        <div class="widget-next-post">
                                            <div class="post-item">
                                                <div class="image">
                                                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                                        <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail'); ?>
                                                    </a>
                                               </div>
                                               
                                                <div class="content">
                                                    <a class="btn-link" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><i class="fas fa-arrow-left"></i>Preview post</a>
                                                    <p class="entry-title"><a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><?php echo esc_html($prev_post->post_title); ?></a></p>
                                                    
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                <?php if ($next_post) : ?>
                                    <div class="widget">
                                        <div class="widget-previous-post">
                                            <div class="post-item">
                                                <div class="image">
                                                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                                        <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail'); ?>
                                                    </a>                                                
                                                </div>
                                               
                                                <div class="content">
                                                    <a class="btn-link" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><i class="fas fa-arrow-right"></i>next post</a>
                                                    <p class="entry-title"><a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html($next_post->post_title); ?></a></p>
                                                 
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php
                                // End the loop
                                endwhile;
                                ?>
                            </div><!--/-->

                            <!--widget-comments-->
                            <div class="widget mb-50">
                                <?php
                                //If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                ?>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 max-width side-sidebar">
                            <div class="theiaStickySidebar">
                                <?php dynamic_sidebar( 'sidebar_1' ) ?>
                        </div> 
                    </div>
                </div>
            </section><!--/-->
<?php get_footer(); ?>