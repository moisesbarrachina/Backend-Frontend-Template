<?php

/**
 * Explaining how chante BFT to a custom plugin
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
	<ol>
		<li>
			<h3><?=$this->esc_html_e("Make the plugin your own")?></h3>
			<ol>
				<li><?=$this->esc_html_e("Change the files of")?> wp-content/plugins/backend-frontend-template <?=$this->esc_html_e("with the id of your plugin")?> (<?=$this->esc_html_e("like");?> 'a-plugin-name')</li>
				<li><?=$this->esc_html_e("Delete the files or change their extension")?>: 
					<ol>
						<li><b>wp-content/plugins/backend-frontend-template/backend-frontend-template.php</b></li>
						<li><b>wp-content/plugins/backend-frontend-template/includes/class-bft.php</b></li>
					</ol>
				</li>
				<li><?=$this->esc_html_e("Change the extension of the files to PHP")?>:
					<ol>
						<li><b>wp-content/plugins/backend-frontend-template/your-plugin.txt</b></li>
						<li><b>wp-content/plugins/backend-frontend-template/includes/class-your-plugin.txt</b></li>
					</ol>
				</li>
				<li><?=$this->esc_html_e("Uncomment")?>: "<b>//$this->admin_pages_main_name = $this->plugin_title;</b> on <b>wp-content/plugins/backend-frontend-template/admin/class-your-plugin-admin.php</b></li>
				<li><?=$this->esc_html_e("Find and replace all the file names with")?> <b>'your-plugin'</b> <?=$this->esc_html_e("like")?> 'class-your-plugin.php' <?=$this->esc_html_e("to your plugin id")?>, <?=$this->esc_html_e("example")?>: 'class-a-plugin-name.php'.</li>
				<li><?=$this->esc_html_e("On")?> <b>wp-content/plugins/backend-frontend-template/languages</b> <?=$this->esc_html_e("replace the file names with")?> <b>'bft-internationalization'</b> <?=$this->esc_html_e("to")?> 'your-plugin', <?=$this->esc_html_e("example")?>: 'a-plugin-name-es_ES.mo'</li>
				<li><?=$this->esc_html_e("Go to search and replace of your editor, active 'match case' and replace this strings")?>:
					<ol>
						<li><b>'bft-internationalization'</b> <?=$this->esc_html_e("to")?> <b>'your-plugin'</b></li>
						<li><b>'$plugin_slug = "bft_pro"'</b> <?=$this->esc_html_e("to")?> <b>$plugin_slug = "your_plugin"</b></li>
						<li><b>'bft_shortcode'</b> <?=$this->esc_html_e("to")?> <b>your_plugin_shortcode</b></li>
						<li><b>'bft-shortcode'</b> <?=$this->esc_html_e("to")?> <b>your-plugin-shortcode</b></li>
					</ol>
				</li>
				<li><?=$this->esc_html_e("Go to search and replace of your editor, active 'match case' and replace the words with the names and ids of your plugin")?>:
					<ol>
						<li><b>Description of Your Plugin</b></li>
						<li><b>https://yourfuturewebsite/your-plugin/</b></li>
						<li><b>https://yourfuturewebsite</b></li>
						<li><b>Plugin Author</b></li>
						<li><b>pluginauthor@email</b></li>
						<li><b>Your Plugin</b></li>
						<li><b>your_plugin</b></li>
						<li><b>Your_Plugin</b></li>
						<li><b>your-plugin</b></li>
						<li><b>YOUR_PLUGIN</b></li>
					</ol>
				</li>
				<li><?=$this->esc_html_e("Replace the icon for you own on")?> <b>wp-content/plugins/backend-frontend-template/admin/img/icon-16px.png</b></li>
			</ol>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Know the main plugin folders")?></h3>
			<ol>
				<li>/admin -> <?=$this->esc_html_e("administration folder")?></li>
				<li>/includes -> <?=$this->esc_html_e("global folder")?>, <?=$this->esc_html_e("for administration and plublic files")?></li>
				<li>/languages -> <?=$this->esc_html_e("translation files")?>, <?=$this->esc_html_e("this binarian files are made with programs like")?> <a href="https://poedit.net/" target="_blank">Poedit</a> <?=$this->esc_html_e("or")?> <a href="http://www.eazypo.ca/" target="_blank">Eazy Po</a></li>
				<li>/private -> <?=$this->esc_html_e("for sensitive data that only a download script can send the file to the user")?></li>
				<li>/admin -> <?=$this->esc_html_e("public folder")?></li>
			</ol>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Know the plugin sub-folders")?></h3>
			<ol>
				<li>/css -> <?=$this->esc_html_e("CSS files")?></li>
				<li>/img -> <?=$this->esc_html_e("images")?></li>
				<li>/js -> <?=$this->esc_html_e("JavaScript files")?></li>
				<li>/lib -> <?=$this->esc_html_e("library")?>, <?=$this->esc_html_e("the internal BFT files are stored here")?></li>
				<li>/partials -> <?=$this->esc_html_e("frontend files")?></li>
			</ol>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Know the main files")?> <span>(<?=$this->esc_html_e("using the original filenames")?>)</span></h3> 
			<ol>
				<li>/includes/<b>class-your-plugin.txt</b> -> <?=$this->esc_html_e("main class of the plugin")?></li>
				<li>/includes/<b>class-your-plugin-activator.php</b> -> <?=$this->esc_html_e("control when the plugin is activated")?></li>
				<li>/includes/<b>class-your-plugin-deactivator.php</b> -> <?=$this->esc_html_e("control when the plugin is deactivated")?></li>
				<li>/includes/<b>class-your-plugin-cronjobs.php</b> -> <?=$this->esc_html_e("control the cronjobs of the plugin")?></li>
				<li>/includes/<b>class-your-plugin-install-upgrade-deinstall-database.php</b> -> <?=$this->esc_html_e("install and erase the plugin database")?></li>
				<li>/includes/<b>class-your-plugin-functions-admin-public.php</b> -> <?=$this->esc_html_e("class with functions for admin and public classes")?>, <?=$this->esc_html_e("it's an extension of the BFT admin-public class")?></li>
				<li>/admin/<b>class-your-plugin-admin.php</b> -> <?=$this->esc_html_e("class for the admin section")?>, <?=$this->esc_html_e("it's an extension of the BFT admin-public class, your admin-public class and BFT admin class")?></li>
				<li>/public/<b>class-your-plugin-public.php</b> -> <?=$this->esc_html_e("class for the public section")?>, <?=$this->esc_html_e("it's an extension of the BFT admin-public class, your admin-public class and BFT public class")?></li>
			</ol>
		</li>
		<li>
			<h3><?=$this->esc_html_e("See the examples")?></h3>
			<ol>
				<li><?=$this->esc_html_e("On the next tabs you can see examples of how to work with Backend Frontend Template")?></li>
			</ol>
		</li>
	</ol>
</div>