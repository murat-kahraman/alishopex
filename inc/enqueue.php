<?php
function alishopex_enqueue_assets() {

    // --- CSS Dosyaları --- //

    // *** Genel CSS ***
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), null );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), null );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css', array(), null );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), null );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), null );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), null );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), null );
    wp_enqueue_style( 'elpath', get_template_directory_uri() . '/assets/css/elpath.css', array(), null );
    wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css', array(), null ); 
    wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), null );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), null );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), null );

    // *** Modüler CSS ***
    wp_enqueue_style( 'header-css', get_template_directory_uri() . '/assets/css/module-css/header.css', array(), null );
    wp_enqueue_style( 'banner-css', get_template_directory_uri() . '/assets/css/module-css/banner.css', array(), null );
    wp_enqueue_style( 'highlights-css', get_template_directory_uri() . '/assets/css/module-css/highlights.css', array(), null );
    wp_enqueue_style( 'category-css', get_template_directory_uri() . '/assets/css/module-css/category.css', array(), null );
    wp_enqueue_style( 'cta-css', get_template_directory_uri() . '/assets/css/module-css/cta.css', array(), null );
    wp_enqueue_style( 'feature-css', get_template_directory_uri() . '/assets/css/module-css/feature.css', array(), null );
    wp_enqueue_style( 'shop-css', get_template_directory_uri() . '/assets/css/module-css/shop.css', array(), null );
    wp_enqueue_style( 'deals-css', get_template_directory_uri() . '/assets/css/module-css/deals.css', array(), null );
    wp_enqueue_style( 'brand-css', get_template_directory_uri() . '/assets/css/module-css/brand.css', array(), null );
    wp_enqueue_style( 'flash-sales-css', get_template_directory_uri() . '/assets/css/module-css/flash-sales.css', array(), null );
    wp_enqueue_style( 'apps-css', get_template_directory_uri() . '/assets/css/module-css/apps.css', array(), null );
    wp_enqueue_style( 'testimonial-css', get_template_directory_uri() . '/assets/css/module-css/testimonial.css', array(), null );
    wp_enqueue_style( 'news-css', get_template_directory_uri() . '/assets/css/module-css/news.css', array(), null );
    wp_enqueue_style( 'footer-css', get_template_directory_uri() . '/assets/css/module-css/footer.css', array(), null );


    // --- JS Dosyaları --- //

    // WP'nin kendi jQuery'sini yükletiyoruz
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), null, true);
    wp_enqueue_script('validation', get_template_directory_uri() . '/assets/js/validation.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), null, true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    
    // language.js kaldırıldı !!!
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-touchspin', get_template_directory_uri() . '/assets/js/jquery.bootstrap-touchspin.js', array('jquery'), null, true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/assets/js/bxslider.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), null, true);
    wp_enqueue_script('lenis', get_template_directory_uri() . '/assets/js/lenis.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), null, true);

    // Ana script en sonda
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    
    
}
add_action('wp_enqueue_scripts', 'alishopex_enqueue_assets');