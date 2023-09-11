<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/includes/lib/BFT
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
 */
class Your_Plugin_BFT_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 */
	public function load_plugin_textdomain() {

		$lang_dir_path = dirname(dirname(plugin_basename( __FILE__ )))."../../languages/";
		$lang_dir_path_full = plugin_dir_path( dirname( __FILE__ ) )."../../languages/";

		$lang_file_basename = 'bft-internationalization';

		$locale_country = apply_filters( 'plugin_locale',  get_locale(), $lang_file_basename );
		$lang_file_country = sprintf( '%1$s-%2$s.mo', $lang_file_basename, $locale_country);

		$locale_parts = explode("_", $locale_country);
		$locale = $locale_parts[0];
		$lang_file = $lang_file_basename."-".$locale.".mo";

		$lang_country_file_path = $lang_dir_path.$lang_file_country;
		$lang_country_file_path_full = $lang_dir_path_full.$lang_file_country;

		$lang_file_path = $lang_dir_path.$lang_file;
		$lang_file_path_full = $lang_dir_path_full.$lang_file;

		$lang_file_loaded = false;

		if (file_exists($lang_country_file_path_full)) {
			//Language country file bft-internationalization-es_ES.mo
			$lang_file_loaded = load_textdomain( $lang_file_basename, $lang_country_file_path_full);
		}

		if (	$lang_file_loaded != true
		&&	file_exists($lang_file_path_full)) {
			//Language file bft-internationalization-es.mo
			$lang_file_loaded = load_textdomain( $lang_file_basename, $lang_file_path_full);
		}

		if ($lang_file_loaded != true) {
			//Translation folder
			load_plugin_textdomain($lang_file_basename, false, $lang_dir_path );
		}
	}
}
