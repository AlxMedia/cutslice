<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Cutslice', // Name of theme
		'theme_slug'     => 'cutslice', // Theme slug
		'version'        => '1.0.1', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'cutslice' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'cutslice' ),
		'license-key'               => __( 'License Key', 'cutslice' ),
		'license-action'            => __( 'License Action', 'cutslice' ),
		'deactivate-license'        => __( 'Deactivate License', 'cutslice' ),
		'activate-license'          => __( 'Activate License', 'cutslice' ),
		'status-unknown'            => __( 'License status is unknown.', 'cutslice' ),
		'renew'                     => __( 'Renew?', 'cutslice' ),
		'unlimited'                 => __( 'unlimited', 'cutslice' ),
		'license-key-is-active'     => __( 'License key is active.', 'cutslice' ),
		'expires%s'                 => __( 'Expires %s.', 'cutslice' ),
		'expires-never'             => __( 'Lifetime License.', 'cutslice' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'cutslice' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'cutslice' ),
		'license-key-expired'       => __( 'License key has expired.', 'cutslice' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'cutslice' ),
		'license-is-inactive'       => __( 'License is inactive.', 'cutslice' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'cutslice' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'cutslice' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'cutslice' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'cutslice' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'cutslice' ),
	)

);
