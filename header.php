<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogaty
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bogaty-lite' ); ?></a>

	<header id="masthead" class="site-header " role="banner">
		<div class="header-content">
			<div class="container">
				<div class="site-branding">
					<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					}
					?>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( is_front_page() && is_home() ) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						if ( $description || is_customize_preview() ) :
						?>
							<span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
						<?php endif; ?>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php
							if ( $description || is_customize_preview() ) :
							?>
								<span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
							<?php endif; ?>
						</p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'bogaty-lite' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
						?>
				</nav><!-- #site-navigation -->
				<nav class="mobile-navigation" role="navigation">
					<?php
					wp_nav_menu(
						array(
							'container_class' => 'mobile-menu',
							'menu_class'      => 'mobile-menu clearfix',
							'theme_location'  => 'menu-1',
						)
					);
					?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->


	<?php
	if ( 'page' === get_option( 'show_on_front' ) || ( 'posts' === get_option( 'show_on_front' ) && ! is_home() ) ) {
		bogaty_breadcrumb();
	}
	?>
	<?php if ( ! is_home() && is_front_page() ) : ?>
		<div id="content" class="site-content">
	<?php else : ?>
		<div id="content" class="site-content container">
	<?php endif; ?>
