<?php
/**
 * The template part for displaying clients section on front page
 *
 * @package Bogaty
 */

$image = get_theme_mod( 'client_section' ); // Get the iamge url.
if ( ! $image ) {
	return;
}

$image_id = attachment_url_to_postid( $image );
if ( $image_id ) {
	$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
}
?>

<section class="front-page-section section--clients">
	<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
</section>
