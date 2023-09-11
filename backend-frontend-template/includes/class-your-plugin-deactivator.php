<?php
/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
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

class Your_Plugin_Deactivator {

	/**
	 * Plugin deactivation.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public static function deactivate() {
		//error_log("Your Plugin plugin: deactivate");

		$database_de_install = new Your_Plugin_Install_Upgrade_Deinstall_Database();
		$database_de_install->dabatase_erase();

		//dabatase_erase() already clean cronjobs
	}
}
