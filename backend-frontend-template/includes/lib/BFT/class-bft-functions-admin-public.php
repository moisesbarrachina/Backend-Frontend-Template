<?php

/**
 * Functions for admin and public clases of Backend Frontend Template
 *
 * @link		https://moisesbarrachina.online
 * @since		1.0.0
 * @version		1.1.0
 * @package		BFT
 * @subpackage	BFT/includes/lib/BFT
 * @author		Moisés Barrachina Planelles <info@moisesbarrachina.online>
 */
class Your_Plugin_BFT_Admin_Public {
	

	/**
	 * BFT admin-public variables
	 */

	/**
	 * The title of this plugin
	 *
	 * @since		1.0.0
	 * @var			string	 $bft_Version	 Version of BFT
	 */
	protected $bft_version = "0.5.26";

	/**
	 * The title of this plugin
	 *
	 * @since		1.0.0
	 * @var			string	 $plugin_title	 "Your Plugin"
	 */
	protected $plugin_title;

	/**
	 * The id of this plugin
	 *
	 * @since		1.0.0
	 * @var			string	 $plugin_id	 	"your-plugin"
	 */
	protected $plugin_id;

	/**
	 * The slug of this plugin
	 *
	 * @since		1.0.0
	 * @var			string	 $plugin_slug	 "your_plugin"
	 */
	protected $plugin_slug;

	/**
	 * The current version of the plugin
	 *
	 * @since		1.0.0
	 * @var			string	 $plugin_version
	 */
	protected $plugin_version;

	/**
	 * The current version of the plugin database
	 *
	 * @since		1.0.0
	 * @var			string|boolean    $database_version
	 */
	protected $database_version;

	/**
	 * Admin where send the notifications
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $admin_email = "";

	/**
	 * The language of the user
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $language_current = "";

	/**
	 * Currency id used
	 * 
	 * @since		1.0.0
	 * @var			int
	 */
	protected $currency_id = "EUR";

	/**
	 * Currency sybol used
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected $currency_symbol = "€";

	/**
	 * Currency order used
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected $currency_order = "after";
	
	/**
	 * Decimals character
	 * 
	 * @since		1.0.0
	 * @var			int
	 */
	protected $currency_decimals_type = ",";

	/**
	 * How to show an interger amount
	 * 
	 * @since		1.0.0
	 * @var			int
	 */
	protected $currency_decimals_on_interer = "integer_with_decimals";

	/**
	 * Database: column datetime creation, name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_created_name = "datetime_created";

	/**
	 * Database: column datetime creation, text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_created_text = "";

	/**
	 * Database: column datetime modification, name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_modified_name = "datetime_modified";

	/**
	 * Database: column datetime modification, text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_modified_text = "";

	/**
	 * Database: column datetime moved to bin, name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_removed_name = "datetime_removed";

	/**
	 * Database: column datetime moved to bin, text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_datetime_removed_text = "";

	/**
	 * Database: column for the status (active-deactive), name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_column_name = "status";

	/**
	 * Database: column for the status (active-deactive), text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_column_text = "";

	/**
	 * Database: enum option for active, name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_option_active_name = "active";

	/**
	 * Database: enum option for active, text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_option_active_text = "";

	/**
	 * Database: enum option for deactive, name
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_option_bin_name = "bin";

	/**
	 * Database: enum option for deactive, text
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_status_option_bin_text = "";

	/**
	 * Database: separator of multiples values
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_multiple_values_separator = "-|-";

	/**
	 * Database: internationalization prefix 
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $database_i18n_suffix = "_i18n";

	/**
	 * Ids of daterangepiker printed
	 * 
	 * @since		1.0.0
	 * @var			string
	 */
	protected  $daterangepicker_script_printed_ids = array();


	/**
	 * Initialize the class and set its properties.
	 *
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		array		$plugin_info 		title, id, slug and version of the plugin
	 * @return		null
	 */
	public function __construct($plugin_info) {

		if (	!is_array($plugin_info)
			||	!isset($plugin_info["title"])
			||	!isset($plugin_info["id"])
			||	!isset($plugin_info["slug"])
			||	!isset($plugin_info["version"])) {
			die("plugin_info error");
		}

		$this->plugin_title = $plugin_info["title"];
		$this->plugin_id = $plugin_info["id"];
		$this->plugin_slug = $plugin_info["slug"];
		$this->plugin_version = $plugin_info["version"];
	}

	/**
	 * Prepare the variables for the admin and public class
	 *
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		null
	 */
	protected function custom_variables_admin_public_set() {

		$this->admin_email  = $this->option_field_get('admin_email');	

		$this->currency_id = $this->option_field_get('currency_id');
		$this->currency_symbol = $this->currency_symbol_get($this->currency_id);
		$this->currency_order = $this->option_field_get('currency_order');
		$this->currency_decimals_type = $this->option_field_get('currency_decimals_type');
		$this->currency_decimals_on_interer = $this->option_field_get('currency_decimals_on_interer');
	}


