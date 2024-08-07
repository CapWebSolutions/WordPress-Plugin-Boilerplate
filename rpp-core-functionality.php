<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Rpp_Core_Functionality
 *
 * @wordpress-plugin
 * Plugin Name:       RPP Core Functionality
 * Plugin URI:        http://github.com/CapWebSolutions/rpp-core-functionality.git/
 * Description:       This plugin contains all of the site specific functions needed to support referralpartnersplus.com.
 * Version:           1.0.0
 * Author:            Cap Web Solutions | Matt Ryan
 * Author URI:        https://capwebsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rpp-core-functionality
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * @link https://developer.wordpress.org/reference/functions/get_plugin_data/#comment-3030.
 */
if( ! function_exists('get_plugin_data') ){
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
define( 'RPP_CORE_FUNCTIONALITY_VERSION', get_plugin_data(__FILE__ )['Version'] );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rpp-core-functionality-activator.php
 */
function activate_rpp_core_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rpp-core-functionality-activator.php';
	Rpp_Core_Functionality_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rpp-core-functionality-deactivator.php
 */
function deactivate_rpp_core_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rpp-core-functionality-deactivator.php';
	Rpp_Core_Functionality_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rpp_core_functionality' );
register_deactivation_hook( __FILE__, 'deactivate_rpp_core_functionality' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rpp-core-functionality.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rpp_core_functionality() {

	$plugin = new Rpp_Core_Functionality();
	$plugin->run();

}
run_rpp_core_functionality();
