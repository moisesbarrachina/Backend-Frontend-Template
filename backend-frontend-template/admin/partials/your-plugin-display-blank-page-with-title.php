<?php

/**
 * Area view for the plugin: blank page with the menu tabs and title of the page
 *
 * @link		https://yourfuturewebsite
 * @since		0.0.1
 * @version		0.0.1
 * @package		Your_Plugin
 * @subpackage	Your_Plugin/admin/partials
 * @author		Plugin Author <pluginauthor@email>
*/

/*
	Uses Backend Frontend Template 1.0.0
	https://moisesbarrachina.online
*/

$this->admin_permission_check();
?>
<div class="wrap bft_wrap">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
</div>