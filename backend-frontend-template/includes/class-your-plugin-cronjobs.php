<?php

/**
 * The cronjobs of the plugin
 * 
 * @link		https://yourfuturewebsite
 * @since		0.0.1
 * @version		0.0.1
 * @package		Your_Plugin
 * @subpackage	Your_Plugin/includes
 * @author	  	Plugin Author <pluginauthor@email>
 */

 /*
	Uses Backend Frontend Template 1.0.0
	https://moisesbarrachina.online
*/

class Your_Plugin_Cronjobs extends Your_Plugin_Admin_Public {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @param		string			$your_plugin		Title, id, slug and version of the plugin
	 */
	public function __construct($plugin_info) {
		/*
		For testing the cronjob
		$this->debug_log_write("Construct of Your_Plugin_Cronjobs");
		$this->your_plugin_cronjob();
		*/
	}
	
	/**
	 * Ejecute cronjobs
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		boolean
	 */
	public function your_plugin_cronjob() {
		global $wpdb;

		/*$wpdb->query( "
			UPDATE
				".$wpdb->prefix."your_plugin_table
			SET
				xxxxxx
			WHERE
				xxxxxx");*/

		return true;
	}
}
