<?php
function alishopex_enqueue_scripts() {

    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome-all.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('elpath', get_template_directory_uri() . '/assets/css/elpath.css');
    wp_enqueue_style('color', get_template_directory_uri() . '/assets/css/color.css');
    wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'alishopex_enqueue_scripts');
