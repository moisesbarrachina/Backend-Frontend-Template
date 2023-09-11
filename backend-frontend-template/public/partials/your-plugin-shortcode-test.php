<?php

/**
 * Display a shortcode test
 * 
 * @link		https://yourfuturewebsite
 * @since		0.0.1
 * @version		0.0.1
 * @package		Your_Plugin
 * @subpackage	Your_Plugin/public/partials
 * @author	  	Plugin Author <pluginauthor@email>
 */

/*
	Uses Backend Frontend Template 1.0.0
	https://moisesbarrachina.online
*/

?>

<div>
    <h3>BFT: <?=$this->esc_html_e("Hello World")?>, <?=$this->esc_html_e("this is a static and cacheable text")?></h3>
    <?=$html_aux?>
</div>