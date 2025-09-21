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
                                <?php 
                                if ( has_custom_logo() ) {
                                    the_custom_logo(); 
                                } else { ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo('name'); ?>">
                                <?php } ?>
                            </a>
                        </figure>
                        <p><?php bloginfo('description'); ?></p>

                        <div class="form-inner">
                            <!-- Burayı Contact Form 7 veya WPForms ile değiştirebilirsin -->
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="<?php esc_attr_e('Email Address', 'alishopex'); ?>" required>
                                    <button type="submit"><i class="icon-27"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Resources -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
                        <div class="widget-title"><h4><?php esc_html_e('Resources', 'alishopex'); ?></h4></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-resources',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false,
                                'fallback_cb'    => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
                        <div class="widget-title"><h4><?php esc_html_e('Support', 'alishopex'); ?></h4></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-support',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false,
                                'fallback_cb'    => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <div class="widget-title"><h4><?php esc_html_e('Products', 'alishopex'); ?></h4></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-products',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => false,
                                'fallback_cb'    => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1100">
                        <div class="widget-title"><h4><?php esc_html_e('Contact Info', 'alishopex'); ?></h4></div>
                        <div class="widget-content">
                            <p><?php echo esc_html( get_theme_mod('footer_address', '57 Heol Isaf Station Road, Cardiff, UK') ); ?></p>
                            <ul class="info mb_25 clearfix">
                                <li><a href="mailto:<?php echo antispambot( get_theme_mod('footer_email', 'info@example.com') ); ?>">
                                    <?php echo antispambot( get_theme_mod('footer_email', 'info@example.com') ); ?>
                                </a></li>
                                <li><a href="tel:<?php echo esc_attr( get_theme_mod('footer_phone', '02920214012') ); ?>">
                                    <?php echo esc_html( get_theme_mod('footer_phone', '029 2021 4012') ); ?>
                                </a></li>
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
                        © <?php echo esc_html( date('Y') ); ?> 
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>. 
                        <?php esc_html_e('All Rights Reserved','alishopex'); ?>
                    </p>
                </div>
                <ul class="footer-card clearfix">
                    <?php for($i=1;$i<=6;$i++): ?>
                        <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/resource/footer-card-'.$i.'.png' ); ?>" alt="card-<?php echo esc_attr($i); ?>">
                        </li>
                    <?php endfor; ?>
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