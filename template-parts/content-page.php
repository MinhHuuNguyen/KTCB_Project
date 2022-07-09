<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogaty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php
		get_template_part( 'template-parts/content', 'media' );
	?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bogaty-lite' ),
					'after'  => '</div>',
				)
			);
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php bogaty_entry_footer(); ?>
	</div><!-- entry-footer -->
</article><!-- #post-## -->
