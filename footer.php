<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogaty
 */

?>

	<script src='<?php echo get_template_directory_uri()?>/assets/js/main.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!-- <aside id="sidebar-footer" class="sidebar-footer widget-area" role="complementary">
			<div class="container">
				<div class="grid grid--3">
					<?php 
					// dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			</div>
		</aside> -->
		<!-- .sidebar-footer  -->
		<!-- <div class="container">
			<div class="footer-info">
				<div class="site-info">

					<?php
					/* translators: link to wordpress.org */
					// printf( esc_html__( 'Proudly powered by %s', 'bogaty-lite' ), '<a href="' . esc_url( 'https://wordpress.org/' ) . '">WordPress</a>' );
					?>

					<span class="sep"> | </span>
					<?php
						/* translators: placeholder replaced with string */
						// printf( esc_html__( 'Theme: %1$s by %2$s.', 'bogaty-lite' ), '<a href="https://gretathemes.com/wordpress-themes/bogaty/">Bogaty Lite</a>', 'GretaThemes' );
					?>
				</div>

				<?php
				// if ( function_exists( 'jetpack_social_menu' ) ) {
				// 	jetpack_social_menu();
				// }
				?>
			</div>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php 
// wp_footer(); ?>

</body>
</html>
