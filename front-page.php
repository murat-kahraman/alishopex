<?php
/**
 * Anasayfa Şablonu
 */
get_header(); ?>

<main class="site-main">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="auto-container">
            <h1>Araba Yedek Parçaları Burada</h1>
            <p>En kaliteli ürünler, en uygun fiyatlarla.</p>
        </div>
    </section>

    <!-- Kategoriler -->
    <section class="categories">
        <div class="auto-container">
            <h2>Kategoriler</h2>
            <?php echo do_shortcode('[product_categories columns="4"]'); ?>
        </div>
    </section>

    <!-- Öne Çıkan Ürünler -->
    <section class="featured-products">
        <div class="auto-container">
            <h2>Öne Çıkan Ürünler</h2>
            <?php echo do_shortcode('[featured_products limit="8" columns="4"]'); ?>
        </div>
    </section>

    <!-- Blog Yazıları -->
    <section class="latest-posts">
        <div class="auto-container">
            <h2>Son Yazılar</h2>
            <div class="row">
                <?php
                $latest_posts = new WP_Query(array('posts_per_page' => 3));
                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="post-box">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            </div>
                        </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>