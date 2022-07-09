/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	var options = {
		'blogname': '.site-title a',
		'blogdescription': '.site-description',
		'services_section_title': '.section--services .entry-title',
		'posts_section_title': '.section--posts .entry-title',
		'cta_text': '.section--cta__text',
		'cta_link_text': '.section--cta a',
	};

	// Use each to resolve closure problem.
	$.each( options, function ( setting, selector ) {
		wp.customize( setting, function( value ) {
			value.bind( function ( to ) {
				$( selector ).text( to );
			} );
		} );
	} );

	wp.customize( 'cta_link_url', function( value ) {
		value.bind( function( to ) {
			$( '.section--cta a' ).attr( 'href', to );
		});
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );


} )( jQuery );
