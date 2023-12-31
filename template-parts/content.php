<?php 
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
        <div class=" col-lg-6 col-md-6">
            <!--Post--->
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