<?php
/**
 * Alishopex | E-ticaret Teması - Theme Customizer
 *
 * @package Alishopex_|_E_ticaret_Teması
 */

/**
 * Tema Özelleştirici Ayarları
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alishopex_customize_register( $wp_customize ) {

	// Site title & description canlı önizleme
	if( $wp_customize->get_setting( 'blogname' ) ) {
		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	}
	if( $wp_customize->get_setting( 'blogdescription' ) ) {
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	}
	if( $wp_customize->get_setting( 'header_textcolor' ) ) {
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}

	// Selective refresh
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'alishopex_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'alishopex_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * =======================
	 * Özel Alanlar (Sosyal Medya & İletişim)
	 * =======================
	 */
	$wp_customize->add_section('alishopex_social_section', array(
		'title'    => __('Sosyal & İletişim Ayarları','alishopex'),
		'priority' => 30,
	));

	// Facebook
	$wp_customize->add_setting('alishopex_facebook', array(
		'default' => '#',
	));
	$wp_customize->add_control('alishopex_facebook', array(
		'label'   => 'Facebook Linki',
		'section' => 'alishopex_social_section',
		'type'    => 'text',
	));

	// Instagram
	$wp_customize->add_setting('alishopex_instagram', array(
		'default' => '#',
	));
	$wp_customize->add_control('alishopex_instagram', array(
		'label'   => 'Instagram Linki',
		'section' => 'alishopex_social_section',
		'type'    => 'text',
	));

	// Telefon Numarası
	$wp_customize->add_setting('alishopex_phone', array(
		'default' => '0 (212) 000 00 00',
	));
	$wp_customize->add_control('alishopex_phone', array(
		'label'   => 'Telefon Numarası',
		'section' => 'alishopex_social_section',
		'type'    => 'text',
	));

	// Adres
	$wp_customize->add_setting('alishopex_address', array(
		'default' => 'Adres buraya gelecek...',
	));
	$wp_customize->add_control('alishopex_address', array(
		'label'   => 'Adres',
		'section' => 'alishopex_social_section',
		'type'    => 'textarea',
	));
}
add_action( 'customize_register', 'alishopex_customize_register' );

/**
 * Selective refresh fonksiyonları
 */
function alishopex_customize_partial_blogname() {
	bloginfo( 'name' );
}
function alishopex_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Özelleştirici önizleme için JS
 */
function alishopex_customize_preview_js() {
	wp_enqueue_script(
		'alishopex-customizer',
		get_template_directory_uri() . '/js/customizer.js',
		array( 'customize-preview' ),
		_S_VERSION,
		true
	);
}
add_action( 'customize_preview_init', 'alishopex_customize_preview_js' );