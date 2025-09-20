<?php
/**
 * The template for displaying the footer
 *
 * @package Alishopex_|_E_ticaret_Teması
 */
?>

<!-- main-footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <!-- Logo / Newsletter -->
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                        <figure class="footer-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </figure>
                        <p><?php bloginfo('description'); ?></p>

                        <div class="form-inner">
                            <!-- Burayı Contact Form 7 ile değiştirebilirsin -->
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit"><i class="icon-27"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Resources -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
                        <div class="widget-title"><h4>Resources</h4></div>
                        <div class="widget-content">
                            <?php
                            // Burası admin'den "Resources" adında özel bir menü ile dinamik yapılabilir
                            wp_nav_menu(array(
                                'theme_location' => 'footer-resources',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
                        <div class="widget-title"><h4>Support</h4></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-support',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="widget-title"><h4>Products</h4></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-products',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1100">
                        <div class="widget-title"><h4>Contact Info</h4></div>
                        <div class="widget-content">
                            <p>57 Heol Isaf Station Road, Cardiff, UK</p>
                            <ul class="info mb_25 clearfix">
                                <li><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><a href="tel:02920214012">029 2021 4012</a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="icon-18"></i></a></li>
                                <li><a href="#"><i class="icon-19"></i></a></li>
                                <li><a href="#"><i class="icon-20"></i></a></li>
                                <li><a href="#"><i class="icon-21"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer-bottom -->
        <div class="footer-bottom">
            <div class="bottom-inner">
                <div class="copyright">
                    <p>
                        © <?php echo date('Y'); ?> 
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>. 
                        All Rights Reserved
                    </p>
                </div>
                <ul class="footer-card clearfix">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-1.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-2.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-3.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-4.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-5.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/footer-card-6.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>