<?php

/**
 * Explaining the internationalization
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.1.0
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
	<ol>
		<li>
			<h3><?=$this->esc_html_e("Preparing the text")?></h3>
			<p><?=$this->esc_html_e("For specify a text that maybe needs translation, WordPress provides the functions")?>:</p>
			<ul>
				<li><b>__('string', '<?=$this->esc_html_e("translation domain/plugin id")?>')</b>: <?=$this->esc_html_e("for direct translation")?></li>
				<li><b>_e('string', '<?=$this->esc_html_e("translation domain/plugin id")?>')</b>: <?=$this->esc_html_e("for direct translation and display the translated text")?></li>
				<li><b>esc_html_('string', '<?=$this->esc_html_e("translation domain/plugin id")?>')</b> <?=$this->esc_html_e("for translation and escape the HTML characters")?></li>
				<li><b>esc_html_e('string', '<?=$this->esc_html_e("translation domain/plugin id")?>')</b> <?=$this->esc_html_e("for translation, escape the HTML characters and display the resulting text")?></li>
			</ul>
			<p><?=$this->esc_html_e("For more functions search on the WordPress documentation")?>: <a href="https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/#basic-functions" target="_blank"><?=$this->esc_html_e("link here")?></a></p>
			<p><?=$this->esc_html_e("With that, WordPress will use a translation file if it exists and has that sentence, or a external plugin will be able to translate your plugin into the visitor language")?>
			<p><?=$this->esc_html_e("BFT also provides the option of use its intermediary functions to avoid having to put the domain in every string prepared for a future translation")?>. <?=$this->esc_html_e("With ALL the WordPress translation functions")?>
			<p><?=$this->esc_html_e("For that, call the function through")?> '$this' <?=$this->esc_html_e("and don't put the translation domain")?>
			<ul>
				<li><b>$this->__('string')</b>: <?=$this->esc_html_e("for direct translation")?></li>
				<li><b>$this->_e('string')</b>: <?=$this->esc_html_e("for direct translation and display the translated text")?></li>
				<li><b>$this->esc_html_('string')</b> <?=$this->esc_html_e("for translation and escape the HTML characters")?></li>
				<li><b>$this->esc_html_e('string')</b> <?=$this->esc_html_e("for translation, escape the HTML characters and display the resulting text")?></li>
			</ul>
			<p><?=$this->esc_html_e("NOTE")?>: <?=$this->esc_html_e("the functions allow the domain field, if you put a domain then that domain will be use")?>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Preparing the translation files")?></h3>
			<p><?=$this->esc_html_e("The translation files are allocated in")?> plugin_folder/languages, <?=$this->esc_html_e("BFT automatically will set WordPress to search translations on that folder")?></p>
			<p><?=$this->esc_html_e("The language files are")?>:</p>
			<ul>
				<li><b>.pot</b>: Portable Object Template, <?=$this->esc_html_e("the master file with all the strings")?></li>
				<li><b>.po</b>: Portable Object, <?=$this->esc_html_e("the file with the strings translated to one language")?></li>
				<li><b>.mo</b>: Portable Object, Machine Object, <?=$this->esc_html_e("the compiled data of the .po file, WordPress use this file")?></li>
			</ul>
			<p><?=$this->esc_html_e("Steps for translating a plugin")?>:</p>
			<ol>
				<li><p><?=$this->esc_html_e("Create a new .pot file of your plugin")?></p></li>	
				<li><p><?=$this->esc_html_e("Update/merge the original .pot with the new .pot file")?></p></li>	
				<li><p><?=$this->esc_html_e("Delete the old .pot files and rename the new merged file if needed")?></p></li>		
				<li>
					<p><?=$this->esc_html_e("Prepare the .po language file")?></p>
					<ol>
						<li><p><?=$this->esc_html_e("If it's a new translation language: duplicate the .pot file and change the name and extension to the designed language, like")?> <b>bft-pro - copy.pot</b> <?=$this->esc_html_e("to")?> <b>bft-pro-es.po</b> <?=$this->esc_html_e("or")?> <b>bft-pro-es_ES.po</b></p></li>	
						<li><p><?=$this->esc_html_e("If it's a existing translation language: update/merge the file with the new .pot file")?></p></li>	
					</ol>
				</li>
				<li><p><?=$this->esc_html_e("Translate the sentences of the .po file")?></p></li>		
				<li><p><?=$this->esc_html_e("Create the .mo file from the .po file")?></p></li>		
			</ol>
			<p><?=$this->esc_html_e("To create and merge the files and translate the sentences you can use programs such as")?> <a href="https://poedit.net/" target="_blank">Poedit</a> or <a href="http://www.eazypo.ca/" target="_blank">EazyPo</a></p>
		</li>
	</ol>
</div>