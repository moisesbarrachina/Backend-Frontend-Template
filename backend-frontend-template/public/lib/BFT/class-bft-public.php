<?php

/**
 * The public-facing functionality of WordPres Plugin Template
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/public/lib/BFT
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
 */
class Your_Plugin_BFT_Public extends Your_Plugin_Admin_Public {


	
	/**
	 * BFT admin-public variables
	 * 
	 * @var		string				$bft_version											Version of BFT
	 * @var		string				$plugin_title											The title of this plugin: "Your Plugin"
	 * @var		string				$plugin_id												The id of this plugin: "your-plugin"
	 * @var		string				$plugin_slug											The slug of this plugin: "your_plugin"
	 * @var		string				$plugin_version											The current version of the plugin
	 * @var		string|boolean		$database_version										The current version of the plugin database
	 * @var		string				$admin_email											Admin where send the notifications
	 * @var		string				$language_current										The language of the user
	 * @var		int					$currency_id											Currency id used
	 * @var		string				$currency_symbol										Currency sybol used
	 * @var		string				$currency_order											Currency order used
	 * @var		string				$currency_decimals_type									Decimals character
	 * @var		string				$currency_decimals_on_interer							How to show an interger amount
	 * @var		string				$database_datetime_created_name							Database: column datetime creation, name
	 * @var		string				$database_datetime_created_text							Database: column datetime creation, text
	 * @var		string				$database_datetime_modified_name						Database: column datetime modification, name
	 * @var		string				$database_datetime_modified_text						Database: column datetime modification, text
	 * @var		string				$database_datetime_removed_name							Database: column datetime moved to bin, name
	 * @var		string				$database_datetime_removed_text							Database: column datetime moved to bin, text
	 * @var		string				$database_status_column_name							Database: column for the status (active-deactive), name
	 * @var		string				$database_status_column_text							Database: column for the status (active-deactive), text
	 * @var		string				$database_status_option_active_name						Database: enum option for active, name
	 * @var		string				$database_status_option_active_text						Database: enum option for active, text
	 * @var		string				$database_status_option_bin_name						Database: enum option for deactive, name
	 * @var		string				$database_status_option_bin_text						Database: enum option for deactive, text
	 * @var		string				$database_multiple_values_separator						Database: separator of multiples values
	 * @var		string				$database_i18n_suffix									Database: internationalization prefix 
	 * @var		string				$daterangepicker_script_printed_ids						Ids of daterangepiker printed
	 */


	/**
	 * BFT public variables
	 * 
	 * There are no BFT public variables
	 */


	 
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array		$plugin_info 		title, id, slug and version of the plugin
	 * @return		null
	 */
	public function __construct($plugin_info) {

		if (	!is_array($plugin_info)
			||	!isset($plugin_info["title"])
			||	!isset($plugin_info["id"])
			||	!isset($plugin_info["slug"])
			||	!isset($plugin_info["version"])) {
			die("plugin_info error");
		}

		$this->plugin_title = $plugin_info["title"];
		$this->plugin_id = $plugin_info["id"];
		$this->plugin_slug = $plugin_info["slug"];
		$this->plugin_version = $plugin_info["version"];
		$this->database_version = $this->option_field_get('database_version_installed');
		$this->custom_variables_set();
	}


