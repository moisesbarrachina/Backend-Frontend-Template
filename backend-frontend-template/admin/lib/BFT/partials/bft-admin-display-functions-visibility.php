<?php

/**
 * Explaining the visibility needed in the functions
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
	<p><?=$this->esc_html_e("A quick summary for what visibility to use in the functions of your plugin")?>:</p>
	<ul>
			<li>
				<h3>Private</h3>
				<p><?=$this->esc_html_e("Don't use private functions, BFT use inheritance on the classes and a private function can't inheritance")?></p>
			</li>
			<li>
				<h3>Protected</h3>
				<p><?=$this->esc_html_e("Ideal for the internal functions for security reasons, only your classes can use these functions")?></p>
			</li>
			<li>
				<h3>Public</h3>
				<p><?=$this->esc_html_e("Some functions need to be public because of how WordPress works")?>:
				</p>
				<ul>
					<li><?=$this->esc_html_e("Functions called via")?> $this->admin_pages -> an_admin_page -> 'function_load' data</li>
					<li><?=$this->esc_html_e("Functions called via")?> $this->admin_pages -> an_admin_page -> 'function' data</li>
					<li><?=$this->esc_html_e("Functions called via install, upgrade or uninstall")?></li>
					<li><?=$this->esc_html_e("Functions called via shortcodes")?></li>
					<li><?=$this->esc_html_e("Functions called via AJAX responses")?></li>
				</ul>
			</li>
	</ul>
</div>