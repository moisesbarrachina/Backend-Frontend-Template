<?php

/**
 * Class for install, upgrade or deinstall the database
 *
 * @link			https://yourfuturewebsite
 * @since			0.0.1
 * @version			0.0.1
 * @package			Your_Plugin
 * @subpackage		Your_Plugin/includes
 * @author	  		Plugin Author <pluginauthor@email>
 */

 /*
	Uses Backend Frontend Template 1.0.0
	https://moisesbarrachina.online
*/
class Your_Plugin_Install_Upgrade_Deinstall_Database {
	/**
	 * Install the database
	 *
	 * Install the original database and upgrades if needed
	 * 
	 * This function is executed every time the plugin is called
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function database_install_and_or_upgrade($instantiated_class = NULL) {
		global $wpdb;

		/**
		 * Prefix of the settings and sub prefix of the plugin managed by WordPress
		 * 
		 * If changed '$plugin_slug = "your_plugin";', updated all the concurrences of the plugin
		 */
		$plugin_slug = "bft_pro";
		$plugin_title = "Your Plugin";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		$database_version_installed = get_option( $plugin_slug.'_database_version_installed', '0.0.0' );

		$charset_collate = $wpdb->get_charset_collate();

		/**
		 * Initial database
		 * 
		 * @since    0.0.1
		 */
		/*$database_version_upgrade = "0.0.1";
		if ( version_compare( $database_version_installed, $database_version_upgrade) < 0 ) {

			//Cleanup database
			if ($instantiated_class === NULL)
			{
				$this->dabatase_erase();
			}
			else
			{
				$instantiated_class->dabatase_erase();
			}

			error_log($plugin_title." plugin: database update $database_version_upgrade");

			//Install initial database
			//$wpdb->query("SET FOREIGN_KEY_CHECKS = 0");

			//Don't use "wp_your_plugin_some_table", use instead: ".$wpdb->prefix."your_plugin_some_table
			//The WordPress Instalation define the prefix, use '".$wpdb->prefix."your_plugin_some_table' isntead of 'wp_your_plugin_some_table'
			$wpdb->query("
				CREATE TABLE `".$wpdb->prefix.$plugin_slug."_"."tabñe`  (
			  	) ENGINE");

			//Install example data
			$wpdb->query("INSERT INTO `".$wpdb->prefix.$plugin_slug."_"."courses` VALUES ();");
			
			//$wpdb->query( "SET FOREIGN_KEY_CHECKS = 1");

			//Install initial Settings
			$your_plugin_languages = ["en", "es"];
			update_option( $plugin_slug."_"."languages", $your_plugin_languages);
			update_option( $plugin_slug."_"."language_admin", "en");
			update_option( $plugin_slug."_"."items_per_page", 10);
			update_option( $plugin_slug."_"."country_default", "US");
			update_option( $plugin_slug."_"."currency_id", "USD");

			
			$database_version_installed = $database_version_upgrade;
			update_option( $plugin_slug.'_database_version_installed', $database_version_installed);

			//Running the cronjobs
			wp_schedule_event( time(), 'hourly', 'bl_your_plugin_cronjob' );

		}*/

		return ($database_version_installed);
	}


	/**
	 * Delete the database
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function dabatase_erase() {
		global $wpdb;

		/**
		 * Prefix of the settings and sub prefix of the plugin managed by WordPress
		 * 
		 * If changed '$plugin_slug = "your_plugin";', updated all the concurrences of the plugin
		 */
		$plugin_slug = "bft_pro";
		$plugin_title = "Your Plugin";

		//error_log($plugin_title." plugin: deleting tables");

		$wpdb->query( "SET FOREIGN_KEY_CHECKS = 0");

		//Delete tables
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."courses`;");
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."courses_i18n`;");
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."students`;");
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."students_courses`;");
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."teachers`;");
		$wpdb->query( "DROP TABLE IF EXISTS `".$wpdb->prefix.$plugin_slug."_"."teachers_notes`;");

		$wpdb->query( "SET FOREIGN_KEY_CHECKS = 1");

			
		//Delete settings data
		delete_option($plugin_slug."_"."database_version_installed");
		delete_option($plugin_slug."_"."languages");
		delete_option($plugin_slug."_"."language_admin");
		delete_option($plugin_slug."_"."country_default");
		delete_option($plugin_slug."_"."admin_email");
		delete_option($plugin_slug."_"."calendar_date_start");
		delete_option($plugin_slug."_"."calendar_date_end");
		delete_option($plugin_slug."_"."date_format");
		delete_option($plugin_slug."_"."currency_id");
		delete_option($plugin_slug."_"."currency_order");
		delete_option($plugin_slug."_"."currency_decimals_type");
		delete_option($plugin_slug."_"."currency_decimals_on_interer");
		delete_option($plugin_slug."_"."items_per_page");
		delete_option($plugin_slug."_"."text_test");
		delete_option($plugin_slug."_"."textarea_test");
		delete_option($plugin_slug."_"."number_test");
		delete_option($plugin_slug."_"."select_test");
		delete_option($plugin_slug."_"."select_multiple_test");
		delete_option($plugin_slug."_"."date_test");
		delete_option($plugin_slug."_"."checkbox_test");
		delete_option($plugin_slug."_"."checkbox_multiple_test");
		delete_option($plugin_slug."_"."radio_test");
		delete_option($plugin_slug."_"."image_test");
		delete_option($plugin_slug."_"."file_test");
		delete_option($plugin_slug."_"."empty_test");

		//Stop the cronjobs
		wp_clear_scheduled_hook('bl_your_plugin_cronjob');
	}
}