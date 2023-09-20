# Backend Frontend Template

A WordPress Plugin Template for develop plugins easily, quickly and professional. Save time, do more with this plugin, template and library

![Backend Frontend Template is a WordPress Plugin Template](https://moisesbarrachina.online/wp-content/uploads/2023/09/Logo-BFT-Github-3.png)

## Screenshots

First steps to make the plugin your own
![Backend Frontend Template: dashboard: the menu system](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-1.png)

Dashboard: the menu system
![Backend Frontend Template: dashboard: the menu system](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-2.png)

Dashboard: menu code example
![Backend Frontend Template: dashboard: menu code example](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-3.png)

Dashboard: manage and display errors
![Backend Frontend Template: dashboard: manage and display errors](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-4.png)

Client side: shortcode system
![Backend Frontend Template: client side: shortcode system](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-5.png)

Client side: shortcode complete example
![Backend Frontend Template: client side: shortcode complete example](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-6.png)

Client side: shortcode results
![Backend Frontend Template: client side: shortcode results](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-7.png)

## Installation

### Install the code

Download the code, copy the folder 'bft' on your WordPress instalation/wp-contentplugins and follow 

### Make the plugin your own

1. Change the files of wp-content/plugins/bft with the id of your plugin (like 'a-plugin-name')
2. Delete the files or change their extension:
    1. wp-content/plugins/bft/bft.php
    2. wp-content/plugins/bft/includes/class-bft.php
3. Change the extension of the files to PHP:
    1. wp-content/plugins/bft/your-plugin.txt
    2. wp-content/plugins/bft/includes/class-your-plugin.txt
4. Uncomment: "//$this->admin_pages_main_name = $this->plugin_title; on wp-content/plugins/bft/admin/class-your-plugin-admin.php
5. Find and replace all the file names with 'your-plugin' like 'class-your-plugin.php' to your plugin id, example: 'class-a-plugin-name.php'.
6. On wp-content/plugins/bft-mini/languages replace the file names with 'bft-internationalization' to 'your-plugin', example: 'a-plugin-name-es_ES.mo'
7. Go to search and replace of your editor, active 'match case' and replace this strings:
    1. 'bft-internationalization' to 'your-plugin'
    2. '$plugin_slug = "bft_pro"' to $plugin_slug = "your_plugin"
    3. 'bft_shortcode' to your_plugin_shortcode
    4. 'bft-shortcode' to your-plugin-shortcode
8. Go to search and replace of your editor, active 'match case' and replace the words with the names and ids of your plugin:
    1. Description of Your Plugin
    2. https://yourfuturewebsite/your-plugin/
    3. https://yourfuturewebsite
    4. Plugin Author
    5. pluginauthor@email
    6. Your Plugin
    7. your_plugin
    8. Your_Plugin
    9. your-plugin
    10. YOUR_PLUGIN
9. Replace the icon for you own on wp-content/plugins/bft/admin/img/icon-16px.png

## BFT content

### BFT folders

1. /admin -> administration folder
2. /includes -> global folder, for administration and plublic files
3. /languages -> translation files, this binarian files are made with programs like Poedit
4. /private -> for sensitive data that only a download script can send the file to the user
5. /admin -> public folder

### BFT sub-folders

1. /css -> CSS files
2. /img -> images
3. /js -> JavaScript files
4. /lib -> library, the internal BFT files are stored here
5. /partials -> frontend files

### BFT sub-folders

1. /css -> CSS files
2. /img -> images
3. /js -> JavaScript files
4. /lib -> library, the internal BFT files are stored here
5. /partials -> frontend files

### BFT main files

1. /includes/class-your-plugin.txt -> main class of the plugin
2. /includes/class-your-plugin-activator.php -> control when the plugin is activated
3. /includes/class-your-plugin-deactivator.php -> control when the plugin is deactivated
4. /includes/class-your-plugin-cronjobs.php -> control the cronjobs of the plugin
5. /includes/class-your-plugin-install-upgrade-deinstall-database.php -> install and erase the plugin database
6. /includes/class-your-plugin-functions-admin-public.php -> class with functions for admin and public classes, it's an extension of the BFT admin-public class
7. /admin/class-your-plugin-admin.php -> class for the admin section, it's an extension of the BFT admin-public class, your admin-public class and BFT admin class
8. /public/class-your-plugin-public.php -> class for the public section, it's an extension of the BFT admin-public class, your admin-public class and BFT public class

## Documentation

<details>
  <summary>Menu</summary>
  
  ### The menu system

    Edit your menu on the variable $this->admin_pages of the file admin/class-your-plugin-admin.php

    Design a BFT menu look like this:
    
```php
        $this->admin_pages = [
            "hello_world" => [
                "page_title" => $this->__("Hello world page"),
                "menu_title" => $this->__("Hello world"),
                "file" => "your-plugin-admin-display-hello-world.php",
            ],
            "blank_page" => [
                "page_title" => $this->__("Blank page"),
                "menu_title" => $this->__("Blank page"),
                "file" => "bft-admin-display-blank-page-with-title.php",
            ],	
        ];	
```

    $this->admin_pages can have all the pages you want, but in BFT the admin pages can't have children, that's only possible on Backend Frontend Template Pro

    Note: the array data is expanded by the function $this->admin_pages_prepare(), if you make an $this->debug_log_write($this->admin_pages) on a page: you can see the actual state of the array on the WordPress Log

    Explaining the WPTT menu:

    1. Automatic parametters added to the array
        * id: the array key
        * More automatic parametters on BFT Pro

    2. Parametters with default data if missing
        * page_title: title of the page, default: $this->admin_pages_page_title_default
        * menu_title: title of the tab of the page, default: $this->admin_pages_page_title_default
        * menu_slug: slug of the page, default: key of the page. The Menu slug will be changed to: $this->admin_pages_slug_name_prefix."_".menu_slug because it's needed a unike page name among the plugins
        * tab_show: if false it doesn't show the tab of the page, even if is the page selected, default: true
        * function: the function for when a page is displayed, default: $this->admin_pages_function_default
        * function_load: loads the function before a page is displayed,default: $this->admin_pages_function_load_default
        * file: the admin/partials file that will be displayed, default: $this->admin_pages_file_default (If the file starts with 'bft-' the file will be loaded of the folder admin/lib/BFT/partials
        * error_throw_what_do, it's used on error_throw, options: show_error: show the error (default option), show_error_and_die: show the error and stop the execution, go_to_parent: go to the parent page and anotes on the GET data the error (only works on BFT Pro and if $triggered_on_function_load = true, because on a normal WordPress function will cause the error: 'Cannot modify header information - headers already sent')
        * error_throw_file_change: change the file option if error_throw_what_do is triggered, default: false
        * capability, default: "manage_options", WordPress capabilities: https://wordpress.org/support/article/roles-and-capabilities/
        * More parametters on BFT Pro
    
    3. Available functions out of the box (you can create whatever function you need)
        * admin_menu_page_display: display the page selected on 'file'
        * More functions on BFT Pro

    4. Functions load available out of the box (you can create whatever function you need)
        * More functions load on BFT Pro
   
    5. Optional parametters
        * page_copy_of: copy the data of a page. Only copy the data not found on the page, neither copy id, is_child, page_parent, menu_slug and children
        * More optional parametters on BFT Pro
    
    6. Your own parametters
        * You can create your own parameter, later on you can access to the info on a function or on a page with: $variable_name = $this->admin_pages_data_get("parametter_name");. And if you want you can retrieve the data of a certain page with $page_name, and retrieve all the array data with $key = false, $variable_name = $this->admin_pages_data_get($key = false, $page_name = NULL)

        * You can set later your own parameter by code with: $this->admin_pages_data_set($key, $data, $page_name = NULL)
</details>

<details>
  <summary>Log</summary>
  
  ### The WordPress log with BFT

    The log in WordPress is activated on wp-config.php, change:

    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    Now you can check the log on wp-content/debug.log

    For printing on the log you can use the WordPress function error_log($string_or_number), but with Backend Frontend Template you can use: $this->debug_log_write($whatever)

    $this->debug_log_write() it's a better option because it shows:

    'NULL' if its a NULL variable
    'TRUE' and 'FALSE' if it's a boolean
    print_r() if it's an array or object
    Now you can print on the log whatever variable you want

    Also BFT offers an alternative name for debug_log_write: $this->write_log()
</details>

<details>
  <summary>Functions visibility</summary>
  
  ### What functions visibility is needed

    A quick summary for what visibility to use on the functions of your plugin:

  #### Private
    Don't use private functions, BFT use inheritance on the classes and a private function can't inheritance

  #### Protected
    Ideal for the internal functions for security reasons, only your classes can use this functions

  #### Public
    Some functions need to be public due to how WordPress works:

    * Functions called via $this->admin_pages -> an_admin_page -> 'function_load' data
    * Functions called via $this->admin_pages -> an_admin_page -> 'function' data
    * Functions called via install, upgrade or unistall
    * Functions called via shortcodes
    * Functions called via AJAX responses
</details>

<details>
  <summary>Security</summary>
  
  ### Secure the functions

  #### Function load
    The 'function_load' option of the menu is the function that the page executes before sending the HTML headers

    By default all pages execute admin_permission_check_and_ids_required_check_function_load(), the executed function can be changed on
    class-your-plugin-admin -> $this->admin_pages_function_load_default = "admin_permission_check_and_ids_required_check_function_load"

    The function admin_permission_check_and_ids_required_check_function_load() checks if the admin capabilities are correct and if the id required data is not missing. On this function it works the 'go_to_parent' option of the menu (the id check only on Backend Frontend Template Pro)

    This function can be called at the beginning of a custom function_load to check all before save changes

    NOTE: id required data and go to parent are only BFT Pro options

  #### Function
    The 'function' option of the menu is the main function that the page executes

    By default all pages execute admin_permission_check_and_ids_required_and_optional_check_page_display(), the executed function can be changed on
    class-your-plugin-admin -> $this->admin_pages_function_default = "admin_permission_check_and_ids_required_and_optional_check_page_display"

    The function admin_permission_check_and_ids_required_and_optional_check_page_display() checks if the admin capabilities are correct and if the id required data is not missing

    On a custom function there are functions for checking the access and to retrieve the ids:

    * $this->admin_permission_check(): check the admin permissions and throw an error if needed. Recommended for use at the beginning of the function
    * More functions on BFT Pro
</details>

<details>
  <summary>Errors</summary>
  
  ### Manage and display errors

  #### Show an error
    Backend Frontend Template can easily show errors, and it doesn't repeat the same error on the same load. Also: the plugin title will be add to the message

    * $this->error_show ($error_message = "") show an error message. If $error_message = "" it shows "Error detected"
    * Adding error_message on the GET URL, the error message can be triggered with the functions $this->admin_permission_check() or $this->error_throw()

  #### Throw an error
    BFT can throw errors with
    $this->error_throw ($error_message = "", $error_throw_what_do_use_this = NULL, $error_throw_file_change_use_this = NULL, $triggered_on_function_load = false, $page_id = NULL)

    * $error_message: error to send to $this->error_show(), but first it will display the 'error_message' stored on the URL
    * $error_throw_what_do_use_this: for use this data instead of $this->admin_pages_data_get("error_throw_what_do"), options: show_error, show_error_and_die, go_to_parent
    * $error_throw_file_change_use_this: default NULL, use this data instead of $this->admin_pages_data_get("error_throw_file_change"), for change the file displayed if error triggerred
    * $triggered_on_function_load: default false, 'go_to_parent' only works if true == $triggered_on_function_load because it's needed do the redirect before sending the headers (id required data and go to parent are only BFT Pro options)
    * $page_id: the key/page name, if null it's the visualized page

  #### Example
    This page show an error with:

```php
  $error_message = $this->__("This is an error test");
	$this->error_show ($error_message);
```

   ![Backend Frontend Template: error throw on this page](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-4-mini.png)
</details>

<details>
  <summary>Internationalization</summary>
  
  ### Internationalization: prepare the plugin for future translations

    For specify a text that maybe needs translation, WordPress provides the functions: $this->__("string") for direct translation and $this->esc_html_e("string") for translation and scape the HTML characters

    * $this->__("string"): for direct translation
    * $this->esc_html_e("string") for translation and scape the HTML characters
    For more functions search on the WordPress documentation: [link here](https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/)

    With that, a translation plugin will be able to translate your plugin into the visitor language

    But if you want make your own translation for your own plugin: you can allocate the language files on plugin_folder/languages, BFT automatically will set WordPress to search translations on that folder

    The language files are:

    * .pot: Portable Object Template, the master file with all the strings
    * .po: Portable Object, the file with the strings translated to one language
    * .mo: Portable Object, Machine Object, the compiled data of the .po file, WordPress use this file
    
    For create the files you can use programs like [Poedit](https://poedit.net/) or [EazyPo](http://www.eazypo.ca/)
</details>

<details>
  <summary>Frontend</summary>
  
  ### Frontend: shorcode system

    It's easy create an manage shotcodes with BFT:

  #### Defining a shortcode
    The shortcodes on BFT are defined on public -> class-your-plugin-admin -> shortcodes_init_plugin()

    The structure of a shortcode is:

```php
    add_shortcode("shortcode-name", array($this, "shortcode_function_name"));
```

  #### Defining a function
    The structure of a shortcode function is:

```php
    public function shortcode_function_name ( $atts = [], $content = null, $tag = '' ) {
	}
```
                
    The variables of the function are:

    * $atts: array with all the data specified on the shortcode
    * $content: the content inside the two tags, if the shortcode uses a clossing tag
    * $tag: the shotcode tag

  #### Shortcodes uses examples
    A shortcode without data on $atts and $content

```
    [bft-shortcode-test]
```
			
    Shortcode with data on $atts and $content

```
    [bft-shortcode-test atts_data_1="Lorem ipsum" atts_data_2="Dolor sit amet"]Content data[/bft-shortcode-test]
```
	
  #### Complete example

```php
    public function shortcodes_init_plugin() {
		add_shortcode("bft-shortcode-test", array($this, "bft_shortcode_test"));
	}
```

```php
    public function bft_shortcode_test( $atts = [], $content = null, $tag = '' ) {

		$html_aux = "";

		if (isset($atts["aditional_text"])) {
			$html_aux .= "<h4>".esc_html($atts["aditional_text"])."</h4>";
		}

		if (!is_null($content)) {
			$html_aux .= "<p>".esc_html($content)."<p>";
		}

		ob_start();
		require plugin_dir_path( dirname( __FILE__ ) ) . "public/partials/your-plugin-shortcode-test.php";
		$html = ob_get_clean(); 

		return $html;
	}
```

  #### Test yourself

    Create a page, insert a shortcode block and put:

```
    [bft-shortcode-test]
```
			
    Or:

```
    [bft-shortcode-test aditional_text="This is an aditional text"]The text inside de tags[/bft-shortcode-test]
```

  ![Backend Frontend Template: client side: shortcode complete example](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-6.png)

  Client side: shortcode results
  ![Backend Frontend Template: client side: shortcode results](https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-7.png)
</details>

<details>
  <summary>Languages</summary>
  
  ### Language functions

    Backend Frontend Template provides several functions about languages:

  #### $this->languages_codes_names_get()

    Returns a language list

```php
  $languages_codes_names = [
		'ab' => $this->__('Abkhazian'),
		'aa' => $this->__('Afar'),
		'af' => $this->__('Afrikaans'),
		'ak' => $this->__('Akan'),
		'sq' => $this->__('Albanian'),
		'am' => $this->__('Amharic'),
		[...]
```

  #### $this->languages_get($country_code)

    Returns the data stored on the setting $this->option_field_get("languages")

  #### $this->language_admin_get($country_code)

    Returns the data stored on the setting $this->option_field_get("language_admin") if exists on $this->option_field_get("languages")

    If languages empty it will set the lenguages 'en' and 'es'
    If language_admin empty or not found on languages, it will set the first language stored on languages
</details>

<details>
  <summary>Countries</summary>
  
  ### County function

    Backend Frontend Template provides several functions about countries:

  #### $this->countries_codes_names_get()

    Returns a country list

```php
  $countries_codes_names = [
		'AF'=> $this->__('Afghanistan'),
		'AX'=> $this->__('Aland Islands'),
		'AL'=> $this->__('Albania'),
		'DZ'=> $this->__('Algeria'),
		'AS'=> $this->__('American Samoa'),
		'AD'=> $this->__('Andorra'),	
		[...]
```

  #### $this->country_code_name_get($country_code)

    Returns a country name through the country code
</details>

<details>
  <summary>Currencies</summary>
  
  ### Currency functions

    Backend Frontend Template provides several functions about currencies:

  #### $this->currencies_array_get()

    Returns a currency list with all the data, including the numer of currency on the ISO 4217 standard

```php
  $currencies_name_and_symbol = [
		'ARS' => [
			'id'   => 'ARS',
			'name'   => 'Argentina Peso',
			'symbol' => '$',
			'code' => '032',
		],
		'AWG' => [
			'id'   => 'AWG',
			'name'   => 'Aruba Guilder',
			'symbol' => 'ƒ',
			'code' => '533',
		],
		[...]
```

  #### $this->currencies_selector_get()

    Returns a currency list

```php
  $currencies_name_and_symbol = [
		'ALL' => 'L - Albania Lek',
		'AFN' => '؋ Afghanistan Afghani',
		'ARS' => '$ Argentina Peso',
		'AWG' => 'ƒ Aruba Guilder',
		[...]
```

  #### $this->currency_symbol_get($currency_id)

    Returns a currency symbol through the currency code

  #### $this->currency_code_get($currency_id)

    Returns a the ISO 4217 number through the currency id
</details>

## License

Backend Frontend Template is licensed under the GPL v3 or later

## Credits

Backend Frontend Template uses the basic structure for a plugin established by The WordPress Plugin Boilerplate was started in 2011 by [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)

___

# Backend Frontend Template Pro

You can save even more time with [BFT Pro](https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/), upgrade now and you will be able to make submenus, automated or manual data lists, forms without coding, AJAX on the frontend and many more possibilities

## Additional features

<details>
  <summary>Children</summary>

  ### Menú system with children

  Add child pages and organize better your plugin
  ![Backend Frontend Template Pro: example of the menu with child pages](https://moisesbarrachina.online/wp-content/uploads/2023/09/nested_menu_basic.png)
</details>

<details>
  <summary>Settings</summary>

  ### Settings system

  Create, manage and store WordPress variables with setting pages, it's really easy

  ```php
    $this->admin_settings = [
      "general" => [
        "title" =>  $this->__("Test settings"),
        "fields" => [
          "text_test" => [
            "title" => $this->__("Text input"),
          ],
          "number_test" => [
            "title" => $this->__("Number input"),
            "args" => [
              "type" => "number",
            ],
          ],
        ],
      ],
    ];
  ```

  ![Backend Frontend Template Pro: example of the WordPress settings](https://moisesbarrachina.online/wp-content/uploads/2023/09/settings.png)
</details>

<details>
  <summary>Inputs</summary>

  ### Advance inputs

  Add inputs like images, select multiples, etc.

  ![Backend Frontend Template Pro: example of inputs types](https://moisesbarrachina.online/wp-content/uploads/2023/09/inputs.png)
</details>

<details>
  <summary>BBDD</summary>

  ### Example database

  Play around with the example data all you want

  ![Backend Frontend Template Pro: diagram os the example database](https://moisesbarrachina.online/wp-content/uploads/2023/09/BBDD.png)
</details>

<details>
  <summary>BBDD reinstall</summary>

  ### Install or delete the plugin database

  Add menu for (de)install your plugin database

  ![Backend Frontend Template Pro: menu for install and deinstall the plugin database](https://moisesbarrachina.online/wp-content/uploads/2023/09/de_install.png)
</details>

<details>
  <summary>Automated data</summary>

  ### Automated data manipulation

  Manage all the data only specifying the table and the fields. The table can have internationalized fields

  ```php
    $this->admin_forms = [
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
            "i18n" => false,
            "readonly" => true,
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
          [...]
  ```

  ![Backend Frontend Template Pro: example of an automated form](https://moisesbarrachina.online/wp-content/uploads/2023/09/course_math.png)

  ![Backend Frontend Template Pro: example of an automated list](https://moisesbarrachina.online/wp-content/uploads/2023/09/teacher_1_notes.png)
</details>

<details>
  <summary>Manual data</summary>

  ### Manual data manipulation

  More functions to manage manually the database

  ```php
  $this->wpdb_get_results_array($query); //returns a two dimensional array with all the data
  $this->wpdb_get_results_with_index($query); //returns a two dimensional array with all the data, the index of every row will be the first column data
  $this->wpdb_get_results_one_data_per_row($query); //returns a mono dimensional array, only returns the first column of every row
  $this->wpdb_get_results_index_and_data_per_row($query); //returns a mono dimensional array, the first column data will be the index, the second the data
  $this->wpdb_get_result_one_data($query); //returns a string, only return the first column of the first row
  $this->wpdb_insert_update_on_duplicate_key($table, $data, $multi_row = false, $modified_value = NULL, $data_for_update = array()); //insert or update several data, more explanation below (the function sanitizes the inputs)
  $this->wpdb_insert_update_on_duplicate_key_delete_others($table, $data, $column_where_delete, $value_where_delete); //insert or update several data, then delete the not updated rows, more explanation below (the function sanitizes the inputs)
  ```

  ![Backend Frontend Template Pro: example of a group form manually declared](https://moisesbarrachina.online/wp-content/uploads/2023/09/manage_data_manually_form_1.png)
</details>

<details>
  <summary>Listings by query</summary>

  ### Paginated listing by query

  A WordPress paginated listing style thanks to a SQL query in pieces

  ```php
    $this->display_table_query_custom(
      $query_select_inside,
      $query_from_inside,
      $query_where_inside,
      $group_inside,
      $ids,
      $columns_tables_dont_search,
      $search_concat,
      $column_key,
      $columns_tables,
      $columns_labels,
      $column_action_add,
      $status_system = false,
      $write_log_query = false
    );
  ```
</details>

<details>
  <summary>Listings by array</summary>

  ### Direct listing by array

  A WordPress listing style thanks to a array

  ```php
    $display_table_data = [
      "data" => [
        [
          "id" => "1",
          "name" => "Lorem Ipsum Name",
        ],
      ],
      "columns" => [
        "id" => "Nº",
        "name" => "Name",
      ],
    ];

    $args = [
      "ids" => $ids,
      "display_table" => true,
      "display_table_data" => $display_table_data,
    ];

    $this->admin_menu_page_display($args);
  ```
  ![Backend Frontend Template Pro: example of a WordPress listing by array](https://moisesbarrachina.online/wp-content/uploads/2023/09/listing_by_array.png)
</details>

<details>
  <summary>Download private files</summary>

  ### Download system for private files

  Easy method for download private files

  ![Backend Frontend Template Pro: example of downloading a private file](https://moisesbarrachina.online/wp-content/uploads/2023/09/download_private_file.png)
</details>

<details>
  <summary>Iframes</summary>

  ### Iframe system

  Insert easy iframes, PDFs too

  ![Backend Frontend Template Pro: example of an iframe on a page of the admin plugin menu](https://moisesbarrachina.online/wp-content/uploads/2023/09/iframe_1.png)

  ![Backend Frontend Template Pro: example of an PDF by iframe on a page of the admin plugin menu](https://moisesbarrachina.online/wp-content/uploads/2023/09/iframe_2.png)
</details>

<details>
  <summary>AJAX</summary>

  ### AJAX frontend system

  More functions and examples for the WordPress frontend, AJAX forms too

  An static shortcode is cached by a cache system, but the AJAX responses are dynamic and the cache plugin doesn't interfere with the response

  ![Backend Frontend Template Pro: frontend options include shortcodes, AJAX and AJAX forms](https://moisesbarrachina.online/wp-content/uploads/2023/09/ajax_form_1.png)

  ![Backend Frontend Template Pro: example of menu and response by AJAX through jQuery](https://moisesbarrachina.online/wp-content/uploads/2023/09/ajax_form_2.png)


  [Check it out on the shop](https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/)
</details>

## Upgrading later

You can start now with the totally free version of this WordPress Plugin Template and later upgrade to BFT Pro

When you buy Backend Frontend Template Pro you will have two folders in the download, one folder has everything, a complete plugin, and the other folder only contains the new BFT Pro licensed files, so it will not replace any existing files

In addition, BFT checks if the BFT Pro folders exist, in which case it automatically loads the classes with the extra tools
