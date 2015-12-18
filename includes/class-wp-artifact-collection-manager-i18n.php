<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://skemantix.com
 * @since      1.0.0
 *
 * @package    Wp_Artifact_Collection_Manager
 * @subpackage Wp_Artifact_Collection_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Artifact_Collection_Manager
 * @subpackage Wp_Artifact_Collection_Manager/includes
 * @author     Seb Grinham <seb@project1.io>
 */
class Wp_Artifact_Collection_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-artifact-collection-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
