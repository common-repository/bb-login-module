<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://waashero.com
 * @since             1.0.0
 * @package           Login_Module_For_BB
 *
 * @wordpress-plugin
 * Plugin Name:       Login Module for Beaver Builder
 * Plugin URI:        https://waashero.com/login-hero-pro-for-beaver-builder/
 * Description:       Add an easy to use Beaver Builder Login/Logout button module. Works for single sites and multisite.
 * Version:           1.0.0
 * Author:            J Hanlon | Waas Hero
 * Author URI:        https://waashero.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       login-module-for-bb
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! function_exists( 'deactivate_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

/**
 * set plugin defines
 */
define( 'Login_Module_for_BB_VERSION', '1.0.0' );
define( 'Login_Module_for_BB_FILE', __FILE__ );
define( 'Login_Module_for_BB_DIR', plugin_dir_path( __FILE__ ) );
define( 'Login_Module_for_BB_URL', plugins_url( '/', __FILE__ ) );


define( 'Login_Module_for_BB_ITEM_NAME', 'Login Module for Beaver Builder' );
define( 'Login_Module_for_BB_SLUG', 'login-module-for-bb' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-login-module-for-bb-activator.php
 */
if ( ! function_exists( 'activate_login_module_for_bb' ) ) {
	function activate_login_module_for_bb() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-login-module-for-bb-activator.php';
		Login_Module_For_BB_Activator::activate();
	}
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-login-module-for-bb-deactivator.php
 */
if ( ! function_exists( 'deactivate_login_module_for_bb' ) ) {
	function deactivate_login_module_for_bb() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-login-module-for-bb-deactivator.php';
		Login_Module_For_BB_Deactivator::deactivate();
	}
}

register_activation_hook( __FILE__, 'activate_login_module_for_bb' );
register_deactivation_hook( __FILE__, 'deactivate_login_module_for_bb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-login-module-for-bb.php';

if ( ! function_exists( 'login_module_for_bb_check_for_dependencies' ) ) {
	/**
	 * Checks for plugin dependencies
	 *
	 * @return void
	 */
	function login_module_for_bb_check_for_dependencies() {
		global $pagenow;
		if ( 'plugins.php' != $pagenow && ! is_admin() && ! is_network_admin() ) {
			return true;
		}
		// Check if WP Ultimo is installed and activated
		$notice = true;
		// Check if Beaver Builder installed and activated
		if ( ! class_exists( 'FLBuilder' ) ) {
			$notice  = false;
			$message = sprintf(
			/* translators: 1: Plugin name 2: Beaver Builder */
				esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'login-module-for-bb' ),
				'<strong>' . esc_html__( 'Login Module for Beaver Builder', 'login-module-for-bb' ) . '</strong>',
				'<strong>' . esc_html__( 'Beaver Builder', 'login-module-for-bb' ) . '</strong>'
			);

			printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
			deactivate_plugins( plugin_basename( __FILE__ ), true );

		}

		return $notice;
	}
}
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
if ( ! function_exists( 'run_login_module_for_bb' ) ) {
	function run_login_module_for_bb() {
		$return = login_module_for_bb_check_for_dependencies();
		if ( $return == false ) {
			return $return;
		}
		$plugin = new Login_Module_For_BB();
		$plugin->run();

	}
}

add_action( 'plugins_loaded', 'run_login_module_for_bb' );
