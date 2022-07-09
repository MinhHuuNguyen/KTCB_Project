<?php
/**
 * The template part for displaying services section on front page
 *
 * @package Bogaty
 */

$service_pages = array();

for ( $i = 1; $i <= 6; $i++ ) {
	$mod             = get_theme_mod( 'front_page_services_' . $i );
	$service_pages[] = $mod;
}

if ( ! $service_pages ) {
	return;
}

$query = new WP_Query(
	array(
		'post_type'      => 'page',
		'posts_per_page' => 6,
		'post__in'       => $service_pages,
		'orderby'        => 'post__in',
	)
);

if ( ! $query->have_posts() ) {
	return;
}
$service_title = get_theme_mod( 'services_section_title', esc_html__( 'Our Services', 'bogaty-lite' ) );
?>

<section class="front-page-section section--services container">
	<h2 class="entry-title"><?php echo esc_html( $service_title ); ?></h2>
	<div class="grid grid--3">
		<?php
		while ( $query->have_posts() ) :
			$query->the_post();
		?>
			<div class="section--services__item">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="section--service__thumbnails">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'bogaty-post' ); ?></a>
					</div>
					<h3><a href="<?php the_permalink(); ?>" alt="<?php echo esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h3>
				<?php else : ?>
					<h3><a href="<?php the_permalink(); ?>" alt="<?php echo esc_attr( the_title() ); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
