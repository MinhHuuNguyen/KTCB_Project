<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogaty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<div class="entry-meta">
			<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
				bogaty_show_author();
				bogaty_posted_on();
				bogaty_show_category_list();
			?>
		</div>
	</header><!-- .entry-header -->

	<?php
		get_template_part( 'template-parts/content', 'media' );
	?>

	<div class="entry-content">
		<?php
		$main_content = apply_filters( 'the_content', get_the_content() );
		if ( in_array( get_post_format(), array( 'audio', 'video' ), true ) ) {
			$media        = get_media_embedded_in_content(
				$main_content, array(
					'audio',
					'video',
					'object',
					'embed',
					'iframe',
				)
			);
			$main_content = str_replace( $media, '', $main_content );
		}

		echo $main_content; /* WPCS: xss ok. */

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
