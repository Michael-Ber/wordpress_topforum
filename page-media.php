<?php 

/*
Template Name: Media
*/

?>

<?php 
    get_header();
?>
    <section class="media">
        <div class="container">
            <h1 class="media__title title"><?php the_field('media_title'); ?></h1>
            <span class="media__text"><?php the_field('media_text'); ?></span>
            
            <div class="media__items" id="row_append">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => 9,
                    'posts_per_page' => '3',
                    'order' => 'ASC',
                    'paged' => 1
                );
                $blog_posts = new WP_Query ($args);
                ?>
                <?php if($blog_posts->have_posts()) : ?>
                    <?php while ($blog_posts->have_posts()):$blog_posts->the_post();?>
                        <?php get_template_part('inc/template', 'blog') ?>
                    <?php endwhile; ?>
                <?php endif;?>
                
            </div>
            
            <div id="more_posts" data-template="blog" class="media__btn">More article</div>
        </div>
        
    </section>


<?php 
    get_footer();
?>