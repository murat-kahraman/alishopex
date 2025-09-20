<?php
/**
 * Alishopex | E-ticaret Teması - functions.php
 *
 * Tema için gerekli tüm temel fonksiyonlar, destekler ve ek dosya çağrımları burada tanımlanır.
 *
 * @package Alishopex_|_E_ticaret_Teması
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Tema sürümünü sabitler, her yeni güncellemede değiştirilir.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Tema kurulumu ve destekler
 * 
 * Burada WordPress’in tema için sunduğu özelliklere destek eklenir.
 * - Çeviri dosyaları
 * - Başlık yönetimi
 * - Öne çıkan görsel (thumbnail)
 * - Menü kaydı
 * - HTML5 desteği
 * - Arka plan, logo vb.
 * - WooCommerce desteği
 */
function alishopex_setup() {

	// Çeviri desteği
	load_theme_textdomain( 'alishopex', get_template_directory() . '/languages' );

	// RSS feed linkleri
	add_theme_support( 'automatic-feed-links' );

	// <title> etiketini WordPress yönetsin
	add_theme_support( 'title-tag' );

	// Öne çıkarılmış görsel desteği
	add_theme_support( 'post-thumbnails' );

	// Menü kaydı (Burada menü ismi "Ana Menü")
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Ana Menü', 'alishopex' ),
		)
	);

	// HTML5 desteği
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Özel arka plan desteği
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

	// Widget’larda canlı önizleme desteği
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Özel logo desteği
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// WooCommerce desteği (e-ticaret uyumluluğu)
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'alishopex_setup' );

/**
 * İçerik genişliği
 *
 * Tema tasarımına göre varsayılan içerik genişliği piksel cinsinden belirlenir.
 */
function alishopex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alishopex_content_width', 640 );
}
add_action( 'after_setup_theme', 'alishopex_content_width', 0 );

/**
 * Widget Alanı Kaydı
 *
 * Kenar çubuğu (sidebar) gibi widget eklenebilecek alanlar burada tanımlanır.
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
 * Tema CSS ve JS dosyalarını çağırma (enqueue)
 *
 * Burada tema ile birlikte yüklenecek stil ve script dosyaları belirtilir.
 * Eğer ek dosya olan enqueue.php’de başka script ekleme fonksiyonların varsa,
 * onlar da ayrıca çağrılır.
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

// Eğer enqueue.php dosyası varsa eklenir (ekstra script/style yazma yeri)
require get_template_directory() . '/inc/enqueue.php';

/**
 * Ek özel dosyalar
 * (Tema yapısına göre bölünmüş işlevler burada yüklenir.)
 */
require get_template_directory() . '/inc/custom-header.php';   // Özel header özellikleri
require get_template_directory() . '/inc/template-tags.php';   // Özel tema etiketleri
require get_template_directory() . '/inc/template-functions.php'; // Tema işlevleri
require get_template_directory() . '/inc/customizer.php';      // Customizer ayarları

// Jetpack uyumluluğu
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// WooCommerce uyumluluğu
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}