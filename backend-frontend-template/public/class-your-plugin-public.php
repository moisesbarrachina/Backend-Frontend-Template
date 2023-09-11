<?php

/**
 * The public-facing functionality of Route Plugin
 * 
 * @link		https://yourfuturewebsite
 * @since		0.0.1
 * @version		0.0.1
 * @package		Your_Plugin
 * @subpackage	Your_Plugin/public
 * @author	  	Plugin Author <pluginauthor@email>
 */

/*
	Uses Backend Frontend Template 1.0.0
	https://moisesbarrachina.online
*/

class Your_Plugin_Public extends Your_Plugin_BFT_Public {


	
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
	 * Your Plugin admin-public variables
	**/


	/**
	 * BFT public variables
	 * 
	 * There are no BFT public variables
	 */


	/**
	 * Your Plugin public variables
	 * 
	 * There are no Your Plugin public variables
	 */



	/**
	 * Register the Your Plugin stylesheets for the admin area.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function enqueue_styles_plugin() {
		//Bootstrap
		//wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), $this->plugin_version, 'all' );
		//wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(), $this->plugin_version, 'all' );
		//wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), $this->plugin_version, 'all' );
		
		// Bootstrap Select
		//wp_enqueue_style( 'bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css', array(), $this->plugin_version, 'all' );
		//wp_enqueue_style( 'bootstrap-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css', array(), $this->plugin_version, 'all' );
		//wp_enqueue_style( 'bootstrap-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css', array(), $this->plugin_version, 'all' );
		
		//Daterangepicker
		//wp_enqueue_style( 'daterangepicker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css', array(), $this->plugin_version, 'all' );

		//Own
		wp_enqueue_style( $this->plugin_id, plugin_dir_url( __FILE__ ) . 'css/your-plugin-public.css', array(), $this->plugin_version, 'all' );
	}


	/**
	 * Register the JavaScript for the public  area
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function enqueue_scripts_plugin() {
		// Bootstrap
		//wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '', true );
		//wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', array('jquery'), '', true );
		//wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '', true );
		
		// Bootstrap Select
		//wp_enqueue_script( 'bootstrap-selectjs', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js', array('jquery'), '', true );
		//wp_enqueue_script( 'bootstrap-selectjs', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js', array('jquery'), '', true );
		//wp_enqueue_script( 'bootstrap-selectjs', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js', array('jquery'), '', true );

		// Daterangepicker
		//wp_enqueue_script( 'momentjs', 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js', array('jquery'), '', true );
		//wp_enqueue_script( 'daterangepicker-selectjs', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js', array('jquery'), '', true );

		// Own
		wp_enqueue_script( $this->plugin_id, plugin_dir_url( __FILE__ ) . 'js/your-plugin-public.js', array( 'jquery' ), $this->plugin_version, false );
	}


	/**
	 * Function where create all shortcodes
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function shortcodes_init_plugin() {
		add_shortcode("bft-shortcode-test", array($this, "bft_shortcode_test"));
		add_shortcode("bft-shortcode-ajax-test", array($this, "bft_shortcode_ajax_test"));
		add_shortcode("bft-shortcode-form-test", array($this, "bft_shortcode_form_test"));
	}


	/**
	 * Prepare the variables
	 *
	 * @since		0.0.1
	 * @version		0.0.1
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
	 * @since		0.0.1
	 * @version		0.0.1
	 * @param		array				$atts		Shortcode attributes. Default empty.
	 * @param		string				$content	Shortcode content. Default null.
	 * @param		string				$tag		Shortcode tag (name). Default empty.
	 * @return		string				Shortcode	output.
	 */
	public function bft_shortcode_test( $atts = [], $content = null, $tag = '' ) {

		$html_aux = "";

		if (isset($atts["aditional_text"])) {
			$html_aux .= "<h4>".esc_html($atts["aditional_text"])."</h4>";
		}

		if (!is_null($content)) {
			$html_aux .= "<p>".esc_html($content)."</p>";
		}

		ob_start();
		require plugin_dir_path( dirname( __FILE__ ) ) . "public/partials/your-plugin-shortcode-test.php";
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
	
}
