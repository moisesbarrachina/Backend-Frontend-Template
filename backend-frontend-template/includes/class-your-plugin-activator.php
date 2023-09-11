<?php
/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
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

class Your_Plugin_Activator{

	/**
	 * Plugin activation.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public static function activate() {
		//error_log("Your Plugin plugin: activate");

		$database_de_install = new Your_Plugin_Install_Upgrade_Deinstall_Database();
		$database_de_install->database_install_and_or_upgrade($database_de_install);

		wp_schedule_event( time(), 'hourly', 'bl_your_plugin_cronjob' );
	}
}