<?php

/**
 * Explaining the internationalization
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.0.0
 * @package		BFT
 * @subpackage	BFT/admin/lib/BFT/partials
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
*/

$this->admin_permission_check();
$download_url_direct = plugin_dir_url( __FILE__ )."../../../../private/hello_world.pdf";
$download_url_by_plugin = admin_url()."admin.php?page=".$this->plugin_slug."_download&file=hello_world.pdf";
?>
<div class="wrap bft_wrap bft_wrap_ol_ul">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<p><?=$this->esc_html_e("For specify a text that maybe needs translation, WordPress provides the functions")?>: <b>$this->__("string")</b> <?=$this->esc_html_e("for direct translation and")?> <b>$this->esc_html_e("string")</b> <?=$this->esc_html_e("for translation and scape the HTML characters")?></p>
	<ul>
		<li><b>$this->__("string")</b>: <?=$this->esc_html_e("for direct translation")?></li>
		<li><b>$this->esc_html_e("string")</b> <?=$this->esc_html_e("for translation and scape the HTML characters")?></li>
	</ul>
	<p><?=$this->esc_html_e("For more functions search on the WordPress documentation")?>: <a href="https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/" target="_blank"><?=$this->esc_html_e("link here")?></a></p>
	<p><?=$this->esc_html_e("With that, a translation plugin will be able to translate your plugin into the visitor language")?>
	<p><?=$this->esc_html_e("But if you want make your own translation for your own plugin: you can allocate the language files on")?> plugin_folder/languages, <?=$this->esc_html_e("BFT automatically will set WordPress to search translations on that folder")?></p>
	<p><?=$this->esc_html_e("The language files are")?>:</p>
	<ul>
		<li><b>.pot</b>: Portable Object Template, <?=$this->esc_html_e("the master file with all the strings")?></li>
		<li><b>.po</b>: Portable Object, <?=$this->esc_html_e("the file with the strings translated to one language")?></li>
		<li><b>.mo</b>: Portable Object, Machine Object, <?=$this->esc_html_e("the compiled data of the .po file, WordPress use this file")?></li>
	</ul>
	<p><?=$this->esc_html_e("For create the files you can use programs like")?> <a href="https://poedit.net/" target="_blank">Poedit</a> <?=$this->esc_html_e("or")?> <a href="http://www.eazypo.ca/" target="_blank">EazyPo</a></p>
</div>