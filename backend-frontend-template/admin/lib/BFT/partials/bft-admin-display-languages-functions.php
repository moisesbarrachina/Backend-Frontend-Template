<?php

/**
 * Explaining how get countries
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
<div class="wrap bft_wrap">
	<h1><?=$this->esc_html_e($this->admin_title)?></h1>
	<?=$this->html_tabs(false)?>
	<h2><?=$this->esc_html_e($title)?></h2>
	<p><?=$this->esc_html_e("Backend Frontend Template provides several functions about languages")?>:</p>
	<ol>
		<li>
			<h3>$this->languages_codes_names_get()</h3>
			<p><?=$this->esc_html_e("Returns a language list")?></p>
			<pre>
	$languages_codes_names = [
		'ab' => $this->__('Abkhazian'),
		'aa' => $this->__('Afar'),
		'af' => $this->__('Afrikaans'),
		'ak' => $this->__('Akan'),
		'sq' => $this->__('Albanian'),
		'am' => $this->__('Amharic'),
		[...]
			</pre>
		</li>
		<li>
			<h3>$this->languages_get($country_code)</h3>
			<p><?=$this->esc_html_e("Returns the data stored in the setting")?> $this->option_field_get("languages")</p>
		</li>
		<li>
			<h3>$this->language_admin_get($country_code)</h3>
			<p><?=$this->esc_html_e("Returns the data stored in the setting")?> $this->option_field_get("language_admin") <?=$this->esc_html_e("if exists on")?> $this->option_field_get("languages")</p>
			<ul>
				<li><?=$this->esc_html_e("If languages empty it will set the languages 'en' and 'es'")?></li>
				<li><?=$this->esc_html_e("If language_admin empty or not found on languages, it will set the first language stored in languages")?></li>
			</ul>
		</li>
	</ol>
</div>