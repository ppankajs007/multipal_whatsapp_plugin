<?php

/**
 * Fired during plugin activation
 *
 * @link       http://acewebx.com
 * @since      1.0.0
 *
 * @package    Ace_Wp_Whatsapp_Multiuser
 * @subpackage Ace_Wp_Whatsapp_Multiuser/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ace_Wp_Whatsapp_Multiuser
 * @subpackage Ace_Wp_Whatsapp_Multiuser/includes
 * @author     Acewebx <webbninja2@gmail.com>
 */
class Ace_Wp_Whatsapp_Multiuser_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		add_option( 'ace-whatsapp-setting-field-M', array(  
														'whatsapp_start_chat'  => 'Hello! I am interested in your service',
														'whatsapp_content'  => 'ACEWEBX Live Support',
														'ace_whatsapp_btn_color' => '#25D366',
														'ace_whatsapp_txtbtn_color' => '#ffffff'
														 ) );

	}

}
