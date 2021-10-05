    <footer id="site-footer" role="contentinfo" class="header-footer-group p-0 site-footer">
        <div class="footer-wrapper sec-p">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 col-footer-1 order-md-0 order-0 mb-5">
                        <div class="site-desc">
                            <a href="<?php echo get_home_url()?>" role="button">
                            <!-- add footer logo dynamically here -->
                                <img src="<?php echo get_home_url()?>/wp-content/uploads/2021/10/logo_round.png" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-footer-2 order-md-1 order-2 mb-5">
                        <div class="quick-links">
                            <h5 class="footer-title">QUICK LINKS</h4>
                            <div class="quick-menu-list menu-list">
                                <?php 
                                    wp_nav_menu( array( 'menu' => 'footer-menu') );
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-footer-3 order-md-2 order-3 mb-5">
                        <div class="footer-location">
                            <h5 class="footer-title">TALK TO US</h4>
                            <div class="location">
                                <p><i class="bi bi-geo-alt-fill me-2"></i>5908 Breckenridge Parkway, Tampa, FL 33610, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 col-footer-4 order-md-3 order-1 mb-5">
                        <div class="follow-us-links">
                            <h5 class="footer-title">FOLLOW US</h4>
                            <div class="footer-social-list list-group list-group-horizontal">
                                <a href="https://www.facebook.com/bexcodeservices" target="_blank" class="list-group-item"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/bexcodeusa/" target="_blank" class="list-group-item"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/bexcode-services" target="_blank" class="list-group-item"><i class="bi bi-linkedin"></i></a>
                                <a href="https://twitter.com/bexcodeservices" target="_blank" class="list-group-item"><i class="bi bi-twitter"></i></a>
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
