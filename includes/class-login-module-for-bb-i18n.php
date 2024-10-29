<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://waashero.com
 * @since      1.0.0
 *
 * @package    Login_Module_For_BB
 * @subpackage Login_Module_For_BB/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Login_Module_For_BB
 * @subpackage Login_Module_For_BB/includes
 * @author     J Hanlon | Waas Hero <info@waashero.com>
 */
class Login_Module_For_BB_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'login-module-for-bb',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
