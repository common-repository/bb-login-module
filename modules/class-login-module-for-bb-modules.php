<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class Login_Module_for_BB_Modules {

	/**
	 * Initializes the class once all plugins have loaded.
	 */
	public static function init() {
		self::setup_hooks();
	}

	/**
	 * Setup hooks if the builder is installed and activated.
	 */
	public static function setup_hooks() {
		if ( ! class_exists( 'FLBuilder' ) ) {
			return;
		}

		// Load custom modules.
		add_action( 'init', __CLASS__ . '::load_modules' );

	}



	/**
	 * Loads our custom modules.
	 */
	public static function load_modules() {

		require_once Login_Module_for_BB_DIR . 'modules/login-logout-reset/class-login-logout-module.php';

	}


}
