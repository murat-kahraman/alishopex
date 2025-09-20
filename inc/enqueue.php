<?php
function alishopex_enqueue_assets() {

    // --- CSS Dosyaları ---
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), null);
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), null);
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), null);
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), null);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), null);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), null);
    wp_enqueue_style('elpath', get_template_directory_uri() . '/assets/css/elpath.css', array(), null);
    wp_enqueue_style('color', get_template_directory_uri() . '/assets/css/color.css', array(), null);
    wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), null);
    wp_enqueue_style('header-css', get_template_directory_uri() . '/assets/css/module-css/header.css', array(), null);
    wp_enqueue_style('banner-css', get_template_directory_uri() . '/assets/css/module-css/banner.css', array(), null);
    wp_enqueue_style('footer-css', get_template_directory_uri() . '/assets/css/module-css/footer.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), null);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), null);

    // --- JS Dosyaları ---
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'alishopex_enqueue_assets');