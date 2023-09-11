<?php

/**
 * Area view for the plugin: blank page with the menu tabs
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT/partials
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
*/

$this->admin_permission_check();
?>
<div class="wrap bft_wrap">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->esc_html_e("Backend Frontend Template - create plugins for WordPress in no time")?>
	<?=$this->esc_html_e("BFT is a plugin, template and library for develop WordPress plugins easily and quickly. Save time, do more")?>
	<?=$this->esc_html_e("Create an advanced plugin quickly and easily. BFT is not only a template, it's also a library for WordPress plugin developers")?>
</div>