	/**
	 * Get the admin language, fix it it's needed
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function language_admin_get()
	{
		$languages = $this->option_field_get("languages");
		$language_admin = $this->option_field_get("language_admin");
		
		if (!isset($languages) || is_null($languages) || !is_array($languages) || 0 == count($languages))
		{
			$languages = ["en", "es"];

			//update_option_field is only on admin file for security reasons
			update_option($this->plugin_slug."_languages", $languages);
		}

		if (!in_array($language_admin, $languages))
		{
			//update_option_field is only on admin file for security reasons
			$language_admin = array_values($languages)[0];
			update_option($this->plugin_slug."_language_admin", $language_admin);
		}

		return $language_admin;
	}


	/**
	 * Get the languages of the plugin
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function languages_get() {
		$this->language_admin_get();

		//Second retrieve the data
		$languages = $this->option_field_get("languages");

		return $languages;
	}


	/**
	 * Rerturn a language list
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function languages_codes_names_get() {
        $languages_codes_names = [
			'ab' => $this->__('Abkhazian'),
			'aa' => $this->__('Afar'),
			'af' => $this->__('Afrikaans'),
			'ak' => $this->__('Akan'),
			'sq' => $this->__('Albanian'),
			'am' => $this->__('Amharic'),
			'ar' => $this->__('Arabic'),
			'an' => $this->__('Aragonese'),
			'hy' => $this->__('Armenian'),
			'as' => $this->__('Assamese'),
			'av' => $this->__('Avaric'),
			'ae' => $this->__('Avestan'),
			'ay' => $this->__('Aymara'),
			'az' => $this->__('Azerbaijani'),
			'bm' => $this->__('Bambara'),
			'ba' => $this->__('Bashkir'),
			'eu' => $this->__('Basque'),
			'be' => $this->__('Belarusian'),
			'bn' => $this->__('Bengali'),
			'bh' => $this->__('Bihari languages'),
			'bi' => $this->__('Bislama'),
			'bs' => $this->__('Bosnian'),
			'br' => $this->__('Breton'),
			'bg' => $this->__('Bulgarian'),
			'my' => $this->__('Burmese'),
			'ca' => $this->__('Catalan'),
			'km' => $this->__('Central Khmer'),
			'ch' => $this->__('Chamorro'),
			'ce' => $this->__('Chechen'),
			'ny' => $this->__('Chichewa, Chewa, Nyanja'),
			'zh' => $this->__('Chinese'),
			'cu' => $this->__('Church Slavonic, Old Bulgarian, Old Church Slavonic'),
			'cv' => $this->__('Chuvash'),
			'kw' => $this->__('Cornish'),
			'co' => $this->__('Corsican'),
			'cr' => $this->__('Cree'),
			'hr' => $this->__('Croatian'),
			'cs' => $this->__('Czech'),
			'da' => $this->__('Danish'),
			'dv' => $this->__('Divehi, Dhivehi, Maldivian'),
			'nl' => $this->__('Dutch, Flemish'),
			'dz' => $this->__('Dzongkha'),
			'en' => $this->__('English'),
			'eo' => $this->__('Esperanto'),
			'et' => $this->__('Estonian'),
			'ee' => $this->__('Ewe'),
			'fo' => $this->__('Faroese'),
			'fj' => $this->__('Fijian'),
			'fi' => $this->__('Finnish'),
			'fr' => $this->__('French'),
			'ff' => $this->__('Fulah'),
			'gd' => $this->__('Gaelic, Scottish Gaelic'),
			'gl' => $this->__('Galician'),
			'lg' => $this->__('Ganda'),
			'ka' => $this->__('Georgian'),
			'de' => $this->__('German'),
			'ki' => $this->__('Gikuyu, Kikuyu'),
			'el' => $this->__('Greek (Modern)'),
			'kl' => $this->__('Greenlandic, Kalaallisut'),
			'gn' => $this->__('Guarani'),
			'gu' => $this->__('Gujarati'),
			'ht' => $this->__('Haitian, Haitian Creole'),
			'ha' => $this->__('Hausa'),
			'he' => $this->__('Hebrew'),
			'hz' => $this->__('Herero'),
			'hi' => $this->__('Hindi'),
			'ho' => $this->__('Hiri Motu'),
			'hu' => $this->__('Hungarian'),
			'is' => $this->__('Icelandic'),
			'io' => $this->__('Ido'),
			'ig' => $this->__('Igbo'),
			'id' => $this->__('Indonesian'),
			'ia' => $this->__('Interlingua (International Auxiliary Language Association)'),
			'ie' => $this->__('Interlingue'),
			'iu' => $this->__('Inuktitut'),
			'ik' => $this->__('Inupiaq'),
			'ga' => $this->__('Irish'),
			'it' => $this->__('Italian'),
			'ja' => $this->__('Japanese'),
			'jv' => $this->__('Javanese'),
			'kn' => $this->__('Kannada'),
			'kr' => $this->__('Kanuri'),
			'ks' => $this->__('Kashmiri'),
			'kk' => $this->__('Kazakh'),
			'rw' => $this->__('Kinyarwanda'),
			'kv' => $this->__('Komi'),
			'kg' => $this->__('Kongo'),
			'ko' => $this->__('Korean'),
			'kj' => $this->__('Kwanyama, Kuanyama'),
			'ku' => $this->__('Kurdish'),
			'ky' => $this->__('Kyrgyz'),
			'lo' => $this->__('Lao'),
			'la' => $this->__('Latin'),
			'lv' => $this->__('Latvian'),
			'lb' => $this->__('Letzeburgesch, Luxembourgish'),
			'li' => $this->__('Limburgish, Limburgan, Limburger'),
			'ln' => $this->__('Lingala'),
			'lt' => $this->__('Lithuanian'),
			'lu' => $this->__('Luba-Katanga'),
			'mk' => $this->__('Macedonian'),
			'mg' => $this->__('Malagasy'),
			'ms' => $this->__('Malay'),
			'ml' => $this->__('Malayalam'),
			'mt' => $this->__('Maltese'),
			'gv' => $this->__('Manx'),
			'mi' => $this->__('Maori'),
			'mr' => $this->__('Marathi'),
			'mh' => $this->__('Marshallese'),
			'ro' => $this->__('Moldovan, Moldavian, Romanian'),
			'mn' => $this->__('Mongolian'),
			'na' => $this->__('Nauru'),
			'nv' => $this->__('Navajo, Navaho'),
			'nd' => $this->__('Northern Ndebele'),
			'ng' => $this->__('Ndonga'),
			'ne' => $this->__('Nepali'),
			'se' => $this->__('Northern Sami'),
			'no' => $this->__('Norwegian'),
			'nb' => $this->__('Norwegian Bokmål'),
			'nn' => $this->__('Norwegian Nynorsk'),
			'ii' => $this->__('Nuosu, Sichuan Yi'),
			'oc' => $this->__('Occitan'),
			'oj' => $this->__('Ojibwa'),
			'or' => $this->__('Oriya'),
			'om' => $this->__('Oromo'),
			'os' => $this->__('Ossetian, Ossetic'),
			'pi' => $this->__('Pali'),
			'pa' => $this->__('Panjabi, Punjabi'),
			'ps' => $this->__('Pashto, Pushto'),
			'fa' => $this->__('Persian'),
			'pl' => $this->__('Polish'),
			'pt' => $this->__('Portuguese'),
			'qu' => $this->__('Quechua'),
			'rm' => $this->__('Romansh'),
			'rn' => $this->__('Rundi'),
			'ru' => $this->__('Russian'),
			'sm' => $this->__('Samoan'),
			'sg' => $this->__('Sango'),
			'sa' => $this->__('Sanskrit'),
			'sc' => $this->__('Sardinian'),
			'sr' => $this->__('Serbian'),
			'sn' => $this->__('Shona'),
			'sd' => $this->__('Sindhi'),
			'si' => $this->__('Sinhala, Sinhalese'),
			'sk' => $this->__('Slovak'),
			'sl' => $this->__('Slovenian'),
			'so' => $this->__('Somali'),
			'st' => $this->__('Sotho, Southern'),
			'nr' => $this->__('South Ndebele'),
			'es' => $this->__('Spanish'),
			'su' => $this->__('Sundanese'),
			'sw' => $this->__('Swahili'),
			'ss' => $this->__('Swati'),
			'sv' => $this->__('Swedish'),
			'tl' => $this->__('Tagalog'),
			'ty' => $this->__('Tahitian'),
			'tg' => $this->__('Tajik'),
			'ta' => $this->__('Tamil'),
			'tt' => $this->__('Tatar'),
			'te' => $this->__('Telugu'),
			'th' => $this->__('Thai'),
			'bo' => $this->__('Tibetan'),
			'ti' => $this->__('Tigrinya'),
			'to' => $this->__('Tonga (Tonga Islands)'),
			'ts' => $this->__('Tsonga'),
			'tn' => $this->__('Tswana'),
			'tr' => $this->__('Turkish'),
			'tk' => $this->__('Turkmen'),
			'tw' => $this->__('Twi'),
			'ug' => $this->__('Uighur, Uyghur'),
			'uk' => $this->__('Ukrainian'),
			'ur' => $this->__('Urdu'),
			'uz' => $this->__('Uzbek'),
			've' => $this->__('Venda'),
			'vi' => $this->__('Vietnamese'),
			'vo' => $this->__('Volapük'),
			'wa' => $this->__('Walloon'),
			'cy' => $this->__('Welsh'),
			'fy' => $this->__('Western Frisian'),
			'wo' => $this->__('Wolof'),
			'xh' => $this->__('Xhosa'),
			'yi' => $this->__('Yiddish'),
			'yo' => $this->__('Yoruba'),
			'za' => $this->__('Zhuang, Chuang'),
			'zu' => $this->__('Zulu'),
		];

		return $languages_codes_names;
    }
	

	/**
	 * Rerturn a country list
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function countries_codes_names_get() {
        $countries_codes_names = [
			'AF'=> $this->__('Afghanistan'),
			'AX'=> $this->__('Aland Islands'),
			'AL'=> $this->__('Albania'),
			'DZ'=> $this->__('Algeria'),
			'AS'=> $this->__('American Samoa'),
			'AD'=> $this->__('Andorra'),
			'AO'=> $this->__('Angola'),
			'AI'=> $this->__('Anguilla'),
			'AQ'=> $this->__('Antarctica'),
			'AG'=> $this->__('Antigua And Barbuda'),
			'AR'=> $this->__('Argentina'),
			'AM'=> $this->__('Armenia'),
			'AW'=> $this->__('Aruba'),
			'AU'=> $this->__('Australia'),
			'AT'=> $this->__('Austria'),
			'AZ'=> $this->__('Azerbaijan'),
			'BS'=> $this->__('Bahamas'),
			'BH'=> $this->__('Bahrain'),
			'BD'=> $this->__('Bangladesh'),
			'BB'=> $this->__('Barbados'),
			'BY'=> $this->__('Belarus'),
			'BE'=> $this->__('Belgium'),
			'BZ'=> $this->__('Belize'),
			'BJ'=> $this->__('Benin'),
			'BM'=> $this->__('Bermuda'),
			'BT'=> $this->__('Bhutan'),
			'BO'=> $this->__('Bolivia'),
			'BA'=> $this->__('Bosnia And Herzegovina'),
			'BW'=> $this->__('Botswana'),
			'BV'=> $this->__('Bouvet Island'),
			'BR'=> $this->__('Brazil'),
			'IO'=> $this->__('British Indian Ocean Territory'),
			'BN'=> $this->__('Brunei Darussalam'),
			'BG'=> $this->__('Bulgaria'),
			'BF'=> $this->__('Burkina Faso'),
			'BI'=> $this->__('Burundi'),
			'KH'=> $this->__('Cambodia'),
			'CM'=> $this->__('Cameroon'),
			'CA'=> $this->__('Canada'),
			'CV'=> $this->__('Cape Verde'),
			'KY'=> $this->__('Cayman Islands'),
			'CF'=> $this->__('Central African Republic'),
			'TD'=> $this->__('Chad'),
			'CL'=> $this->__('Chile'),
			'CN'=> $this->__('China'),
			'CX'=> $this->__('Christmas Island'),
			'CC'=> $this->__('Cocos (Keeling) Islands'),
			'CO'=> $this->__('Colombia'),
			'KM'=> $this->__('Comoros'),
			'CG'=> $this->__('Congo'),
			'CD'=> $this->__('Congo, Democratic Republic'),
			'CK'=> $this->__('Cook Islands'),
			'CR'=> $this->__('Costa Rica'),
			'CI'=> $this->__('Cote D\'Ivoire'),
			'HR'=> $this->__('Croatia'),
			'CU'=> $this->__('Cuba'),
			'CY'=> $this->__('Cyprus'),
			'CZ'=> $this->__('Czech Republic'),
			'DK'=> $this->__('Denmark'),
			'DJ'=> $this->__('Djibouti'),
			'DM'=> $this->__('Dominica'),
			'DO'=> $this->__('Dominican Republic'),
			'EC'=> $this->__('Ecuador'),
			'EG'=> $this->__('Egypt'),
			'SV'=> $this->__('El Salvador'),
			'GQ'=> $this->__('Equatorial Guinea'),
			'ER'=> $this->__('Eritrea'),
			'EE'=> $this->__('Estonia'),
			'ET'=> $this->__('Ethiopia'),
			'FK'=> $this->__('Falkland Islands (Malvinas)'),
			'FO'=> $this->__('Faroe Islands'),
			'FJ'=> $this->__('Fiji'),
			'FI'=> $this->__('Finland'),
			'FR'=> $this->__('France'),
			'GF'=> $this->__('French Guiana'),
			'PF'=> $this->__('French Polynesia'),
			'TF'=> $this->__('French Southern Territories'),
			'GA'=> $this->__('Gabon'),
			'GM'=> $this->__('Gambia'),
			'GE'=> $this->__('Georgia'),
			'DE'=> $this->__('Germany'),
			'GH'=> $this->__('Ghana'),
			'GI'=> $this->__('Gibraltar'),
			'GR'=> $this->__('Greece'),
			'GL'=> $this->__('Greenland'),
			'GD'=> $this->__('Grenada'),
			'GP'=> $this->__('Guadeloupe'),
			'GU'=> $this->__('Guam'),
			'GT'=> $this->__('Guatemala'),
			'GG'=> $this->__('Guernsey'),
			'GN'=> $this->__('Guinea'),
			'GW'=> $this->__('Guinea-Bissau'),
			'GY'=> $this->__('Guyana'),
			'HT'=> $this->__('Haiti'),
			'HM'=> $this->__('Heard Island & Mcdonald Islands'),
			'VA'=> $this->__('Holy See (Vatican City State)'),
			'HN'=> $this->__('Honduras'),
			'HK'=> $this->__('Hong Kong'),
			'HU'=> $this->__('Hungary'),
			'IS'=> $this->__('Iceland'),
			'IN'=> $this->__('India'),
			'ID'=> $this->__('Indonesia'),
			'IR'=> $this->__('Iran, Islamic Republic Of'),
			'IQ'=> $this->__('Iraq'),
			'IE'=> $this->__('Ireland'),
			'IM'=> $this->__('Isle Of Man'),
			'IL'=> $this->__('Israel'),
			'IT'=> $this->__('Italy'),
			'JM'=> $this->__('Jamaica'),
			'JP'=> $this->__('Japan'),
			'JE'=> $this->__('Jersey'),
			'JO'=> $this->__('Jordan'),
			'KZ'=> $this->__('Kazakhstan'),
			'KE'=> $this->__('Kenya'),
			'KI'=> $this->__('Kiribati'),
			'KR'=> $this->__('Korea'),
			'KW'=> $this->__('Kuwait'),
			'KG'=> $this->__('Kyrgyzstan'),
			'LA'=> $this->__('Lao People\'s Democratic Republic'),
			'LV'=> $this->__('Latvia'),
			'LB'=> $this->__('Lebanon'),
			'LS'=> $this->__('Lesotho'),
			'LR'=> $this->__('Liberia'),
			'LY'=> $this->__('Libyan Arab Jamahiriya'),
			'LI'=> $this->__('Liechtenstein'),
			'LT'=> $this->__('Lithuania'),
			'LU'=> $this->__('Luxembourg'),
			'MO'=> $this->__('Macao'),
			'MK'=> $this->__('Macedonia'),
			'MG'=> $this->__('Madagascar'),
			'MW'=> $this->__('Malawi'),
			'MY'=> $this->__('Malaysia'),
			'MV'=> $this->__('Maldives'),
			'ML'=> $this->__('Mali'),
			'MT'=> $this->__('Malta'),
			'MH'=> $this->__('Marshall Islands'),
			'MQ'=> $this->__('Martinique'),
			'MR'=> $this->__('Mauritania'),
			'MU'=> $this->__('Mauritius'),
			'YT'=> $this->__('Mayotte'),
			'MX'=> $this->__('Mexico'),
			'FM'=> $this->__('Micronesia, Federated States Of'),
			'MD'=> $this->__('Moldova'),
			'MC'=> $this->__('Monaco'),
			'MN'=> $this->__('Mongolia'),
			'ME'=> $this->__('Montenegro'),
			'MS'=> $this->__('Montserrat'),
			'MA'=> $this->__('Morocco'),
			'MZ'=> $this->__('Mozambique'),
			'MM'=> $this->__('Myanmar'),
			'NA'=> $this->__('Namibia'),
			'NR'=> $this->__('Nauru'),
			'NP'=> $this->__('Nepal'),
			'NL'=> $this->__('Netherlands'),
			'AN'=> $this->__('Netherlands Antilles'),
			'NC'=> $this->__('New Caledonia'),
			'NZ'=> $this->__('New Zealand'),
			'NI'=> $this->__('Nicaragua'),
			'NE'=> $this->__('Niger'),
			'NG'=> $this->__('Nigeria'),
			'NU'=> $this->__('Niue'),
			'NF'=> $this->__('Norfolk Island'),
			'MP'=> $this->__('Northern Mariana Islands'),
			'NO'=> $this->__('Norway'),
			'OM'=> $this->__('Oman'),
			'PK'=> $this->__('Pakistan'),
			'PW'=> $this->__('Palau'),
			'PS'=> $this->__('Palestinian Territory, Occupied'),
			'PA'=> $this->__('Panama'),
			'PG'=> $this->__('Papua New Guinea'),
			'PY'=> $this->__('Paraguay'),
			'PE'=> $this->__('Peru'),
			'PH'=> $this->__('Philippines'),
			'PN'=> $this->__('Pitcairn'),
			'PL'=> $this->__('Poland'),
			'PT'=> $this->__('Portugal'),
			'PR'=> $this->__('Puerto Rico'),
			'QA'=> $this->__('Qatar'),
			'RE'=> $this->__('Reunion'),
			'RO'=> $this->__('Romania'),
			'RU'=> $this->__('Russian Federation'),
			'RW'=> $this->__('Rwanda'),
			'BL'=> $this->__('Saint Barthelemy'),
			'SH'=> $this->__('Saint Helena'),
			'KN'=> $this->__('Saint Kitts And Nevis'),
			'LC'=> $this->__('Saint Lucia'),
			'MF'=> $this->__('Saint Martin'),
			'PM'=> $this->__('Saint Pierre And Miquelon'),
			'VC'=> $this->__('Saint Vincent And Grenadines'),
			'WS'=> $this->__('Samoa'),
			'SM'=> $this->__('San Marino'),
			'ST'=> $this->__('Sao Tome And Principe'),
			'SA'=> $this->__('Saudi Arabia'),
			'SN'=> $this->__('Senegal'),
			'RS'=> $this->__('Serbia'),
			'SC'=> $this->__('Seychelles'),
			'SL'=> $this->__('Sierra Leone'),
			'SG'=> $this->__('Singapore'),
			'SK'=> $this->__('Slovakia'),
			'SI'=> $this->__('Slovenia'),
			'SB'=> $this->__('Solomon Islands'),
			'SO'=> $this->__('Somalia'),
			'ZA'=> $this->__('South Africa'),
			'GS'=> $this->__('South Georgia And Sandwich Isl.'),
			'ES'=> $this->__('Spain'),
			'LK'=> $this->__('Sri Lanka'),
			'SD'=> $this->__('Sudan'),
			'SR'=> $this->__('Suriname'),
			'SJ'=> $this->__('Svalbard And Jan Mayen'),
			'SZ'=> $this->__('Swaziland'),
			'SE'=> $this->__('Sweden'),
			'CH'=> $this->__('Switzerland'),
			'SY'=> $this->__('Syrian Arab Republic'),
			'TW'=> $this->__('Taiwan'),
			'TJ'=> $this->__('Tajikistan'),
			'TZ'=> $this->__('Tanzania'),
			'TH'=> $this->__('Thailand'),
			'TL'=> $this->__('Timor-Leste'),
			'TG'=> $this->__('Togo'),
			'TK'=> $this->__('Tokelau'),
			'TO'=> $this->__('Tonga'),
			'TT'=> $this->__('Trinidad And Tobago'),
			'TN'=> $this->__('Tunisia'),
			'TR'=> $this->__('Turkey'),
			'TM'=> $this->__('Turkmenistan'),
			'TC'=> $this->__('Turks And Caicos Islands'),
			'TV'=> $this->__('Tuvalu'),
			'UG'=> $this->__('Uganda'),
			'UA'=> $this->__('Ukraine'),
			'AE'=> $this->__('United Arab Emirates'),
			'GB'=> $this->__('United Kingdom'),
			'US'=> $this->__('United States'),
			'UM'=> $this->__('United States Outlying Islands'),
			'UY'=> $this->__('Uruguay'),
			'UZ'=> $this->__('Uzbekistan'),
			'VU'=> $this->__('Vanuatu'),
			'VE'=> $this->__('Venezuela'),
			'VN'=> $this->__('Viet Nam'),
			'VG'=> $this->__('Virgin Islands, British'),
			'VI'=> $this->__('Virgin Islands, U.S.'),
			'WF'=> $this->__('Wallis And Futuna'),
			'EH'=> $this->__('Western Sahara'),
			'YE'=> $this->__('Yemen'),
			'ZM'=> $this->__('Zambia'),
			'ZW'=> $this->__('Zimbabwe'),
		];

		return $countries_codes_names;
    }	


	/**
	 * Rerturn a country list
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string				$country_code				US, ES, etc.
	 * @return		array
	 */
	protected function country_code_name_get($country_code) {
		
		$country_code = trim($country_code);
		$country_code = strtoupper($country_code);

		$countries_codes = $this->countries_codes_names_get();

		if (isset($countries_codes[$country_code])) {
			return $countries_codes[$country_code];
		}
		
		return false;
	}


