<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bogaty
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation(
				array(
					'next_text' => '<span class="meta-nav">' . esc_html__( 'Next', 'bogaty-lite' ) . '<i class="genericon genericon-next"></i></span><span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav"><i class="genericon genericon-previous"></i>' . esc_html__( 'Previous', 'bogaty-lite' ) . '</span><span class="post-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
