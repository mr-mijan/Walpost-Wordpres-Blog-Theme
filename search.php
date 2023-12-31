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
                                 <h2>Search resultats for : <?php echo get_search_query()?></h2>
                                <p class="desc"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; echo $count . ' - '; wp_reset_query(); ?> Articles were found for keyword  <strong> <?php echo get_search_query()?></strong></p>
                        
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