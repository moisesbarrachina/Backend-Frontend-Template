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
	<p><?=$this->esc_html_e("Backend Frontend Template provides several functions about countries")?>:</p>
	<ol>
		<li>
			<h3>$this->countries_codes_names_get()</h3>
			<p><?=$this->esc_html_e("Returns a country list")?></p>
			<pre>
	$countries_codes_names = [
		'AF'=> $this->__('Afghanistan'),
		'AX'=> $this->__('Aland Islands'),
		'AL'=> $this->__('Albania'),
		'DZ'=> $this->__('Algeria'),
		'AS'=> $this->__('American Samoa'),
		'AD'=> $this->__('Andorra'),	
		[...]
			</pre>
		</li>
		<li>
			<h3>$this->country_code_name_get($country_code)</h3>
			<p><?=$this->esc_html_e("Returns the country name through the country code")?></p>
		</li>
	</ol>
</div>