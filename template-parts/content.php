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
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<?php bogaty_posted_on(); ?>
			<?php bogaty_show_category_list(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
		get_template_part( 'template-parts/content', 'media' );
	?>

	<div class="entry-content">
		<?php
		/* translators: the title of the post */
		$main_content = apply_filters( 'the_content', get_the_content( sprintf( __( 'Continue reading %s', 'bogaty-lite' ), the_title( '<span class="screen-reader-text">', '</span><i class="genericon genericon-expand"></i>', false ) ) ) );
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
				'before'      => '<div class="page-links">' . __( 'Pages:', 'bogaty-lite' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php bogaty_entry_footer(); ?>
	</div><!-- entry-footer -->
</article><!-- #post-## -->
