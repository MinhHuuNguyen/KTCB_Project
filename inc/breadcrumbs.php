<?php
/**
 * Bogaty breadcrumbs
 *
 * @package Bogaty
 */

if ( ! function_exists( 'bogaty_breadcrumb' ) ) {
	/**
	 * Breadcrumb at the header
	 */
	function bogaty_breadcrumb() {
		if ( ! is_front_page() ) {
			$before    = '<li class="current">'; // tag before the current breadcrumb.
			$after     = '</li>'; // tag after the current breadcrumb.
			$home_link = home_url( '/' );

			echo '<ul class="breadcrumb container">';
			echo '<li><a href="' . esc_url( $home_link ) . '" alt="home">' . esc_html__( 'Home', 'bogaty-lite' ) . '</a></li>';
			if ( is_home() ) {
				echo '<li>' . get_query_var( 'pagename' ) . '</li>'; // WPCS: XSS OK.
			}
			// Handle the category.
			if ( is_category() ) {
				$this_cat = get_queried_object();
				if ( 0 !== $this_cat->parent ) {
					$parent = get_category( $this_cat->parent );
					$parent_link  = get_category_link( $this_cat->parent );
					echo '<li><a href= "' . esc_url( $parent_link ) . '">' . $parent->name . '<a></li>'; // WPCS: XSS OK.
					echo $before . $this_cat->name . $after; // WPCS: XSS OK.
				} else {
					echo $before . $this_cat->name . $after; // WPCS: XSS OK.
				}
			} elseif ( is_search() ) {
				$text = sprintf( 'Search results for %s', get_search_query() );
				echo $before . $text . $after; // WPCS: XSS OK.
			} elseif ( is_day() ) { // Handle the time.
				$year = get_year_link( get_the_time( 'Y' ) );
				$month = get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) );
				echo '<li><a href="' . esc_url( $year ) . '">' . get_the_time( 'Y' ) . '</a></li>'; // WPCS: XSS OK.
				echo '<li><a href="' . esc_url( $month ) . '">' . get_the_time( 'F' ) . '</a></li>'; // WPCS: XSS OK.
				echo $before . get_the_time( 'd' ) . $after; // WPCS: XSS OK.

			} elseif ( is_month() ) {
				$year = get_year_link( get_the_time( 'Y' ) );
				echo '<li><a href="' . esc_url( $year ) . '">' . get_the_time( 'Y' ) . '</a></li>'; // WPCS: XSS OK.
				echo $before . get_the_time( 'F' ) . $after; // WPCS: XSS OK.

			} elseif ( is_year() ) {
				echo $before . get_the_time( 'Y' ) . $after; // WPCS: XSS OK.

			} elseif ( is_single() ) { // Handle the single with categories.
				// Show the name of jetpack post type or another post types, followed by the title of the post of that post type.
				if ( ! is_singular( 'post' ) ) {
					$post_type = get_post_type_object( get_post_type() );
					$post_type_archive_link = get_post_type_archive_link( get_post_type() );
					$slug      = $post_type->rewrite;
					echo '<li><a href="' . esc_url( $post_type_archive_link ) . '">' . $post_type->labels->singular_name . '</a></li>'; // WPCS: XSS OK.
					the_title( $before, $after );
				} else {
					echo '<li>' . get_the_category_list( ', ' ) . '</li>'; // WPCS: XSS OK.
					the_title( $before, $after );
				}
			} elseif ( is_post_type_archive() ) {
				$post_type = get_post_type_object( get_post_type() );
				echo $before . $post_type->labels->singular_name . $after; // WPCS: XSS OK.
			}

			// Handle the page.
			$id        = get_the_id();
			$parent_id = wp_get_post_parent_id( $id );
			// Check if page has parent.
			if ( is_page() && ! $parent_id ) {
				esc_html( the_title( $before, $after ) );
			}
			// If the page has parent.
			if ( is_page() && $parent_id ) {
				$breadcrumbs = array();
				// Get all the parents of the child page. The page of parent is set in the page not in the menu.
				while ( $parent_id ) {
					$page          = get_post( $parent_id );
					$breadcrumbs[] = '<li><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . get_the_title( $page->ID ) . '</a></li>';
					$parent_id     = $page->post_parent;
				}
				$breadcrumbs   = array_reverse( $breadcrumbs );
				$parent_length = count( $breadcrumbs );
				$i             = 0;
				while ( $i < $parent_length ) {
					echo $breadcrumbs[ $i ]; // WPCS: XSS OK.
					$i++;
				}
				the_title( $before, $after );

			} elseif ( is_tag() ) {
				echo $before . single_tag_title( '', false ) . $after; // WPCS: XSS OK.

			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata( $author );
				echo $before . $userdata->display_name . $after; // WPCS: XSS OK.

			} elseif ( is_404() ) {
				echo $before . esc_html__( 'Error 404', 'bogaty-lite' ) . $after; // WPCS: XSS OK.
			}
			echo '</ul>';
		} // End if().
	}
} // End if().
