<?php
/**
 * The template part for displaying newest posts section on front page
 *
 * @package Bogaty
 */

$query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
	)
);

if ( ! $query->have_posts() ) {
	return;
}
$section_title = get_theme_mod( 'posts_section_title', esc_html__( 'Newest Posts', 'bogaty-lite' ) );
?>

<section class="front-page-section section--posts container">
	<h2 class="entry-title"><?php echo esc_html( $section_title ); ?></h2>
	<div class="grid grid--3">
		<?php
		while ( $query->have_posts() ) :
			$query->the_post();
		?>
			<div class="section--posts__item">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="section--posts__thumbnails">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'bogaty-post' ); ?></a>
					</div>
					<h3><a href="<?php the_permalink(); ?>" alt="<?php echo esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h3>
					<div class="entry-meta"><?php bogaty_posted_on(); ?></div>
				<?php else : ?>
					<h3><a href="<?php the_permalink(); ?>" alt="<?php echo esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<div class="entry-meta"><?php bogaty_posted_on(); ?></div>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
