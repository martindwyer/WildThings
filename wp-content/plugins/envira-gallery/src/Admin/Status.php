<?php


namespace Envira\Admin\Admin;

class Status {
	/**
	 * Register the Addons submenu item for Envira.
	 *
	 * @since 1.7.0
	 */
	public function admin_menu() {

		// Check and see if whitelabeling is active... by default this screen shouldn't be accessible when whitelabeling is on
		if ( apply_filters( 'envira_whitelabel', false ) ) {
			if ( ! apply_filters( 'envira_whitelabel_addon_screen', false ) ) {
				return;
			}
		}

		// Register the submenu.
		$this->hook = add_submenu_page(
			'edit.php?post_type=envira',
			__( ( apply_filters( 'envira_whitelabel', false ) ? '' : 'Envira Gallery ' ) . 'Status', 'envira-gallery' ),
			'<span style="color:#7cc048"> ' . __( 'Status', 'envira-gallery' ) . '</span>',
			apply_filters( 'envira_gallery_menu_cap', 'manage_options' ),
			ENVIRA_SLUG . '-status',
			array( $this, 'status_page' )
		);

	}

	public function status_page() {

	}

}
