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
		'item_name'      => 'Screenplan', // Name of theme
		'theme_slug'     => 'screenplan', // Theme slug
		'version'        => '1.0.9', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'screenplan' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'screenplan' ),
		'license-key'               => __( 'License Key', 'screenplan' ),
		'license-action'            => __( 'License Action', 'screenplan' ),
		'deactivate-license'        => __( 'Deactivate License', 'screenplan' ),
		'activate-license'          => __( 'Activate License', 'screenplan' ),
		'status-unknown'            => __( 'License status is unknown.', 'screenplan' ),
		'renew'                     => __( 'Renew?', 'screenplan' ),
		'unlimited'                 => __( 'unlimited', 'screenplan' ),
		'license-key-is-active'     => __( 'License key is active.', 'screenplan' ),
		'expires%s'                 => __( 'Expires %s.', 'screenplan' ),
		'expires-never'             => __( 'Lifetime License.', 'screenplan' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'screenplan' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'screenplan' ),
		'license-key-expired'       => __( 'License key has expired.', 'screenplan' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'screenplan' ),
		'license-is-inactive'       => __( 'License is inactive.', 'screenplan' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'screenplan' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'screenplan' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'screenplan' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'screenplan' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'screenplan' ),
	)

);
