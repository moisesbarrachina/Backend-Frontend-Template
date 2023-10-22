<?php

/**
 * Explaining how create and manage shortcodes
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
	<p><?=$this->esc_html_e("It's easy create an manage shotcodes with BFT")?>:</p>
	<ol>
		<li>
			<h3><?=$this->esc_html_e("Defining a shortcode")?></h3>
			<p><?=$this->esc_html_e("The shortcodes on BFT are defined on")?> <b>public -> class-your-plugin-admin -> shortcodes_init_plugin()</b></p>
			<p><?=$this->esc_html_e("The structure of a shortcode is")?>:</p>
			<pre>
	add_shortcode("shortcode-name", array($this, "shortcode_function_name"));
			</pre>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Defining a function")?></h3>
			<p><?=$this->esc_html_e("The structure of a shortcode function is")?>:</p>
			<pre>
	public function shortcode_function_name ( $atts = [], $content = null, $tag = '' ) {
	}
			</pre>
			<p><?=$this->esc_html_e("The variables of the function are")?>:</p>
			<ul>
				<li><b>$atts</b>: <?=$this->esc_html_e("array with all the data specified on the shortcode")?></li>
				<li><b>$content</b>: <?=$this->esc_html_e("the content within the two tags, if the shortcode uses a clossing tag")?></li>
				<li><b>$tag</b>: <?=$this->esc_html_e("the shotcode tag")?></li>
				<li></li>
			</ul>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Shortcodes uses examples")?></h3>
			<p><?=$this->esc_html_e("A shortcode without data on")?> $atts <?=$this->esc_html_e("and")?> $content</p>
			<pre>
	[bft-shortcode-test]
			</pre>
			<p><?=$this->esc_html_e("Shortcode with data on")?> $atts <?=$this->esc_html_e("and")?> $content</p>
			<pre>
	[bft-shortcode-test atts_data_1="Lorem ipsum" atts_data_2="Dolor sit amet"]<?=$this->esc_html_e("Content data")?>[/bft-shortcode-test]
			</pre>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Complete example")?></h3>
			<pre>
	public function shortcodes_init_plugin() {
		add_shortcode("bft-shortcode-test", array($this, "bft_shortcode_test"));
	}
			</pre>
			<pre>
	public function bft_shortcode_test( $atts = [], $content = null, $tag = '' ) {

		$html_aux = "";

		if (isset($atts["additional_text"])) {
			$html_aux .= "<?=esc_html("<h4>")?>".esc_html($atts["additional_text"])."<?=esc_html("</h4>")?>";
		}

		if (!is_null($content)) {
			$html_aux .= "<?=esc_html("<p>")?>".esc_html($content)."<?=esc_html("<p>")?>";
		}

		ob_start();
		require plugin_dir_path( dirname( __FILE__ ) ) . "public/partials/your-plugin-shortcode-test.php";
		$html = ob_get_clean(); 

		return $html;
	}
			</pre>
		</li>
		<li>
			<h3><?=$this->esc_html_e("Try it for yourself")?></h3>
			<p><?=$this->esc_html_e("Create a page, insert a shortcode block and put")?>:</p>
			<pre>
		[bft-shortcode-test]
			</pre>
			<p><?=$this->esc_html_e("Or")?>:</p>
			<pre>
		[bft-shortcode-test additional_text="<?=$this->esc_html_e("This is an additional text")?>"]<?=$this->esc_html_e("The text inside de tags")?>[/bft-shortcode-test]
			</pre>
		</li>
	</ol>
	<p>
		<img src="https://moisesbarrachina.online/wp-content/uploads/2023/10/Shortcode-simple-on-editor-V3.png" class="bft_image_80"/>
	</p>
	<p>
		<img src="https://moisesbarrachina.online/wp-content/uploads/2023/10/Shortcode-simple-on-visitor-side-V3.png" class="bft_image_80"/>
	</p>
</div>