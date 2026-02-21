<?php get_header(); ?>

<section class="hero-section">

    <!-- Top Navbar -->
    <div class="top-navbar">
        <div class="left-side">
            <div class="menu-icon">☰</div>
            <div class="logo">SHOP.CO</div>
        </div>

        <div class="icons">
    <a href="#" class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets//icons/search.svg" alt="Search">
    </a>
  <a href="#" class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/user.svg" alt="Account">
    </a>
    <a href="#" class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cart.svg" alt="Cart">
    </a>

 
        </div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">

        <h1 class="hero-heading">
            <?php echo esc_html(get_field('hero_heading')); ?>
        </h1>

        <p class="hero-desc">
            <?php echo esc_html(get_field('hero_description')); ?>
        </p>

        <a href="<?php echo esc_url(get_field('hero_button_link')); ?>" class="hero-btn">
            <?php echo esc_html(get_field('hero_button_text')); ?>
        </a>

        <!-- Stats -->
        <div class="hero-stats">
            <div class="stat-box">
                <h3>200+</h3>
                <p>International Brands</p>
            </div>

            <div class="stat-divider"></div>

            <div class="stat-box">
                <h3>2,000+</h3>
                <p>High-Quality Products</p>
            </div>


            <div class="stat-box">
                <h3>30,000+</h3>
                <p>Happy Customers</p>
            </div>
        </div>

    </div>

    <!-- Hero Image -->
    <div class="hero-image">
        <img src="<?php echo esc_url(get_field('hero_image')); ?>" alt="Hero Image">
    </div>

</section>

<!-- Brand Section -->
<section class="brand-section">
    <div class="brand-row">
        <span>VERSACE</span>
        <span>ZARA</span>
        <span>GUCCI</span>
        <span>PRADA</span>
        <span>Calvin Klein</span>
    </div>
</section>
<section class="new-arrivals">
    <div class="container">

        <h2 class="section-title">NEW ARRIVALS</h2>

        <div class="products-grid">

            <?php
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
            ?>

                <div class="product-card">
                    <a href="<?php the_permalink(); ?>">

                        <div class="product-image">
                            <?php echo woocommerce_get_product_thumbnail(); ?>
                            
                            <?php if ($product->is_on_sale()) : ?>
                                <span class="sale-badge">
                                    <?php
                                    $regular_price = $product->get_regular_price();
                                    $sale_price = $product->get_sale_price();
                                    $discount = round((($regular_price - $sale_price) / $regular_price) * 100);
                                    echo '-' . $discount . '%';
                                    ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h3 class="product-title"><?php the_title(); ?></h3>

                        <div class="product-rating">
                            <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                            <span class="rating-count">
                                <?php echo $product->get_average_rating(); ?>/5
                            </span>
                        </div>

                        <div class="product-price">
                            <?php echo $product->get_price_html(); ?>
                        </div>

                    </a>
                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

        <div class="view-all-wrap">
            <a href="<?php echo get_permalink( wc_get_page_id('shop') ); ?>" class="view-all-btn">
                View All
            </a>
        </div>

    </div>
</section>
<?php get_footer(); ?>