    <footer id="site-footer" role="contentinfo" class="header-footer-group p-0 site-footer">
        <div class="footer-wrapper sec-p">
            <div class="container">
                <div class="row">
                    <!-- column 1 -->
                    <div class="col-md-3 col-sm-6 col-footer-1 mb-md-0 mb-3">
                        <div class="site-desc">
                            <a href="<?php echo get_home_url()?>" role="button">                            
                                <!-- <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/logo_round.png" /> -->
                                <?php 
                                    the_custom_logo();

                                    // No Custom Logo, just display the site's name
                                    if (!has_custom_logo()) {
                                        ?>
                                            <h1><?php bloginfo('name'); ?></h1>
                                        <?php
                                    }
                                ?>
                            </a>

                        </div>
                    </div>
                    <!-- column 2 -->
                    <div class="col-md-3 col-sm-6 col-footer-2 mb-md-0 mb-3">
                        <div class="quick-links">
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                            <!-- <h5 class="footer-title">QUICK LINKS</h5>
                            <div class="quick-menu-list menu-list">
                                <?php 
                                   // wp_nav_menu( array( 'menu' => 'footer-menu') );
                                ?>
                                <?php 
                                    /*wp_nav_menu(array(
                                        'theme_location' =>  'footer',
                                        'menu_class' => 'navbar-nav ms-auto my-2 my-lg-0', 
                                        'add_li_class' => 'nav-item',
                                        "container" => false, 
                                    ));*/
                                ?>
                            </div> -->
                        </div>
                    </div>
                    <!-- column 3 -->
                    <div class="col-md-3 col-sm-6 col-footer-3 mb-md-0 mb-3">
                        <div class="footer-location">
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                            <!-- <h5 class="footer-title">TALK TO US</h5>
                            <div class="location">
                                <?php /*get_sidebar('Footer #1');*/ ?>
                                <p><i class="bi bi-geo-alt-fill me-2"></i>5908 Breckenridge Parkway, Tampa, FL 33610, USA</p>
                            </div> -->
                        </div>
                    </div>
                    <!-- column 4 -->
                    <div class="col-md-3 col-sm-6 col-footer-4 mb-md-0 mb-3">
                        <div class="follow-us-links">
                            <!-- <h5 class="footer-title">FOLLOW US</h5> -->
                            <!-- <div class="footer-subscribe mt-3"> -->
                                <!-- <form class="row g-3">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
                                    </div>
                                </form> -->
                            <!-- </div> -->
                            <div class="footer-social-list list-group list-group-horizontal">
                                <?php 
                                    dynamic_sidebar( 'footer-3' );
                                    //custom_registration_function();
                                    //wp_nav_menu( array( 'theme_location' => 'social') );
                                    /*wp_nav_menu(array(
                                        'theme_location' =>  'social',
                                        'menu_class' => 'list-group-item', 
                                    ));*/
                                ?>
                                <!-- <a href="https://www.facebook.com/bexcodeservices" target="_blank" class="list-group-item"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/bexcodeusa/" target="_blank" class="list-group-item"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/bexcode-services" target="_blank" class="list-group-item"><i class="bi bi-linkedin"></i></a>
                                <a href="https://twitter.com/bexcodeservices" target="_blank" class="list-group-item"><i class="bi bi-twitter"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>
