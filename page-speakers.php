<?php 

/*
Template Name: Speakers
*/

?>

<?php 
    get_header();
?>

    <section class="speakers">
        <div class="container">
            <h1 class="speakers__title title"><?php the_title(); ?></h1>
            <span class="speakers__text"><?php the_field('speakers_text'); ?></span>
            <h2 class="speakers__subtitle"><?php the_field('speakers_select'); ?></h2>
            <div class="speakers__choose">
                <select name="conf" id="conf" class="speakers__select">
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
                        <option value="<?php the_title(); ?>" class="sponsors__option"><?php the_title(); ?></option>
                    <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
                </select>
            </div>
            <div class="speakers__items">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'speakers_item',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                ?>
                    <div class="speakers__item">
                        <div class="speakers__item-logo">
                            <div class="speakers__item-logo-wrapper">
                                <img src="<?php the_field('speakers_card-img'); ?>" alt="logo1">
                            </div>
                        </div>
                        <div class="speakers__item-title"><?php the_title(); ?></div>
                        <div class="speakers__item-text">
                            <span><?php the_field('speakers_card-text'); ?></span>
                        </div>
                        <div class="speakers__item-btn btn">
                            <a href="http://topforum/speakerdetail">
                                Learn more
                            </a>
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