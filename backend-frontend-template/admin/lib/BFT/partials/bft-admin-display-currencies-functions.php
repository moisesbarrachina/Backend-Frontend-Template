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
	<p><?=$this->esc_html_e("Backend Frontend Template provides several functions about currencies")?>:</p>
	<ol>
		<li>
			<h3>$this->currencies_array_get()</h3>
			<p><?=$this->esc_html_e("Returns a currency list with all the data, including the numer of currency on the ISO 4217 standard")?></p>
			<pre>
	$currencies_name_and_symbol = [
		'ARS' => [
			'id'   => 'ARS',
			'name'   => 'Argentina Peso',
			'symbol' => '$',
			'code' => '032',
		],
		'AWG' => [
			'id'   => 'AWG',
			'name'   => 'Aruba Guilder',
			'symbol' => 'ƒ',
			'code' => '533',
		],
		[...]
			</pre>
		</li>
		<li>
			<h3>$this->currencies_selector_get()</h3>
			<p><?=$this->esc_html_e("Returns a currency list")?></p>
			<pre>
	$currencies_name_and_symbol = [
		'ALL' => 'L - Albania Lek',
		'AFN' => '؋ Afghanistan Afghani',
		'ARS' => '$ Argentina Peso',
		'AWG' => 'ƒ Aruba Guilder',
		[...]
			</pre>
		</li>
		<li>
			<h3>$this->currency_symbol_get($currency_id)</h3>
			<p><?=$this->esc_html_e("Returns the currency symbol through the currency code")?></p>
		</li>
		<li>
			<h3>$this->currency_code_get($currency_id)</h3>
			<p><?=$this->esc_html_e("Returns the ISO 4217 number through the currency id")?></p>
		</li>
	</ol>
</div>