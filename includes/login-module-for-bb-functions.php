<?php
/**
 * Handles functions for the plugin
 */
if ( ! function_exists( 'login_module_for_bb_logout_url' ) ) {
	/**
	 * Hanldes the logout url.
	 *
	 * @param string $logout_url
	 * * @param string $redirect
	 * @return string $url
	 */
	function login_module_for_bb_logout_url( $logout_url, $redirect ) {
		$params = array( 'redirect_to' => get_permalink() );
		$url    = add_query_arg( $params, $logout_url );
		return $url;
	}
}
add_filter( 'logout_url', 'login_module_for_bb_logout_url', 10, 2 );
