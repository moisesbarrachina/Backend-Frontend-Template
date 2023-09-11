<?php

/**
 * Explaining what are the differences between BFT and BFT Pro
 *
 * @link		https://moisesbarrachina.online/
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT/partials
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
*/

$this->admin_permission_check();

?>
<style>

.bft_image_80 {
    width: 80%;
}
	</style>
<div class="wrap bft_wrap bft_wrap_ol_ul">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<p>Backend Frontend Template Pro <?=$this->esc_html_e("expand your posibilities, make a lot more on less time")?>. <a target="_blank" href="https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/"><?=$this->esc_html_e("Check it out on the shop and save time!")?></a></p>
	<ol>
		<li>
			<h3><?=$this->esc_html_e("Menú system with childs")?></h3>
			<p><?=$this->esc_html_e("Add child pages and organize better your plugin")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/nested_menu_basic.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Settings system")?></h3>
			<p><?=$this->esc_html_e("Create, manage and store WordPress variables with setting pages, it's really easy")?></p>
			<pre>
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
			</pre>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/settings.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Advance inputs")?></h3>
			<p><?=$this->esc_html_e("Add inputs like images, select multiples, etc.")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/inputs.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Example database")?></h3>
			<p><?=$this->esc_html_e("Play around with the example data all you want")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/BBDD.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Install or delete the plugin database")?></h3>
			<p><?=$this->esc_html_e("Add menu for (de)install your plugin database")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/de_install.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Automated data manipulation")?></h3>
			<p><?=$this->esc_html_e("Manage all the data only specifying the table and the fields. The table can have internationalized fields")?></p>
			<pre>
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
			</pre>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/course_math.png" class="bft_image_80"/></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/teacher_1_notes.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Manual data manipulation")?></h3>
			<p><?=$this->esc_html_e("More functions to manage manually the database")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/manage_data_manually.png" class="bft_image_80"/></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/manage_data_manually_form_1.png" class="bft_image_80"/></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/manage_data_manually_form_2.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Paginated listing by query")?></h3>
			<p><?=$this->esc_html_e("A WordPress paginated listing style thanks to a SQL query in pieces")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/paginated_listing_by_query.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Direct listing by array")?></h3>
			<p><?=$this->esc_html_e("A WordPress listing style thanks to a array")?></p>
			<pre>
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
			</pre>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/listing_by_array.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Download system for private files")?></h3>
			<p><?=$this->esc_html_e("Easy method for download private files")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/download_private_file.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Iframe system")?></h3>
			<p><?=$this->esc_html_e("Insert easy iframes, PDFs too")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/iframe_1.png" class="bft_image_80"/></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/iframe_2.png" class="bft_image_80"/></p>
		</li>
		<li>
			<h3><?=$this->esc_html_e("AJAX frontend system")?></h3>
			<p><?=$this->esc_html_e("More functions and examples for the frontend")?></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/ajax_form_1.png" class="bft_image_80"/></p>
			<p><img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/ajax_form_2.png" class="bft_image_80"/></p>
		</li>
	</ol>
	<p><a target="_blank" href="https://moisesbarrachina.online/en/producto/backend-frontend-template-pro/"><?=$this->esc_html_e("Buy Backend Frontend Template Pro now and save time!")?></a></p>
</div>