	/**
	 * Rerturn a currency list
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function currencies_array_get() {
		$currencies_name_and_symbol = [
			'ALL' => [
				'name'   => 'Albania Lek',
				'symbol' => 'L',
			],
			'AFN' => [
				'name'   => 'Afghanistan Afghani',
				'symbol' => '؋',
			],
			'ARS' => [
				'name'   => 'Argentina Peso',
				'symbol' => '$',
			],
			'AWG' => [
				'name'   => 'Aruba Guilder',
				'symbol' => 'ƒ',
			],
			'AUD' => [
				'name'   => 'Australia Dollar',
				'symbol' => '$',
			],
			'AZN' => [
				'name'   => 'Azerbaijan New Manat',
				'symbol' => '₼',
			],
			'BSD' => [
				'name'   => 'Bahamas Dollar',
				'symbol' => '$',
			],
			'BBD' => [
				'name'   => 'Barbados Dollar',
				'symbol' => '$',
			],
			'BDT' => [
				'name'   => 'Bangladeshi taka',
				'symbol' => '৳',
			],
			'BYR' => [
				'name'   => 'Belarus Ruble',
				'symbol' => 'Br',
			],
			'BZD' => [
				'name'   => 'Belize Dollar',
				'symbol' => 'BZ$',
			],
			'BMD' => [
				'name'   => 'Bermuda Dollar',
				'symbol' => '$',
			],
			'BOB' => [
				'name'   => 'Bolivia Boliviano',
				'symbol' => '$b',
			],
			'BAM' => [
				'name'   => 'Bosnia and Herzegovina Convertible Marka',
				'symbol' => 'KM',
			],
			'BWP' => [
				'name'   => 'Botswana Pula',
				'symbol' => 'P',
			],
			'BGN' => [
				'name'   => 'Bulgaria Lev',
				'symbol' => 'лв',
			],
			'BRL' => [
				'name'   => 'Brazil Real',
				'symbol' => 'R$',
			],
			'BND' => [
				'name'   => 'Brunei Darussalam Dollar',
				'symbol' => '$',
			],
			'KHR' => [
				'name'   => 'Cambodia Riel',
				'symbol' => '៛',
			],
			'CAD' => [
				'name'   => 'Canada Dollar',
				'symbol' => '$',
			],
			'KYD' => [
				'name'   => 'Cayman Islands Dollar',
				'symbol' => '$',
			],
			'CLP' => [
				'name'   => 'Chile Peso',
				'symbol' => '$',
			],
			'CNY' => [
				'name'   => 'China Yuan Renminbi',
				'symbol' => '¥',
			],
			'COP' => [
				'name'   => 'Colombia Peso',
				'symbol' => '$',
			],
			'CRC' => [
				'name'   => 'Costa Rica Colon',
				'symbol' => '₡',
			],
			'HRK' => [
				'name'   => 'Croatia Kuna',
				'symbol' => 'kn',
			],
			'CUP' => [
				'name'   => 'Cuba Peso',
				'symbol' => '₱',
			],
			'CZK' => [
				'name'   => 'Czech Republic Koruna',
				'symbol' => 'Kč',
			],
			'DKK' => [
				'name'   => 'Denmark Krone',
				'symbol' => 'kr',
			],
			'DOP' => [
				'name'   => 'Dominican Republic Peso',
				'symbol' => 'RD$',
			],
			'XCD' => [
				'name'   => 'East Caribbean Dollar',
				'symbol' => '$',
			],
			'EGP' => [
				'name'   => 'Egypt Pound',
				'symbol' => '£',
			],
			'SVC' => [
				'name'   => 'El Salvador Colon',
				'symbol' => '$',
			],
			'EEK' => [
				'name'   => 'Estonia Kroon',
				'symbol' => 'kr',
			],
			'EUR' => [
				'name'   => 'Euro Member Countries',
				'symbol' => '€',
			],
			'FKP' => [
				'name'   => 'Falkland Islands (Malvinas) Pound',
				'symbol' => '£',
			],
			'FJD' => [
				'name'   => 'Fiji Dollar',
				'symbol' => '$',
			],
			'GHC' => [
				'name'   => 'Ghana Cedis',
				'symbol' => '₵',
			],
			'GIP' => [
				'name'   => 'Gibraltar Pound',
				'symbol' => '£',
			],
			'GTQ' => [
				'name'   => 'Guatemala Quetzal',
				'symbol' => 'Q',
			],
			'GGP' => [
				'name'   => 'Guernsey Pound',
				'symbol' => '£',
			],
			'GYD' => [
				'name'   => 'Guyana Dollar',
				'symbol' => '$',
			],
			'HNL' => [
				'name'   => 'Honduras Lempira',
				'symbol' => 'L',
			],
			'HKD' => [
				'name'   => 'Hong Kong Dollar',
				'symbol' => '$',
			],
			'HUF' => [
				'name'   => 'Hungary Forint',
				'symbol' => 'Ft',
			],
			'ISK' => [
				'name'   => 'Iceland Krona',
				'symbol' => 'kr',
			],
			'INR' => [
				'name'   => 'India Rupee',
				'symbol' => '₹',
			],
			'IDR' => [
				'name'   => 'Indonesia Rupiah',
				'symbol' => 'Rp',
			],
			'IRR' => [
				'name'   => 'Iran Rial',
				'symbol' => '﷼',
			],
			'IMP' => [
				'name'   => 'Isle of Man Pound',
				'symbol' => '£',
			],
			'ILS' => [
				'name'   => 'Israel Shekel',
				'symbol' => '₪',
			],
			'JMD' => [
				'name'   => 'Jamaica Dollar',
				'symbol' => 'J$',
			],
			'JPY' => [
				'name'   => 'Japan Yen',
				'symbol' => '¥',
			],
			'JEP' => [
				'name'   => 'Jersey Pound',
				'symbol' => '£',
			],
			'KZT' => [
				'name'   => 'Kazakhstan Tenge',
				'symbol' => 'лв',
			],
			'KPW' => [
				'name'   => 'Korea (North) Won',
				'symbol' => '₩',
			],
			'KRW' => [
				'name'   => 'Korea (South) Won',
				'symbol' => '₩',
			],
			'KGS' => [
				'name'   => 'Kyrgyzstan Som',
				'symbol' => 'лв',
			],
			'LAK' => [
				'name'   => 'Laos Kip',
				'symbol' => '₭',
			],
			'LVL' => [
				'name'   => 'Latvia Lat',
				'symbol' => 'Ls',
			],
			'LBP' => [
				'name'   => 'Lebanon Pound',
				'symbol' => '£',
			],
			'LRD' => [
				'name'   => 'Liberia Dollar',
				'symbol' => '$',
			],
			'LTL' => [
				'name'   => 'Lithuania Litas',
				'symbol' => 'Lt',
			],
			'MKD' => [
				'name'   => 'Macedonia Denar',
				'symbol' => 'ден',
			],
			'MYR' => [
				'name'   => 'Malaysia Ringgit',
				'symbol' => 'RM',
			],
			'MUR' => [
				'name'   => 'Mauritius Rupee',
				'symbol' => '₨',
			],
			'MXN' => [
				'name'   => 'Mexico Peso',
				'symbol' => '$',
			],
			'MNT' => [
				'name'   => 'Mongolia Tughrik',
				'symbol' => '₮',
			],
			'MZN' => [
				'name'   => 'Mozambique Metical',
				'symbol' => 'MT',
			],
			'NAD' => [
				'name'   => 'Namibia Dollar',
				'symbol' => '$',
			],
			'NPR' => [
				'name'   => 'Nepal Rupee',
				'symbol' => '₨',
			],
			'ANG' => [
				'name'   => 'Netherlands Antilles Guilder',
				'symbol' => 'ƒ',
			],
			'NZD' => [
				'name'   => 'New Zealand Dollar',
				'symbol' => '$',
			],
			'NIO' => [
				'name'   => 'Nicaragua Cordoba',
				'symbol' => 'C$',
			],
			'NGN' => [
				'name'   => 'Nigeria Naira',
				'symbol' => '₦',
			],
			'NOK' => [
				'name'   => 'Norway Krone',
				'symbol' => 'kr',
			],
			'OMR' => [
				'name'   => 'Oman Rial',
				'symbol' => '﷼',
			],
			'PKR' => [
				'name'   => 'Pakistan Rupee',
				'symbol' => '₨',
			],
			'PAB' => [
				'name'   => 'Panama Balboa',
				'symbol' => 'B/.',
			],
			'PYG' => [
				'name'   => 'Paraguay Guarani',
				'symbol' => 'Gs',
			],
			'PEN' => [
				'name'   => 'Peru Nuevo Sol',
				'symbol' => 'S/.',
			],
			'PHP' => [
				'name'   => 'Philippines Peso',
				'symbol' => '₱',
			],
			'PLN' => [
				'name'   => 'Poland Zloty',
				'symbol' => 'zł',
			],
			'QAR' => [
				'name'   => 'Qatar Riyal',
				'symbol' => '﷼',
			],
			'RON' => [
				'name'   => 'Romania New Leu',
				'symbol' => 'lei',
			],
			'RUB' => [
				'name'   => 'Russia Ruble',
				'symbol' => '₽',
			],
			'SHP' => [
				'name'   => 'Saint Helena Pound',
				'symbol' => '£',
			],
			'SAR' => [
				'name'   => 'Saudi Arabia Riyal',
				'symbol' => '﷼',
			],
			'RSD' => [
				'name'   => 'Serbia Dinar',
				'symbol' => 'Дин.',
			],
			'SCR' => [
				'name'   => 'Seychelles Rupee',
				'symbol' => '₨',
			],
			'SGD' => [
				'name'   => 'Singapore Dollar',
				'symbol' => '$',
			],
			'SBD' => [
				'name'   => 'Solomon Islands Dollar',
				'symbol' => '$',
			],
			'SOS' => [
				'name'   => 'Somalia Shilling',
				'symbol' => 'S',
			],
			'ZAR' => [
				'name'   => 'South Africa Rand',
				'symbol' => 'R',
			],
			'LKR' => [
				'name'   => 'Sri Lanka Rupee',
				'symbol' => '₨',
			],
			'SEK' => [
				'name'   => 'Sweden Krona',
				'symbol' => 'kr',
			],
			'CHF' => [
				'name'   => 'Switzerland Franc',
				'symbol' => 'CHF',
			],
			'SRD' => [
				'name'   => 'Suriname Dollar',
				'symbol' => '$',
			],
			'SYP' => [
				'name'   => 'Syria Pound',
				'symbol' => '£',
			],
			'TWD' => [
				'name'   => 'Taiwan New Dollar',
				'symbol' => 'NT$',
			],
			'THB' => [
				'name'   => 'Thailand Baht',
				'symbol' => '฿',
			],
			'TTD' => [
				'name'   => 'Trinidad and Tobago Dollar',
				'symbol' => 'TT$',
			],
			'TRY' => [
				'name'   => 'Turkey Lira',
				'symbol' => '₺',
			],
			'TRL' => [
				'name'   => 'Turkey Lira',
				'symbol' => '₤',
			],
			'TVD' => [
				'name'   => 'Tuvalu Dollar',
				'symbol' => '$',
			],
			'UAH' => [
				'name'   => 'Ukraine Hryvna',
				'symbol' => '₴',
			],
			'GBP' => [
				'name'   => 'United Kingdom Pound',
				'symbol' => '£',
			],
			'UGX' => [
				'name'   => 'Uganda Shilling',
				'symbol' => 'USh',
			],
			'USD' => [
				'name'   => 'United States Dollar',
				'symbol' => '$',
			],
			'UYU' => [
				'name'   => 'Uruguay Peso',
				'symbol' => '$U',
			],
			'UZS' => [
				'name'   => 'Uzbekistan Som',
				'symbol' => 'лв',
			],
			'VEF' => [
				'name'   => 'Venezuela Bolivar',
				'symbol' => 'Bs',
			],
			'VND' => [
				'name'   => 'Viet Nam Dong',
				'symbol' => '₫',
			],
			'YER' => [
				'name'   => 'Yemen Rial',
				'symbol' => '﷼',
			],
			'ZWD' => [
				'name'   => 'Zimbabwe Dollar',
				'symbol' => 'Z$',
			],
		];

		$currencies_name_and_ISO_4217 = array(
			'AFA' => array('Afghan Afghani', '971'),
			'AWG' => array('Aruban Florin', '533'),
			'AUD' => array('Australian Dollars', '036'),
			'ARS' => array('Argentine Pes', '032'),
			'AZN' => array('Azerbaijanian Manat', '944'),
			'BSD' => array('Bahamian Dollar', '044'),
			'BDT' => array('Bangladeshi Taka', '050'),
			'BBD' => array('Barbados Dollar', '052'),
			'BYR' => array('Belarussian Rouble', '974'),
			'BOB' => array('Bolivian Boliviano', '068'),
			'BRL' => array('Brazilian Real', '986'),
			'GBP' => array('British Pounds Sterling', '826'),
			'BGN' => array('Bulgarian Lev', '975'),
			'KHR' => array('Cambodia Riel', '116'),
			'CAD' => array('Canadian Dollars', '124'),
			'KYD' => array('Cayman Islands Dollar', '136'),
			'CLP' => array('Chilean Peso', '152'),
			'CNY' => array('Chinese Renminbi Yuan', '156'),
			'COP' => array('Colombian Peso', '170'),
			'CRC' => array('Costa Rican Colon', '188'),
			'HRK' => array('Croatia Kuna', '191'),
			'CPY' => array('Cypriot Pounds', '196'),
			'CZK' => array('Czech Koruna', '203'),
			'DKK' => array('Danish Krone', '208'),
			'DOP' => array('Dominican Republic Peso', '214'),
			'XCD' => array('East Caribbean Dollar', '951'),
			'EGP' => array('Egyptian Pound', '818'),
			'ERN' => array('Eritrean Nakfa', '232'),
			'EEK' => array('Estonia Kroon', '233'),
			'EUR' => array('Euro', '978'),
			'GEL' => array('Georgian Lari', '981'),
			'GHC' => array('Ghana Cedi', '288'),
			'GIP' => array('Gibraltar Pound', '292'),
			'GTQ' => array('Guatemala Quetzal', '320'),
			'HNL' => array('Honduras Lempira', '340'),
			'HKD' => array('Hong Kong Dollars', '344'),
			'HUF' => array('Hungary Forint', '348'),
			'ISK' => array('Icelandic Krona', '352'),
			'INR' => array('Indian Rupee', '356'),
			'IDR' => array('Indonesia Rupiah', '360'),
			'ILS' => array('Israel Shekel', '376'),
			'JMD' => array('Jamaican Dollar', '388'),
			'JPY' => array('Japanese yen', '392'),
			'KZT' => array('Kazakhstan Tenge', '368'),
			'KES' => array('Kenyan Shilling', '404'),
			'KWD' => array('Kuwaiti Dinar', '414'),
			'LVL' => array('Latvia Lat', '428'),
			'LBP' => array('Lebanese Pound', '422'),
			'LTL' => array('Lithuania Litas', '440'),
			'MOP' => array('Macau Pataca', '446'),
			'MKD' => array('Macedonian Denar', '807'),
			'MGA' => array('Malagascy Ariary', '969'),
			'MYR' => array('Malaysian Ringgit', '458'),
			'MTL' => array('Maltese Lira', '470'),
			'BAM' => array('Marka', '977'),
			'MUR' => array('Mauritius Rupee', '480'),
			'MXN' => array('Mexican Pesos', '484'),
			'MZM' => array('Mozambique Metical', '508'),
			'NPR' => array('Nepalese Rupee', '524'),
			'ANG' => array('Netherlands Antilles Guilder', '532'),
			'TWD' => array('New Taiwanese Dollars', '901'),
			'NZD' => array('New Zealand Dollars', '554'),
			'NIO' => array('Nicaragua Cordoba', '558'),
			'NGN' => array('Nigeria Naira', '566'),
			'KPW' => array('North Korean Won', '408'),
			'NOK' => array('Norwegian Krone', '578'),
			'OMR' => array('Omani Riyal', '512'),
			'PKR' => array('Pakistani Rupee', '586'),
			'PYG' => array('Paraguay Guarani', '600'),
			'PEN' => array('Peru New Sol', '604'),
			'PHP' => array('Philippine Pesos', '608'),
			'QAR' => array('Qatari Riyal', '634'),
			'RON' => array('Romanian New Leu', '946'),
			'RUB' => array('Russian Federation Ruble', '643'),
			'SAR' => array('Saudi Riyal', '682'),
			'CSD' => array('Serbian Dinar', '891'),
			'SCR' => array('Seychelles Rupee', '690'),
			'SGD' => array('Singapore Dollars', '702'),
			'SKK' => array('Slovak Koruna', '703'),
			'SIT' => array('Slovenia Tolar', '705'),
			'ZAR' => array('South African Rand', '710'),
			'KRW' => array('South Korean Won', '410'),
			'LKR' => array('Sri Lankan Rupee', '144'),
			'SRD' => array('Surinam Dollar', '968'),
			'SEK' => array('Swedish Krona', '752'),
			'CHF' => array('Swiss Francs', '756'),
			'TZS' => array('Tanzanian Shilling', '834'),
			'THB' => array('Thai Baht', '764'),
			'TTD' => array('Trinidad and Tobago Dollar', '780'),
			'TRY' => array('Turkish New Lira', '949'),
			'AED' => array('UAE Dirham', '784'),
			'USD' => array('US Dollars', '840'),
			'UGX' => array('Ugandian Shilling', '800'),
			'UAH' => array('Ukraine Hryvna', '980'),
			'UYU' => array('Uruguayan Peso', '858'),
			'UZS' => array('Uzbekistani Som', '860'),
			'VEB' => array('Venezuela Bolivar', '862'),
			'VND' => array('Vietnam Dong', '704'),
			'AMK' => array('Zambian Kwacha', '894'),
			'ZWD' => array('Zimbabwe Dollar', '716'),
		);

		//Unify the data
		$currencies = array();
		foreach ($currencies_name_and_symbol AS $currency_id => $currency_data) {
			if (isset($currencies_name_and_ISO_4217[$currency_id]) && isset($currencies_name_and_ISO_4217[$currency_id][1])) {
				$currencies[$currency_id] = [
					'id'   => $currency_id,
					'name'   => $currency_data["name"],
					'symbol' => $currency_data["symbol"],
					'code' => $currencies_name_and_ISO_4217[$currency_id][1],
				];
			}
		}

		return $currencies;
	}


	/**
	 * Rerturn a currency list, only ids and names
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		array
	 */
	protected function currencies_selector_get() {
		$currencies_raw = $this->currencies_array_get();

		$currencies = array();
		foreach ($currencies_raw AS $currency_data) {
			$currencies[$currency_data['id']] = $currency_data['symbol']." - ".$currency_data['name'];
		}

		return $currencies;
	}


