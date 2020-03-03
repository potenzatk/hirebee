<?php
/**
 * Add and initiate the AppThemes hooks
 *
 * @uses add_action() calls to trigger the hooks.
 * @package Framework\Hooks
 *
 * DO NOT UPDATE WITHOUT UPDATING ALL OTHER THEMES!
 * This is a shared file so changes need to be propagated to insure sync
 */


/**
 * called after theme files are included but before theme is loaded
 *
 */
function appthemes_init() {
	do_action( 'appthemes_init' );
}


/**
 * called in header.php after the opening body tag
 *
 */
function appthemes_before() {
	do_action( 'appthemes_before' );
}


/**
 * called in footer.php before the closing body tag
 *
 */
function appthemes_after() {
	do_action( 'appthemes_after' );
}


/**
 * called in header.php before the theme header hook loads
 *
 */
function appthemes_before_header() {
	do_action( 'appthemes_before_header' );
}


/**
 * called in header.php and loads the theme header
 *
 */
function appthemes_header() {
	do_action( 'appthemes_header' );
}


/**
 * called in header.php after the theme header hook loads
 *
 */
function appthemes_after_header() {
	do_action( 'appthemes_after_header' );
}


/**
 * Custom post type action hooks
 *
 */


/**
 * called in loop-[custom-post-type].php before the loop executes
 *
 */
function appthemes_before_loop( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'loop' );
}


/**
 * called in loop-[custom-post-type].php before the post section
 *
 */
function appthemes_before_post( $type = 'post' ) {
	do_action( 'appthemes_before_' . $type );
}


/**
 * called in loop-[custom-post-type].php before the post title
 *
 */
function appthemes_before_post_title( $type = 'post' ) {
	do_action( 'appthemes_before_' . $type . '_title' );
}


/**
 * called in loop-[custom-post-type].php after the post title
 *
 */
function appthemes_after_post_title( $type = 'post' ) {
	do_action( 'appthemes_after_' . $type . '_title' );
}


/**
 * called in loop-[custom-post-type].php before the post content
 *
 */
function appthemes_before_post_content( $type = 'post' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'content' );
}


/**
 * called in loop-[custom-post-type].php after the post content
 *
 */
function appthemes_after_post_content( $type = 'post' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'content' );
}


/**
 * called in loop-[custom-post-type].php after the post section
 *
 */
function appthemes_after_post( $type = 'post' ) {
	do_action( 'appthemes_after_' . $type );
}


/**
 * called in loop-[custom-post-type].php after the loop endwhile
 *
 */
function appthemes_after_endwhile( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'endwhile' );
}


/**
 * called in loop-[custom-post-type].php after the loop else
 *
 */
function appthemes_loop_else( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_' . $type . 'loop_else' );
}


/**
 * called in loop-[custom-post-type].php after the loop executes
 *
 */
function appthemes_after_loop( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'loop' );
}


/**
 * called in comments-[custom-post-type].php before the comments list block
 *
 */
function appthemes_before_comments( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'comments' );
}


/**
 * called in comments-[custom-post-type].php in the ol block
 *
 */
function appthemes_list_comments( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_list_' . $type . 'comments' );
}


/**
 * called in comments-[custom-post-type].php after the comments list block
 *
 */
function appthemes_after_comments( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'comments' );
}


/**
 * called in comments-[custom-post-type].php before the pings list block
 *
 */
function appthemes_before_pings( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'pings' );
}


/**
 * called in comments-[custom-post-type].php in the ol block
 *
 */
function appthemes_list_pings( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_list_' . $type . 'pings' );
}


/**
 * called in comments-[custom-post-type].php after the pings list block
 *
 */
function appthemes_after_pings( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'pings' );
}


/**
 * called in comments-[custom-post-type].php before the comments respond block
 *
 */
function appthemes_before_respond( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'respond' );
}


/**
 * called in comments-[custom-post-type].php after the comments respond block
 *
 */
function appthemes_after_respond( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'respond' );
}


/**
 * called in comments-[custom-post-type].php before the comments form block
 *
 */
function appthemes_before_comments_form( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_before_' . $type . 'comments_form' );
}


/**
 * called in comments-[custom-post-type].php to include the comments form block
 *
 */
function appthemes_comments_form( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_' . $type . 'comments_form' );
}


/**
 * called in comments-[custom-post-type].php after the comments form block
 *
 */
function appthemes_after_comments_form( $type = '' ) {
	if ( $type ) {
		$type .= '_';
	}

	do_action( 'appthemes_after_' . $type . 'comments_form' );
}



/**
 * sidebar hooks
 *
 */


/**
 * called in the sidebar template files before the widget section
 *
 */
function appthemes_before_sidebar_widgets( $location = '' ) {
	do_action( 'appthemes_before_sidebar_widgets', $location );
}


/**
 * called in the sidebar template files after the widget section
 *
 */
function appthemes_after_sidebar_widgets( $location = '' ) {
	do_action( 'appthemes_after_sidebar_widgets', $location );
}


/**
 * footer hooks
 *
 */


/**
 * called in the footer.php before the footer section
 *
 */
function appthemes_before_footer() {
	do_action( 'appthemes_before_footer' );
}


/**
 * invokes the footer section called in footer.php
 *
 */
function appthemes_footer() {
	do_action( 'appthemes_footer' );
}


/**
 * called in the footer.php after the footer section
 *
 */
function appthemes_after_footer() {
	do_action( 'appthemes_after_footer' );
}


/**
 * advertise hooks
 *
 */


/**
 * invokes the header advertise section
 *
 */
function appthemes_advertise_header() {
	do_action( 'appthemes_advertise_header' );
}


/**
 * invokes the content advertise section
 *
 */
function appthemes_advertise_content() {
	do_action( 'appthemes_advertise_content' );
}


/**
 * Invokes notices on templates
 */
function appthemes_notices() {
	do_action( 'appthemes_notices' );
}

/**
 * Can be used in class method to extend method functionality with custom actions
 *
 * @param string $class Class name
 * @param string $method Method name
 */
function appthemes_class_method( $class, $method ) {
	do_action( strtolower( $class . '_' . $method ) );
}
