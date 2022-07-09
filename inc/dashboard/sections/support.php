<?php
/**
 * Support section.
 *
 * @package Bogaty
 */

?>
<div id="support" class="gt-tab-pane">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php esc_html_e( 'Contact Support', 'bogaty-lite' ); ?></h3>
			<p><?php esc_html_e( 'Our support is only available for pro version. Upgrade to bogaty Pro now to get access to our excellent support as well as variety of useful features', 'bogaty-lite' ); ?></p>
			<a class="button button-primary" href='<?php echo esc_url( "https://gretathemes.com/wordpress-themes/bogaty/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>'><?php esc_html_e( 'Upgrade Now', 'bogaty-lite' ); ?></a>
		</div>
		<div class="col">
			<h3><?php esc_html_e( 'More Themes From Us', 'bogaty-lite' ); ?></h3>
			<p>
				<?php
					// Translators: theme name.
					echo esc_html( sprintf( __( 'If you like %s, you might want to see another beautiful themes from ', 'bogaty-lite' ), $this->theme->name ) );
				?>
				<a href="<?php echo esc_url( "https://gretathemes.com/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>"><?php esc_html_e( 'GretaThemes', 'bogaty-lite' ); ?></a>
				<?php esc_html_e( 'We build high quality WordPress themes that are well designed and simple to set up. Check them out here!', 'bogaty-lite' ); ?>
			</p>
			<a class="button button-primary" href='<?php echo esc_url( "https://gretathemes.com/wordpress-themes/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>'><?php esc_html_e( 'Visit GretaThemes', 'bogaty-lite' ); ?></a>
		</div>
	</div>
	<h2><?php esc_html_e( 'You Might Also Like', 'bogaty-lite' ); ?></h2>
	<div class="feature-section products three-col">
		<div class="col product">
			<a href="<?php echo esc_url( "https://gretathemes.com/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'GretaThemes', 'bogaty-lite' ); ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/gretathemes.png' ); ?>" alt="<?php esc_attr_e( 'gretathemes', 'bogaty-lite' ); ?>" width="96" height="96">
			</a>
			<div class="product__body">
				<h3 class="product__title">
					<a href="<?php echo esc_url( "https://gretathemes.com/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'GretaThemes', 'bogaty-lite' ); ?>"><?php esc_html_e( 'GretaThemes', 'bogaty-lite' ); ?></a>
				</h3>
				<p class="product__description">
					<?php
					/* translators: placeholder for HTML */
					printf( esc_html__( 'Modern, clean, responsive %s for all your needs. Fast loading, easy to use and optimized for SEO.', 'bogaty-lite' ), '<strong>premium WordPress themes</strong>' )
					?>
				</p>
			</div>
		</div>
		<div class="col product">
			<a href="<?php echo esc_url( "https://metabox.io/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'Meta Box', 'bogaty-lite' ); ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/meta-box.png' ); ?>" alt="<?php esc_attr_e( 'metabox', 'bogaty-lite' ); ?>" width="96" height="96">
			</a>
			<div class="product__body">
				<h3 class="product__title"><a href="<?php echo esc_url( "https://metabox.io/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'Meta Box', 'bogaty-lite' ); ?>"><?php esc_html_e( 'Meta Box', 'bogaty-lite' ); ?></a></h3>
				<p class="product__description">
					<?php
					/* translators: placeholder for HTML */
					printf( esc_html__( 'The lightweight %1$s feature-rich WordPress plugin that helps developers to save time building %2$s.', 'bogaty-lite' ), '&amp;', '<strong>custom meta boxes and custom fields</strong>' )
					?>
				</p>
			</div>
		</div>
		<div class="col product">
			<a href="<?php echo esc_url( "https://prowcplugins.com/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'Professional WooCommerce Plugins', 'bogaty-lite' ); ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/prowcplugins.png' ); ?>" alt="<?php esc_attr_e( 'prowcplugins', 'bogaty-lite' ); ?>" width="96" height="96">
			</a>
			<div class="product__body">
				<h3 class="product__title">
					<a href="<?php echo esc_url( "https://prowcplugins.com/?utm_source=theme_dashboard&utm_medium=product_links&utm_campaign={$this->slug}_dashboard" ); ?>" title="<?php esc_attr_e( 'Professional WooCommerce Plugins', 'bogaty-lite' ); ?>"><?php esc_html_e( 'ProWCPlugins', 'bogaty-lite' ); ?></a>
				</h3>
				<p class="product__description">
					<?php
					/* translators: placeholder for HTML */
					printf( esc_html__( 'Professional %s that help you empower your e-commerce sites and grow your business.', 'bogaty-lite' ), '<strong>WordPress plugins for WooCommerce</strong>' );
					?>
				</p>
			</div>
		</div>
	</div>
</div>
