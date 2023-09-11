<?php

/**
 * Explaining the next updates
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
<div class="wrap bft_wrap bft_wrap_ol_ul">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<ul>
		<li>
			<h3>WordPress</h3>
			<p><?=$this->esc_html_e("Use of the class")?> WP_List_Table <?=$this->esc_html_e("and other WordPress functions")?></p>
			<p><a href="https://wordpress.com/" target="_blank">https://wordpress.com</a></p>
		</li>
		<li>
			<h3>WP Plugin Boilerplate</h3>
			<p><?=$this->esc_html_e("Basic structure for a WordPress plugin")?></p>
			<p><a href="https://github.com/DevinVinson/WordPress-Plugin-Boilerplate" target="_blank">https://github.com/DevinVinson/WordPress-Plugin-Boilerplate</a></p>
		</li>
		<li>
			<h3>jQuery</h3>
			<p><?=$this->esc_html_e("JavaScript library")?></p>
			<p><a href="https://jquery.com/" target="_blank">https://jquery.com</a></p>
		</li>
		<li>
			<h3>Bootstrap</h3>
			<p><?=$this->esc_html_e("System to expand the possibilities of the forms")?>, <?=$this->esc_html_e("the admin CSS is a handmade cut to make it less intrusive with the WordPress admin CSS")?></p>
			<p><a href="https://getbootstrap.com/" target="_blank">https://getbootstrap.com</a></p>
		</li>
		<li>
			<h3>Bootstrap select</h3>
			<p><?=$this->esc_html_e("jQuery plugin for expande the select posibilities")?></p>
			<p><a href="https://developer.snapappointments.com/bootstrap-select/" target="_blank">https://developer.snapappointments.com/bootstrap-select</a></p>
		</li>
		<li>
			<h3>Moment.js</h3>
			<p><?=$this->esc_html_e("Manipulate and display dates and times in JavaScript")?></p>
			<p><a href="https://momentjs.com/" target="_blank">https://momentjs.com</a></p>
		</li>
		<li>
			<h3>Date Range Picker</h3>
			<p><?=$this->esc_html_e("Date range selection")?></p>
			<p><a href="https://www.daterangepicker.com/" target="_blank">https://www.daterangepicker.com</a></p>
		</li>
	</ul>
</div>