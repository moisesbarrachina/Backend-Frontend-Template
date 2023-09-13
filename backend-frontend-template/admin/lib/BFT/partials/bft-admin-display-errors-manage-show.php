<?php

/**
 * Explaining how manage errors
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT/partials
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
*/

$this->admin_permission_check();

$error_message = $this->__("This is an error test");
$this->error_show ($error_message);

$url_test = admin_url()."admin.php?page=".$this->plugin_slug."_throw_error_and_return_to_parent";
?>
<div class="wrap bft_wrap bft_wrap_ol_ul">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<ol>
			<li>
				<h3><?=$this->esc_html_e("Show an error")?></h3>
				<p><?=$this->esc_html_e("Backend Frontend Template can easily show errors, and it doesn't repeat the same error on the same load. Also: the plugin title will be add to the message")?>
				</p>
				<ul>
					<li><b>$this->error_show ($error_message = "")</b> <?=$this->esc_html_e("show an error message")?>. <?=$this->esc_html_e("If")?> $error_message = "" <?=$this->esc_html_e("it shows")?> "<?=$this->__('Error detected')?>"</li>
					<li><?=$this->esc_html_e("Adding")?> <b>error_message</b> <?=$this->esc_html_e("on the")?> GET URL, <?=$this->esc_html_e("the error message can be triggered with the functions")?> $this->admin_permission_check() <?=$this->esc_html_e("or")?> $this->error_throw()</li>
				</ul>
			</li>
			<li>
				<h3><?=$this->esc_html_e("Throw an error")?></h3>
				<p>
					<?=$this->esc_html_e("BFT can throw errors with")?>
					</br>
					<b>$this->error_throw ($error_message = "", $error_throw_what_do_use_this = NULL, $error_throw_file_change_use_this = NULL, $triggered_on_function_load = false, $page_id = NULL)</b>
				</p>
				<ul>
					<li><b>$error_message</b>: <?=$this->esc_html_e("error to send to")?> $this->error_show(), <?=$this->esc_html_e("but first it will display the 'error_message' stored on the URL")?></li>
					<li><b>$error_throw_what_do_use_this</b>: <?=$this->esc_html_e("for use this data instead of")?> $this->admin_pages_data_get("error_throw_what_do"), <?=$this->esc_html_e("options")?>: show_error, show_error_and_die, go_to_parent</li>
					<li><b>$error_throw_file_change_use_this</b>: <?=$this->esc_html_e("default NULL")?>, <?=$this->esc_html_e("use this data instead of")?> $this->admin_pages_data_get("error_throw_file_change"), <?=$this->esc_html_e("for change the file displayed if error triggerred")?></li>
					<li><b>$triggered_on_function_load</b>: <?=$this->esc_html_e("default false")?>, 'go_to_parent' <?=$this->esc_html_e("only works if")?> true == $triggered_on_function_load <?=$this->esc_html_e("because it's needed do the redirect before sending the headers")?> (<?=$this->esc_html_e("id required data and go to parent are only BFT Pro options")?>)</li>
					<li><b>$page_id</b>: <?=$this->esc_html_e("the key/page name, if null it's the visualized page")?></li>
				</ul>
			</li>
			<li>
				<h3><?=$this->esc_html_e("Examples")?></h3>
				<ul>
					<li>
						<?=$this->esc_html_e("This page show an error with")?>:

						<pre>
		$error_message = $this->__("This is an error test");
		$this->error_show ($error_message);
						</pre>
					</li>
					<li>
						<?=$this->esc_html_e("The children page throws an error and return to this page with")?>:
					
						<pre>
		$this->admin_pages = [
			"errors_manage" => [
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
		];
						</pre>
						<p>
							<strong><?=$this->esc_html_e("id required data and go to parent are only BFT Pro options")?></strong></a>
						</p>
						<p>
							<img src="https://moisesbarrachina.online/wp-content/uploads/2023/09/bft-screenshot-4-go_to_parent.png" class="bft_image_80"/>
						</p>
					</li>
				</ul>
			</li>
	</ol>
</div>