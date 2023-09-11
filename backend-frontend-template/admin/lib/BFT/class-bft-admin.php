<?php

/**
 * The admin-specific functionality of Backend Frontend Template
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
 */
class Your_Plugin_BFT_Admin extends Your_Plugin_Admin_Public {
	

	
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
	 * BFT admin variables
	 */
	
	/**
	 * Main title of the admin menu
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_title = "";

	/**
	 * Database: array with the options database_status_option_active and database_status_option_bin
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected  $database_status_options = array();

	/**
	 * Database: column with the code of the language 
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_i18n_column_language = "language";

	/**
	 * Database: column with the translated text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $submit_text_default = "";
		
	/**
	 * Number of items per list table
	 * 
	 * @since		1.0.0
	 * @var			int
	 */
	protected  $items_per_page = 10;
	
	/**
	 * Security code: delete the database
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $security_code_database_uninstall = "DELETE_DATABASE";

	/**
	 * Name of the plugin on the admin menu
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_main_name = "";

	/**
	 * Title default of a admin page
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_page_title_default = "";

	/**
	 * Menú text default of a admin page
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_menu_title_default = "";

	/**
	 * Slug prefix for the admin pages
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_slug_name_prefix = "";

	/**
	 * Capability default for the admin pages
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_capability_default = "";

	/**
	 * Function default for the admin pages
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_function_default = "";

	/**
	 * Function load default for the admin pages
	 * 
	 * @since		1.0.0
	 * @var 		string
	 */
	protected  $admin_pages_function_load_default = "";

	/**
	 * File default for the admin pages
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_pages_file_default = "";

	/**
	 * Function default for the admin pages
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $settings_section_function_default = "settings_section_form_header";

	/**
	 * Page displaying at this moment
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $page_name = false;

	/**
	 * Array of admin pages of the menu
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected  $admin_pages = array();

	/**
	 * Array of page's settings controlled by WordPress by 
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected  $admin_settings = array();

	/**
	 * Array of the page's custom forms
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected  $admin_forms = array();
	
	/**
	 * Array of the many to manu relations
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected  $admin_forms_relations_many_to_many = array();

	/**
	 * Messages already shown
	 * 
	 * @since		1.0.0
	 * @var			array
	 */
	protected $errors_messages_shown = array();