	/**
	 * Rerturn the symbol of a currency
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string				$currency_id				USD, EUR, etc.
	 * @return		array
	 */
	protected function currency_symbol_get($currency_id) {
		$sybol = "";
		$currencies = $this->currencies_array_get();

		if (isset($currencies[$currency_id]) && isset($currencies[$currency_id]["symbol"])) {
			$sybol = $currencies[$currency_id]["symbol"];
		}

		return $sybol;
	}

	/**
	 * Rerturn the code of a currency
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string				$currency_id				USD, EUR, etc.
	 * @return		array
	 */
	protected function currency_code_get($currency_id) {
		$code = "";
		$currencies = $this->currencies_array_get();

		if (isset($currencies[$currency_id]) && isset($currencies[$currency_id]["code"])) {
			$code = $currencies[$currency_id]["code"];
		}

		return $code;
	}
	

	/**
	 * Detect if the values of a monodimensional array are repeated 
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		array				
	 * @return		boolean
	 */
	protected function array_has_repeated_values($array) {
		if (!is_array($array)) {
			return false;
		}

		return count($array) !== count(array_unique($array));
	}
	
	
	/**
	 * Do a get_option with the id_wordpress calculated
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string				$id	
	 * @param		null|string			$value_default	
	 * @return		string|array|boolean
	 */ 
	protected function option_field_get($id, $value_default = NULL) {
		$id_wordpress = $this->plugin_slug."_".$id;

		if (is_null($value_default)) {
			return get_option($id_wordpress);
		}
		else {
			return get_option($id_wordpress, $value_default);
		}
	}


