<?php 
    get_header();
?>
    <!-- MAIN -->
    <section class="main">
        <img src="<?php the_field('main_img'); ?>" alt="background" id="main_img">
        <div class="container">
            <div class="main__text">
                <span><?php the_field('main_text'); ?></span>
            </div>
            <ul class="main__cards">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'delegates',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                        <li class="main__card">
                            <div class="main__card-img">
                                <div class="main__card-circle">
                                    <img src="<?php the_field('card_img'); ?>" alt="card1">
                                </div>
                            </div>
                            <div class="main__card-title"><strong><?php the_title(); ?></strong></div>
                            <div class="main__card-text">
                                <span>
                                    <?php the_field('card_text'); ?>
                                </span>
                            </div>
                            
                                <?php 
                                    $field = get_field('card_btn');
                                    if($field === 'on') {
                                        ?>
                                        <div class="main__card-button btn">
                                            <a href="<?php the_field('card_link'); ?>">Learn more</a>
                                        </div>
                                        <?php
                                    }
                                ?>
                                
                            
                            <div class="main__card-footer"><?php the_field('card_wealth'); ?></div>
                        </li>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>
            </ul>
            <div class="main__buttons">
                <div class="main__button main__button_register">
                    <a href="./page-registration.php">Register now</a></div>
                <div class="main__button main__button_subscribe">
                    <a href="./registration.html">subscribe</a></div>
            </div>
            <div class="main__popup fadein">
                <h2 class="main__popup-title">SUBSCRIBE</h2>
                <span class="main__popup-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                <div class="main__popup-form">
                    <?php echo do_shortcode('[contact-form-7 id="125" title="Subscribe form"]'); ?>
                </div>
                <div class="main__popup-close">&times</div>
            </div>
        </div>
        <div class="popup__background"></div>
    </section>
    <!-- /MAIN -->

    <!-- CUSTOMER -->
    <div class="customer">
        <div class="container">
            <h2 class="customer__title title">CUSTOMER REVIEWS</h2>
            <div class="customer__carousel">
                <div class="customer__frame swiper-container">
                    <div class="customer__track swiper-wrapper">

                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'slider_customer',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
            
                            foreach( $posts as $post ){
                                setup_postdata($post);
                        ?>
                            <div class="customer__item swiper-slide">
                                <div class="customer__photo">
                                    <img 
                                    src="<?php 
                                        $field = get_field('customer_item-photo');
                                        if(!empty($field)) {
                                            echo $field;
                                        }else {
                                            the_field('customer_item-nophoto');
                                        }
                                    ?>" 
                                    <?php 
                                        if(!empty($field)) {
                                            ?>
                                            class="with_photo"
                                            <?php
                                        }
                                    ?>
                                    alt="woman" 
                                    >
                                </div>
                                <div class="customer__descr">
                                    <span class="customer__name"><?php the_title(); ?></span>
                                    <div class="customer__data"><span><?php the_field('customer_item-data'); ?></span></div>
                                    <span class="customer__text"><?php the_field('customer_item-text'); ?></span>
                                </div>
                            </div>
                        <?php
                            }

                            wp_reset_postdata(); // сброс
                        ?>

                    </div>
                </div>
                <div class="customer__arrows arrows">
                    <div class="customer__arrow-left arrow_left">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="customer__arrow-right arrow_right">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /CUSTOMER -->

    <!-- VIDEO -->
    <div class="video">
        <div class="container">
            <h2 class="video__title title">Promo video</h2>
            <div class="video__wrapper">
                <video src="<?php the_field('main_video'); ?>" controls="controls"  poster="<?php the_field('main_video-img') ?>" class="video__screen"></video>
            </div>
        </div>
    </div>
    <!-- /VIDEO -->

    <!-- CLIENTS -->
    <div class="clients">
        <div class="container">
            <h2 class="clients__title title">Our clients</h2>
            <div class="clients__carousel">
                <div class="clients__carousel-wrapper">
                    <div class="clients__carousel-frame swiper-container">
                        <div class="clients__carousel-track swiper-wrapper">
                            <?php
                                $posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'slider_clients',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );
                
                                foreach( $posts as $post ){
                                    setup_postdata($post);
                            ?>
                                <div class="clients__item swiper-slide">
                                    <img src="<?php the_field('client_img'); ?>" alt="logo">
                                </div>
                            <?php
                                }

                                wp_reset_postdata(); // сброс
                            ?>

                        </div>
                    </div>
                </div>
                <div class="clients__arrows arrows">
                    <div class="clients__arrow-left arrow_left">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="clients__arrow-right arrow_right">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /CLIENTS -->

    <?php 
        get_footer();
    ?>
