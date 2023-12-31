<?php get_header(); ?>
        <main class="main">
            <!--Page404-->
            <section class="section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="page404">
                                <div class="page404-image">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/error.png'?>" alt="">
                                </div>
                                <div class="page404-content">
                                    <h3>Oops! This page can’t be found </h3>
                                    <p>The page which you are looking for does not exist galley of type and scrambled it to make a type specimen book. </p>
                                    <a href="<?php echo get_home_url(); ?>" class="btn-custom">Go back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>        

         <?php get_footer(); ?>