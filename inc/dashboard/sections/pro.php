<?php
/**
 * Free vs. Pro section.
 *
 * @package Bogaty Lite
 */

?>
<div id="pro" class="gt-tab-pane">
	<table class="form-table">
		<thead>
			<tr>
				<th></th>
				<th><?php esc_html_e( 'Lite', 'bogaty-lite' ); ?></th>
				<th><?php esc_html_e( 'PRO', 'bogaty-lite' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Responsive Design', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Works in any browsers on desktops, tablets and mobile devices and optimized for speed.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-yes"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Custom Logo', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Supports custom logo in WordPress 4.5. Upload your logo has never been easier.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-yes"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Parallax Effect', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Elegant and smooth scrolling exprience.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-yes"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Front Page Theme Options', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Change the look of your front page with a lot of useful customizations.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-yes"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Portfolios', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Give you an easy way to manage and showcase projects on your site.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Testimonials', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Allow you to add, organize, and display your testimonials on your site.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( '1-Click Demo Import', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Save time setting up the theme and get exactly what you see in the demo.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Custom Google Fonts', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Integrated all Google Fonts with various options to customize for a beautiful typography.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Custom Colors', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Customize colors of any element on your website.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Infinite Scroll', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Load more posts when reaching the end of the page. Support auto mode and manual mode.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Related Posts', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'Show related posts after posting to recommend previous posts from your blog to the visitors.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td>
					<h3><?php esc_html_e( 'Priority Support', 'bogaty-lite' ); ?></h3>
					<p><?php esc_html_e( 'You will benefit of our full support for any issues you have with the theme.', 'bogaty-lite' ); ?></p>
				</td>
				<td><span class="dashicons dashicons-no"></span></td>
				<td><span class="dashicons dashicons-yes"></span></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2">
					<a href="<?php echo esc_url( "https://gretathemes.com/wordpress-themes/{$this->pro_slug}/{$this->utm}" ); ?>" target="_blank" class="button button-primary button-hero">
						<?php
						/* translators: pro theme name. */
						echo esc_html( sprintf( __( 'Get %s PRO now', 'bogaty-lite' ), $this->pro_name ) );
						?>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
