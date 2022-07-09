<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogaty
 */

// If users select to display blog posts on the front page, load the index file.
if ( 'posts' === get_option( 'show_on_front' ) ) {
	get_template_part( 'index' );
	return;
}

get_header(); ?>

<?php get_template_part( 'template-parts/home/hero' ); ?>
<?php get_template_part( 'template-parts/home/clients' ); ?>
<?php get_template_part( 'template-parts/home/features' ); ?>
<?php get_template_part( 'template-parts/home/services' ); ?>
<?php get_template_part( 'template-parts/home/posts' ); ?>
<?php get_template_part( 'template-parts/home/cta' ); ?>

<?php
get_footer();

