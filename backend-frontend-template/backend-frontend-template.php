<?php

/**
 * @link				https://moisesbarrachina.online
 * @since				1.0.0
 * @package				BFT
 *
 * @wordpress-plugin
 * Plugin Name:			Backend Frontend Template
 * Plugin URI:			https://github.com/moisesbarrachina/Backend-Frontend-Template-the-WordPress-Plugin-Template
 * Description:			Create an advanced plugin quickly and easily. BFT is not only a template, it's also a library for WordPress plugin developers
 * 
 * Version:				1.0.0
 * Author:				Moisés Barrachina Planelles
 * Author URI:			https://moisesbarrachina.online/
 * 
 * License:				GPL-3.0+
 * License URI:			https://www.gnu.org/licenses/gpl-3.0.txt
 * 
 * Text Domain:			bft
 * Domain Path:			/languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Use SemVer - https://semver.org
 */
$plugin_version = "0.0.1";
define( 'BFT_VERSION', $plugin_version);
update_option( 'bft_version', $plugin_version);

/**
 * The code that runs during plugin activation.
 * 
 * @since    	1.0.0
 * @version		1.1.0
 */
function activate_bft() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-your-plugin-install-upgrade-deinstall-database.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-your-plugin-activator.php';
	Your_Plugin_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_bft' );

/**
 * The code that runs during plugin deactivation.
 * 
 * @since    	1.0.0
 * @version		1.1.0
 */
function deactivate_bft() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-your-plugin-install-upgrade-deinstall-database.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-your-plugin-deactivator.php';
	Your_Plugin_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_bft' );

/**
 * The core plugin class that is used to define internationalization
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bft.php';

/**
 * Begins execution of the plugin.
 * 
 * @since    	1.0.0
 * @version		1.1.0
 */
function run_bft() {
	$plugin = new BFT();
	$plugin->run();
}
run_bft();
