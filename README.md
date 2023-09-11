# Backend Frontend Template

A plugin, template and library for develop WordPress plugins easily and quickly. Save time, do more

## Screenshots

First steps to make the plugin your own
![Backend Frontend Template: dashboard: the menu system](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-1.png)

Dashboard: the menu system
![Backend Frontend Template: dashboard: the menu system](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-2.png)

Dashboard: menu code example
![Backend Frontend Template: dashboard: menu code example](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-3.png)

Dashboard: manage and display errors
![Backend Frontend Template: dashboard: manage and display errors](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-4.png)

Client side: shortcode system
![Backend Frontend Template: client side: shortcode system](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-5.png)

Client side: shortcode complete example
![Backend Frontend Template: client side: shortcode complete example](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-6.png)

Client side: shortcode results
![Backend Frontend Template: client side: shortcode results](https://moisesbarrachina.online/wp-content/uploads/2023/09/screenshot-7.png)

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

## License

Backend Frontend Template is licensed under the GPL v3 or later

## Credits

Backend Frontend Template uses the basic structure for a plugin established by The WordPress Plugin Boilerplate was started in 2011 by [WordPress Plugin Boilerplate](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate)

# Backend Frontend Template Pro

You can save even more time with [BFT Pro](https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/), upgrade now and you will be able to make submenus, automated or manual data lists, forms without coding, AJAX on the frontend and many more possibilities

![Backend Frontend Template Pro: dashboard database manipulation and listing example](https://moisesbarrachina.online/wp-content/uploads/2023/09/teacher_1_notes.png)

[Check it out on the shop](https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/)

## Upgrading later

You can start now with the totally free version and later upgrade to BFT Pro

When you buy Backend Frontend Template Pro you will have two folders in the download, one folder will have everything, a complete plugin, and the other folder will only contain the new BFT Pro licensed files, so it will not replace any existing files

In addition, BFT checks if the BFT Pro folders exist, in which case it automatically loads the classes with the extra tools
