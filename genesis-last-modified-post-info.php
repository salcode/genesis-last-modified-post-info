<?php
/**
 * Plugin Name: Genesis Last Modified Post Info
 * Plugin URI:
 * Description: Modifies Genesis Post Info to Last updated on [post_modified_date] by [post_author_posts_link] [post_comments] [post_edit]
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: genesis-last-modified-post-info
 * Domain Path: /languages
 *
 * @package salcode/genesis-last-modified-post-info
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// filter post_info to use 'Last updated' date.
add_filter( 'genesis_post_info', 'fe_genesis_post_info_add_last_mod' );

/**
 * Change Genesis Post Info date to last modified date
 *
 * @since 1.0.0
 *
 * @param  string $post_info string (with shortcodes) for post info.
 * @return string Genesis default post info with modified instead of publish date
 */
function fe_genesis_post_info_add_last_mod( $post_info ) {

	$post_info =
		__( 'Last updated on', 'genesis-last-modified-post-info' ) . ' [post_modified_date] by [post_author_posts_link] [post_comments] [post_edit]';
	return $post_info;
}
