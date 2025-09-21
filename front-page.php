<?php
/**
 * Template Name: Front Page
 * Anasayfa Şablonu
 *
 * @package Alishopex_|_E_ticaret_Teması
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- Hero / Banner -->
    <section class="hero-banner">
        <div class="auto-container">
            <div class="content-box">
                <h1><?php the_field('hero_title','option'); ?></h1>
                <p><?php the_field('hero_subtitle','option'); ?></p>
                <?php if( get_field('hero_button_link','option') ): ?>
                    <a href="<?php the_field('hero_button_link','option'); ?>" class="theme-btn">
                        <?php the_field('hero_button_text','option'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="image-box">
                <?php $hero_img = get_field('hero_image','option'); 
                if( $hero_img ): ?>
                    <img src="<?php echo esc_url($hero_img['url']); ?>" alt="<?php echo esc_attr($hero_img['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Kategoriler (WooCommerce) -->
    <section class="categories">
        <div class="auto-container">
            <div class="sec-title"><h2><?php esc_html_e('Kategoriler','alishopex'); ?></h2></div>
            <?php echo do_shortcode('[product_categories number="8" columns="4"]'); ?>
        </div>
    </section>

    <!-- Öne Çıkan Ürünler -->
    <section class="featured-products">
        <div class="auto-container">
            <div class="sec-title"><h2><?php esc_html_e('Öne Çıkan Ürünler','alishopex'); ?></h2></div>
            <?php echo do_shortcode('[featured_products limit="8" columns="4"]'); ?>
        </div>
    </section>

    <!-- CTA / Kampanya Alanı -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="content-box">
                <h2><?php the_field('cta_title','option'); ?></h2>
                <p><?php the_field('cta_text','option'); ?></p>
                <?php if( get_field('cta_button_text','option') ): ?>
                    <a href="<?php the_field('cta_button_link','option'); ?>" class="theme-btn">
                        <?php the_field('cta_button_text','option'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Blog Alanı -->
    <section class="latest-posts">
        <div class="auto-container">
            <div class="sec-title"><h2><?php esc_html_e('Son Yazılar','alishopex'); ?></h2></div>
            <div class="row clearfix">
                <?php
                $latest_posts = new WP_Query(array('posts_per_page' => 3));
                if($latest_posts->have_posts()):
                    while($latest_posts->have_posts()): $latest_posts->the_post(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-box">
                                <figure class="image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if(has_post_thumbnail()): the_post_thumbnail('medium'); endif; ?>
                                    </a>
                                </figure>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            </div>
                        </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<?php get_footer(); ?>