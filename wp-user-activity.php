<?php

/**
 * Plugin Name: WP User Activity
 * Plugin URI:  https://wordpress.org/plugins/wp-user-activity/
 * Description: Activity streams, for your users
 * Author:      John James Jacoby
 * Author URI:  https://jjj.me
 * Version:     0.1.0
 * Text Domain: wp-user-activity
 * Domain Path: /languages/
 * License:     GPLv2 or later (license.txt)
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Initialize WP User Activity
 *
 * @since 0.1.0
 */
function wp_user_activity_init() {

	// Include the files
	$dir = dirname( __FILE__ );

	// Include the files
	include $dir . '/includes/admin.php';
	include $dir . '/includes/classes.php';
	include $dir . '/includes/functions.php';
	include $dir . '/includes/post-types.php';
	include $dir . '/includes/post-statuses.php';
	include $dir . '/includes/taxonomies.php';
	include $dir . '/includes/hooks.php';

	// Actions
	include $dir . '/actions/class-action-attachments.php';
	include $dir . '/actions/class-action-comments.php';
	include $dir . '/actions/class-action-core.php';
	include $dir . '/actions/class-action-exports.php';
	include $dir . '/actions/class-action-menus.php';
	include $dir . '/actions/class-action-site-settings.php';
	include $dir . '/actions/class-action-plugins.php';
	include $dir . '/actions/class-action-posts.php';
	include $dir . '/actions/class-action-terms.php';
	include $dir . '/actions/class-action-themes.php';
	include $dir . '/actions/class-action-users.php';
	include $dir . '/actions/class-action-widgets.php';
}
add_action( 'plugins_loaded', 'wp_user_activity_init' );

/**
 * Return the plugin's URL
 *
 * @since 0.1.2
 *
 * @return string
 */
function wp_user_activity_get_plugin_url() {
	return plugin_dir_url( __FILE__ );
}

/**
 * Return the asset version
 *
 * @since 0.1.2
 *
 * @return int
 */
function wp_user_activity_get_asset_version() {
	return 201508310001;
}