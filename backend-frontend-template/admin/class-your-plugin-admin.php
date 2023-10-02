<?php

/**
 * The admin-specific functionality of Your Plugin
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

class Your_Plugin_Admin extends Your_Plugin_BFT_Admin {

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
	 * BFT admin variables
	 * 
	 * @var		string				$admin_title											Main title of the admin menu
	 * @var		array				$database_status_options								Database: array with the options database_status_option_active and database_status_option_bin
	 * @var		string				$database_i18n_column_language							Database: column with the code of the language 
	 * @var		string				$submit_text_default									Database: column with the translated text
	 * @var		int					$items_per_page											Number of items per list table
	 * @var		string				$security_code_database_uninstall						Security code: delete the database
	 * @var		string				$admin_pages_main_name									Name of the plugin on the admin menu
	 * @var		string				$admin_pages_page_title_default							Title default of a admin page
	 * @var		string				$admin_pages_menu_title_default							Menú text default of a admin page
	 * @var		string				$admin_pages_slug_name_prefix							Slug prefix for the admin pages
	 * @var		string				$admin_pages_capability_default							Capability default for the admin pages
	 * @var		string				$admin_pages_function_default							Function default for the admin pages
	 * @var		string				$admin_pages_function_load_default						Function load default for the admin pages
	 * @var		string				$admin_pages_file_default								File default for the admin pages
	 * @var		string				$settings_section_function_default						Function default for the admin pages
	 * @var		string				$page_name												Page displaying at this moment
	 * @var		array				$admin_pages											Array of admin pages of the menu
	 * @var		array				$admin_settings									Array of page's settings controlled by WordPress by 
	 * @var		array				$admin_forms										Array of the page's custom forms
	 * @var		array				$admin_forms_many_to_many_relationships				Array of the many to manu relations
	 * @var		array				$errors_messages_shown									Messages already shown
	 * @var		string				$date_format_admin										Date format on the admin side
	 */


	/**
	 * Your Plugin admin variables
	 */



	/**
	 * 
	 * Functions explications:
	 * 
	 * $this->custom_form_html_input($input_data, $print = false), function that returns and HTML input (Only on Backend Frontend Template Pro)
	 * 
	 * $input_data is an array with all the data:
	 * 
	 * $input_data["value"] = default value
	 * $input_data["type"] = the input type
	 * 
	 * The optional data depens of the type selected:
	 * 
	 * 
	 * text: input text
	 * 	$input_data = [
	 * 		"type" => "text",
	 * 		"rows" => 10,
	 * 		"cols" => 50,
	 *	];
	 * 
	 * 
	 * textarea: input textarea, rows and cols are optionals
	 * 	$input_data = [
	 * 		"type" => "textarea",
	 * 		"rows" => 10,
	 * 		"cols" => 50,
	 * 	 ];
	 * 
	 * 
	 * number: input number, optional args: min, max and step. Default of step: 1, alternative: "decimal" or "decimals", this option calculate the needed steps
	 * 	$input_data = [
	 * 		"type" => "number",
	 * 		"min" => 1,
	 * 		"max" => 99999,
	 * 		"step" => 1,
	 *	];


	 * select: input select, args must have "options", it stores string wiht checked options, ej: "en,es" , optional args: search (default false), multiple (default false)
	 * 	$input_data = [
	 * 		"type" => "select",
	 * 		"search" => true,
	 * 		"options" => [
	 * 			"zh" => $this->__("Chinesse"),
	 * 			"en" => $this->__("English"),
	 * 			"es" => $this->__("Spanish"),
	 * 		],
	 * 	];
	 * 	$input_data = [
	 * 		"type" => "select",
	 * 		"multiple" => true,
	 * 		"search" => true,
	 * 		"options" => [
	 * 			"zh" => $this->__("Chinesse"),
	 * 			"en" => $this->__("English"),
	 * 			"es" => $this->__("Spanish"),
	 * 		],
	 * 	];
	 * 
	 * 
	 * date: input text with a calendar, the date will be in MySQL style "2023-01-01"
	 * 	$input_data = [
	 * 		"type" => "date",
	 *	];
	 * 	
	 * 
	 * checkbox, single and multiple, in multiple is needed "options" on args
	 * 	$input_data = [
	 * 		"type" => "checkbox",
	 * 		"multiple" => false,
	 *	];
	 * 	$input_data = [
	 * 		"type" => "checkbox",
	 * 		"multiple" => true,
	 * 		"options" => [
	 * 			"zh" => $this->__("Chinesse"),
	 * 			"en" => $this->__("English"),
	 * 			"es" => $this->__("Spanish"),
	 * 		],
	 * 	];
	 * 
	 * 
	 * radio: radio buttons, stores string wiht checked options, ej: "en,es", it requieres "options"
	 * 	$input_data = [
	 * 		"type" => "radio",
	 * 		"multiple" => true,
	 * 		"options" => [
	 * 			"zh" => $this->__("Chinesse"),
	 * 			"en" => $this->__("English"),
	 * 			"es" => $this->__("Spanish"),
	 * 		],
	 * 	];
	 * 
	 * 
	 * image: store is needed and select and image of the WordPress Media Library, the data saved is the ID of the file. One selected shows the image
	 * 	$input_data = [
	 * 		"type" => "image",
	 * 	 ];
	 * 
	 * 
	 * file: the same as the image type but don't try to display an image, only shows a download button
	 * 	$input_data = [
	 * 		"type" => "file",
	 * 	];
	 * 
	 * 
	 * empty: a commented input, it prints ''
	 * 	$input_data = [
	 * 		"type" => "empty",
	 * 	 ];
	 */




	/**
	 * Set the class variables
	 * 
	 * Most important variables:
	 * $this->admin_pages									The administration pages
	 * $this->admin_settings							The forms for save WordPress options
	 * $this->admin_forms								The custom automated forms for save data on custom database tables
	 * $this->admin_forms_many_to_many_relationships		Relations many to many
	 * 
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	protected function custom_variables_set () {
		global $wpdb;
		//$variable = $this->__("string");
		//echo(esc_html($variable);
		//Don't use directly $this->esc_html_e("string");


		$this->database_version = $this->option_field_get('database_version_installed');
		if(false !== $this->database_version)
		{
			$this->items_per_page = $this->option_field_get('items_per_page');
			$your_plugin_calendar_date_start = $this->option_field_get('calendar_date_start');
			$your_plugin_calendar_date_end = $this->option_field_get('calendar_date_end');

			$your_plugin_calendar_date_start_datetime = new DateTime($your_plugin_calendar_date_start);
			$your_plugin_calendar_date_end_datetime = new DateTime($your_plugin_calendar_date_end);

			if ($your_plugin_calendar_date_start_datetime > $your_plugin_calendar_date_end_datetime) {
				$this->update_option_field('calendar_date_start', $your_plugin_calendar_date_end);
			}
		}

		$this->on_update_send_email_to =  [
			"admin" => [
				"boolean" => true,
				"value" => "yes",
				"changed" => false,
			],
			"contact" => [
				"boolean" => true,
				"value" => "yes",
				"changed" => false,
			],
			"lodgings" => [
				"boolean" => true,
				"value" => "yes",
				"changed" => false,
			],
		];

		$this->custom_variables_admin_public_set();

		$this->admin_title = $this->plugin_title;
		$this->submit_text_default = $this->__("Save Settings");

		$this->database_status_column_text = $this->__("Status");
		$this->database_status_option_active_text = $this->__("Active");
		$this->database_status_option_bin_text = $this->__("Bin");

		$this->database_datetime_created_text = $this->__("Creation date");
		$this->database_datetime_modified_text = $this->__("Last modification date");
		$this->database_datetime_removed_text = $this->__("Last elimination date");

		$this->database_status_options = [
			$this->database_status_option_active_name => $this->database_status_option_active_text,
			$this->database_status_option_bin_name => $this->database_status_option_bin_text,
		];


		/**
		 * List of the admin pages of the plugin
		 * 
		 * The array $this->admin_pages
		 * 
		 *	"key_page" => [
		 *		[data of the page]
		 *		"children" => [
		 *			"children" => [
		 *				[data of the nested page]
		 *			],
		 *		],
		 *	],
		 *
		 * 
		 * There are automatic parameters: parameters that BFT will create, needed and optional parameters, and parameters optionals that BFT will create with default data if missing 
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Automatic parameters:
		 *  
		 * id: the array key
		 * is_child: isset and true if it's a child
		 * page_parent: key of the parent
		 * 
		 * ids_required_get_data: the $_GET data found within the ids "ids_required"
		 * ids_optional_get_data: the $_GET data found within the ids "ids_optional"
		 * ids_aux_required_get_data: the $_GET data found within the ids "ids_aux_required"
		 * ids_aux_optional_get_data: the $_GET data found within the ids "ids_aux_optional"
		 * 
		 * ids_all: "ids_required", "ids_optional", "ids_aux_required", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_all_get_data: the $_GET data found within the ids "ids_all", uses the "key_final" as "key"
		 * ids_all_get_data_excluded_zeros: ids_all_get_data without the ids with get data == "0"
		 * ids_all_get_url: ids_all_get_data transformed on a URL GET string: "&key=dato"
		 * ids_all_get_data_excluded_zeros: ids_all_get_url without the ids with get data == "0"
		 * 
		 * ids_all_inverse: ids_all inverse, ej:
		 * 		$page_data["ids_all"] = [
		 * 			"key_initial" =>"key_final"
	 	 * 		]
	     * 		->
	 	 * 		$page_data["ids_all_inverse"] = [
		 * 			"key_final" =>"key_initial"
		 * 		]
		 * 
		 * ids_required_all: "ids_required", "ids_aux_required" all combined, this order is the priority for maintain the data
		 * ids_required_all_get_data: the $_GET data found within the ids "ids_required_all", uses the "key_final" as "key"
		 * ids_required_all_get_data_excluded_zeros: ids_required_all_get_data without the ids with get data == "0"
		 * 
		 * ids_optional_all: "ids_optional", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_optional_all_get_data: the $_GET data found within the ids "ids_optional_all", uses the "key_final" as "key"
		 * 
		 * ids_principal_all: "ids_required", "ids_optional" all combined, this order is the priority for maintain the data
		 * ids_principal_all_get_data: the $_GET data found within the ids "ids_principal_all", uses the "key_final" as "key"
		 * 
		 * ids_aux_all: "ids_aux_required", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_aux_all_get_data: the $_GET data found within the ids "ids_aux_all", uses the "key_final" as "key"
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Parametters with default data if missing:
		 * 
		 * page_title: page title, default: $this->admin_pages_page_title_default
		 * menu_title: page tab title, default: $this->admin_pages_page_title_default
		 * menu_slug: page slug, default: key of the pae. The menu slug will be changed to: $this->admin_pages_slug_name_prefix."_".menu_slug because it's needed a unique page name among the plugins
		 * 
		 * IDs: they are data arrays with "name on the GET data" => "id internal to use", default empty array
		 * On the GET data it's needed to put a unique id, example: "book_id", but on the page/function maybe it's needed like "id", then use: ' "book_id" => "id", '
		 * Options:
		 * ids_required (throw an error if GET id not found)
		 * ids_optional
		 * ids_aux_required (throw an error if GET id not found, for pages with secondary data)
		 * ids_aux_optional (For pages with secondary data))
		 * 
		 * Note: uf it's a children page there may be automatic ids (Only on Backend Frontend Template Pro)
		 * If a parent have an id or id aux that it's not found on the page,
		 * then the page has all the missing ids like an id optional on ids_optional
		 * 
		 * 
		 * tab_show: if false does not display the page tab, even if the page is selected, default: true
		 * tabs_new_or_edit_on_url: if true it adds "&action=edit" or "&action=new" in the tab link, new if there are an id detected on the GET data, default false
		 * tabs_show_children: if false doesn't show the first line children tabs of a page, default true (Only on Backend Frontend Template Pro)
		 *  
		 * function: the function for load the data of the page, default: $this->admin_pages_function_default (per example: function for load the data of the table, then load the file with the table with the part "file")
		 * function_load: loads the function before all, per example for submit a custom form, then load "function" for load he updated data, default: $this->admin_pages_function_load_default (for example "admin_permission_check_and_ids_required_check_function_load" for check all the id required before do anything, or "redirect_to_first_page_child" to redirect to the first child)
		 * 
		 * file: the admin/partials file that will be loaded, default: $this->admin_pages_file_default (the full path will be used on the variable $file_url )
		 * if the file starts with "bft-" the file will be loaded of the folder admin/lib/BFT/partials
		 * 
		 * error_throw_what_do, it's used on error_throw ($error_message = "", $error_throw_what_do_use_this = NULL, $error_throw_file_change_use_this = NULL, $triggered_on_function_load = false, $page_id = NULL),
		 * Options:
		 * show_error (default)
		 * show_error_and_die
		 * go_to_parent (only works if $triggered_on_function_load = true, because on normal WordPress function will cause the error: "Cannot modify header information - headers already sent")
		 * 
		 * error_throw_file_change, change the file option if error_throw_what_do is triggered, default: false
		 * 
		 * capability, default: "manage_options", WordPress capabilities: https://wordpress.org/support/article/roles-and-capabilities/
		 * Examples, not all options:
		 * manage_options
		 * moderate_comments
		 * manage_categories
		 * manage_links
		 * unfiltered_html
		 * edit_others_posts
		 * edit_pages
		 * edit_others_pages
		 * edit_published_pages
		 * publish_pages
		 * delete_pages
		 * delete_others_pages
		 * delete_published_pages
		 * delete_others_posts
		 * delete_private_posts
		 * edit_private_posts
		 * read_private_posts
		 * delete_private_pages
		 * edit_private_pages
		 * read_private_pages
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Available functions out of the box (you can create whatever function you need)
		 * 
		 * 
		 * admin_menu_page_display
		 * Display the page selected on "file"
		 * 
		 * admin_menu_page_table_display_first_menu_child (Only on Backend Frontend Template Pro)
		 * Display a table with the data of the first child and the form stored in $this->admin_forms[]
		 * 
		 * admin_menu_page_table_display (Only on Backend Frontend Template Pro)
		 * Same function like admin_menu_page_table_display_first_menu_child but it doesn't search the data on the children, and don't go to the child
		 * 
		 * admin_menu_admin_form_page_display (Only on Backend Frontend Template Pro)
		 * Display a custom automated form form stored in $this->admin_forms[]
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Functions load available  out of the box (you can create whatever function you need)
		 * 
		 * redirect_to_first_page_child (Only on Backend Frontend Template Pro)
		 * Redirect to the first child page of the actual page (executes admin_permission_check_and_ids_required_check_function_load first)
		 * 
		 * admin_permission_check_and_ids_required_check_function_load (id check only on Backend Frontend Template Pro)
		 * Check admin premissions and check required and optionals ids of the page specified on the URL, principal and aux ids type checked, prepared for "function_load", "go_to_parent" used if needed
		 * 
		 * ids_required_check_function_load
		 * Check required and optionals ids of the page specified on the URL, principal and aux ids type checked, prepared for "function_load", "go_to_parent" used if needed
		 * 
		 * download_file_private (Only on Backend Frontend Template Pro)
		 * Donwload a private file
		 * 
		 * custom_form_set_do_by_post (Only on Backend Frontend Template Pro)
		 * Send a form for automated data manipulation
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Optional parameters
		 * 
		 * admin_page_settings_id: for select the key to use of $this->admin_settings[] , (Only on Backend Frontend Template Pro)
		 * Prepared for use with the function $this->settings_section_form($this->admin_pages_data_get("admin_page_settings_id")) (Only on Backend Frontend Template Pro)
		 * That function is used on "file" => "bft-admin-display-settings.php",
		 * 
		 * iframe_admin_page_slug and iframe_url:
		 * The slug or full URL of the inside iframe
		 * To use with "file" => "bft-admin-display-iframe.php"
		 * 
		 * file_aux_folder_includes: for use a second full path with the variable $file_aux_url (parametter "file" generates the variable $file_url )
		 * 
		 * new_text: the text of the new entry button, it can be added on the parent or on the child, the priority is on the child data
		 * For use in the function admin_menu_page_table_display_first_menu_child() and file bft-admin-display-list-table.php (Only on Backend Frontend Template Pro)
		 * It creates the variable $button_add
		 * It will be finally used in $this->html_button_action
		 * If new_text is boolean true it will be used the text: $this->__("New")
		 * 
		 * admin_forms_aux_id, for the pages with automatic data (function: admin_pages_data_title_from_admin_forms_aux()) (Only on Backend Frontend Template Pro)
		 * It shows the automatic name of the form (data column_title_name) before the data like this:
		 * Auto name | Title
		 * For the auto name is used the ids_required and ids_optional (only the first ID found), but only is used the "old key"
		 * "ids_optional" => [
		 * 	"key_initial" => "key_final",
		 * ],
		 * 
		 * children, array with the children pages (Only on Backend Frontend Template Pro)
		 * 
		 * page_copy_of, copy the data of a page
		 * Only copy the data not found on the page
		 * Neither copy id, is_child, page_parent, menu_slug and children
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Your own parameters:
		 * 
		 * You can create your own parameter, later on you can access to the info on a function or on a page with:
		 * $variable_name = $this->admin_pages_data_get("parametter_name");
		 */


		$this->admin_pages_main_name = "BFT";
		//$this->admin_pages_main_name = $this->plugin_title;
		$this->admin_pages_slug_name_prefix = $this->plugin_slug;
		$this->admin_pages_page_title_default = $this->admin_pages_main_name." ".$this->__("page");
		$this->admin_pages_menu_title_default = $this->admin_pages_main_name." ".$this->__("section");
		$this->admin_pages_file_default = "bft-admin-display-blank-page-with-title.php";

		$this->admin_pages_function_default = "admin_permission_check_and_ids_required_and_optional_check_page_display";
		$this->admin_pages_function_load_default = "admin_permission_check_and_ids_required_check_function_load";

		$this->admin_pages_capability_default = "manage_options";
		

		//BFT Pro
		/*$this->admin_pages = [
			"what_is_bft_pro" => [
				"menu_title" => $this->__("What's BFT Pro"),
				"page_title" => $this->__("What is Backend Frontend Template Pro?"),
				"file" => "bft-admin-display-what-is-bft-pro.php",
				"children" => [
					"changelog" => [
						"menu_title" => $this->__("Changelog"),
						"page_title" => $this->__("Backend Frontend Template: Changelog"),
						"file" => "bft-admin-display-changelog-bft.php",
					],
					"credits" => [
						"menu_title" => $this->__("Credits"),
						"page_title" => $this->__("List of third party software used on BFT"),
						"file" => "bft-admin-display-credits.php",
					],
				],
			],	
			"quick_guide" => [
				"menu_title" => $this->__("First steps"),
				"page_title" => $this->__("First steps with BFT Pro"),
				"file" => "bft-admin-display-preparing-the-plugin-pro.php",
			],	
			"menu_pro" => [
				"menu_title" => $this->__("Menu"),
				"page_title" => $this->__("The pro menu system"),
				"file" => "bft-admin-display-menu-system-pro.php",
			],	
			"settings" => [
				"menu_title" => $this->__("Settings"),
				"page_title" => $this->__("Settings"),
				"function_load" => "redirect_to_first_page_child",
				"children" => [
					"settings_explanation" => [
						"menu_title" => $this->__("Settings explanation"),
						"page_title" => $this->__("The settings/data system stored via WP"),
						"file" => "bft-admin-display-settings-system.php",
					],	
					"settings_general" => [
						"menu_title" => $this->__("General settings"),
						"page_title" => $this->__("Changing the WordPress-plugin settings, settings id: general"),
						"file" => "bft-admin-display-settings.php",
						"admin_page_settings_id" => "general",
					],
					"input_types_test" => [
						"menu_title" => $this->__("Input types test"),
						"page_title" => $this->__("Input types test"),
						"file" => "bft-admin-display-settings.php",
						"admin_page_settings_id" => "input_types_test",
					],	
				]
			],
			"database" => [
				"menu_title" => $this->__("Database"),
				"page_title" => $this->__("Database"),
				"function_load" => "redirect_to_first_page_child",
				"children" => [
					"example_database" => [
						"menu_title" => $this->__("Example database"),
						"page_title" => $this->__("BFT installed database for testing purposes"),
						"file" => "bft-admin-display-example_database.php",
					],	
					"install_deinstall_upgrade_database_explanation" => [
						"menu_title" => $this->__("(De)install database explanation"),
						"page_title" => $this->__("Install, deinstall, upgrade database system"),
						"file" => "bft-admin-display-install-deinstall-upgrade-database-system.php",
						"children" => [
							"install_deinstall_menu" => [
								"menu_title" => $this->__("(De)install menu"),
								"page_title" => $this->__("Install - deinstall data"),
								"file" => "your-plugin-admin-display-install-deinstall.php",
								"function_load" => "admin_menu_install_deinstall_submit",
							],
						],
					],	
					"automated_data_manipulation_explanation" => [
						"menu_title" => $this->__("Automated data manipulation"),
						"page_title" => $this->__("Database managed by BFT"),
						"file" => "bft-admin-display-automated-data-manipulation-system.php",
						"children" => [
							"automated_data_manipulation_courses" => [
								"menu_title" => $this->__("Courses"),
								"page_title" => $this->__("List of courses"),
								"function" => "admin_menu_page_table_display_first_menu_child",
								"file" => "bft-admin-display-list-table.php",
								"children" => [
									"automated_data_manipulation_course" => [
										"ids_required" => [
											"course_id" => "id",
										],
										"admin_forms_id" => "courses",
										"tabs_new_or_edit_on_url" => true,
										"menu_title" => $this->__("Course"),
										"page_title" => $this->__("Course form"),
										"function" => "admin_menu_admin_form_page_display",
										"file" => "bft-admin-display-form.php",
										"function_load" => "custom_form_set_do_by_post",
										"new_text" => $this->__("New course"),
									],
								],
							],
							"automated_data_manipulation_students" => [
								"menu_title" => $this->__("Students"),
								"page_title" => $this->__("List of students"),
								"function" => "admin_menu_page_table_display_first_menu_child",
								"file" => "bft-admin-display-list-table.php",
								"children" => [
									"automated_data_manipulation_student" => [
										"ids_required" => [
											"student_id" => "id",
										],
										"admin_forms_id" => "students",
										"tabs_new_or_edit_on_url" => true,
										"menu_title" => $this->__("Student"),
										"page_title" => $this->__("Student form"),
										"function" => "admin_menu_admin_form_page_display",
										"file" => "bft-admin-display-form.php",
										"function_load" => "custom_form_set_do_by_post",
										"new_text" => $this->__("New student"),
									],
								],
							],
							"automated_data_manipulation_teachers" => [
								"menu_title" => $this->__("Teachers"),
								"page_title" => $this->__("List of teachers"),
								"function" => "admin_menu_page_table_display_first_menu_child",
								"file" => "bft-admin-display-list-table.php",
								"children" => [
									"automated_data_manipulation_teacher" => [
										"ids_required" => [
											"teacher_id" => "id",
										],
										"admin_forms_id" => "teachers",
										"tabs_new_or_edit_on_url" => true,
										"menu_title" => $this->__("Teacher"),
										"page_title" => $this->__("Teacher form"),
										"function" => "admin_menu_admin_form_page_display",
										"file" => "bft-admin-display-form.php",
										"function_load" => "custom_form_set_do_by_post",
										"new_text" => $this->__("New teacher"),
									],
									"automated_data_manipulation_teacher_notes" => [
										"ids_required" => [
											"teacher_id" => "teacher_id",
										],
										"ids_aux_required" => [
											"teacher_id" => "id",
										],
										"admin_forms_aux_id" => "teachers",
										"menu_title" => $this->__("Teacher notes"),
										"page_title" => $this->__("List of notes"),
										"function" => "admin_menu_page_table_display_first_menu_child",
										"file" => "bft-admin-display-list-table.php",
										"children" => [
											"automated_data_manipulation_teacher_note" => [
												"ids_required" => [
													"note_id" => "id",
													"teacher_id" => "teacher_id",
												],
												"admin_forms_id" => "teachers_notes",
												"ids_aux_required" => [
													"teacher_id" => "id",
												],
												"admin_forms_aux_id" => "teachers",
												"tabs_new_or_edit_on_url" => true,
												"menu_title" => $this->__("Teacher note"),
												"page_title" => $this->__("Teacher note form"),
												"function" => "admin_menu_admin_form_page_display",
												"file" => "bft-admin-display-form.php",
												"function_load" => "custom_form_set_do_by_post",
												"new_text" => $this->__("New note"),
											],
										],
									],
								],
							],
						],
					],
					"manual_data_manipulation" => [
						"menu_title" => $this->__("Manual data manipulation"),
						"page_title" => $this->__("Manual data manipulation"),
						"function_load" => "redirect_to_first_page_child",
						"children" => [
							"manual_data_manipulation_inside_a_function_explanation" => [
								"menu_title" => $this->__("Inside a function"),
								"page_title" => $this->__("Database managed manually"),
								"file" => "bft-admin-display-manual-data-manipulation-system.php",
								"children" => [
									"manual_data_manipulation_inside_a_function_example" => [
										"menu_title" => $this->__("Database access example"),
										"page_title" => "admin -> class-your-plugin-admin -> manual_data_manipulation_inside_a_function_example()",
										"function" => "manual_data_manipulation_inside_a_function_example",
										"file" => "bft-admin-display-pre-data.php",
									],
								],
							],
							"manual_data_manipulation_listing_by_query_explanation" => [
								"menu_title" => $this->__("Paginated listing by query"),
								"page_title" => $this->__("Your own paginated listings"),
								"file" => "bft-admin-display-manual-data-manipulation-listing-by-query-system.php",
								"children" => [
									"manual_data_manipulation_listing_by_query_example" => [
										"menu_title" => $this->__("Database listing example"),
										"page_title" => "admin -> class-your-plugin-admin -> manual_data_manipulation_listing_by_query_example()",
										"function" => "manual_data_manipulation_listing_by_query_example",
										"file" => "bft-admin-display-list-table.php",
									],
								],
							],
							"manual_data_manipulation_listing_by_array_explanation" => [
								"menu_title" => $this->__("Listings by array"),
								"page_title" => $this->__("Your own listings"),
								"file" => "bft-admin-display-manual-data-manipulation-listing-by-array-system.php",
								"children" => [
									"manual_data_manipulation_listing_by_array_example" => [
										"menu_title" => $this->__("Array listing example"),
										"page_title" => "admin -> class-your-plugin-admin -> manual_data_manipulation_listing_by_array_example()",
										"function" => "manual_data_manipulation_listing_by_array_example",
										"file" => "bft-admin-display-list-table.php",
									],
									"manual_data_manipulation_listing_by_array_example_with_link" => [
										"menu_title" => $this->__("Array listing example with link"),
										"page_title" => "admin -> class-your-plugin-admin -> manual_data_manipulation_listing_by_array_example_with_link()",
										"function" => "manual_data_manipulation_listing_by_array_example_with_link",
										"file" => "bft-admin-display-list-table.php",
									],
								],
							],
							"manual_data_manipulation_form_explanation" => [
								"menu_title" => $this->__("Forms"),
								"page_title" => $this->__("Your own forms"),
								"file" => "bft-admin-display-manual-data-manipulation-form-system.php",
								"children" => [
									"manual_data_manipulation_form_simple_example" => [
										"menu_title" => $this->__("Form simple example"),
										"page_title" => $this->__("Form simple example"),
										"function_load" => "redirect_to_first_page_child",
										"children" => [
											"manual_data_manipulation_form_simple_example_teacher" => [
												//"ids_required" => [
												//	"teacher_id" => "id",
												//],
												"admin_forms_id" => "teachers",
												"columns" => [
													"id",
													"name",
													"surname",
													"id_card",
												],
												"menu_title" => $this->__("Example 1"),
												"page_title" => $this->__("Teacher")." 1 </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_example_for_two_pages_set() </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_example_for_two_pages_get()",
												"function" => "manual_data_manipulation_form_example_for_two_pages_get",
												"file" => "bft-admin-display-form.php",
												"function_load" => "manual_data_manipulation_form_example_for_two_pages_set",
											],
											"manual_data_manipulation_form_simple_example_student" => [
												//"ids_required" => [
												//	"student_id" => "id",
												//],
												"admin_forms_id" => "students",
												"columns" => [
													"id",
													"name",
													"surname",
												],
												"menu_title" => $this->__("Example 2"),
												"page_title" => $this->__("Student")." 1 </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_example_for_two_pages_set() </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_example_for_two_pages_get()",
												"function" => "manual_data_manipulation_form_example_for_two_pages_get",
												"file" => "bft-admin-display-form.php",
												"function_load" => "manual_data_manipulation_form_example_for_two_pages_set",
											],
										]
									],
									"manual_data_manipulation_form_group_example" => [
										//"ids_required" => [
										//	"teacher_id" => "teacher_id",
										//],
										"admin_forms_id" => "teachers_notes",
										"admin_forms_aux_id" => "teachers",
										"menu_title" => $this->__("Form group example"),
										"page_title" => $this->__("Notes of teacher")." 1  </br> ".$this->__("The teacher ID is hidden")." | ".$this->__("The notes ID are hidden")." </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_group_example_set() </br> admin -> class-your-plugin-admin -> manual_data_manipulation_form_group_example_get()",
										"function" => "manual_data_manipulation_form_group_example_get",
										"file" => "bft-admin-display-form.php",
										"function_load" => "manual_data_manipulation_form_group_example_set",
									],
								],
							],
						],
					],
				]
			],
			"internationalization" => [
				"menu_title" => $this->__("Internationalization"),
				"page_title" => $this->__("Internationalization: prepare the plugin for future translations"),
				"file" => "bft-admin-display-internationalization-system.php",
			],
			"miscellany" => [
				"menu_title" => $this->__("Miscellany"),
				"page_title" => $this->__("Other functions, test and BFT possibilities"),
				"file" => "bft-admin-display-blank-page.php",
				"children" => [
					"log" => [
						"menu_title" => $this->__("Log"),
						"page_title" => $this->__("The WordPress log with BFT"),
						"file" => "bft-admin-display-checking-the-log.php",
					],	
					"functions_visibility" => [
						"menu_title" => $this->__("Functions visibility"),
						"page_title" => $this->__("What functions visibility is needed"),
						"file" => "bft-admin-display-functions-visibility.php",
					],	
					"security_pro" => [
						"menu_title" => $this->__("Security"),
						"page_title" => $this->__("Secure the functions"),
						"file" => "bft-admin-display-security-system-pro.php",
					],	
					"errors_manage_pro" => [
						"menu_title" => $this->__("Errors"),
						"page_title" => $this->__("Manage and display errors"),
						"file" => "bft-admin-display-errors-manage-show-pro.php",
						"children" => [
							"throw_error_and_return_to_parent" => [
								"menu_title" => $this->__("Throw error and return to parent"),
								"page_title" => $this->__("Throw error and return to parent"),
								"ids_required" => [
									"nonexistent_id" => "nonexistent_id",
								],
								"error_throw_what_do" => "go_to_parent",
							],
						]
					],	
					"download_explanation" => [
						"menu_title" => $this->__("Download"),
						"page_title" => $this->__("Download files"),
						"file" => "bft-admin-display-download-private-files-system.php",
						"children" => [
							"download_file_private" => [
								"menu_title" => $this->__("Download private file"),
								"page_title" => $this->__("Download private file"),
								"menu_slug" => "download",
								"function_load" => "download_file_private",
								"file" => "bft-admin-display-blank-page.php",
								"ids_required" => [
									"file" => "file",
								],
								"error_throw_what_do" => "go_to_parent",
							],
						]
					],	
					"iframe_explanation" => [
						"menu_title" => $this->__("Iframe"),
						"page_title" => $this->__("Iframe on a page"),
						"file" => "bft-admin-display-iframes-system.php",
						"children" => [
							"iframe_admin_page_slug_test" => [
								"menu_title" => $this->__("Iframe by slug"),
								"page_title" => $this->__("Iframe by slug").': "iframe_admin_page_slug" => "iframe_test"',
								"file" => "bft-admin-display-iframe.php",
								"iframe_admin_page_slug" => "iframe_test",
							],
							"iframe_test" => [
								"tab_show" => false,
								"file" => "bft-admin-display-iframe-test.php",
								"function_load" => "function_load_page_display",
							],
							"iframe_url_test" => [
								"menu_title" => $this->__("URL iframe"),
								"page_title" => $this->__("URL iframe").": ".admin_url(),
								"file" => "bft-admin-display-iframe.php",
								"iframe_url" => admin_url()."admin.php?page=".$this->plugin_slug."_iframe_test",
							],
							"iframe_admin_page_slug_test_pdf" => [
								"menu_title" => $this->__("PDF example"),
								"page_title" => $this->__("Iframe by slug - PDF example").': "private_file_dir" => "hello_world.pdf" | "function_load" => "show_pdf_private"',
								"file" => "bft-admin-display-iframe.php",
								"iframe_admin_page_slug" => "iframe_test_pdf",
								"private_file_dir" => "hello_world.pdf",
							],
							"iframe_test_pdf" => [
								"tab_show" => false,
								"function_load" => "show_pdf_private",
							],
						],
					],
					"languages" => [
						"menu_title" => $this->__("Languages"),
						"page_title" => $this->__("Language functions"),
						"file" => "bft-admin-display-languages-functions.php",
					],
					"countries" => [
						"menu_title" => $this->__("Countries"),
						"page_title" => $this->__("County function"),
						"file" => "bft-admin-display-countries-functions.php",
					],
					"currencies" => [
						"menu_title" => $this->__("Currencies"),
						"page_title" => $this->__("Currency functions"),
						"file" => "bft-admin-display-currencies-functions.php",
					],
				]
			],
			"frontend" => [
				"menu_title" => $this->__("Frontend"),
				"page_title" => $this->__("Frontend explanation"),
				"function_load" => "redirect_to_first_page_child",
				"children" => [
					"shortcodes" => [
						"menu_title" => $this->__("Shortcodes"),
						"page_title" => $this->__("Shorcode system"),
						"file" => "bft-admin-display-shortcodes-system.php",
					],	
					"ajax" => [
						"menu_title" => $this->__("AJAX"),
						"page_title" => $this->__("AJAX system"),
						"file" => "bft-admin-display-ajax-system.php",
					],	
					"ajax_form" => [
						"menu_title" => $this->__("AJAX form"),
						"page_title" => $this->__("AJAX form system"),
						"file" => "bft-admin-display-ajax-form-system.php",
					],	
				],
			],
			"hello_world" => [
				"menu_title" => $this->__("Your page"),
				"page_title" => $this->__("Try to modify admin/partials/your-plugin-admin-display-hello-world.php"),
				"file" => "your-plugin-admin-display-hello-world.php",
			],
		];*/



		//BFT Mini
		$this->admin_pages = [
			"what_is_bft" => [
				"menu_title" => $this->__("What's BFT"),
				"page_title" => $this->__("What is Backend Frontend Template?"),
				"file" => "bft-admin-display-what-is-bft.php",
			],	
			"quick_guide" => [
				"menu_title" => $this->__("First steps"),
				"page_title" => $this->__("First steps with BFT"),
				"file" => "bft-admin-display-preparing-the-plugin.php",
			],	
			"menu" => [
				"menu_title" => $this->__("Menu"),
				"page_title" => $this->__("The menu system"),
				"file" => "bft-admin-display-menu-system.php",
			],	
			"log" => [
				"menu_title" => $this->__("Log"),
				"page_title" => $this->__("The WordPress log with BFT"),
				"file" => "bft-admin-display-checking-the-log.php",
			],	
			"functions_visibility" => [
				"menu_title" => $this->__("Functions visibility"),
				"page_title" => $this->__("What functions visibility is needed"),
				"file" => "bft-admin-display-functions-visibility.php",
			],	
			"security" => [
				"menu_title" => $this->__("Security"),
				"page_title" => $this->__("Secure the functions"),
				"file" => "bft-admin-display-security-system.php",
			],	
			"errors_manage" => [
				"menu_title" => $this->__("Errors"),
				"page_title" => $this->__("Manage and display errors"),
				"file" => "bft-admin-display-errors-manage-show.php",
			],	
			"internationalization" => [
				"menu_title" => $this->__("Internationalization"),
				"page_title" => $this->__("Internationalization: prepare the plugin for future translations"),
				"file" => "bft-admin-display-internationalization-system.php",
			],
			"shortcodes" => [
				"menu_title" => $this->__("Frontend"),
				"page_title" => $this->__("Frontend: shorcode system"),
				"file" => "bft-admin-display-shortcodes-system.php",
			],	
			"languages" => [
				"menu_title" => $this->__("Languages"),
				"page_title" => $this->__("Language functions"),
				"file" => "bft-admin-display-languages-functions.php",
			],
			"countries" => [
				"menu_title" => $this->__("Countries"),
				"page_title" => $this->__("County function"),
				"file" => "bft-admin-display-countries-functions.php",
			],
			"currencies" => [
				"menu_title" => $this->__("Currencies"),
				"page_title" => $this->__("Currency functions"),
				"file" => "bft-admin-display-currencies-functions.php",
			],
			"hello_world" => [
				"menu_title" => $this->__("Your page"),
				"page_title" => $this->__("Try to modify admin/partials/your-plugin-admin-display-hello-world.php"),
				"file" => "your-plugin-admin-display-hello-world.php",
			],
			"want_more" => [
				"menu_title" => $this->__("Want more?"),
				"page_title" => $this->__("Want to save even more time?"),
				"file" => "bft-admin-display-do-more-with-bft-pro.php",
			],
			"changelog" => [
				"menu_title" => $this->__("Changelog"),
				"page_title" => $this->__("Backend Frontend Template: Changelog"),
				"file" => "bft-admin-display-changelog-bft.php",
			],
			"credits" => [
				"menu_title" => $this->__("Credits"),
				"page_title" => $this->__("List of third party software used on BFT"),
				"file" => "bft-admin-display-credits.php",
			],
		];


		
		/**
		 * The language data
		 */
		$languages_codes = $this->languages_codes_names_get();
		$languages_codes_selected = $this->languages_selected_get();

		/**
		 * The countries data
		 */
		$countries_codes = $this->countries_codes_names_get();



		/**
		 * List of settings controlled by WordPress (Only on Backend Frontend Template Pro)
		 * 
		 * The array $this->admin_settings
		 * 
		 *	"key_settings" => [
		 *		[data of the settings]
		 *		"fields" => [
		 *			key_field => [
		 *				[data of the field]
		 *			],
		 *		],
		 *	],
		 * 
		 * 
		 * 
		 * There are automatic parameters: parameters that BFT will create, needed and optional parameters, and parameters optionals that BFT will create with default data if missing 
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * Settings part:
		 * 
		 * 
		 * Automatic parameters:
		 * 
		 * id: array key
		 * id_wordpress: $this->admin_pages_settings_prefix."_".array key
		 * page: id_wordpress.$this->admin_pages_settings_page_suffix
		 * 
		 * 
		 * 
		 * Parametters with default data if missing:
		 * 
		 * function,  default: settings_section_form_header
		 * fields,  default: empty array
		 * title, default: $this->admin_pages_settings_page_title_default
		 * 
		 * 
 		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Field array part: 
		 * 
		 * 
		 * Automatic parameters added on the field array part:
		 * 
		 * id: the array key
		 * id_wordpress: $this->plugin_slug."_".the array key
		 * 
		 * 
		 * Parametters with default data if missing:
		 * 
		 * title, default: array key
		 * function, default: settings_section_form_field()
		 * args, default: 
		 * 	"args" => [
		 * 		"type" => "text"
		 * 	],
		 * 
		 * 
		 * type defines the type input, see the explanation of custom_form_html_input  (Only on Backend Frontend Template Pro)
		 * args admits whatever data for the HTML forms that admits custom_form_html_input(), like: options (array of the options), rows and cols for a textarea, etc.
		 * 
 		 * ------------------------------------------------------------------------------
		 
		 * How the fields are stored:
		 * 
		 * On the array a "field" id is a simple sentence, ej: "languages"
		 * But on WordPress is necessary to use "plugin name"."_"."languages (id_wordpress) to avoid repetitions with others plugins 
		 * That's why for read and update the stored data we use $this->plugin_slug."_".key of the field (id_wordpress)
		 * 
		 * It's possible to use
		 * get_option(id_wordpress of the field);
		 * delete_option(id_wordpress of the field);
		 * update_option(id_wordpress of the field);
		 * 
		 * But it's more simple if you use the functions:
		 * $this->option_field_get(key of the field);
		 * $this->delete_option_field(key of the field);
		 * $this->update_option_field(key of the field, $data);
		 */

		$this->admin_pages_settings_prefix = $this->plugin_slug."_settings";
		$this->admin_pages_settings_page_suffix = "page";
		$this->admin_pages_settings_page_title_default = "Settings";
		

		//BFT Pro
		/*$this->admin_settings = [
			"general" => [
				"title" =>  $this->__("General settings"),
				"fields" => [
					"languages" => [
						"title" => $this->__("Available languages"),
						"args" => [
							"type" => "select",
							"multiple" => true,
							"search" => true,
							"options" => $languages_codes,
						],
					],
					"language_admin" => [
						"title" => $this->__("Main language"),
						"args" => [
							"type" => "select",
							"options" => $languages_codes_selected,
						],
					],
					"country_default" => [
						"title" => $this->__("Default country"),
						"args" => [
							"type" => "select",
							"search" => true,
							"options" => $countries_codes,
						],
					],
					"admin_email" => [
						"title" => $this->__("Admin email where to send the notifications"),
					],
					"date_format" => [
						"title" => $this->__("How show the dates on the client side"),
						"args" => [
							"type" => "select",
							"options" => [
								"YYYY-MM-DD" => $this->__("YYYY-MM-DD"),
								"YYYY/MM/DD" => $this->__("YYYY/MM/DD"),
								"DD-MM-YYYY" => $this->__("DD-MM-YYYY"),
								"DD/MM/YYYY" => $this->__("DD/MM/YYYY"),
								"MM-DD-YYYY" => $this->__("MM-DD-YYYY"),
								"MM/DD/YYYY" => $this->__("MM/DD/YYYY"),
							],
						],
					],
					"currency_id" => [
						"title" => $this->__("Currency"),
						"args" => [
							"type" => "select",
							"search" => true,
							"options" => $this->currencies_selector_get(),
						],
					],
					"currency_order" => [
						"title" => $this->__("Show the currency before o after price"),
						"args" => [
							"type" => "select",
							"options" => [
								"before" => $this->__("Before")." (€1, $1, ¥1, etc.)",
								"after" => $this->__("After")." (1€, 5$, 5¥, etc.)",
							],
						],
					],
					"currency_decimals_type" => [
						"title" => $this->__("Dot or comma for decimals on the client side"),
						"args" => [
							"type" => "select",
							"options" => [
								"." => "'.' ".$this->__("dot")." (12.34)",
								"," => "',' ".$this->__("comma")." (12,34)",
							],
						],
					],
					"currency_decimals_on_interer" => [
						"title" => $this->__("Display decimals in an integer on the client side"),
						"args" => [
							"type" => "select",
							"options" => [
								"integer_with_decimals" => $this->__("Show the number as a decimal")." (12.00 - 12,00)",
								"integer_without_decimals" => $this->__("Show the number as an integer")." (12)",
							],
						],
					],
					"items_per_page" => [
						"title" => $this->__("Items per page of the lists"),
						"args" => [
							"type" => "number",
							"min" => 1,
							"max" => 99999,
						],
					],
				],
			],
			"input_types_test" => [
				"title" =>  $this->__("Test settings"),
				"fields" => [
					"text_test" => [
						"title" => $this->__("Text input"),
					],
					"textarea_test" => [
						"title" => $this->__("Textarea input"),
						"args" => [
							"type" => "textarea",
							"rows" => 10,
							"cols" => 50,
						],
					],
					"number_test" => [
						"title" => $this->__("Number input"),
						"args" => [
							"type" => "number",
							"min" => 1,
							"max" => 99999,
							"step" => 1,
						],
					],
					"select_test" => [
						"title" => $this->__("Select input"),
						"args" => [
							"type" => "select",
							"search" => true,
							"options" => [
								"zh" => $this->__("Chinesse"),
								"en" => $this->__("English"),
								"es" => $this->__("Spanish"),
							],
						],
					],
					"select_multiple_test" => [
						"title" => $this->__("Select multiple input"),
						"args" => [
							"type" => "select",
							"multiple" => true,
							"search" => true,
							"options" => [
								"zh" => $this->__("Chinesse"),
								"en" => $this->__("English"),
								"es" => $this->__("Spanish"),
							],
						],
					],
					"date_test" => [
						"title" => $this->__("Date input"),
						"args" => [
							"type" => "date",
						],
					],
					"checkbox_test" => [
						"title" => $this->__("Checkbox input"),
						"args" => [
							"type" => "checkbox",
							"multiple" => false,
						],
					],
					"checkbox_multiple_test" => [
						"title" => $this->__("Checkbox multiple input"),
						"args" => [
							"type" => "checkbox",
							"multiple" => true,
							"options" => [
								"zh" => $this->__("Chinesse"),
								"en" => $this->__("English"),
								"es" => $this->__("Spanish"),
							],
						],
					],
					"radio_test" => [
						"title" => $this->__("Radio input"),
						"args" => [
							"type" => "radio",
							"multiple" => true,
							"options" => [
								"zh" => $this->__("Chinesse"),
								"en" => $this->__("English"),
								"es" => $this->__("Spanish"),
							],
						],
					],
					"image_test" => [
						"title" => $this->__("Image input"),
						"args" => [
							"type" => "image",
						],
					],
					"file_test" => [
						"title" => $this->__("File input"),
						"args" => [
							"type" => "file",
						],
					],
					"empty_test" => [
						"title" => $this->__("Input commented"),
						"args" => [
							"type" => "empty",
						],
					],
				],
			],
		];*/


		//BFT Mini
		$this->admin_settings = [];


		/**
		 * List of custom forms and their fields for automated data manipulation (Only on Backend Frontend Template Pro)
		 * 
		 * A custom form is a database table and the internationalization (i18n) of the table (if internationalization is needed)
		 * 
		 * Example of a table and his internationalization table
		 * (Only on Backend Frontend Template Pro)
		 * 
		 * 
		 * 
		 * The array $this->admin_forms
		 * 
		 * 
		 * 
		 * Parts of the arary:
		 *	"key_form" => [
		 *		"table" => ""
		 *		"column_key" => ""
		 *		"column_title_name" => ""
		 *		"i18n_foreign_key" => ""
		 *		"columns" => [
		 *			key_field => [
		 *				[data of the field]
		 *			],
		 *		],
		 *	],
		 * 
		 * key_form: internal form id
		 * 		table: table name
		 * 		column_key: key name ("id" usually)
		 * 		column_title_name: field where it's stored the row name (the name of a user, the name of a book, etc.)
		 * 		i18n_foreign_key: foreign key on the internationalization table 
		 * 		columns: list of fields
		 * 			key_field: the field name on the database
		 * 				array data of the field
		 * 
		 * 
		 * 
		 * Optional field parameters:
		 * 
		 * label: text to show on the admin. Default: ""
		 * placeholder: placeholder if the data type can have placeholder
		 * display_table: display the field on the list table. Note: display_table doesn't work for now with many_to_many_relationship fields (Only on Backend Frontend Template Pro)
		 * i18n: if the data of the field is stored in a internationalization table
		 * only_in_active: display the field only if the data is active
		 * only_in_removed: display the field only if the data is on the bin
		 * readonly: readonly field, for the column key for example
		 * value_from_get: catch the data from the GET data on the URL if there aren't data stored of this field. For a dependant data, example: teachers' notes, a new note needs to know the teacher id of the note
		 * value_empty_is_null: an empty data will be transformed to NULL (the NULL data always is printed like value="")
		 * foreign_key: it stores a foreign key 
		 * foreign_key_null_text: text to show when NULL is stored in a foreign key with optional NULL 
		 * type: data type, see the explanation for custom_form_html_input for the types available , plus there are the type "many_to_many_relationship", it's a select. Default "text"
		 * Whatever data for the HTML forms that admits custom_form_html_input(), like: options (array of the options), search, rows and cols for a textarea, etc.
		 * 
		 * 
		 * 
		 * The automated data manipulation need to now the status of the data, the datetime created, datetime modified and the datetime removed
		 * 
		 * Example:
		 * 
		 * "courses" => [
		 * 		"table" => $wpdb->prefix.$this->plugin_slug."_"."courses",
		 * 		"column_key" => "id",
		 * 		"column_title_name" => "name_i18n",
		 * 		"i18n_foreign_key" => "course_id",
		 * 		"columns" => [
		 * 			$this->database_status_column_name => [
		 * 				"label" => $this->database_status_column_text,
		 * 				"type" => "select",
		 * 				"options" => $this->database_status_options,
		 * 			],
		 * 			"id" => [
		 * 				"label" => $this->__("Nº"),
		 * 				"placeholder" => "",
		 * 				"type" => "text",
		 * 				"display_table" => true,
		 * 				"readonly" => true,
		 * 			],
		 * 			$this->database_datetime_created_name => [
		 * 				"label" => $this->database_datetime_created_text,
		 * 				"placeholder" => "",
		 * 				"type" => "datetime",
		 * 				"display_table" => false,
		 * 				"readonly" => true,
		 * 			],
		 * 			$this->database_datetime_modified_name => [
		 * 				"label" => $this->database_datetime_modified_text,
		 * 				"placeholder" => "",
		 * 				"type" => "datetime",
		 * 				"display_table" => false,
		 * 				"readonly" => true,
		 * 				"only_in_active" => true,
		 * 			],
		 * 			$this->database_datetime_removed_name => [
		 * 				"label" => $this->database_datetime_removed_text,
		 * 				"placeholder" => "",
		 * 				"type" => "datetime",
		 * 				"display_table" => true,
		 * 				"readonly" => true,
		 * 				"only_in_removed" => true,
		 * 			],
		 * 
		 * 
		 * 
		 * 
		 * Warning: "name" can't be used for a column a i18n table
		 * WordPress clean the data automatically of all "name" appearances
		 * And WordPress doesn't expect an array of data (it's an array because its the text in each language)
		 */


		//BFT Pro
		/*$this->admin_forms = [
			"courses" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."courses",
				"column_key" => "id",
				"column_title_name" => "name_i18n",
				"i18n_foreign_key" => "course_id",
				"columns" => [
					$this->database_status_column_name => [
						"label" => $this->database_status_column_text,
						"type" => "select",
						"options" => $this->database_status_options,
					],
					"id" => [
						"label" => $this->__("Nº"),
						"placeholder" => "",
						"type" => "text",
						"display_table" => true,
						"readonly" => true,
					],
					$this->database_datetime_created_name => [
						"label" => $this->database_datetime_created_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
					],
					$this->database_datetime_modified_name => [
						"label" => $this->database_datetime_modified_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
						"only_in_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_in_removed" => true,
					],
					"hours" => [
						"label" => $this->__("Total hours of the course"),
						"placeholder" => $this->__("Hours"),
						"type" => "number",
						"display_table" => true,
					],
					"name_i18n" => [
						"label" => $this->__("Course name"),
						"placeholder" => $this->__("Name"),
						"type" => "text",
						"i18n" => true,
						"display_table" => true,
					],
					"image" => [
						"label" => $this->__("Course logo"),
						"placeholder" => $this->__("Image"),
						"type" => "image",
						"i18n" => true,
						"display_table" => true,
					],
					"order" => [
						"label" => $this->__("Order"),
						"placeholder" => $this->__("Order, lowest number first"),
						"type" => "number",
						"i18n" => false,
						"display_table" => true,
					],
					"teacher_id" => [
						"label" => $this->__("Teacher"),
						"placeholder" => "",
						"type" => "select",
						"foreign_key" => "teachers",
						"display_table" => true,
						"value_empty_is_null" => true,
						"foreign_key_null_text" => $this->__("Teacher not selected"),
					],
					"students_courses" => [
						"label" => $this->__("Enrolled students"),
						"placeholder" => $this->__("Students"),
						"type" => "many_to_many_relationship",
						//Display table doesn't work for now with many_to_many_relationship
						"display_table" => false,
						"search" => true,
					],
				],
			],
			"students" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."students",
				"column_key" => "id",
				"column_title_name" => "name",
				"i18n_foreign_key" => "",
				"columns" => [
					$this->database_status_column_name => [
						"label" => $this->database_status_column_text,
						"type" => "select",
						"options" => $this->database_status_options,
					],
					"id" => [
						"label" => $this->__("Nº"),
						"placeholder" => "",
						"type" => "text",
						"display_table" => true,
						"readonly" => true,
					],
					$this->database_datetime_created_name => [
						"label" => $this->database_datetime_created_text,
						"placeholder" => "",
						"type" => "hidden",
						"display_table" => false,
						"readonly" => true,
					],
					$this->database_datetime_modified_name => [
						"label" => $this->database_datetime_modified_text,
						"placeholder" => "",
						"type" => "hidden",
						"display_table" => false,
						"readonly" => true,
						"only_in_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "hidden",
						"display_table" => true,
						"readonly" => true,
						"only_in_removed" => true,
					],
					"name" => [
						"label" => $this->__("Name"),
						"placeholder" => $this->__("Name"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"surname" => [
						"label" => $this->__("Surname"),
						"placeholder" => $this->__("Surname"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"id_card" => [
						"label" => $this->__("ID card"),
						"placeholder" => $this->__("ID card"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"image" => [
						"label" => $this->__("Student photo"),
						"placeholder" => $this->__("Image"),
						"type" => "image",
						"i18n" => false,
						"display_table" => true,
					],
					"country_code" => [
						"label" => $this->__("Country"),
						"placeholder" => $this->__("Country"),
						"type" => "select",
						"display_table" => false,
						"readonly" => false,
						"options" => $countries_codes,
					],
					"email" => [
						"label" => $this->__("Email"),
						"placeholder" => $this->__("Email"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"telephone" => [
						"label" => $this->__("Telephone"),
						"placeholder" => $this->__("Telephone"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"postcode" => [
						"label" => $this->__("Postcode"),
						"placeholder" => $this->__("Postcode"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"city" => [
						"label" => $this->__("City"),
						"placeholder" => $this->__("City"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"province" => [
						"label" => $this->__("Province"),
						"placeholder" => $this->__("Province"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"address" => [
						"label" => $this->__("Address"),
						"placeholder" => $this->__("Address"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"students_courses" => [
						"label" => $this->__("Enrolled courses"),
						"placeholder" => $this->__("Courses"),
						"type" => "many_to_many_relationship",
						//Display table doesn't work for now with many_to_many_relationship
						"display_table" => false,
						"search" => true,
					],
				],
			],
			"teachers" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."teachers",
				"column_key" => "id",
				"column_title_name" => "name",
				"i18n_foreign_key" => "",
				"columns" => [
					$this->database_status_column_name => [
						"label" => $this->database_status_column_text,
						"type" => "select",
						"options" => $this->database_status_options,
					],
					"id" => [
						"label" => $this->__("Nº"),
						"placeholder" => "",
						"type" => "text",
						"display_table" => true,
						"readonly" => true,
					],
					$this->database_datetime_created_name => [
						"label" => $this->database_datetime_created_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
					],
					$this->database_datetime_modified_name => [
						"label" => $this->database_datetime_modified_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
						"only_in_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_in_removed" => true,
					],
					"name" => [
						"label" => $this->__("Name"),
						"placeholder" => $this->__("Name"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"surname" => [
						"label" => $this->__("Surname"),
						"placeholder" => $this->__("Surname"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"id_card" => [
						"label" => $this->__("ID card"),
						"placeholder" => $this->__("ID card"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"image" => [
						"label" => $this->__("Teacher photo"),
						"placeholder" => $this->__("Image"),
						"type" => "image",
						"i18n" => false,
						"display_table" => true,
					],
					"type" => [
						"label" => $this->__("Type of teacher"),
						"placeholder" => $this->__("Permanent or substitute teacher?"),
						"type" => "select",
						"display_table" => true,
						"options" => [
							"permanent" => $this->__("Permanent teacher"),
							"substitute" => $this->__("Substitute teacher"),
						],
					],
					"country_code" => [
						"label" => $this->__("Country"),
						"placeholder" => $this->__("Country"),
						"type" => "select",
						"display_table" => false,
						"readonly" => false,
						"options" => $countries_codes,
					],
					"email" => [
						"label" => $this->__("Email"),
						"placeholder" => $this->__("Email"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"telephone" => [
						"label" => $this->__("Telephone"),
						"placeholder" => $this->__("Telephone"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"postcode" => [
						"label" => $this->__("Postcode"),
						"placeholder" => $this->__("Postcode"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"city" => [
						"label" => $this->__("City"),
						"placeholder" => $this->__("City"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"province" => [
						"label" => $this->__("Province"),
						"placeholder" => $this->__("Province"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
					"address" => [
						"label" => $this->__("Address"),
						"placeholder" => $this->__("Address"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
						"readonly" => false,
					],
				],
			],
			"teachers_notes" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."teachers_notes",
				"column_key" => "id",
				"column_title_name" => "title",
				"i18n_foreign_key" => "",
				"columns" => [
					$this->database_status_column_name => [
						"label" => $this->database_status_column_text,
						"type" => "select",
						"options" => $this->database_status_options,
					],
					"id" => [
						"label" => $this->__("Nº"),
						"placeholder" => "",
						"type" => "text",
						"display_table" => true,
						"readonly" => true,
					],
					"teacher_id" => [
						"label" => $this->__("Teacher"),
						"placeholder" => "",
						"type" => "select",
						"value_from_get" => true,
						"foreign_key" => "teachers",
						"display_table" => false,
						"readonly" => true,
					],
					$this->database_datetime_created_name => [
						"label" => $this->database_datetime_created_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
					],
					$this->database_datetime_modified_name => [
						"label" => $this->database_datetime_modified_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => false,
						"readonly" => true,
						"only_in_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_in_removed" => true,
					],
					"title" => [
						"label" => $this->__("Title"),
						"placeholder" => $this->__("Title"),
						"type" => "text",
						"i18n" => false,
						"display_table" => true,
					],
					"note" => [
						"label" => $this->__("Note"),
						"placeholder" => $this->__("Note"),
						"type" => "textarea",
						"i18n" => false,
						"display_table" => true,
						"rows" => 10,
						"cols" => 50,
					],
				],
			],
		];*/

		//BFT Mini
		$this->admin_forms = [];


		/**
		 * List of many to many relations between to forms/tables of $this->admin_forms
		 * 
		 * Parts of the array:
		 * 
		 * key: internal id of the relationship
		 * 		table: name of join table
		 * 		forms: admin forms
		 * 			form 1 key of $this->admin_forms => foreign key 1 on the table
		 * 			form 2 key of $this->admin_forms => foreign key 2 on the table
		 */
		/*$this->admin_forms_many_to_many_relationships = [
			"students_courses" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."students_courses",
				"forms" => [
					"courses" => "course_id",
					"students" => "student_id",
				],
			],
		];*/

		//BFT Mini
		$this->admin_forms_many_to_many_relationships = [];
	}


	/**
	 * Prepare the variables for an empty database
	 * Almost all display pages are deleted
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		NULL
	 */
	protected function database_check() {
		if(false !== $this->database_version)
		{
			//Database installed, check if an update is needed
			$database_de_install = new Your_Plugin_Install_Upgrade_Deinstall_Database();
			$database_de_install->database_install_and_or_upgrade($database_de_install);
		}
		else {
			//Database not installed
		}
	}
	

	/**
	 * Register the Your Plugin stylesheets for the admin area.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function enqueue_styles_plugin() {
		//Own
		wp_enqueue_style($this->plugin_id, plugin_dir_url( __FILE__ ). "css/your-plugin-admin.css", array(), $this->plugin_version);
		
		//Other
		//wp_enqueue_style( "stylesheet-name", "https://stylesheet-url");
	}


		/**
	 * HTML styles of You Plugin for the admin area through function_load_page_display
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		null
	 */
	public function html_styles_plugin() {
		?>
		<link rel="stylesheet" href="<?=plugin_dir_url( __FILE__ ). "css/your-plugin-admin.css"?>?ver=<?=$this->plugin_version?>" media="all" />
		<?php
	}

	
	/**
	 * Register the Your Plugin JavaScript for the admin area.
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 */
	public function enqueue_scripts_plugin() {
		//Own
		wp_enqueue_script($this->plugin_id, plugin_dir_url( __FILE__ )."js/your-plugin-admin.js", array( "jquery" ), $this->plugin_version, false );
	
		//Other
		//wp_enqueue_style( "script-name", "script-url", array("jquery"));
	}


	/**
	 * JavaScript styles of You Plugin for the admin area through function_load_page_display
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @return		null
	 */
	public function html_scripts_plugin() {
		?>
		<script src="<?=plugin_dir_url( __FILE__ )."js/your-plugin-admin.js"?>?ver=<?=$this->plugin_version?>"></script>
		<?php
	}

	/**
	 * Header of the section form, default function from $this->admin_settings
	 *
	 * @since		0.0.1
	 * @version		0.0.1
	 * @param		array		$arg
	 * @return	NULL
	 */
	public function settings_section_form_header($arg = array()) {
	}

}