	/**
	 * Echo in the log
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string		$log		Text to insert
	 * @return		echo					on the WordPress log if WP_DEBUG is ON
	 */
	protected function debug_log_write($log = "") {
        if (true === WP_DEBUG) {
			if (is_null($log)) {
				error_log("NULL");
			}
			elseif (is_bool($log) && true == $log) {
				error_log("TRUE");
			}
			elseif (is_bool($log) && false == $log) {
				error_log("FALSE");
			}
            elseif (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            }
			else {
				error_log($log);
            }
        }
    }


	/**
	 * Echo in the log, alternative name
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string		$log		Text to insert
	 * @return		echo					on the WordPress log if WP_DEBUG is ON
	 */
	protected function write_log($log = "") {
        $this->debug_log_write($log);
    }

	
	/**
	 * Generate a random string without special characters
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		int		$length		length of the string
	 * @return		string
	 */
	protected function random_string_get($length = 20) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	
	/**
	 * Return the largest number
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		float|int		$number_1
	 * @param		float|int		$number_2
	 * @return		float
	 */
	protected function number_largest($number_1, $number_2) {
		$return = $number_1;

		if ($number_2 > $number_1) {
			$return = $number_2;
		}

		return $return;
	}

	/**
	 * Return the smallest number
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		float|int		$number_1
	 * @param		float|int		$number_2
	 * @return		float
	 */
	protected function number_smallest($number_1, $number_2) {
		$return = $number_1;

		if ($number_2 < $number_1) {
			$return = $number_2;
		}

		return $return;
	}

	

