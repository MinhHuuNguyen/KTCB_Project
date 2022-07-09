jQuery(document).ready( function($) {

	var $window = $( window );
	var $menuToggle = $( '.menu-toggle' );

	// Slide toggle for menu and submenu.
	$menuToggle.on( 'click', function() {
		$( '.mobile-navigation' ).slideToggle();
	} );

	//Add arrow icon to the li.
	var $dropdownToggle = $( '<span class="dropToggle genericon genericon-expand"></span>' ),
		$dropupToggle = $( '<span class="dropToggle genericon genericon-collapse"></span>' );
	$( '.mobile-menu, .widget_nav_menu ' ).find( '.menu-item-has-children > a' ).after( $dropdownToggle );

	$( '.dropToggle' ).on( 'click', function(e) {
		$( this ).toggleClass( 'is-toggled' )
				 .next( '.sub-menu' )
					.slideToggle();
		e.stopPropagation();
	} );

	// Change the icon of current menu ancestor when current menu item is already shown.
	$( '.widget_nav_menu .current-menu-ancestor' ).children( 'span' )
		.removeClass( 'genericon-expand' )
		.addClass( 'genericon-collapse' );

	// Sticky header.
	var $adminBarHeight = $( '#wpadminbar' ).height(),
		$siteHeader = $( 'body:not( .home.page-template-default )' ).find( '.site-header' ),
		$headerContent = $( '.site-header .header-content' ),
		$homeHeaderContent = $( '.home.page-template-default' ).find( '.header-content' ),
		$siteHeaderHeight = $headerContent.outerHeight();

	$window.on( 'scroll', function() {
		if ( $window.scrollTop() > 1 ) {
			$siteHeader.addClass( 'sticky-header' ).css( 'height', $siteHeaderHeight );
			$headerContent.css({
				'top': ( $window.outerWidth() < 583 ) ? 0 : $adminBarHeight,
			});
		} else {
			$siteHeader.removeClass( 'sticky-header').css( 'height','auto');
			$homeHeaderContent.css( 'top', $adminBarHeight ); // Fix for sticky header on front page.
		}
	} );

	/**
	 * Resize videos to fit the container
	 */
	$( window ).on( 'resize', function() {
		$( '.hentry iframe, .hentry object, .hentry video, .widget-content iframe, .widget-content object, .widget-content iframe' ).each( function () {
			var $video = $( this ),
				$container = $video.parent(),
				containerWidth = $container.width(),
				$post = $video.closest( 'article' );

			if ( ! $video.data( 'origwidth' ) ) {
				$video.data( 'origwidth', $video.attr( 'width' ) );
				$video.data( 'origheight', $video.attr( 'height' ) );
			}
			var ratio = containerWidth / $video.data( 'origwidth' );
			$video.css( 'width', containerWidth + 'px' );

			// Only resize height for non-audio post format.
			if ( ! $post.hasClass( 'format-audio' ) ) {
				$video.css( 'height', $video.data( 'origheight' ) * ratio + 'px' );
			}

		} );
	} )

} );
