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