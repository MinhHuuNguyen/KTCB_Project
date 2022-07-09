<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Bogaty
 */

/**
 * Change the [...] to a 'continue reading' link automatically ( when content-option jetpack is used  ).
 *
 * @return string.
 */
function bogaty_excerpt_more() {
	/* translators: string replaced with the html */
	$text = wp_kses_post( sprintf( __( 'Continue reading %s', 'bogaty-lite' ), '<span class="screen-reader-text">' . get_the_title() . '</span><i class="genericon genericon-expand"></i>' ) );
	$more = sprintf( '<p class="more-button"><a href="%s" class="more-link">%s</a></p>', esc_url( get_permalink() ), $text );
	return $more;
}
add_filter( 'excerpt_more', 'bogaty_excerpt_more' );


/**
 * Prints HTML with meta information for the current post-date/time.
 */
function bogaty_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( 'F d, Y' ) ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date( 'F d, Y' ) )
	);

	if ( ! is_front_page() ) {
		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
	} else {
		$posted_on = $time_string;
	}
	echo '<span class="posted-on"><i class="genericon genericon-time"></i>' . $posted_on . '</span>'; // WPCS: XSS OK.

}

/**
 * Prints HTML with meta information for author.
 */
function bogaty_show_author() {
	$byline = '<span class="author vcard"><a class="url fn n" href="'
	. esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">'
	. get_avatar( get_the_author_meta( 'ID' ), 40 ) . esc_html( get_the_author() )
	. '</a></span>';
	echo $byline; // WPCS: XSS OK.
}

/**
 * Prints HTML with meta information for category list.
 */
function bogaty_show_category_list() {

	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'bogaty-lite' ) );
	if ( $categories_list && bogaty_categorized_blog() ) {
		printf( '<span class="cat-links"><i class="genericon genericon-category" aria-hidden="true"></i><span class="screen-reader-text">%1$s </span>%2$s</span>', esc_html__( 'Categories', 'bogaty-lite' ), $categories_list );// WPCS: XSS OK.
	}
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function bogaty_entry_footer() {
	if ( has_tag() && is_single() ) {
		$tags_list = get_the_tag_list( '<div class="tagcloud tags-links">', '', '</div>' );
		if ( $tags_list ) {
			echo $tags_list; // WPCS: XSS OK.
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'bogaty-lite' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function bogaty_categorized_blog() {
	$all_the_cool_cats = get_transient( 'bogaty_categories' );
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'bogaty_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so bogaty_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so bogaty_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in bogaty_categorized_blog.
 */
function bogaty_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'bogaty_categories' );
}
add_action( 'edit_category', 'bogaty_category_transient_flusher' );
add_action( 'save_post', 'bogaty_category_transient_flusher' );
