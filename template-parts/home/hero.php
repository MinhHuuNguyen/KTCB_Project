<?php
/**
 * The template part for displaying hero section on front page
 *
 * @package Bogaty
 */

if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();

		$thumbnail = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );
		if ( ! $thumbnail ) {
			$thumbnail = get_template_directory_uri() . '/images/hero.jpg';
		}
		?>

		<section class="front-page-section section--hero" style="background-image:url(<?php echo esc_url( $thumbnail ); ?>)">
			<div class="section--hero__content container" >
				<div class="entry-content">
					<?php the_content(); ?>
					<?php bogaty_entry_footer(); ?>
				</div> <!-- entry-content -->
			</div>
		</section>

		<?php
	endwhile;
endif;


