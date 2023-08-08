<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://acewebx.com
 * @since      1.0.0
 *
 * @package    Ace_Wp_Whatsapp_Multiuser
 * @subpackage Ace_Wp_Whatsapp_Multiuser/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ace_Wp_Whatsapp_Multiuser
 * @subpackage Ace_Wp_Whatsapp_Multiuser/includes
 * @author     Acewebx <webbninja2@gmail.com>
 */
class Ace_Wp_Whatsapp_Multiuser_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ace-wp-whatsapp-multiuser',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
