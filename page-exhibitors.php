<?php 

/*
Template Name: Exhibitors
*/

?>

<?php 
    get_header();
?>

    <section class="exhibitors">
        <div class="container">
            <h1 class="exhibitors__title title"><?php the_title(); ?></h1>
            <span class="exhibitors__text"><?php the_field('exhibitors_text'); ?></span>
            <h2 class="exhibitors__subtitle"><?php the_field('exhibitors_select'); ?></h2>
            <div class="exhibitors__choose">
                <select name="conf" id="conf" class="exhibitors__select">
                    <option disabled selected value="" class="exhibitors__option">Wealth TOP FORUM Israel 2016</option>
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
                        <option value="<?php the_title(); ?>" class="exhibitors__option"><?php the_title(); ?></option>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </select>
            </div>
            <div class="exhibitors__items">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'exhibitors_items',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                ?>
                    <div class="exhibitors__item">
                        <div class="exhibitors__item-logo">
                            <div class="exhibitors__item-logo-wrapper">
                                <img src="<?php the_field('sponsors_card-img'); ?>" alt="logo1">
                            </div>
                        </div>
                        <div class="exhibitors__item-title"><?php the_field('sponsors_card-title'); ?></div>
                        <div class="exhibitors__item-text">
                            <span><?php the_field('sponsors_card-text'); ?></span>
                        </div>
                        <div class="exhibitors__item-btn btn">
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