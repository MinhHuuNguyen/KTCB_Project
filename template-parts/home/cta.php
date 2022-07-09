<?php
/**
 * The template part for displaying cta section on front page
 *
 * @package Bogaty
 */

$cta_text      = get_theme_mod( 'cta_text', esc_html__( 'Ready to build an awesome website for your company?', 'bogaty-lite' ) );
$cta_link_url  = get_theme_mod( 'cta_link_url' );
$cta_link_text = get_theme_mod( 'cta_link_text', esc_html__( 'Get The Theme', 'bogaty-lite' ) )
?>

<section class="front-page-section section--cta">
	<div class="container">
		<div class="section--cta__text">
			<?php echo esc_html( $cta_text ); ?>
		</div>
		<div class="section--cta__link">
			<a href="<?php echo esc_url( $cta_link_url ); ?>" alt="<?php echo esc_attr( $cta_link_text ); ?>" class="button-minimal">
				<?php echo esc_html( $cta_link_text ); ?>
			</a>
		</div>
	</div>
</section>
