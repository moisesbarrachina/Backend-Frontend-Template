<?php

/**
 * The core plugin class.
 * 
 * @link			https://moisesbarrachina.online
 * @since			1.0.0
 * @version			1.0.0
 * @package			BFT
 * @subpackage		BFT/includes
 * @author	  		Moisés Barrachina Planelles <info@moisesbarrachina.online>
 */

class BFT {

	/**
	 * The loader that's responsible for maintaining and registering all hooks
	 *
	 * @since	 	1.0.0
	 * @version		1.0.0
	 * @access		protected
	 * @var	Your_Plugin_BFT_Loader	 $loader	 Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The title of this plugin.
	 *
	 * @since	1.0.0
	 * @access	protected
	 * @var		string	 $plugin_title	 "Backend Frontend Template"
	 */
	protected $plugin_title = "Backend Frontend Template";

	/**
	 * The id of this plugin.
	 *
	 * @since	 	1.0.0
	 * @version		1.0.0
	 * @access		protected
	 * @var			string	 $plugin_id	 	"bft-pro"
	 */
	protected $plugin_id = "bft";

	/**
	 * The slug of this plugin.
	 * 
	 * Prefix of the settings and sub prefix of the plugin managed by WordPress too
	 *
	 * If changed '$plugin_slug = "your_plugin";', updated all the concurrences of the plugin
	 * 
	 * @since	1.0.0
	 * @access	protected
	 * @var		string	 $plugin_slug	 "bft_pro"
	 */
	protected $plugin_slug = "bft";

	/**
	 * The current version of the plugin.
	 *
	 * @since	 	1.0.0
	 * @version		1.0.0
	 * @access		protected
	 * @var			string	 		$plugin_version	 The current version of the plugin.
	 */
	protected $plugin_version;


	/**
	 * Define the core functionality of the plugin.
	 * 
	 * @since	 	1.0.0
	 * @version		1.0.0
	 */
	public function __construct() {
		
		if ( defined( 'BFT_VERSION' ) ) {
			$this->plugin_version = BFT_VERSION;
		} else {
			$this->plugin_version = get_option("bft_version");
		}

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->define_cron_hooks();

	}


	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Your_Plugin_BFT_Loader. Orchestrates the hooks of the plugin.
	 * - Your_Plugin_BFT_i18n. Defines internationalization functionality.
	 * - Your_Plugin_Admin_Public. Defines functions for admin and public area.
	 * - Your_Plugin_Public. Defines all hooks for the public side of the site. The class is a extend of Your_Plugin_Admin_Public.
	 * - Your_Plugin_Admin. Defines all hooks for the admin area. The class is a extend of Your_Plugin_Admin_Public.
	 * - Your_Plugin_Cronjobs. Defines all hooks for the admin area. The class is a extend of Your_Plugin_Admin_Public.
	 * - Your_Plugin_BFT_Display_Table. Defines the class to show WordPress style tables inside the plugin. (Only on Backend Frontend Template Pro)
	 *
	 * Create an instance of the loader which will be used to register the hooks with WordPress.
	 *
	 * @since	 	1.0.0
	 * @version		1.0.0
	 * @access		private
	 */
	private function load_dependencies() {

		$BFT_PRO = is_dir(plugin_dir_path( dirname( __FILE__ ) ) . "includes/lib/BFT-PRO/");
		if (true == $BFT_PRO) {
			$folder = "BFT-PRO";
		}
		else {
			$folder = "BFT";
		}
		
		/**
		 * The class responsible for orchestrating the actions and filters of the core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/lib/".$folder."/class-bft-loader.php";

		/**
		 * The class responsible for defining internationalization functionality of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/lib/".$folder."/class-bft-i18n.php";

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/lib/".$folder."/class-bft-functions-admin-public.php";
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/class-your-plugin-functions-admin-public.php";
		require_once plugin_dir_path( dirname( __FILE__ ) )."admin/lib/".$folder."/class-bft-admin.php";
		if (true == $BFT_PRO) {
			require_once plugin_dir_path( dirname( __FILE__ ) )."admin/lib/".$folder."/class-bft-list-table.php";
		}
		require_once plugin_dir_path( dirname( __FILE__ ) )."admin/class-your-plugin-admin.php";
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/class-your-plugin-install-upgrade-deinstall-database.php";
		
		/**
		 * The class responsible for defining all actions that occur in the cronjobs
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) )."includes/class-your-plugin-cronjobs.php";

		/**
		 * The class responsible for defining all actions that occur in the public-facing side of the site.
		 */
		//require_once plugin_dir_path( dirname( __FILE__ ) )."includes/lib/".$folder."/class-bft-functions-admin-public.php";
		//require_once plugin_dir_path( dirname( __FILE__ ) )."includes/class-your-plugin-functions-admin-public.php";
		require_once plugin_dir_path( dirname( __FILE__ ) )."public/lib/".$folder."/class-bft-public.php";
		require_once plugin_dir_path( dirname( __FILE__ ) )."public/class-your-plugin-public.php";

		$this->loader = new Your_Plugin_BFT_Loader();

	}


	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Your_Plugin_BFT_i18n class in order to set the domain and to register the hook with WordPress.
	 *
	 * @since	 1.0.0
	 * @access	private
	 */
	private function set_locale() {

		$plugin_i18n = new Your_Plugin_BFT_i18n();

		$this->loader->add_action("plugins_loaded", $plugin_i18n, "load_plugin_textdomain");

	}


	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since	 1.0.0
	 * @access	private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Your_Plugin_Admin( $this->get_info());

