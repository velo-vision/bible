<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://ponceelrelajado.com
 * @since      1.0.0
 *
 * @package    Custom_Share_Icons
 * @subpackage Custom_Share_Icons/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Share_Icons
 * @subpackage Custom_Share_Icons/includes
 * @author     Jhonatan Ponce (ponceelrelajado) <ponceelrelajado@gmail.com>
 */
class Custom_Share_Icons_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom-share-icons',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