	/**
	 * Register the stylesheets for the public area
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function enqueue_styles() {
		//BFT
		wp_enqueue_style("bft", plugin_dir_url( __FILE__ )."css/bft-public.css", array(), $this->bft_version);

		if (is_callable(array($this, "enqueue_styles_plugin"))) {
			$this->enqueue_styles_plugin();
		}
	}


	/**
	 * Register the JavaScript for the public  area
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function enqueue_scripts() {
		// BFT
		wp_enqueue_script("bft", plugin_dir_url( __FILE__ )."js/bft-public.js", array( "jquery" ), $this->bft_version, false );

		if (is_callable(array($this, "enqueue_scripts_plugin"))) {
			$this->enqueue_scripts_plugin();
		}
	}


	/**
	 * Function where create all shortcodes.
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function shortcodes_init() {

		//[bft-shortcode-test]
		add_shortcode("bft-shortcode-test", array($this, "bft_shortcode_test"));
		add_shortcode("bft-shortcode-ajax-test", array($this, "bft_shortcode_ajax_test"));
		add_shortcode("bft-shortcode-form-test", array($this, "bft_shortcode_form_test"));

		if (is_callable(array($this, "shortcodes_init_plugin"))) {
			$this->shortcodes_init_plugin();
		}
	}


	/**
	 * Print or return the BFT AJAX javascript functions
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		boolean				$print
	 * @return		string|echo			
	 */
	public function bft_ajax_functions($print = true) {
	}
	
		
	/**
	 * Prepare the variables
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function custom_variables_set() {
		$this->custom_variables_admin_public_set();

		$this->language_user_get();
	}


	/**
	 * Variables used on javascript
	 * 
	 * BFT Mini version
	 * 
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		echo
	 */
	public function javascript_variables(){
	}

	
	/**
	 * The [bft-shortcode-test] shortcode.
	 * 
	 * Display a Hello World
	 * 
	 * Example: [bft-shortcode-test aditional_text="This is an aditional text"]The text inside de tags[/bft-shortcode-test]
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array				$atts		Shortcode attributes. Default empty.
	 * @param		string				$content	Shortcode content. Default null.
	 * @param		string				$tag		Shortcode tag (name). Default empty.
	 * @return		string				Shortcode	output.
	 */
	public function bft_shortcode_test( $atts = [], $content = null, $tag = '' ) {

		$html = "<h3>BFT: ".$this->__("Hello World").", ".$this->__("this is a static and cacheable text")."</h3>";

		$html_aux = "";

		if (isset($atts["aditional_text"])) {
			$html_aux .= "<h4>".esc_html($atts["aditional_text"])."</h4>";
		}

		if (!is_null($content)) {
			$html_aux .= "<p>".esc_html($content)."</p>";
		}

		$html = "<div>$html</div>";


		ob_start();
		require plugin_dir_path( dirname( __FILE__ ) ) . "bft/partials/bft-shortcode-test.php";
		$html = ob_get_clean(); 

		return $html;
	}

		/**
	 * The [bft-shortcode-ajax-test] shortcode.
	 * 
	 * BFT Mini version
	 * 
	 * Preapre the AJAX response
	 * 
	 * Example: [bft-shortcode-ajax-test]
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @param		array				$atts		Shortcode attributes. Default empty.
	 * @param		string				$content	Shortcode content. Default null.
	 * @param		string				$tag		Shortcode tag (name). Default empty.
	 * @return		string				Shortcode	output.
	 */
	public function bft_shortcode_ajax_test( $atts = [], $content = null, $tag = '' ) {
	}


	/**
	 * The [bft-shortcode-ajax-test] shortcode AJAX response
	 * 
	 * BFT Mini version
	 * 
	 * Display a Hello World by ajax
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		echo
	 */
	public function bft_shortcode_ajax_test_response( ) {
	}
	

	/**
	 * The [bft-shortcode-form-test] shortcode.
	 * 
	 * BFT Mini version
	 * 
	 * Preapre the AJAX response
	 * 
	 * Example: [bft-shortcode-form-test]
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @param		array				$atts		Shortcode attributes. Default empty.
	 * @param		string				$content	Shortcode content. Default null.
	 * @param		string				$tag		Shortcode tag (name). Default empty.
	 * @return		string				Shortcode	output.
	 */
	public function bft_shortcode_form_test( $atts = [], $content = null, $tag = '' ) {
	}


	/**
	 * The [bft-shortcode-ajax-test] shortcode AJAX response
	 * 
	 * BFT Mini version
	 * 
	 * Display the data of the form
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		echo
	 */
	public function bft_shortcode_form_test_response( ) {
	}
	

	/**
	 * Enclosing tags
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$content	
	 * @return		string|echo				
	 */
	protected function content_show($content) {
		if (!is_null($content) ) {
			//Secure output by executing the_content filter hook on $content
			echo(apply_filters( 'the_content', $content ));

			//Run shortcode parser recursively
			echo(do_shortcode($content));
		}
    }

	/**
	 * Array to inputs hidden, supports until 4 sub-array levels
	 * It's not recursive for the memory usage
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array		$_POST
	 * @param		boolean		$print
	 * @return		echo				
	 */
	protected function post_to_inputs_hidden ($data = null, $print = true) {
    }

}
