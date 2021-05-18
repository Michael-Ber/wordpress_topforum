<?php 

/*
Template Name: Speakerdetail
*/

?>

<?php 
    get_header();
?>
    <section class="speaker-detail">
        <div class="container">
            <h1 class="speaker-detail__title title"><?php the_field('speaker_detail_title'); ?></h1>
            <span class="speaker-detail__text"><?php the_field('speaker_detail_text1'); ?></span>
            <div class="speaker-detail__photo">
                <div>
                    <img src="<?php the_field('speaker_detail_main_img'); ?>" alt="photo">
                </div>
            </div>
            <span class="speaker-detail__text"><?php the_field('speaker_detail_text2'); ?></span>
            <span class="speaker-detail__text"><?php the_field('speaker_detail_text3'); ?></span>
            <span class="speaker-detail__text"><?php the_field('speaker_detail_text4'); ?></span>
            <div class="speaker-detail__img">
                <div><img src="<?php the_field('speaker_detail_img1'); ?>" alt="sponsors"></div>
                <div><img src="<?php the_field('speaker_detail_img2'); ?>" alt="sponsors"></div>
            </div>
            <span class="speaker-detail__text speaker-detail__text_end"><?php the_field('speaker_detail_text5'); ?></span>
        </div>
    </section>


<?php 
    get_footer();
?>