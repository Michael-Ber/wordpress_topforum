<?php 
    add_action('wp_enqueue_scripts', 'topforum_scripts');

    function topforum_scripts() {
        wp_enqueue_style('topforum-style', get_stylesheet_uri());
        wp_enqueue_script('topforum-scripts', get_template_directory_uri() . '/script.js', array(), null, true);
        wp_enqueue_script('topforum-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    }
    add_theme_support( 'custom-logo' );
?>