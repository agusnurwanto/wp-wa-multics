<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/agusnurwanto
 * @since             1.0.0
 * @package           Wp_Wa_Multics
 *
 * @wordpress-plugin
 * Plugin Name:       Scan QR WA multics
 * Plugin URI:        https://github.com/agusnurwanto/wp-wa-multics
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Agus Nurwanto
 * Author URI:        https://github.com/agusnurwanto
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-wa-multics
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_WA_MULTICS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-wa-multics-activator.php
 */
function activate_wp_wa_multics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-wa-multics-activator.php';
	Wp_Wa_Multics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-wa-multics-deactivator.php
 */
function deactivate_wp_wa_multics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-wa-multics-deactivator.php';
	Wp_Wa_Multics_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_wa_multics' );
register_deactivation_hook( __FILE__, 'deactivate_wp_wa_multics' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-wa-multics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_wa_multics() {

	$plugin = new Wp_Wa_Multics();
	$plugin->run();

}
run_wp_wa_multics();
