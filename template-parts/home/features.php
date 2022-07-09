<?php
/**
 * The template part for displaying features section on front page
 *
 * @package Bogaty
 */

$features_page = get_theme_mod( 'features_section' );
$get_title     = get_the_title( $features_page );
if ( ! $features_page ) {
	return;
}


?>

<section class="front-page-section section--features container">
	<h2 class="entry-title"><?php echo esc_html( $get_title ); ?></h2>
	<div class="features__content">
		<?php echo wp_kses_post( get_the_content( '', '', $features_page ) ); ?>
	</div>

</section>
