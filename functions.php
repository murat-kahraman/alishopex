<?php
/**
 * Alishopex | E-ticaret Teması - functions.php
 *
 * Tema için gerekli tüm temel fonksiyonlar, destekler ve ek dosya çağrımları burada tanımlanır.
 *
 * @package Alishopex_|_E_ticaret_Teması
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Tema kurulumu ve destekler
 */
function alishopex_setup() {
	// Çeviri desteği
	load_theme_textdomain( 'alishopex', get_template_directory() . '/languages' );

	// RSS
	add_theme_support( 'automatic-feed-links' );

	// <title> tag desteği
	add_theme_support( 'title-tag' );

	// Öne çıkarılmış görsel desteği
	add_theme_support( 'post-thumbnails' );

	// Menü konumları
	register_nav_menus(
		array(
			'primary'          => esc_html__( 'Ana Menü', 'alishopex' ),
			'footer-resources' => esc_html__( 'Footer Resources', 'alishopex' ),
			'footer-support'   => esc_html__( 'Footer Support', 'alishopex' ),
			'footer-products'  => esc_html__( 'Footer Products', 'alishopex' ),
		)
	);

	// HTML5 desteği
	add_theme_support(
		'html5',
		array( 'search-form','comment-form','comment-list','gallery','caption','style','script' )
	);

	// Özel arka plan
	add_theme_support(
		'custom-background',
		apply_filters(
			'alishopex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Widget’larda canlı önizleme
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Özel logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// WooCommerce
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'alishopex_setup' );

/**
 * İçerik genişliği
 */
function alishopex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alishopex_content_width', 640 );
}
add_action( 'after_setup_theme', 'alishopex_content_width', 0 );

/**
 * Widget Alanı
 */
function alishopex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alishopex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Buraya widget eklenebilir.', 'alishopex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alishopex_widgets_init' );

/**
 * Stil & Script Enqueue
 */
function alishopex_scripts() {
	wp_enqueue_style( 'alishopex-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'alishopex-style', 'rtl', 'replace' );

	wp_enqueue_script( 'alishopex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alishopex_scripts' );

// Enqueue dosyası
require get_template_directory() . '/inc/enqueue.php';

/**
 * Ek özel dosyalar
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php'; // Customizer kodları burada tutulacak

// Jetpack uyumluluk
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// WooCommerce uyumluluk
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * === ACF Options Page (Tema Genel Ayar Paneli) ===
 */
if( function_exists('acf_add_options_page') ) {

	// Genel Site Ayarları Paneli
	acf_add_options_page(array(
		'page_title' 	=> 'Site Yönetim Ayarları',
		'menu_title'	=> 'Site Ayarları',
		'menu_slug' 	=> 'tema-genel-ayarlari',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	// Üst Menü
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Üst Menü Ayarları',
		'menu_title'	=> 'Üst Menü',
		'parent_slug'	=> 'tema-genel-ayarlari',
		'menu_slug'     => 'ust-menu', // JSON ile eşleşmesi için
	));

	// Alt Menü
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Alt Menü Ayarları',
		'menu_title'	=> 'Alt Menü',
		'parent_slug'	=> 'tema-genel-ayarlari',
		'menu_slug'     => 'alt-menu', // JSON ile eşleşmesi için
	));

	// Hero Section
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hero Ayarları',
		'menu_title'	=> 'Hero',
		'parent_slug'	=> 'tema-genel-ayarlari',
		'menu_slug'     => 'hero-settings'
	));

	// CTA Section
	acf_add_options_sub_page(array(
		'page_title' 	=> 'CTA Ayarları',
		'menu_title'	=> 'CTA',
		'parent_slug'	=> 'tema-genel-ayarlari',
		'menu_slug'     => 'cta-settings'
	));
}