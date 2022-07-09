<?php
/**
 * Recent posts widget
 * Get recent posts and display in widget
 *
 * @package Bogaty
 */

/**
 * Recent posts class.
 */
class Bogaty_Recent_Posts_Widget extends WP_Widget {
	/**
	 * Default widget options.
	 *
	 * @var array
	 */
	protected $defaults;

	/**
	 * Widget setup.
	 */
	public function __construct() {
		$this->defaults = array(
			'title'     => esc_html__( 'Recent Posts', 'bogaty-lite' ),
			'number'    => 3,
			'show_date' => true,
		);
		parent::__construct(
			'bogaty-recent-posts',
			esc_html__( 'Bogaty: Recent Posts', 'bogaty-lite' ),
			array(
				'description' => esc_html__( 'A widget that displays your recent posts from all categories or a category', 'bogaty-lite' ),
			)
		);
	}

	/**
	 * How to display the widget on the screen.
	 *
	 * @param array $args     Widget parameters.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		$query    = new WP_Query(
			array(
				'posts_per_page' => absint( $instance['number'] ),
			)
		);
		if ( ! $query->have_posts() ) {
			return;
		}

		echo $args['before_widget']; // WPCS: XSS OK.

		$title = apply_filters( 'widget_title', $instance['title'] );
		if ( $title ) {
			echo $args['before_title'], $title , $args['after_title']; // WPCS: XSS OK.
		}
		?>
		<ul>
			<?php
			$i = 1;
			while ( $query->have_posts() ) :
				$query->the_post();
?>
			<?php
			if ( $i > absint( $instance['number'] ) ) {
				break;
			}
			?>
				<li class="recent-post">

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="recent-post__image">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'bogaty-recent' ); ?>
							</a>
						</div>
					<?php endif; ?>
					<div class="recent-post__text">
						<h4 class="recent-post__title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h4>
						<?php if ( $instance['show_date'] ) : ?>
							<div class="entry-meta">
								<?php bogaty_posted_on(); ?>
							</div>
						<?php endif; ?>
					</div>

				</li>

			<?php
			$i++;
			endwhile;
			?>
		</ul>

		<?php
		wp_reset_postdata();

		echo $args['after_widget']; // WPCS: XSS OK.
	}

	/**
	 * Update the widget settings.
	 *
	 * @param array $new_instance New widget instance.
	 * @param array $old_instance Old widget instance.
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title']  = sanitize_text_field( $new_instance['title'] );
		$instance['number'] = absint( $new_instance['number'] );

		return $instance;
	}

	/**
	 * Widget form.
	 *
	 * @param array $instance Widget instance.
	 *
	 * @return void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'bogaty-lite' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of posts to show:', 'bogaty-lite' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo absint( $instance['number'] ); ?>" size="3">
		</p>
		<?php
	}
}
