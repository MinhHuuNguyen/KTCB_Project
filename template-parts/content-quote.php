<?php
/**
 * Template part for displaying posts with quote format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogat
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="genericon genericon-next" aria-hidden="true"></i></a>

	<div class="entry-footer">
		<?php bogaty_entry_footer(); ?>
	</div><!-- entry-footer -->

</article><!-- #post-## -->
