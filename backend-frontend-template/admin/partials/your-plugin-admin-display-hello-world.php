<?php

/**
 * Area view for the plugin: Hello World page
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

//Hello world

//Log of $this->admin_pages
//$this->debug_log_write($this->admin_pages); 

//PHP text translated:
//$this->__("string");

//PHP text translated and HTML escaped 
//$this->esc_html_e("string");

$this->admin_permission_check();
?>
<div class="wrap bft_wrap">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<p><?=$this->esc_html_e("This page is allocated on")?> <b>admin/partials/your-plugin-admin-display-hello-world.php</b></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ante lacinia, tincidunt ante eget, viverra velit. Phasellus consectetur bibendum nunc. Proin feugiat quis urna sagittis efficitur. Integer tempor nisl aliquet felis auctor finibus. Sed ornare sed arcu id interdum. Cras vitae massa varius, consequat arcu non, consectetur mi. Cras nunc libero, semper ac consequat id, porta in nisl. Praesent semper aliquet ipsum eu lacinia. Pellentesque in nulla vitae velit semper convallis. Praesent a urna condimentum, volutpat odio ac, iaculis purus. Curabitur felis nibh, porttitor at mi ac, convallis suscipit ligula. Nunc leo nunc, imperdiet eu massa at, faucibus consequat ante. Etiam quis augue feugiat, congue quam accumsan, tempus erat. Pellentesque lacinia ex vitae neque laoreet, sit amet finibus ante scelerisque.</p>
</div>