	/**
	 * Search the language of the user	
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @return		string
	 */
	protected function language_user_get() {
		$language_current_by_country = get_bloginfo('language');
		/*
		Example data of what can be on get_bloginfo('language')
		en-029
		en-AU
		en-BZ
		en-CA
		en-GB
		en-IE
		en-IN
		en-JM
		en-MY
		en-NZ
		en-PH
		en-SG
		en-TT
		en-US
		en-ZA
		en-ZW
		Only it's needed the "language" => "en"
		*/
	
		$language_current_by_country_array = explode("-", $language_current_by_country);
		$languages_stored = $this->option_field_get("languages");

		if (	isset($language_current_by_country_array[0])
			&&	in_array($language_current_by_country_array[0], $languages_stored)) {
			$language_current = $language_current_by_country_array[0];
		}
		else {
			$language_current = $this->option_field_get("language_admin");
		}

		$this->language_current = $language_current;

		return $this->language_current;
    }

	/**
	 * Check what internationalization domain to use
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string		$domain				domain to use
	 * @return		string
	 */
	protected function check_internationalization_domain($domain) {

		if(is_null($domain)) {
			$domain = $this->plugin_id;
		}

		$domain_prefix = substr($domain, 0, 3); 

		if ("bft" == $domain_prefix) {
			$domain = $domain_prefix."-internationalization";
		}

		return $domain;
	}

