<?php 

/*
Template Name: Sponsors
*/

?>

<?php 
    get_header();
?>
    <section class="sponsors">
        <div class="container">
            <h1 class="sponsors__title title"><?php the_field('sponsors_title'); ?></h1>
            <span class="sponsors__text"><?php the_field('sponsors_text'); ?></span>
            <h2 class="sponsors__subtitle"><?php the_field('sponsors_select'); ?></h2>
            <div class="sponsors__choose">
                <select name="conf" id="conf" class="sponsors__select">
                    <option disabled selected value="" class="sponsors__option">Wealth TOP FORUM Israel 2016</option>
                    <?php 
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'conferences',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                    ?>
                        <option value="<?php the_title(); ?>" class="sponsors__option"><?php the_title(); ?></option>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </select>
            </div>
            <div class="sponsors__items">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'sponsor_items',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                ?>
                            <div class="sponsors__item">
                                <div class="sponsors__item-header"><?php the_title(); ?></div>
                                <div class="sponsors__item-logo">
                                    <div class="sponsors__item-logo-wrapper">
                                        <img src="<?php the_field('sponsors_card-img'); ?>" alt="logo1">
                                    </div>
                                </div>
                                <div class="sponsors__item-title"><?php the_field('sponsors_card-title'); ?></div>
                                <div class="sponsors__item-text">
                                    <span><?php the_field('sponsors_card-text'); ?></span>
                                </div>
                                <div class="sponsors__item-btn btn">
                                    <a href="<?php echo get_permalink(); ?>">Learn more</a>
                                </div>
                            </div>
                <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>

                
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>