	/**
	 * Date format on the admin side
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected $date_format_admin = "YYYY-MM-DD";




	/**
	 * 
	 * Functions explanations:
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


	 * select: input select, args mut have "options", it stores string wiht checked options, ej: "en,es" , optional args: search (default false), multiple (default false)
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
	 * date: input text with a calendar, the date will be the MySQL style "2023-01-01"
	 * 	$input_data = [
	 * 		"type" => "date",
	 *	];
	 * 	
	 * 
	 * checkbox, single and multiple, on multiple is needed "options" on args
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
		$this->bft_variables_set();
		$this->custom_variables_set();
		$this->admin_pages_prepare();
		$this->admin_settings_prepare();
		$this->admin_forms_prepare();
		$this->page_name_set();
		$this->database_check();

		/*
		if (is_callable(array($this, "construct_plugin"))) {
			$this->construct_plugin();
		}
		*/
	}

	/**
	 * Set the bft variables
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	protected function bft_variables_set () {

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
						"page_title" => $this->__("The settings system"),
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
						"file" => "bft-admin-display-errors-manage-show.php",
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
				"page_title" => $this->__("Try to modify")." admin/partials/your-plugin-admin-display-hello-world.php",
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
				"page_title" => $this->__("Try to modify")." admin/partials/your-plugin-admin-display-hello-world.php",
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




		global $wpdb;


		/**
		 * The lenguage data
		 */
		$languages_codes = $this->languages_codes_names_get();
		$languages_codes_selected = $this->languages_selected_get();


		/**
		 * The countries data
		 */
		$countries_codes = $this->countries_codes_names_get();

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
								"," => "',' ".$this->__("point")." (12,34)",
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
						"only_on_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_on_removed" => true,
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
						"type" => "relation_many_to_many",
						//Display table doesn't work for now with relation_many_to_many
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
						"only_on_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "hidden",
						"display_table" => true,
						"readonly" => true,
						"only_on_removed" => true,
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
						"type" => "relation_many_to_many",
						//Display table doesn't work for now with relation_many_to_many
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
						"only_on_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_on_removed" => true,
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
						"only_on_active" => true,
					],
					$this->database_datetime_removed_name => [
						"label" => $this->database_datetime_removed_text,
						"placeholder" => "",
						"type" => "datetime",
						"display_table" => true,
						"readonly" => true,
						"only_on_removed" => true,
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

		//BFT Pro
		/*$this->admin_forms_relations_many_to_many = [
			"students_courses" => [
				"table" => $wpdb->prefix.$this->plugin_slug."_"."students_courses",
				"forms" => [
					"courses" => "course_id",
					"students" => "student_id",
				],
			],
		];*/

		//BFT Mini
		$this->admin_forms_relations_many_to_many = [];
	}

	/**
	 * Set the class variables
	 * 
	 * Most important variables:
	 * $this->admin_pages								The administration pages
	 * $this->admin_settings							The forms for save WordPress options
	 * $this->admin_forms								The custom automated forms for save data on custom database tables
	 * $this->admin_forms_relations_many_to_many		Relations many to many for automated forms
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	protected function custom_variables_set () {
		global $wpdb;
		$data = $this->option_field_get('database_version_installed');
		if (false !== $data) {
			$this->database_version = $data;
		}

		$data = $this->option_field_get('items_per_page');
		if (false !== $data) {
			$this->items_per_page = $data;
		}

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
		 * There are automatic parametters: parametters that BFT will create, needed and optional parametters, and parametters optionals that BFT will create with default data if missing 
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Automatic parametters:
		 *  
		 * id: the array key
		 * is_child: isset and true if is a child
		 * page_parent: key of the parent
		 * 
		 * ids_required_get_data: the $_GET data found with the ids "ids_required"
		 * ids_optional_get_data: the $_GET data found with the ids "ids_optional"
		 * ids_aux_required_get_data: the $_GET data found with the ids "ids_aux_required"
		 * ids_aux_optional_get_data: the $_GET data found with the ids "ids_aux_optional"
		 * 
		 * ids_all: "ids_required", "ids_optional", "ids_aux_required", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_all_get_data: the $_GET data found with the ids "ids_all", uses the "key_final" as "key"
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
		 * ids_required_all_get_data: the $_GET data found with the ids "ids_required_all", uses the "key_final" as "key"
		 * ids_required_all_get_data_excluded_zeros: ids_required_all_get_data without the ids with get data == "0"
		 * 
		 * ids_optional_all: "ids_optional", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_optional_all_get_data: the $_GET data found with the ids "ids_optional_all", uses the "key_final" as "key"
		 * 
		 * ids_principal_all: "ids_required", "ids_optional" all combined, this order is the priority for maintain the data
		 * ids_principal_all_get_data: the $_GET data found with the ids "ids_principal_all", uses the "key_final" as "key"
		 * 
		 * ids_aux_all: "ids_aux_required", "ids_aux_optional" all combined, this order is the priority for maintain the data
		 * ids_aux_all_get_data: the $_GET data found with the ids "ids_aux_all", uses the "key_final" as "key"
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * 
		 * Parametters with default data if missing:
		 * 
		 * page_title: title of the page, default: $this->admin_pages_page_title_default
		 * menu_title: title of the tab of the page, default: $this->admin_pages_page_title_default
		 * menu_slug: slug of the page, default: key of the pae. The Menu slug will be changed to: $this->admin_pages_slug_name_prefix."_".menu_slug because it's needed a unike page name among the plugins
		 * 
		 * IDs: they are data arrays with "name on the GET data" => "id internal to use", default empty array
		 * On the GET data it's needed to put a unique id, example: "book_id", but on the page/function maybe it's needed like "id", then use: ' "book_id" => "id", '
		 * Options:
		 * ids_required (throw an error if GET id not found)
		 * ids_optional
		 * ids_aux_required (throw an error if GET id not found, for pages with secondary data)
		 * ids_aux_optional (For pages with secondary data))
		 * 
		 * Note: uf it's a children page there may be automatic ids
		 * If a parent have an id or id aux that it's not found on the page,
		 * then the page has all the missing ids like an id optional on ids_optional
		 * 
		 * 
		 * tab_show: if false it doesn't show the tab of the page, even if is the page selected, default: true
		 * tabs_new_or_edit_on_url: if true it adds "&action=edit" or "&action=new" on the link of a tab, new if there are a id detected on the GET data, default false
		 * tabs_show_children: if false doesn't show the first line children tabs of a page, default true
		 *  
		 * function: the function for load the data of the page, default: $this->admin_pages_function_default (per example: function for load the data of the table, then load the file with the table with the part "file")
		 * function_load: loads the function before all, per example for submit a custom form, then load "function" for load he updated data, default: $this->admin_pages_function_load_default (for example "admin_permission_check_and_ids_required_check_function_load" for check admin premissions and all the id required before do anything, or "redirect_to_first_page_child" to redirect to the first child)
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
		 * admin_menu_page_display
		 * Display the page selected on "file"
		 * 
		 * admin_menu_page_table_display_first_menu_child (Only on Backend Frontend Template Pro)
		 * Display a table with the data of the first child and the form stored on $this->admin_forms[]
		 * 
		 * admin_menu_page_table_display (Only on Backend Frontend Template Pro)
		 * Same function like admin_menu_page_table_display_first_menu_child but it doesn't search the data on the children, and don't go to the child
		 * 
		 * admin_menu_admin_form_page_display (Only on Backend Frontend Template Pro)
		 * Display a custom automated form form stored on $this->admin_forms[]
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
		 * Optional parametters:
		 * 
		 * admin_page_settings_id: for select the key to use of $this->admin_settings[] , (Only on Backend Frontend Template Pro)
		 * Prepared for use with the function $this->settings_section_form($this->admin_pages_data_get("admin_page_settings_id")) (Only on Backend Frontend Template Pro)
		 * That function is used on "file" => "bft-admin-display-settings.php",
		 * 
		 * (Only on Backend Frontend Template Pro)
		 * iframe_admin_page_slug and iframe_url:
		 * The slug or full URL of the inside iframe
		 * To use with "file" => "bft-admin-display-iframe.php"
		 * 
		 * file_aux_folder_includes: for use a second full path with the variable $file_aux_url (parametter "file" generates the variable $file_url )
		 * 
		 * new_text: the text of the new entry button, it can be added on the parent or on the child, the priority is on the child data
		 * For use on the function admin_menu_page_table_display_first_menu_child() and file bft-admin-display-list-table.php (Only on Backend Frontend Template Pro)
		 * It creates the variable $button_add
		 * It will be finally used on $this->html_button_action
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
		 * Your own parametters:
		 * 
		 * You can create your own parameter, later on you can access to the info on a function or on a page with:
		 * $variable_name = $this->admin_pages_data_get("parametter_name");
		 */


		$this->admin_pages_main_name = $this->plugin_title;
		$this->admin_pages_slug_name_prefix = $this->plugin_slug;
		$this->admin_pages_page_title_default = $this->admin_pages_main_name." ".$this->__("page");
		$this->admin_pages_menu_title_default = $this->admin_pages_main_name." ".$this->__("section");
		$this->admin_pages_file_default = "bft-admin-display-blank-page-with-title.php";

		$this->admin_pages_function_default = "admin_permission_check_and_ids_required_and_optional_check_page_display";
		$this->admin_pages_function_load_default = "admin_permission_check_and_ids_required_check_function_load";

		$this->admin_pages_capability_default = "manage_options";
		
		//$this->admin_pages = [];




		/**
		 * The lenguage data
		 */
		//$languages_codes = $this->languages_codes_names_get();
		//$languages_codes_selected = $this->languages_selected_get();

		/**
		 * The countries data
		 */
		//$countries_codes = $this->countries_codes_names_get();






		/**
		 * List of settings controlled by WordPress (Only on Backend Frontend Template Pro)
		 * 
		 * The array $this->admin_settings
		 * 
		 *	"key_settings" => [
		 *		[data of the settings]
		 *		"fields" => [
		 *			"key_field" => [
		 *				[data of the field]
		 *			],
		 *		],
		 *	],
		 * 
		 * 
		 * 
		 * There are automatic parametters: parametters that BFT will create, needed and optional parametters, and parametters optionals that BFT will create with default data if missing 
		 * 
		 * 
		 * ------------------------------------------------------------------------------
		 * 
		 * Settings part:
		 * 
		 * 
		 * Automatic parametters:
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
		 * Automatic parametters added on the field array part:
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
		 * type defines the type input, see the explanation of custom_form_html_input (Only on Backend Frontend Template Pro)
		 * args admits whatever data for the HTML forms that admits custom_form_html_input(), like: options (array of the options), rows and cols for a textarea, etc.
		 * 
 		 * ------------------------------------------------------------------------------
		 
		 * How the fields are stored:
		 * 
		 * On the array a "field" id is a simple sentence, ej: "languages"
		 * But on WordPress is necessary use "plugin name"."_"."languages (id_wordpress) to avoid repetitions with others plugins 
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
  
		//$this->admin_settings = [];


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
		 * key_form: internal id of the form
		 * 		table: name of the table
		 * 		column_key: name of the key ("id" usually)
		 * 		column_title_name: field where it's stored the name of the row (the name of a user, the name of a book, etc.)
		 * 		i18n_foreign_key: foreign key on the internationalization table 
		 * 		columns: list of fields
		 * 			key_field: the name of the field on the database
		 * 				array data of the field
		 * 
		 * 
		 * 
		 * Optional parametters of the fields:
		 * 
		 * label: text to show on the admin. Default: ""
		 * placeholder: placeholder if the type data can have placeholder
		 * display_table: display the field on the list table. Note: display_table doesn't work for now with relation_many_to_many fields (Only on Backend Frontend Template Pro)
		 * i18n: if the data of the field is stored on a internationalization table
		 * only_on_active: display the field only if the data is active
		 * only_on_removed: display the field only if the data is on the bin
		 * readonly: readonly field, for column key for example
		 * value_from_get: catch the data from the GET data on the URL if there aren't data stored of this field. For a dependand data, example: teachers notes, a new note need to know the teacher id of the note
		 * value_empty_is_null: a empty data will be transform to NULL (the NULL data always is printed like value="")
		 * foreign_key: it stores a foreign key 
		 * foreign_key_null_text: text to show when NULL is stored on a foreign key with optional NULL 
		 * type: type data, see the explanation for custom_form_html_input for the types available , plus there are the type "relation_many_to_many", it's a select. Default "text"
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
		 * 				"only_on_active" => true,
		 * 			],
		 * 			$this->database_datetime_removed_name => [
		 * 				"label" => $this->database_datetime_removed_text,
		 * 				"placeholder" => "",
		 * 				"type" => "datetime",
		 * 				"display_table" => true,
		 * 				"readonly" => true,
		 * 				"only_on_removed" => true,
		 * 			],
		 * 
		 * 
		 * 
		 * 
		 * Warning: "name" can't be used for a column a i18n table
		 * WordPress clean the data automatically of all "name" appearances
		 * And WordPress doesn't expect an array of data (it's an array because its the text for every language)
		 */
		//$this->admin_forms = [];
		 
		/**
		 * List of many to many relations between to forms/tables of $this->admin_forms
		 * 
		 * key: internal id of the relationship
		 * 
		 *	* table: name of join table
		 *	* forms: admin forms
		 *	*	* form 1 key of $this->admin_forms => foreign key 1 on the table
		 *	*	* form 2 key of $this->admin_forms => foreign key 2 on the table
		 */
		//$this->admin_forms_relations_many_to_many = [];

	}

	/**
	 * Prepare the variables for a empty database
	 * Almost all display pages are deleted
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	protected function database_check() {
		if(false !== $this->database_version)
		{
			//Database installed, check if is needed an upgrade
			$database_de_install = new Your_Plugin_Install_Upgrade_Deinstall_Database();
			
			$database_de_install->database_install_and_or_upgrade($database_de_install);
		}
		else {
			//Database not installed
		}
	}
	

	/**
	 * Display an GET error_mesage
	 * Check the permision for the admin area of the plugin
	 * Check user capabilities and the existence of $this->page_name
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string			$triggered_on_function_load				default false, "go_to_parent" only works if true == $triggered_on_function_load because it's needed do the redirect before sending the headers 
	 * @return		array
	 */
	public function admin_permission_check($triggered_on_function_load = false) {

		//Display an GET error message
		if (	isset($_GET["error_message"])) {
			$this->error_show($_GET["error_message"]);
		}

		$error_message = $this->__("Admin permission denied");

		//Page name error
		if (false === $this->page_name) {
			$error_message = $error_message.", ".$this->__("page name error");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die", $error_throw_file_change_use_this = NULL, $triggered_on_function_load);
		}

		//Cheking the capabilities os the user
		$user_capabilities = $this->admin_pages_data_get("capability");
		if (	false !== $user_capabilities && "" != $user_capabilities
			&&	!current_user_can($user_capabilities)) {

			$error_message = $error_message.", ".$this->__("user capabilities error");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die", $error_throw_file_change_use_this = NULL, $triggered_on_function_load);
		}

		return true;
	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function enqueue_styles() {

		/*
			The names are not bft-bootstrap and bft
			Because there ir a problem with several plugins made with BFT
			
			Plugin 1:
			"bft-bootstrap" with $this->bft_version == 1.0

			Plugin 1:
			"bft-bootstrap" with $this->bft_version == 2.0

			Only the first plugin will be loaded, WordPress don't manage well the ids repeated

			Now it is:
			"plugin_1-bft-bootstrap" and "plugin_2-bft-bootstrap"

			All the CSSs will be loaded, the new markers will be executed

			BUT markers repeated will be a problem if the last CSS is a inferior version, and maybe WordPress solve this issue
		*/
		
		//Bootstrap
		//wp_enqueue_style($this->plugin_id."-bft-bootstrap", plugin_dir_url( __FILE__ )."css/bft-bootstrap.css", array(), $this->bft_version);
		wp_enqueue_style("bft-bootstrap", plugin_dir_url( __FILE__ )."css/bft-bootstrap.css", array(), $this->bft_version);
		//wp_enqueue_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css");
		//wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css");
		//wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
		
		// Bootstrap Select
		wp_enqueue_style("bootstrap-select", "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css");
		//wp_enqueue_style( "bootstrap-select", "https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/css/bootstrap-select.min.css");
		//wp_enqueue_style( "bootstrap-select", "https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css");
		
		//Daterangepicker
		wp_enqueue_style("daterangepicker", "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css");

		//BFT
		//wp_enqueue_style($this->plugin_id."-bft", plugin_dir_url( __FILE__ )."css/bft-admin.css", array(), $this->bft_version);
		wp_enqueue_style("bft", plugin_dir_url( __FILE__ )."css/bft-admin.css", array(), $this->bft_version);
	
		if (is_callable(array($this, "enqueue_styles_plugin"))) {
			$this->enqueue_styles_plugin();
		}
	}


	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function enqueue_scripts() {
		// Bootstrap
		wp_enqueue_script( "bootstrapjs", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js", array("jquery"), "", true );
		//wp_enqueue_script( "bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js", array("jquery"), "", true );
		//wp_enqueue_script( "bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", array("jquery"), "", true );
		
		// Bootstrap Select
		wp_enqueue_script( "bootstrap-selectjs", "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js", array("jquery"), "", true );
		//wp_enqueue_script( "bootstrap-selectjs", "https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.10/dist/js/bootstrap-select.min.js", array("jquery"), "", true );
		//wp_enqueue_script( "bootstrap-selectjs", "https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js", array("jquery"), "", true );
		
		// Daterangepicker
		wp_enqueue_script( "momentjs", "https://cdn.jsdelivr.net/momentjs/latest/moment.min.js", array("jquery"), "", true );
		wp_enqueue_script( "daterangepicker-selectjs", "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js", array("jquery"), "", true );

		// WordPress media scripts
		wp_enqueue_media();

		// BFT script
		wp_enqueue_script($this->plugin_id."-bft-mini", plugin_dir_url( __FILE__ )."js/bft-admin.js", array( "jquery" ), $this->bft_version, false );
		//It's unique for every plugin for the unique ajax calls
		//If it's not unique: the nonce will be of the first plugin with BFT and it will fail on the second plugin
		//wp_enqueue_script($this->plugin_id."-bft", plugin_dir_url( __FILE__ )."js/bft-admin.js", array( "jquery" ), $this->bft_version, false );
	
		if (is_callable(array($this, "enqueue_scripts_plugin"))) {
			$this->enqueue_scripts_plugin();
		}
	}
	

	/**
	 * AJAX return of the HTML of a image
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		string
	 */
	public function Your_Plugin_bft_get_image() {
	}


	/**
	 * AJAX return of the HTML link of a file
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		string
	 */
	public function Your_Plugin_bft_get_file() {
	}

	/**
	 * Register the sections and fields of the admin area.
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function admin_menu_add_settings_sections() {
	}


	/**
	 * Check the admin permissions, check the ids required and display of a page
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$args		Array with the all optional data: $display_table, $title
	 * @return		echo
	 */
	public function admin_permission_check_and_ids_required_and_optional_check_page_display($args = array()) {
		$this->admin_permission_check();
		$this->admin_menu_page_display($args);
	}
	

	/**
	 * Display of a page
	 * 
	 * BFT Mini version
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$args		Array with the all optional data: $display_table, $title
	 * @return		echo
	 */
	public function admin_menu_page_display($args = array()) {
		//Variables for the page
		if (is_array($args)) {
			extract($args);
		}


		//Title part
		if (!isset($title)) {
			//$title = get_admin_page_title()
			$title = $this->admin_pages_data_get("page_title");
		}


		
		if (!isset($folder_main)) {
			$folder_main = "admin";
		}
		

		if (false == $this->admin_pages_data_get("file")) {
			$error_message = $this->__("File not specified");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die");

			return false;
		}


		$file = $this->admin_pages_data_get("file");

		if (false == $file) {
			$error_message = $this->__("File not specified");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die");

			return false;
		}

		if (str_starts_with($file, 'bft-')) {
			$file_url = plugin_dir_path( dirname( __FILE__ ) )."BFT/partials/".$file;			
		}
		else {
			$file_url = plugin_dir_path( dirname( __FILE__ ) )."../../". $folder_main."/partials/".$file;			
		}

		if (!file_exists($file_url)) {
			$error_message = $this->__("File not found");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die");

			return false;
		}
		

		if (false != $this->admin_pages_data_get("file_aux_folder_includes")) {
			$file_aux_url = plugin_dir_path( dirname( __FILE__ ) )."../../" . "includes/partials/".$this->admin_pages_data_get("file_aux_folder_includes");

			if (!file_exists($file_aux_url)) {
				$error_message = $this->__("File aux not found");
				$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die");

				return false;
			}
		}


		$private_file_dir = $this->admin_pages_data_get("private_file_dir");

		require $file_url;
	}

	
	
	/**
	 * Check permissions and the required and optionals ids of the page specified on the URL, principal and aux ids type checked
	 * Prepared for "function_load", "go_to_parent" used if needed
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		boolean			
	 */
	public function admin_permission_check_and_ids_required_check_function_load () {
		$this->admin_permission_check($triggered_on_function_load = true);

		return true;
	}
	

	/**
	 * Check required and optionals ids of the page specified on the URL, principal and aux ids type checked
	 * Prepared for "function_load", "go_to_parent" used if needed
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		boolean			
	 */
	public function ids_required_check_function_load () {

		return true;
	}
	

	/**
	 * Check required and optionals ids of the page specified on the URL, principal and aux ids type checked
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		boolean			
	 */
	public function ids_required_check () {
		return true;
	}
	
	
	/**
	 * Get several data of admin_pages_data_get through an array
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array					$keys
	 * @param		NULL|string				$page_id
	 * @return		array				
	 */
	protected function admin_pages_data_get_multiple ($keys, $page_id = NULL) {
		$return = array();
		
		foreach ($keys AS $key) {
			if (NULL == $page_id) {
				$data = $this->admin_pages_data_get($key);
			}
			else {
				$data = $this->admin_pages_data_get($key, $page_id);
			}
			
			if (is_array($data)) {
				$return = array_merge($return, $data);
			}
		}

		return $return;
	}

	/**
	 * Get the data keys ids_required and ids_optional of a page
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		NULL|string				$page_id
	 * @return		array				
	 */
	protected function admin_pages_data_get_multiple_ids_required_and_optional ($page_id = NULL) {
		$return = array();

		$keys = [
			"ids_required",
			"ids_optional",
		];
		
		$return = $this->admin_pages_data_get_multiple ($keys, $page_id = NULL);

		return $return;
	}


	/**
	 * Get the data keys ids_aux_required and ids_aux_optional of a page
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		NULL|string				$page_id
	 * @return		array				
	 */
	protected function admin_pages_data_get_multiple_ids_aux_required_and_aux_optional ($page_id = NULL) {
		$return = array();

		$keys = [
			"ids_aux_required",
			"ids_aux_optional",
		];
		
		$return = $this->admin_pages_data_get_multiple ($keys, $page_id = NULL);

		return $return;
	}
	

	/**
	 * Throw an error for the admin area
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string			$error_message
	 * @param		string			$error_throw_what_do_use_this			default NULL, use this data instead of $this->admin_pages_data_get("error_throw_what_do");, options: show_error, show_error_and_die, go_to_parent
	 * @param		string			$error_throw_file_change_use_this		default NULL, use this data instead of $this->admin_pages_data_get("error_throw_file_change");, for change the file displayed if error triggerred
	 * @param		string			$triggered_on_function_load				default false, "go_to_parent" only works if true == $triggered_on_function_load because it's needed do the redirect before sending the headers 
	 * @param		string			$page_id								default NULL -> the visualized page
	 * @return 		boolean
	 */
	protected function error_throw ($error_message = "", $error_throw_what_do_use_this = NULL, $error_throw_file_change_use_this = NULL, $triggered_on_function_load = false, $page_id = NULL) {
		//First display an GET error message
		if (isset($_GET["error_message"])) {
			$this->error_show($_GET["error_message"]);
		}

		if (NULL == $page_id) {
			$error_throw_what_do = $this->admin_pages_data_get("error_throw_what_do"); //options: show_error, show_error_and_die, go_to_parent
			$error_throw_file_change = $this->admin_pages_data_get("error_throw_file_change");
			$page_parent = $this->admin_pages_data_get("page_parent");
		}
		else {
			$error_throw_what_do = $this->admin_pages_data_get("error_throw_what_do", $page_id);
			$error_throw_file_change = $this->admin_pages_data_get("error_throw_file_change", $page_id);
			$page_parent = $this->admin_pages_data_get("page_parent", $page_id);
		}

		if (NULL != $error_throw_what_do_use_this) {
			$error_throw_what_do = $error_throw_what_do_use_this;
		}

		if (NULL != $error_throw_file_change_use_this) {
			$error_throw_file_change = $error_throw_file_change_use_this;
		}

		//page_parent: key of the parent

		if ("show_error_and_die" == $error_throw_what_do) {
			$this->error_show($error_message);
			wp_die("");
		}
		elseif (	"go_to_parent" == $error_throw_what_do
				&&	false != $page_parent
				&&	true == $triggered_on_function_load) {
			//It's possible to see 
			//"Cannot modify header information - headers already sent by"
			//If this funcion and option is not used on a funcion_load

			if (!isset($_GET["error_message"])) {
				$error_message .= ", ".$this->__("redirected to the parent page");
			}
			else {
				$error_message .= ", ".$this->__("redirected to a parent page");
			}
			

			$slug = $this->admin_pages_data_get("menu_slug", $page_parent);
			$url_ids = $this->admin_pages_data_get("ids_all_get_url", $page_parent);
			$url = admin_url();
			$url .= "admin.php?page=".$slug."&error_message=".$error_message.$url_ids;

			wp_redirect($url);
			die();
		}
		else {
			//"show_error" == $error_throw_what_do
			$this->error_show($error_message);
		}

		if (false != $error_throw_file_change) {
			//New file option
			$this->admin_pages_data_set("file", $error_throw_file_change, $page_id);
		}
	}

	
	/**
	 * Display a error message for the admin area
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		echo
	 */
	protected function error_show ($error_message = "") {

		if ("" == $error_message) {
			$error_message = $this->__("Error detected");
		}

		if (in_array($error_message, $this->errors_messages_shown)) {
			//Message already shown
			return true;
		}

		$this->errors_messages_shown[] = $error_message;
		$error_message = $this->plugin_title.": ".$error_message;
		$class = 'notice notice-error  is-dismissible';
		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $error_message ) ); 
		return true;
	}


	/**
	 * Display a success message
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		echo
	 */
	public function admin_notice_success($message = NULL) {
		if (	is_null($message)
			||	is_array($message)
			||	"" == $message)
		{
			$message = $this->__("Changes saved");
		}

		?>
		<div class="notice notice-success is-dismissible">
			<p><?=esc_html($message)?></p>
		</div>
		<?php
	}


	/**
	 * Remove of the data the column datetime modified or column datetime removed
	 *
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		array
	 */
	protected function data_remove_modified_or_removed_datetime($data) {
		if(		isset($data["status"]) && isset($data["status"]["value"])
			&&	$this->database_status_option_active_name == $data["status"]["value"]) {
			//status_value = "active"
			if (isset($data[$this->database_datetime_removed_name])) {
				unset ($data[$this->database_datetime_removed_name]);
			}

			if (	isset($data[$this->database_datetime_modified_name])
				&&	$data[$this->database_datetime_created_name]["value"] == $data[$this->database_datetime_modified_name]["value"]) {
				//Datetime created == datetime modified
				unset ($data[$this->database_datetime_modified_name]);
			}
		}
		elseif(		isset($data["status"]) && isset($data["status"]["value"])
				&&	$this->database_status_option_bin_name == $data["status"]["value"]) {
			//status_value = "bin"
			if (isset($data[$this->database_datetime_modified_name])) {
				unset ($data[$this->database_datetime_modified_name]);
			}
		}
		elseif (	isset($data[$this->database_datetime_created_name])
				&&	!isset($data[$this->database_datetime_modified_name])
				&&	!isset($data[$this->database_datetime_removed_name])) {
			//$this->database_datetime_created_name is the only data
		}
		else {
			if (isset($data[$this->database_datetime_created_name])) {
				unset ($data[$this->database_datetime_created_name]);
			}
			
			if (isset($data[$this->database_datetime_modified_name])) {
				unset ($data[$this->database_datetime_modified_name]);
			}
			
			if (isset($data[$this->database_datetime_removed_name])) {
				unset ($data[$this->database_datetime_removed_name]);
			}	
		}

		if(isset($data["status"]) && isset($data["status"]["readonly"]) && true == $data["status"]["readonly"]) {
			//status_readonly = "readonly"
			unset ($data["status"]);
		}

		return $data;
	}


	/**
	 * URL gets needed of a page, uses the actual get data
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array			$ids									list of ids used, if $ids is not array, then is transformed to $ids["id"] = $value;, the new identifiers have priority over the default IDs taken of the GET data
	 * @param		array|NULL		$page_id								page name of the hyperlink, if NULL use the visualized page
	 * @param		array|NULL		$ids_required_completed_with_zeros		for new data, the ids_required_all are completed with zeros, ej: &id=0
	 * @return		string
	 */
	protected function gets_for_admin_page ($ids = array(), $page_id = NULL, $ids_required_completed_with_zeros = false) {
		$this->admin_permission_check();

		if (NULL == $page_id) {
			$page_data = $this->admin_pages_data_get();
		}
		else {
			$page_data = $this->admin_pages_data_get(false, $page_id);
		}
		
		if (false == $page_data) {
			return "";
		}

		if (!is_array($ids) && (NULL == $ids || "" == $ids || false === $ids)) {
			unset($ids);
			$ids = array();
		}
		elseif (!is_array($ids)) {
			$id = $ids;
			unset($ids);
			$ids = array();
			
			$admin_forms_id = false;
			if (false != $admin_forms_id && isset($this->admin_forms[$admin_forms_id]["column_key"])) {
				$ids[$this->admin_forms[$admin_forms_id]["column_key"]] = $id;
			}
			else {
				$ids["id"] = $id;
			}
		}

		$ids_url = "";
		$ids_get_data_key_final = $ids;


		if (isset($page_data["ids_all_get_data"])) {
			//The new ids have priotity
			$ids_get_data_key_final = array_merge($page_data["ids_all_get_data"], $ids);
			
		}


		if (true == $ids_required_completed_with_zeros) {
			$ids_required_all_with_zeros = array();

			foreach ($page_data["ids_required_all"] AS $key_initial => $key_final) {
				$ids_required_all_with_zeros[$key_final] = 0;
			}

			//The set ids have priotity
			$ids_get_data_key_final = array_merge($ids_required_all_with_zeros, $page_data["ids_all_get_data"]);

//html_button_action
		}

		$ids_get_data = array();
		foreach ($ids_get_data_key_final AS $key_final => $value) {
			if (isset($page_data["ids_all_inverse"][$key_final])) {
				$ids_get_data[$page_data["ids_all_inverse"][$key_final]] = $value;
			}
		}

		foreach ($ids_get_data AS $key => $value) {
			$ids_url .= "&$key=".$value;
		}

		return $ids_url;
	}

	
	/**
	 * Return and show if needed the HTML of all the tabs of the admin area
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		boolean		$print		echo the data
	 * @param		array		$ids		list of ids used
	 * @return		string|echo
	 */
	protected function html_tabs($print = false, $ids = array()) {
		$this->admin_permission_check();

		$menu_slug_active = $this->admin_pages_data_get("menu_slug");

		$rows_to_tabs = $this->rows_to_tabs();

		$html = "";
		foreach ($rows_to_tabs AS $row_to_tabs) { 
			$html .= $this->html_tabs_row($row_to_tabs, false, false, $url_extra_get="");
		}

		if (true === $print) {
			echo $html;
		}

		return $html;
	}


	/**
	 * HTML of a row of tabs
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string			$row_to_tabs			pages data of the same level
	 * @param		boolean			$print					echo the html
	 * @param		string			$url_extra_get			add this get data on all the tabs
	 * @return		string|echo
	 */
	protected function html_tabs_row($row_to_tabs, $print = false, $url_extra_get="") {
		$html = "";
		
		$row_to_tabs_filtered = array();
		foreach($row_to_tabs AS $key => $page_data) {
			$admin_page_allowed = true;
			if( 	false == $page_data["is_current_page"]
				&&	(
					(
						isset($page_data["tab_show"]) && false == $page_data["tab_show"]
					)
					|| (
						count($page_data["ids_required_all"]) > count($page_data["ids_required_all_get_data_excluded_zeros"])
					)
				)) {
				$admin_page_allowed = false;
			}
			
			if (true == $admin_page_allowed) {
					$row_to_tabs_filtered[$key] = $page_data;
			}
		}

		if (0 < count($row_to_tabs_filtered)) {
			$html = "<nav class='nav-tab-wrapper'>";
			foreach($row_to_tabs_filtered AS $key => $page_data) {
				$css_active = "";
				$ids_url = $page_data["ids_all_get_url_excluded_zeros"];
				if (true == $page_data["is_current_page"]) {
					$css_active = "nav-tab-active bft_nav_tab_active";
					$active_element_finded = true;
					$ids_url = $page_data["ids_all_get_url"];
				}
				elseif (isset($page_data["is_parent_of_current_page"]) &&  true == $page_data["is_parent_of_current_page"]) {
					$css_active = "nav-tab-active bft_nav_tab_active_child";
				}

				if (	isset($page_data["tabs_new_or_edit_on_url"]) && true == $page_data["tabs_new_or_edit_on_url"]
					&&	count($page_data["ids_required_all_get_data"]) == count($page_data["ids_required_all_get_data_excluded_zeros"])) {
					$ids_url = "&action=edit".$ids_url;
				}
				elseif (isset($page_data["tabs_new_or_edit_on_url"]) && true == $page_data["tabs_new_or_edit_on_url"]) {
					$ids_url = "&action=new".$ids_url;
				}
				
				$ids_url .= $url_extra_get;

				$page_data["menu_title"] = $this->__($page_data["menu_title"]);
				
				$html .="<a href='?page=".$page_data["menu_slug"].$ids_url."' class='nav-tab $css_active'>".$page_data["menu_title"]."</a>";
			}
			$html .= "</nav>";
		}

		if (true == $print) {
			echo $html;
			return $html;
		}
		else {
			return $html;
		}
	}


	/**
	 * HTML of a button like link
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string				$page_id		page_id to go
	 * @param		string|boolean		$text			text of the link
	 * @param		string|boolean		$action			action for the GET data
	 * @param		array				$ids			ids active
	 * @param		boolean				$print			print the html
	 * @return		string|echo
	 */
	protected function html_button_action($page_id, $text = false, $action = false, $ids = array(), $print = false) {
		$html = "";

		$slug = $this->admin_pages_data_get("menu_slug", $page_id);
		
		if (false == $slug){
			return false;
		}

		
		$html_action = "";
		if ("" != $action) {
			$html_action = '&action='.esc_html($action);
		}
		
		if ("new" == $action) {
			$html_ids = $this->gets_for_admin_page($ids, $page_id, $ids_required_completed_with_zeros = true);
		}
		else {
			$html_ids = $this->gets_for_admin_page($ids, $page_id);
		}


		$html = '<a href="?page='.esc_html($slug).$html_action.$html_ids.'" class="page-title-action bft-page-title-action">'.esc_html($text).'</a>';

		if (true === $print) {
			echo $html;
		}
		else {
			return $html;
		}
	}


	/**
	 * Languages selected by the user
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		array
	 */
	protected function languages_selected_get() {
		$languages_codes_selected = array();
		$languages_codes = $this->languages_codes_names_get();
		$languages = $this->languages_get();

		foreach ($languages AS $language)
		{
			$languages_codes_selected[$language] = $languages_codes[$language];
		}

		return $languages_codes_selected;
    }

	
	/**
	 * A page name can be for a parent page o a child page,
	 * with the function retrieve the data of whatever page described on $this->admin_pages
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$key			
	 * @param		string		$data			
	 * @param		string		$page_name		the page name of the data, default: the visualized page
	 * @return	 	boolean
	 */
	protected function admin_pages_data_set($key, $data, $page_name = NULL) {
		if (false === $this->page_name) {
			return false;
		}

		if (is_null($page_name)){
			$page_name = $this->page_name;
		}

		if (isset($this->admin_pages[$page_name])){
			$this->admin_pages[$page_name][$key] = $data;
			return true;
		}
		
		return false;
	}


	/**
	 * A page name can be for a parent page o a child page,
	 * with the function retrieve the data of whatever page described on $this->admin_pages
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$key			if false => return an array with all the page data, if string => returns the seledted data
	 * @param		string		$page_name		the page name of the data, default: the visualized page
	 * @return		string|array|boolean
	 */
	protected function admin_pages_data_get($key = false, $page_name = NULL) {
		if (	is_null($page_name)
			&&	false === $this->page_name){
			return false;
		}
		elseif (is_null($page_name)){
			$page_name = $this->page_name;
		}

		$data = array();

		if (isset($this->admin_pages[$page_name])){
			$data = $this->admin_pages[$page_name];
			return $this->admin_pages_data_aux_get($key, $data);
		}

		return false;
	}
	

	/**
	 * Repetitive code of admin_pages_data_get
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$key		if false => return an array with all the page data, if string => returns the seledted data
	 * @param		string		$data		data of the page
	 * @return		string|array|boolean
	 */
	protected function admin_pages_data_aux_get($key, $data) {
		if (false === $key || "false" == $key) {
			return $data;
		}
		elseif (isset($data[$key])) {
			return $data[$key];
		}
		else {
			return false;
		}
	}
	
	/**
	 * Array simple with all the keys of all the childrens
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$page_name			page used, if null will be used $this->page_name
	 * @param		string		$self_page_too		include the keys of the selected page
	 * @return		array
	 */
	protected function admin_pages_self_children_keys_array ($page_name = NULL, $self_page_too = true) {
		
		if (false === $this->page_name) {
			return false;
		}

		if (is_null($page_name)){
			$page_name = $this->page_name;
		}

		$keys = array();
		$father_found = false;
		$father_found_now = false;
		$father_found_foreach_level = 0;
		
		$loop_number = 1;
		foreach ($this->admin_pages AS $page_key => $page_data) {
			if (false == $father_found && $page_key == $page_name) {
				$father_found = true;
				$father_found_now = true;
				$father_found_foreach_level = $loop_number;
			}

			if (	true == $father_found && $loop_number > $father_found_foreach_level
				|| 	(true == $father_found_now && true == $self_page_too)) {
				$father_found_now = false;
				$keys[$page_key] = $page_key;
			}

		}

		return $keys;
	}
	

	/**
	 * Get the url of the page
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$slug			if NULL => retrieve the actual page slug
	 * @param		boolean		$get_extra		get data to add on the URL
	 * @param		string		$id				id of the tab for retrieve the extra get of that tab
	 * @return		string
	 */
	protected function admin_page_url_get($slug = NULL, $get_extra = false, $id = NULL)	{
		/*
		This URL it's failing, I don't know why
		$url = menu_page_url($slug, false);
		//$url = wp_validate_redirect($slug);
		*/

		if (NULL == $slug) {
			$slug = $this->admin_pages_data_get("menu_slug");
		};

		//$url = network_admin_url();
		$url = admin_url();
		$url .= "admin.php?page=".$slug;

		if (false !== $get_extra) {
			$url .= $this->gets_for_admin_page($id);
		}

		return $url;
	}


	/**
	 * Change the key of an array item but maintain the same order
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		array		$arr		array to change
	 * @param		boolean		$oldkey		old key to change
	 * @param		boolean		$newkey		new key to change
	 * @return		array
	 */
	protected function replace_key($arr, $oldkey, $newkey) {
		if(array_key_exists( $oldkey, $arr)) {
			$keys = array_keys($arr);
			$keys[array_search($oldkey, $keys)] = $newkey;
			return array_combine($keys, $arr);	
		}
		return $arr;    
	}


	/*
	Section of protected functions with multiple loops for the tabs
	Doesn't use recursive functions for the memory usage
	Increase the loops quantity for more children tab levels
	*/

	/**
	 * Preparing $this->admin_pages with the needed data
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	protected function admin_pages_prepare() {
		$admin_pages_slug_name_prefix = trim($this->admin_pages_slug_name_prefix);
		if ("" != $admin_pages_slug_name_prefix) {
			$admin_pages_slug_name_prefix = $admin_pages_slug_name_prefix."_";
		}

		$admin_pages_ids = array();
		$admin_pages_slugs = array();

        foreach($this->admin_pages AS $page_key => $page_data) {
			$page_data["row_level"] = 1;
			$this->admin_pages[$page_key] = $this->admin_pages_prepare_page($page_key, $page_data);
			
			$admin_pages_ids []= $this->admin_pages[$page_key]["id"];
			$admin_pages_slugs []= $this->admin_pages[$page_key]["menu_slug"];
		}

		if ($this->array_has_repeated_values($admin_pages_ids)) {
			$error = "admin_pages ".$this->__("has repeated IDs, some unexpected errors may occur");

			$array_repeated_data = array_count_values($admin_pages_ids);

			foreach ($array_repeated_data AS $key => $data) {
				if (1 == $data) {
					unset($array_repeated_data[$key]);
				}
			}
		}
		
		if ($this->array_has_repeated_values($admin_pages_slugs)) {
			$error = "admin_pages ".$this->__("has repeated slugs, some unexpected errors may occur");

			$array_repeated_data = array_count_values($admin_pages_slugs);

			foreach ($array_repeated_data AS $key => $data) {
				if (1 == $data) {
					unset($array_repeated_data[$key]);
				}
			}
		}
    }


	/**
	 * get the slug $this->admin_pages_slug_name_prefix formated with "_" 
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string	$page_key	
	 * @param		array	$page_data	
	 * @return		array
	 */
	protected function admin_pages_slug_name_prefix_get() {
		$admin_pages_slug_name_prefix = trim($this->admin_pages_slug_name_prefix);
		if ("" != $admin_pages_slug_name_prefix) {
			$admin_pages_slug_name_prefix = $admin_pages_slug_name_prefix."_";
		}

		return $admin_pages_slug_name_prefix;
	}


	/**
	 * Preparing a single page of $this->admin_pages
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string	$page_key	
	 * @param		array	$page_data	
	 * @return		array
	 */
	protected function admin_pages_prepare_page($page_key, $page_data, $page_parent_data = array()) {

		//Data general of the page

		$page_data["id"] = $page_key;

		if (is_array($page_parent_data) && isset($page_parent_data["id"])) {
			$page_data["is_child"] = true;
			$page_data["page_parent"] = $page_parent_data["id"];
		}
		
		$admin_pages_slug_name_prefix = $this->admin_pages_slug_name_prefix_get();

		if (isset($page_data["menu_slug"])) {
			$page_data["menu_slug"] = $admin_pages_slug_name_prefix.$page_data["menu_slug"];
		}
		else {
			$page_key_filtered = str_replace("-", "_", $page_key);
			$page_data["menu_slug"] = $admin_pages_slug_name_prefix.$page_key_filtered;
		}


		if (isset($page_data["page_copy_of"])) {
			$page_copy_of = $this->admin_pages_data_get($key = false, $page_name = $page_data["page_copy_of"]);

			if (is_array($page_copy_of)) {
				//Copying data not found on $page_data from $page_copy_of
				//Without id, is_child, page_parent, menu_slug and children
				unset($page_copy_of["children"]);
				$page_data = array_merge($page_copy_of, $page_data);
			}
		}

		if (!isset($page_data["capability"])) {
			$page_data["capability"] = $this->admin_pages_capability_default;
		}

		if (!isset($page_data["page_title"])) {
			$page_data["page_title"] = $this->admin_pages_page_title_default;
		}

		if (!isset($page_data["menu_title"])) {
			$page_data["menu_title"] = $this->admin_pages_menu_title_default;
		}

		if (!isset($page_data["function"])) {
			$page_data["function"] = $this->admin_pages_function_default;
		}
		if (!isset($page_data["function_load"])) {
			$page_data["function_load"] = $this->admin_pages_function_load_default;
		}

		if (!isset($page_data["file"])) {
			$page_data["file"] = $this->admin_pages_file_default;
		}


		//Ids of the page

		$page_data["ids_required_get_data"] = array();
		$page_data["ids_optional_get_data"] = array();
		$page_data["ids_aux_required_get_data"] = array();
		$page_data["ids_aux_optional_get_data"] = array();

		//ids_required, ids_optional, ids_aux_required, ids_aux_optional
		$page_data["ids_all"] = array();
		$page_data["ids_all_get_data"] = array();
		$page_data["ids_all_get_data_excluded_zeros"] = array();
		$page_data["ids_all_get_url"] = "";
		$page_data["ids_all_get_url_excluded_zeros"] = "";
		
		//ids_required, ids_aux_required
		$page_data["ids_required_all"] = array();
		$page_data["ids_required_all_get_data"] = array();
		$page_data["ids_required_all_get_data_excluded_zeros"] = array();

		//ids_optional, ids_aux_optional
		$page_data["ids_optional_all"] = array();
		$page_data["ids_optional_all_get_data"] = array();

		//ids_required, ids_optional
		$page_data["ids_principal_all"] = array();
		$page_data["ids_principal_all_inverse"] = array();
		$page_data["ids_principal_all_get_data"] = array();

		//ids_aux_required, ids_aux_optional
		$page_data["ids_aux_all"] = array();
		$page_data["ids_aux_all_inverse"] = array();
		$page_data["ids_aux_all_get_data"] = array();

		$page_data["ids_required"] = array();
		$page_data["ids_optional"] = array();
		$page_data["ids_aux_required"] = array();
		$page_data["ids_aux_optional"] = array();
		$page_data["ids_all_inverse"] = array();

		return $page_data;
	}

	
	/**
	 * Preparing $this->admin_settings with the needed data
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string	$page_key	
	 * @param		array	$page_data	
	 * @return		array
	 */
	protected function admin_settings_prepare() {
    }
	

	/**
	 * Preparing $this->admin_forms with the needed data
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	protected function admin_forms_prepare() {
	}


	/**
	 * Detect the visualizated page at this moment and set the page name 
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		string
	 */
	protected function page_name_set () {
		$page_name = false;


		if (isset($_GET["page"])) {
			$menu_slug = $_GET["page"];
		}
		elseif (isset($_POST["page"])) {
			$menu_slug = $_POST["page"];
		}

		if (!isset($menu_slug)) {
			/*
			//It makes a general error, don't die here
			$error_message = $this->__("missing menu slug");
			$this->error_show($error_message);
			die("");
			*/

			return false;
		}
		else {
			$pos = strpos($menu_slug, $this->plugin_slug);
			if (false === $pos || $pos != 0) {
				return false;
			}
		}
		

		foreach ($this->admin_pages AS $page_key => $page_data) {
			$page_name = $this->page_name_set_aux($menu_slug, $page_key, $page_data);

			if (false !== $page_name) {
				$this->page_name = $page_name;
				return $page_name;
			}
		}

		//$this->page_name = $page_name;

		if (false === $this->page_name) {
			$error_message = $this->__("page not found");
			$this->error_show($error_message);
			die("");
		}
	}


	/**
	 * Repetitive code of page_name_set
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$menu_slug		page slug used
	 * @param		string		$page_key		key of a page
	 * @param		string		$page_data		data of a page
	 * @return		string|boolean
	 */
	protected function page_name_set_aux ($menu_slug, $page_key, $page_data) {
		$page_name = false;

		if (false !== $this->page_name && "" != $this->page_name) {
			$page_name = $this->page_name;
		}
		elseif (!isset($page_data["menu_slug"])) {
			$error_message = $this->__("missing menu slug");
			$this->error_show($error_message);
			die("");
			
			//die($error_message);

			//At this stage wp_die doesn't work yet
			//wp_die($error_message);
			//return false;
		}
		elseif (	$page_data["menu_slug"] == $menu_slug
				||	$page_key == $menu_slug) {
			$page_name = $page_key;
		}

		return $page_name;
	}
	
	
	/**
	 * Register the admin pages
	 * Main page -> add_menu_page
	 * Main page and others -> admin_menu_add_menu
	 *
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		null
	 */
	public function admin_menu_add_menus() {
		$page_data = array_values($this->admin_pages)[0];

		$page_main_parent_slug = $page_data["menu_slug"];

		add_menu_page(
			$this->__($page_data["page_title"]),
			$this->admin_pages_main_name,
			$page_data["capability"],
			$page_main_parent_slug,
			array($this, $page_data["function"]),
			plugin_dir_url( __FILE__ )."../../" . "img/icon-16px.png",
			25
		);

		foreach ($this->admin_pages AS $page_key => $page_data) {
			$this-> admin_menu_add_menu($page_data);
		}
	}

	/**
	 * Register one admin page
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @param		string		$page_data		page data to register
	 * @return		null
	 */
	public function admin_menu_add_menu($page_data) {
		if (	!isset($page_data["page_title"])
			||	!isset($page_data["menu_title"])
			||	!isset($page_data["capability"])
			||	!isset($page_data["menu_slug"]) )
		{
			$error_message = $this->__("Admin pages main menu error");
			$this->error_throw ($error_message, $error_throw_what_do_use_this = "show_error_and_die");

			return false;
		}
		
		if (!isset($page_data["page_parent"])) {
			//The page will be displayed in the main menu of WordPress
			$page_data_firt_page = array_values($this->admin_pages)[0];
			$page_parent_slug = $page_data_firt_page["menu_slug"];
		}
		else {
			//Registered page for permission purposes
			$page_parent_slug = $page_data["page_parent"];
		}

		$page_data["menu_title"] = $this->__($page_data["menu_title"]);

		if (isset($page_data["position"])) {
			$hookname = add_submenu_page(
				$page_parent_slug,
				$this->__($page_data["page_title"]),
				$page_data["menu_title"],
				$page_data["capability"],
				$page_data["menu_slug"],
				array($this, $page_data["function"]),
				$page_data["position"],
			);
		}
		else {
			$hookname = add_submenu_page(
				$page_parent_slug,
				$this->__($page_data["page_title"]),
				$page_data["menu_title"],
				$page_data["capability"],
				$page_data["menu_slug"],
				array($this, $page_data["function"]),
			);
		}

		if(isset($page_data["function_load"]) && "" != $page_data["function_load"]) {
			add_action( "load-". $hookname, array($this, $page_data["function_load"]));
		}
	}


	/**
	 * List of rows of tabs, for first line to the current page
	 * Each admin page has the booloeans data:	is_parent_of_current_page and is_current_page
	 * 
	 * BFT Mini version
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		string
	 */
	protected function rows_to_tabs () {
		$this->admin_permission_check();

		$rows_to_tabs = array();
		$page_actual_parents_ids = array();

		//This page
		$page_children_to_tab = $this->admin_pages_data_get();
		$page_actual_id = $page_children_to_tab["id"];
		$maximun_menu_rows = 6;


		$rows_to_tabs []= $this->rows_to_tabs_aux_first_row ();


		foreach ($rows_to_tabs AS $row_to_tab_key => $row_to_tab_data) {
			foreach ($row_to_tab_data AS $tab_key => $tab_data) {
				if ($tab_key == $page_actual_id) {
					$rows_to_tabs[$row_to_tab_key][$tab_key]["is_current_page"] = true;
				}
				else {
					$rows_to_tabs[$row_to_tab_key][$tab_key]["is_current_page"] = false;
				}
			}
		}


		$rows_to_tabs = array_reverse($rows_to_tabs);

		return $rows_to_tabs;
	}


	/**
	 * Repetitive code of rows_to_tabs
	 * For the first line
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return	array
	 */
	protected function rows_to_tabs_aux_first_row () {
		$admin_pages = $this->admin_pages;
		$row_to_tab = array();

		foreach ($admin_pages AS $page_key => $page_data) {
			unset($page_data["children"]);
			$row_to_tab[$page_key] = $page_data;
		}

		return $row_to_tab;
	}


	/**
	 * option_field_get is on functions-admin-public for plublic usage
	 */ 

	/**
	 * Do a update_option with the id_wordpress calculated
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		boolean
	 */
	protected function update_option_field($id, $value) {
		$id_wordpress = $this->plugin_slug."_".$id;
		update_option($id_wordpress, $value);
		return true;
	}


	/**
	 * Do a delete_option with the id_wordpress calculated
	 * 
	 * @since		1.0.0
	 * @version		1.0.0
	 * @return		boolean
	 */
	protected function delete_option_field($id) {
		$id_wordpress = $this->plugin_slug."_".$id;
		delete_option($id_wordpress);
		return true;
	}


}
