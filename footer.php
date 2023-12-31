     <!--newslettre-->
     <section class="newslettre">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 col-sm-11 m-auto">
                            <div class="newslettre-width text-center">
                                <div class="newslettre-info">
                                    <h3 class="title">
                                        Get The Best Blog Stories into Your inbox!</h3>
                                    <p> Sign up for free and be the first to get notified about new posts. </p>
                                </div>
                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="social-icones">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>Twitter </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>Instagram </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>Youtube</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>
        </main>



        <!--footer-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <p>© Copyright 2024 <a href="#">Flexitheme</a>, All rights reserved.</p>
                        </div>
                        <div class="back">
                            <a href="#" class="back-top"><i class="fas fa-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Search-form-->
        <div class="search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                        <div class="search-width  text-center">
                            <button type="button" class="close">
                                <i class="fas fa-times"></i>
                            </button>
                            <form class="search-form" method="get" action="<?php echo esc_url (home_url( '/' )) ?>">
                                <input type="search" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr( 'What are you looking for?', 'placeholder' ) ?>" name="s">
                                <button type="submit" class="search-btn" value="<?php echo esc_attr( 'Search', 'submit' ) ?>"> search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/-->
    </div>
  
<?php wp_footer(); ?>
</body>
</html>