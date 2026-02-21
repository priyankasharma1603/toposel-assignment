<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="topbar">
    <p>
        <?php 
        $announcement_text = get_field('announcement_text', 'option');
        $announcement_button_text = get_field('announcement_button_text', 'option');
        $announcement_button_url = get_field('announcement_button_url', 'option');

        echo esc_html( $announcement_text ? $announcement_text : 'Sign up and get 20% off to your first order.' );
        ?>
        
        <a href="<?php echo esc_url( $announcement_button_url ? $announcement_button_url : '#' ); ?>">
            <?php echo esc_html( $announcement_button_text ? $announcement_button_text : 'Sign Up Now' ); ?>
        </a>
    </p>
</div>

</header>