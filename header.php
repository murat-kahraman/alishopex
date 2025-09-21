<?php
/**
 * The header for our theme
 *
 * @package Alishopex | E-Ticaret Teması
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.ico' ); ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header header-style-four dark-header">
    <div class="shape" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/shape/shape-9.png' ); ?>);"></div>
    
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list">
                    <!-- Telefon -->
                    <?php if( get_field('ust_menu_phone','option') ): ?>
                        <li><i class="icon-2"></i>
                            <a href="tel:<?php echo esc_attr( get_field('ust_menu_phone','option') ); ?>">
                                <?php echo esc_html( get_field('ust_menu_phone','option') ); ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- Mail -->
                    <?php if( get_field('ust_menu_email','option') ): ?>
                        <li><i class="icon-3"></i>
                            <a href="mailto:<?php echo antispambot( get_field('ust_menu_email','option') ); ?>">
                                <?php echo antispambot( get_field('ust_menu_email','option') ); ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li><i class="icon-4"></i><?php esc_html_e('Support Line','alishopex'); ?></li>
                </ul>

                <div class="right-column">
                    <!-- Üst Bar Yazısı -->
                    <?php if( get_field('ust_menu_text','option') ): ?>
                        <div class="text mr_30">
                            <i class="icon-5"></i>
                            <p><?php echo esc_html( get_field('ust_menu_text','option') ); ?></p>
                        </div>
                    <?php endif; ?>

                    <!-- Language Switcher (statik bırakıldı – gerekirse eklentiyle dinamik yapılır) -->
                    <div class="language-picker js-language-picker mr_30">
                        <form>
                            <select name="lang">
                                <option value="en" selected>EN</option>
                                <option value="fr">FR</option>
                                <option value="de">DE</option>
                            </select>
                        </form>
                    </div>

                    <!-- Currency Switcher (statik) -->
                    <div class="select-box">
                        <select class="wide">
                           <option data-display="USD">USD</option>
                           <option value="1">EUR</option>
                           <option value="2">GBP</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header-upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="upper-inner">
                <!-- Logo -->
                <figure class="logo-box">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php 
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else { ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-2.png' ); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php } ?>
                    </a>
                </figure>

                <!-- Search Form -->
                <div class="search-area">
                    <?php get_search_form(); ?>
                </div>

                <!-- Right Side Icons -->
                <ul class="option-list">
                    <li><a href="#"><i class="icon-1"></i></a></li>
                    <li><a href="#"><i class="icon-7"></i></a></li>
                    <li>
                        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                            <i class="icon-6"></i>
                            <?php if ( function_exists('WC') && WC()->cart && WC()->cart->get_cart_contents_count() > 0 ) : ?>
                                <span><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <!-- Dynamic WordPress Menu -->
                <div class="menu-area">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'navigation clearfix',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu navbar-expand-md navbar-light clearfix',
                        'fallback_cb'    => false
                    ));
                    ?>
                </div>

                <!-- My Account -->
                <div class="menu-right-content">
                    <div class="btn-box">
                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
                            <i class="icon-25"></i> <?php esc_html_e('My Account','alishopex'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>