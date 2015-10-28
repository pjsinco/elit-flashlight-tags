<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://github.com/pjsinco
 * @since             1.0.0
 * @package           Floodlight_Tags
 *
 * @wordpress-plugin
 * Plugin Name:       floodlight-tags
 * Plugin URI:        http://
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            pjs
 * Author URI:        http://github.com/pjsinco
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       floodlight-tags
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-floodlight-tags-activator.php
 */
function activate_floodlight_tags() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-floodlight-tags-activator.php';
	Floodlight_Tags_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-floodlight-tags-deactivator.php
 */
function deactivate_floodlight_tags() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-floodlight-tags-deactivator.php';
	Floodlight_Tags_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_floodlight_tags' );
register_deactivation_hook( __FILE__, 'deactivate_floodlight_tags' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-floodlight-tags.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_floodlight_tags() {

	$plugin = new Floodlight_Tags();
	$plugin->run();

}
run_floodlight_tags();
