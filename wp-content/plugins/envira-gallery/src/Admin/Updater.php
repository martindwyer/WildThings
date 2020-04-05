<?php

namespace Envira\Admin;

class Updater {

	public $api_url = 'https://enviragallery.com/wp-json/enivra-api/update_check';
	public $plugins = array();
	public $beta    = false;

	public function __construct( $api_key ) {

		// If the user cannot update plugins, stop processing here.
		if ( ! current_user_can( 'update_plugins' ) ) {
			return;
		}

		// Get the stored Envira Plugins.
		$envira_plugins = get_transient( '_eg_plugins' );
		$beta           = get_option( 'eg_beta', false );

		if ( empty( $envira_plugins ) ) {
		}

		$all_plugins = get_plugins();

		error_log( print_r( $all_plugins, true ) );

		// Load the updater hooks and filters.
		add_filter( 'pre_set_site_transient_update_plugins', array( $this, 'check_update' ) );
		// add_filter( 'http_request_args', array( $this, 'http_request_args' ), 10, 2 );
		// add_filter( 'plugins_api', array( $this, 'plugins_api' ), 10, 3 );
	}

	public function check_update( $_transient_data ) {

		global $pagenow;

		error_log( print_r( $_transient_data, true ) );

		// If no update object exists, return early.
		if ( empty( $_transient_data ) ) {
			return $_transient_data;
		}

	}
	public function http_request_args() {

	}
	public function plugins_api() {

	}
	public function set_plugins_api(){}

	public function callit() {

		// Build the body of the request.
		$body           = wp_parse_args(
			$body,
			array(
				'tgm-updater-action'     => $action,
				'tgm-updater-key'        => $this->key,
				'tgm-updater-wp-version' => get_bloginfo( 'version' ),
				'tgm-updater-referer'    => site_url(),
			)
		);
		$body           = http_build_query( $body, '', '&' );
		$content_length = strlen( $body );

		// Build the headers of the request.
		$headers = wp_parse_args(
			$headers,
			array(
				'Content-Type'   => 'application/x-www-form-urlencoded',
				'Content-Length' => $content_length,
			)
		);

		// Setup variable for wp_remote_post.
		$post = array(
			'headers' => $headers,
			'body'    => $body,
		);

		// Perform the query and retrieve the response.
		$response      = wp_remote_post( esc_url_raw( $this->api_url ), $post );
		$response_code = wp_remote_retrieve_response_code( $response ); /* log this for API issues */
		$response_body = wp_remote_retrieve_body( $response );

		// Bail out early if there are any errors.
		if ( 200 != $response_code || is_wp_error( $response_body ) ) {
			return false;
		}

		// Return the json decoded content.
		return json_decode( $response_body );

	}

	public function get_cached_info( $cache_key = '' ) {

		if ( empty( $cache_key ) ) {
			$cache_key = $this->cache_key;
		}

		$cache = get_option( $cache_key );

		if ( empty( $cache['timeout'] ) || current_time( 'timestamp' ) > $cache['timeout'] ) {
			return false; // Cache is expired
		}

		return json_decode( $cache['value'] );

	}
	public function set_cache_info( $value = '', $cache_key = '' ) {

		if ( empty( $cache_key ) ) {
			$cache_key = $this->cache_key;
		}

		$data = array(
			'timeout' => strtotime( '+3 hours', current_time( 'timestamp' ) ),
			'value'   => json_encode( $value ),
		);

		update_option( $cache_key, $data, 'no' );

	}
	public function verify_ssl() {
		return (bool) apply_filters( 'envira_api_request_verify_ssl', true, $this );
	}
}
