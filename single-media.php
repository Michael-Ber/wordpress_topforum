<?php 

/*
Template Name: Template for single media
Template Post Type: post, media_items
*/

?>
<?php get_header(); ?>
<main id="primary-media" class="site-main">

<?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

    endwhile; // End of the loop.
?>
    <div class="container">
        <h2 class="subtitle">You might like:</h2>
        <div class="media__items">

            <?php 
                    $posts = get_posts( array(
                        'numberposts' => 3,
                        'category_name'    => 'media_items',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                ?>
                    <div class="media__item">
                        <div class="media__item-logo">
                            <div class="media__item-logo-wrapper">
                                <img src="<?php the_field('media_card_img'); ?>" alt="logo1">
                            </div>
                        </div>
                        <a href="<?php echo get_permalink(); ?>" class="media__item-title"><?php the_title(); ?></a>
                        <div class="media__item-text">
                            <span><?php the_field('media_card_text'); ?></span>
                        </div>
                    </div>
                <?php
                    }

                    wp_reset_postdata(); // сброс
            ?>
        </div>
    </div>
    

    </main><!-- #main -->

<?php
get_footer();