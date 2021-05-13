<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop.
		?>

		<h2 class="subtitle">You might like:</h2>
		<div class="sponsors__items">
					<?php 
						$posts = get_posts( array(
							'numberposts' => 3,
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

	</main><!-- #main -->
	
<?php
get_footer();