	/**
	 * Adds the domain to the WordPress function __
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function __($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return __($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function _e
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _e($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _e($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function _x
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _x($text, $context, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _x($text, $context, $domain);
	}

	/**
	 * Adds the domain to the WordPress function _ex
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _ex($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _ex($text, $context, $domain);
	}

	/**
	 * Adds the domain to the WordPress function _n
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$single
	 * @param		string			$plural
	 * @param		int				$number
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _n($single, $plural, $number, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _n($single, $plural, $number, $domain);
	}

	/**
	 * Adds the domain to the WordPress function _nx
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$single
	 * @param		string			$plural
	 * @param		int				$number
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _nx($single, $plural, $number, $context, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _nx($single, $plural, $number, $context, $domain);
	}	

	/**
	 * Adds the domain to the WordPress function _n_noop
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$singular
	 * @param		string			$plural
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _n_noop($singular, $plural, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _n_noop($singular, $plural, $domain);
	}	

	/**
	 * Adds the domain to the WordPress function _nx_noop
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$singular
	 * @param		string			$plural
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function _nx_noop($singular, $plural, $context,$domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return _nx_noop($singular, $plural, $context,$domain);
	}	

	/**
	 * Adds the domain to the WordPress function translate_nooped_plural
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$nooped_plural
	 * @param		string			$count
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function translate_nooped_plural($nooped_plural, $count, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return translate_nooped_plural($nooped_plural, $count, $domain);
	}	

	/**
	 * Adds the domain to the WordPress function esc_html__
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_html__($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_html__($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function esc_html_e
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_html_e($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_html_e($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function esc_html_x
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_html_x($text, $context, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_html_x($text, $context, $domain);
	}

	/**
	 * Adds the domain to the WordPress function esc_attr__
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_attr__($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_attr__($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function esc_attr_e
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_attr_e($text, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_attr_e($text, $domain);
	}

	/**
	 * Adds the domain to the WordPress function esc_attr_x
	 * 
	 * @since		1.0.0
	 * @version		1.1.0
	 * @param		string			$text				text to translate
	 * @param		string			$context			context of the translation
	 * @param		string|null		$domain				domain to use
	 * @return		string|echo
	 */
	protected function esc_attr_x($text, $context, $domain = NULL) {
		$domain = $this->check_internationalization_domain($domain);
		return esc_attr_x($text, $context, $domain);
	}
}
?>