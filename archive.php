<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
        <main class="main">
            <!--category-->
            <section class="categorie-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="categorie-title"> 
                                <small>
                                    <a href="<?php echo get_home_url(); ?>"><?php echo esc_html('Home') ?></a>
                                    <i class="fas fa-angle-right"></i> <?php the_archive_title(); ?>
                                </small>
                                <h3><?php the_archive_title(); ?></h3>
                                <p><?php the_archive_description(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--blog-grid-->
            <section class="blog-grid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 mt-30 side-content">
                            <div class="theiaStickySidebar">
                                <div class="row">
                                <?php get_template_part('template-parts/content'); ?>

                                <!--pagination-->
                                <?php get_template_part('template-parts/pagination'); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 max-width side-sidebar">
                            <div class="theiaStickySidebar">
                                <!--widget-latest-posts-->
                                    <?php dynamic_sidebar( 'sidebar_1' ) ?>
                                </div>
                        </div>
                    </div>
                </div>
            </section><!--/-->

       <?php get_footer(); ?>