		$this->loader->add_action("admin_enqueue_scripts", $plugin_admin, "enqueue_styles");
		$this->loader->add_action("admin_enqueue_scripts", $plugin_admin, "enqueue_scripts");

		$this->loader->add_action("admin_menu", $plugin_admin, "admin_menu_add_menus");
		$this->loader->add_action("admin_init", $plugin_admin, "admin_menu_add_settings_sections");

		//On AJAX the name is important
		//wp_ajax_Your_Plugin_bft_get_image -> Your_Plugin_bft_get_image
		//Ajax need to be an unid ID amount all the plugins
		$this->loader->add_action("wp_ajax_Your_Plugin_bft_get_image", $plugin_admin, "Your_Plugin_bft_get_image");
		$this->loader->add_action("wp_ajax_Your_Plugin_bft_get_file", $plugin_admin, "Your_Plugin_bft_get_file");
	}


	/**
	 * Register all of the hooks related to the public-facing functionality of the plugin.
	 *
	 * @since	 1.0.0
	 * @access	private
	 */
	private function define_public_hooks() {

		$plugin_public = new Your_Plugin_Public( $this->get_info());

		$this->loader->add_action("wp_enqueue_scripts", $plugin_public, "enqueue_styles");
		$this->loader->add_action("wp_enqueue_scripts", $plugin_public, "enqueue_scripts");

		$this->loader->add_action("init", $plugin_public, "shortcodes_init");

		$this->loader->add_action("wp_head", $plugin_public, "javascript_variables");

		
		/*
		AJAX:

		If the user is logged in:		wp_ajax
		If the user is not logged in:	wp_ajax_nopriv
		*/

		//bft_shortcode_ajax_test_response
		$this->loader->add_action("wp_ajax_bft_shortcode_ajax_test_response", $plugin_public, "bft_shortcode_ajax_test_response");
		$this->loader->add_action("wp_ajax_nopriv_bft_shortcode_ajax_test_response", $plugin_public, "bft_shortcode_ajax_test_response");

		//bft_shortcode_form_test_response
		$this->loader->add_action("wp_ajax_bft_shortcode_form_test_response", $plugin_public, "bft_shortcode_form_test_response");
		$this->loader->add_action("wp_ajax_nopriv_bft_shortcode_form_test_response", $plugin_public, "bft_shortcode_form_test_response");
	}


	/**
	 * Register all of the hooks related to WordPress Cron Jobs of the plugin.
	 *
	 * @since	 1.0.0
	 * @access	private
	 */
	private function define_cron_hooks() {

		$plugin_public = new Your_Plugin_Cronjobs( $this->get_info());

		$this->loader->add_action("bl_your_plugin_cronjob", $plugin_public, "your_plugin_cronjob");
	}


	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since	 1.0.0
	 */
	public function run() {
		$this->loader->run();
	}


	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since	  1.0.0
	 * @return	 string	 The name of the plugin.
	 */
	public function get_info() {
		$plugin_info = [
			"title" => $this->plugin_title,
			"id" => $this->plugin_id,
			"slug" => $this->plugin_slug,
			"version" => $this->plugin_version,
		];
		return $plugin_info;
	}


	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since	  1.0.0
	 * @return	 Your_Plugin_BFT_Loader	 Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	
	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since	  1.0.0
	 * @return	 string	 The version number of the plugin.
	 */
	public function get_version() {
		return $this->plugin_version;
	}

}
