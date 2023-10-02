<?php

/**
 * Explaining how manage the security on WordPress and BFT
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.1.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT/partials
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
*/

$this->admin_permission_check();
?>
<div class="wrap bft_wrap bft_wrap_ol_ul">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<ol>
		<li>
			<h3>Function load</h3>
			<p><?=$this->esc_html_e("The 'function_load' option of the menu is the function that the page executes before sending the HTML headers")?></p>
			<p>
				<?=$this->esc_html_e("By default all pages execute")?> <b>admin_permission_check_and_ids_required_check_function_load()</b>, <?=$this->esc_html_e("the executed function can be changed on")?>
				</br>
				<b>class-your-plugin-admin -> $this->admin_pages_function_load_default = "admin_permission_check_and_ids_required_check_function_load"</b>
			</p>
			<p><?=$this->esc_html_e("The function")?> admin_permission_check_and_ids_required_check_function_load() <?=$this->esc_html_e("checks if the admin capabilities are correct and if the id required data is not missing. In this function it works the")?> 'go_to_parent' <?=$this->esc_html_e("option of the menu (the id check only on Backend Frontend Template Pro)")?></p>
			<p><?=$this->esc_html_e("This function can be called at the beginning of a custom function_load to check all before save changes")?></p>
			<p><?=$this->esc_html_e("NOTE")?>: <?=$this->esc_html_e("id required data and go to parent are only BFT Pro options")?></p>
		</li>
		<li>
			<h3>Function</h3>
			<p><?=$this->esc_html_e("The 'function' option of the menu is the main function that the page executes")?>
			</p>
			<p>
				<?=$this->esc_html_e("By default all pages execute")?> <b>admin_permission_check_and_ids_required_and_optional_check_page_display()</b>, <?=$this->esc_html_e("the executed function can be changed on")?>
				</br>
				<b>class-your-plugin-admin -> $this->admin_pages_function_default = "admin_permission_check_and_ids_required_and_optional_check_page_display"</b>
			</p>
			<p><?=$this->esc_html_e("The function")?> admin_permission_check_and_ids_required_and_optional_check_page_display() <?=$this->esc_html_e("checks if the admin capabilities are correct and if the id required data is not missing")?></p>
			<p><?=$this->esc_html_e("On a custom function there are functions for checking the access and to retrieve the ids")?>:</p>
			<ul>
				<li><b>$this->admin_permission_check()</b>: <?=$this->esc_html_e("check the admin permissions and throw an error if needed. Recommended for use at the beginning of the function")?></li>
				<li><?=$this->esc_html_e("More functions on BFT Pro")?></li>
			</ul>
		</li>
	</ol>
</div>