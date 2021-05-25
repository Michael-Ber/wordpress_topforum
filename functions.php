<?php 
    add_action('wp_enqueue_scripts', 'topforum_scripts');

    function topforum_scripts() {
        wp_enqueue_style('topforum-style', get_stylesheet_uri());
        wp_enqueue_script('topforum-scripts', get_template_directory_uri() . '/script.js', array(), null, true);
        wp_enqueue_script('topforum-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    }
    add_theme_support( 'custom-logo' );

    //

    function blog_scripts() {
        // Register the script
        wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), false, true );
    
        // Localize the script with new data
        $script_data_array = array(
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'security' => wp_create_nonce( 'load_more_posts' ),
        );
        wp_localize_script( 'custom-script', 'blog', $script_data_array );
    
        // Enqueued script with localized data.
        wp_enqueue_script( 'custom-script' );
    }
    add_action( 'wp_enqueue_scripts', 'blog_scripts' );
    
    add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
    add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
    
    function load_posts_by_ajax_callback() {
        check_ajax_referer('load_more_posts', 'security');
        $paged = $_POST['page'];
        $template = $_POST['template'];
        
        if($template == 'blog') :
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'cat' => 9,
                'posts_per_page' => '3',
                'paged' => $paged
            );
        endif;
        
        $blog_posts = new WP_Query( $args );
        ?>
    
        <?php if ( $blog_posts->have_posts() ) : ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <?php get_template_part( 'inc/template', $template ); ?>
            <?php endwhile; ?>
            
        <?php endif; ?>
        <?php die(); ?> // без него admin-ajax.php будет выводить 0 на страницу после всех постов
    <?php 
    }
    
    ?>