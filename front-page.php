<?php
/**
 * Front Page Template
 * Anasayfa olarak index.html tasarımını yükler.
 */

get_header(); ?>

<main class="site-main">

    <!-- ================================
         Hero / Banner Alanı
    ================================= -->
    <section class="hero-banner">
        <div class="auto-container">
            <h1><?php the_field('homepage_hero_title', 'option'); ?></h1>
            <p><?php the_field('homepage_hero_subtitle', 'option'); ?></p>
            <a href="<?php the_field('homepage_hero_button_link', 'option'); ?>" class="theme-btn">
                <?php the_field('homepage_hero_button_text', 'option'); ?>
            </a>
        </div>
    </section>

    <!-- ================================
         Öne Çıkan Ürünler (WooCommerce)
    ================================= -->
    <section class="featured-products">
        <div class="auto-container">
            <h2>Öne Çıkan Ürünler</h2>
            <?php echo do_shortcode('[featured_products limit="4" columns="4"]'); ?>
        </div>
    </section>

    <!-- ================================
         Kampanya / CTA Alanı
    ================================= -->
    <section class="cta-section">
        <div class="auto-container">
            <h2><?php the_field('homepage_cta_title', 'option'); ?></h2>
            <p><?php the_field('homepage_cta_text', 'option'); ?></p>
            <a href="<?php the_field('homepage_cta_button_link', 'option'); ?>" class="theme-btn">
                <?php the_field('homepage_cta_button_text', 'option'); ?>
            </a>
        </div>
    </section>

    <!-- ================================
         Blog Yazıları (WordPress Loop)
    ================================= -->
    <section class="latest-posts">
        <div class="auto-container">
            <h2>Son Yazılar</h2>
            <div class="row clearfix">
                <?php
                $latest_posts = new WP_Query(array('posts_per_page' => 3));
                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-box">
                                <?php if(has_post_thumbnail()): ?>
                                    <figure><?php the_post_thumbnail('medium'); ?></figure>
                                <?php endif; ?>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p>Henüz yazı bulunmamaktadır.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>