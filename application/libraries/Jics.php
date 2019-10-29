<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jics {

	public function auth($permission = null)
	{
		$CC =& get_instance();
		$CC->load->library('session');

		if($CC->session->userdata('user')){
			// echo '1'; 
			// var_dump($permission);exit();
			// $_SESSION['user']['permission']->permission_set_id
			if($permission == '1' and $_SESSION['user']['permission']->permission_set_id == '2'){
				return true;
			}elseif($permission == null){
				return true;
			}else{

				$alert['head'] = "User Permission Error";
				$alert['body'] = "You haven't access to this View";
				$CC->session->set_flashdata('warning',$alert);
				// var_dump('expression');exit();
				// $CI->jics->alert('',"",'');
				redirect(base_url(),'refresh');

			}
		}else{
			// echo "0";
			// $CI->load->view('loging'); 
			// $CC->session->sess_destroy();
			redirect(base_url(),'refresh');
		}
	}


	public function api_loging(){
		
// A very simple PHP example that sends a HTTP POST to a remote site

		$ch = curl_init();

		$checkfor = ([
			'username'=>'csapiuser',
			'password'=>'JICSAPI@'
		]);

		$checkforJson = json_encode($checkfor);


		curl_setopt($ch, CURLOPT_URL,"https://api.creditorwatch.com.au/login");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$checkforJson);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			// "postvar1=value1&postvar2=value2&postvar3=value3");

			// In real life you should use something like:
			// curl_setopt($ch, CURLOPT_POSTFIELDS, 
			//          http_build_query(array('postvar1' => 'value1')));

			// Receive server response ...
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = json_decode(curl_exec($ch));
		curl_close ($ch);
		return $server_output->token;
	}

	public function api_abn($token){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.creditorwatch.com.au/custom-profile?acn=59%20104%20326%20383&abn=104%20326%20383%09",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS => "",
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer ".$token,
				"Content-Type: application/json",
				"Postman-Token: 22343d69-704f-4c9b-9663-b36a0da13eb8",
				"cache-control: no-cache"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}

	}

	public function api_credit_score($token){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.creditorwatch.com.au/credit-score?abn=59%20104%20326%20383",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Accept: */*",
				"Accept-Encoding: gzip, deflate",
				"Authorization: Bearer ".$token,
				"Cache-Control: no-cache",
				"Connection: keep-alive",
				"Host: api.creditorwatch.com.au",
				"Postman-Token: b7766d47-af8f-464f-87e7-a0c8b324f761,058a1b14-8845-475d-a5d0-9bf68ba09da0",
				"User-Agent: PostmanRuntime/7.18.0",
				"cache-control: no-cache"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return json_decode($response);
		}
	}



	public function alert($type,$body,$head){

		$CC =& get_instance();
		$CC->load->library('session');
		(isset($head))? $alert['head'] = $head:'';
		(isset($body))? $alert['body'] = $body:'';
		$CC->session->set_flashdata($type,$alert);
		return true;
	}

	public function get_entity_type(){
		$entity_type = array(
			"0"						=> "Select the Entity type",
			"aggregated"			=> "Aggregated",
			"association"			=> "Association",
			"bank"					=> "Bank",
			"financialinstitution"	=> "Financial Institution",
			"government"			=> "Government",
			"partnershipindividual"	=> "Partnership-Individual",
			"partnershipcorporation"=> "Partnership-Corporation",
			"privatecompany"		=> "Private Company",
			"publiccompanylisted"	=> "Public Company-Listed",
			"Publiccompanyunlisted"	=> "Public Company-Unlisted",
			"soletrader"			=> "Sole Trader",
			"discretionartrust"		=> "Discretionary Trust",
			"unittrust"				=> "Unit Trust",
		);
		return $entity_type;
	}

	public function get_confidentiality(){
		$confidentiality = array(
			"0"				=> "Select the Confidentiality",
			"public" 		=> 	"Public",
			"asic"			=> 	"Asic",
			"published"		=>	"Published",
			"confidential"	=>	"Confidential",
		);
		return $confidentiality;
	}


	public function month_format($month){

		if($month == '1'){	return 'Janaury';}
		elseif($month == '2'){ return 'February';}
		elseif($month == '3'){ return 'March';}
		elseif($month == '4'){ return 'April';}
		elseif($month == '5'){ return 'May';}
		elseif($month == '6'){ return 'June';}
		elseif($month == '7'){ return 'July';}
		elseif($month == '8'){ return 'August';}
		elseif($month == '9'){ return 'September';}
		elseif($month == '10'){ return 'October';}
		elseif($month == '11'){ return 'November';}
		elseif($month == '12'){ return 'December';}
		else{ return false; }
	}

	public function indicators($data){

		if($data == 0){
			return '<span class="same"><i class="fa fa-minus" aria-hidden="true"></i> 0.00 </span>';
		}elseif($data < 0){
			return '<span class="down"><i class="fa fa-caret-down"></i>'. number_format($data).'</span>';
		}else{
			return '<span class="up"><i class="fa fa-caret-up"></i>'. number_format($data) .'</span>';
		}
	}

	public function gross_profit_margin($data){
		if($data <= 10){
			return 'The Gross Profit Margin is marginal in the most recent year of assessment. This measure is used to show how much profit is left after the cost of goods sold is accounted for but before deducting other expenses. A high number indicates strong profitability and a very low or a negative number indicates possible problems with the cost structure.';
		}elseif($data < 0){
			return 'The Gross Profit Margin is negative in the most recent year of assessment. This measure is used to show how much profit is left after the cost of goods sold is accounted for but before deducting other expenses. A high number indicates strong profitability and a very low or a negative number indicates possible problems with the cost structure.';
		}else{
			return 'The Gross Profit Margin is satisfactory in the most recent year of assessment. This measure is used to show how much profit is left after the cost of goods sold is accounted for but before deducting other expenses. A high number indicates strong profitability and a very low or a negative number indicates possible problems with the cost structure.';
		}
	}

	public function net_profit_margin($data){
		if($data <= 5){
			return 'The Net Profit Margin is marginal in the most recent year of assessment. This measure illustrates the profits left after all ordinary expenses have been deducted from revenue earned. Higher the number more profitable the entity is.  A very low or a negative number indicate lack of control over expenses.';
		}elseif($data < 0){
			return 'The Net Profit Margin is negative in the most recent year of assessment. This measure illustrates the profits left after all ordinary expenses have been deducted from revenue earned. Higher the number more profitable the entity is.  A very low or a negative number indicate lack of control over expenses.';
		}else{
			return 'The Net Profit Margin is satisfactory in the most recent year of assessment. This measure illustrates the profits left after all ordinary expenses have been deducted from revenue earned. Higher the number more profitable the entity is.  A very low or a negative number indicate lack of control over expenses.';
		}
	}


	public function return_on_assets($data){
		if($data < 5){
			return "Return on Assets is unsatisfactory in the most recent year of assessment. This measure illustrates how well the resources of an entity are used to generate income. Typically, a high number demonstrates that the management uses resources efficiently.";
		}elseif($data < 10){
			return "Return on Assets is marginal in the most recent year of assessment. This measure illustrates how well the resources of an entity are used to generate income. Typically, a high number demonstrates that the management uses resources efficiently.";
		}else{
			return "Return on Assets is satisfactory in the most recent year of assessment. This measure illustrates how well the resources of an entity are used to generate income. Typically, a high number demonstrates that the management uses resources efficiently.";
		}
	}

	public function current_ratio($data){
		if($data < 1.2){
			return "Current Ratio is weak in the most recent year of assessment. This ratio demonstrates the entity’s ability to meet short-term obligations using the current assets available at disposal. If the Current Ratio is less than 1.00X then the entity may have difficulty meeting regular bills on time. A higher ratio is typically better than a lower one.";
		}elseif($data < 1.8){
			return "Current Ratio is marginal in the most recent year of assessment. This ratio demonstrates the entity’s ability to meet short-term obligations using the current assets available at disposal. If the Current Ratio is less than 1.00X then the entity may have difficulty meeting regular bills on time. A higher ratio is typically better than a lower one.";
		}else{
			return "Current Ratio is  satisfactory in the most recent year of assessment. This ratio demonstrates the entity’s ability to meet short-term obligations using the current assets available at disposal. If the Current Ratio is less than 1.00X then the entity may have difficulty meeting regular bills on time. A higher ratio is typically better than a lower one.";
		}
	}

	public function quick_ratio($data){
		if($data < 1){
			return "Quick Ratio is  weak in the most recent year of assessment. Similar to the Current Ratio this measure indicates the entity’s ability to meet short-term obligations. However instead of considering all current assets, this ratio uses only near cash assets to see how short-term obligations are met by them.  Generally, a Quick Ratio more than 1.00X is considered satisfactory and risk increases as the ratio reduces.";
		}elseif($data < 1.2){
			return "Quick Ratio is marginal in the most recent year of assessment. Similar to the Current Ratio this measure indicates the entity’s ability to meet short-term obligations. However instead of considering all current assets, this ratio uses only near cash assets to see how short-term obligations are met by them.  Generally, a Quick Ratio more than 1.00X is considered satisfactory and risk increases as the ratio reduces.";
		}else{
			return "Quick Ratio is satisfactory in the most recent year of assessment. Similar to the Current Ratio this measure indicates the entity’s ability to meet short-term obligations. However instead of considering all current assets, this ratio uses only near cash assets to see how short-term obligations are met by them.  Generally, a Quick Ratio more than 1.00X is considered satisfactory and risk increases as the ratio reduces.";
		}
	}


	public function gearing($data){
		if($data > 50){
			return "The Gearing level is high in the most recent year of assessment. This measure indicates the level of the entity’s operations funded by external funders compared to shareholders. While gearing levels need to be interpreted in comparison to industry, a level over 50% is considered as high.";
		}elseif($data > 25){
			return "The Gearing level is moderate in the most recent year of assessment. This measure indicates the level of the entity’s operations funded by external funders compared to shareholders. While gearing levels need to be interpreted in comparison to industry, a level over 50% is considered as high.";
		}else{
			return "The Gearing level is satisfactory in the most recent year of assessment. This measure indicates the level of the entity’s operations funded by external funders compared to shareholders. While gearing levels need to be interpreted in comparison to industry, a level over 50% is considered as high.";
		}
	}

	public function interest_coverage($data){
		if($data <= 2){
			return "Interest Cover is  unsatisfactory in the most recent year of assessment. This measure illustrates how many times the current interest payment is covered by the earnings of an organisation. The Interest Cover shows the entity’s ability to make interest payments on time. Higher the number the better.";
		}elseif($data <= 4){
			return "Interest Cover is moderate in the most recent year of assessment. This measure illustrates how many times the current interest payment is covered by the earnings of an organisation. The Interest Cover shows the entity’s ability to make interest payments on time. Higher the number the better.";
		}else{
			return "Interest Cover is considered satisfactory in the most recent year of assessment. This measure illustrates how many times the current interest payment is covered by the earnings of an organisation. The Interest Cover shows the entity’s ability to make interest payments on time. Higher the number the better.";
		}
	}





	public function get_companies(){

		$companies = array(
			"" =>"Select the Country",
			"1" => "Australia",
			"2" => "New zealand",
			"3" => "United kingdom",
			"4" => "United states",
			"5" => "Afghanistan",
			"6" => "Aland islands",
			"7" => "Albania",
			"8" => "Algeria",
			"9" => "American samoa",
			"10" => "Andorra",
			"11" => "Angola",
			"12" => "Anguilla",
			"13" => "Antarctica",
			"14" => "Antigua and barbuda",
			"15" => "Argentina",
			"16" => "Armenia",
			"17" => "Aruba",
			"18" => "Austria",
			"19" => "Azerbaijan",
			"20" => "Bahamas",
			"21" => "Bahrain",
			"22" => "Bangladesh",
			"23" => "Barbados",
			"24" => "Belarus",
			"25" => "Belgium",
			"26" => "Belize",
			"27" => "Benin",
			"28" => "Bermuda",
			"29" => "Bhutan",
			"30" => "Bolivia",
			"31" => "Bosnia and herzegovina",
			"32" => "Botswana",
			"33" => "Bouvet island",
			"34" => "Brazil",
			"35" => "British indian ocean territory",
			"36" => "Brunei darussalam",
			"37" => "Bulgaria",
			"38" => "Burkina faso",
			"39" => "Burundi",
			"40" => "Cambodia",
			"41" => "Cameroon",
			"42" => "Canada",
			"43" => "Cape verde",
			"44" => "Cayman islands",
			"45" => "Central african republic",
			"46" => "Chad",
			"47" => "Chile",
			"48" => "China",
			"49" => "Christmas island",
			"50" => "Cocos (keeling) islands",
			"51" => "Colombia",
			"52" => "Comoros",
			"53" => "Congo",
			"54" => "Congo, the democratic republic of the",
			"55" => "Cook islands",
			"56" => "Costa rica",
			"57" => "Cote d'ivoire",
			"58" => "Croatia",
			"59" => "Cuba",
			"60" => "Cyprus",
			"61" => "Czech republic",
			"62" => "Denmark",
			"63" => "Djibouti",
			"64" => "Dominica",
			"65" => "Dominican republic",
			"66" => "Ecuador",
			"67" => "Egypt",
			"68" => "El salvador",
			"69" => "Equatorial guinea",
			"70" => "Eritrea",
			"71" => "Estonia",
			"72" => "Ethiopia",
			"73" => "Falkland islands (malvinas)",
			"74" => "Faroe islands",
			"75" => "Fiji",
			"76" => "Finland",
			"77" => "France",
			"78" => "French guiana",
			"79" => "French polynesia",
			"80" => "French southern territories",
			"81" => "Gabon",
			"82" => "Gambia",
			"83" => "Georgia",
			"84" => "Germany",
			"85" => "Ghana",
			"86" => "Gibraltar",
			"87" => "Greece",
			"88" => "Greenland",
			"89" => "Grenada",
			"90" => "Guadeloupe",
			"91" => "Guam",
			"92" => "Guatemala",
			"93" => "Guernsey",
			"94" => "Guinea",
			"95" => "Guinea-bissau",
			"96" => "Guyana",
			"97" => "Haiti",
			"98" => "Heard island and mcdonald islands",
			"99" => "Holy see (vatican city state)",
			"100" => "Honduras",
			"101" => "Hong kong",
			"102" => "Hungary",
			"103" => "Iceland",
			"104" => "India",
			"105" => "Indonesia",
			"106" => "Iran, islamic republic of",
			"107" => "Iraq",
			"108" => "Ireland",
			"109" => "Isle of man",
			"110" => "Israel",
			"111" => "Italy",
			"112" => "Jamaica",
			"113" => "Japan",
			"114" => "Jersey",
			"115" => "Jordan",
			"116" => "Kazakhstan",
			"117" => "Kenya",
			"118" => "Kiribati",
			"119" => "Korea, democratic people's republic of",
			"120" => "Korea, republic of",
			"121" => "Kuwait",
			"122" => "Kyrgyzstan",
			"123" => "Lao people's democratic republic",
			"124" => "Latvia",
			"125" => "Lebanon",
			"126" => "Lesotho",
			"127" => "Liberia",
			"128" => "Libyan arab jamahiriya",
			"129" => "Liechtenstein",
			"130" => "Lithuania",
			"131" => "Luxembourg",
			"132" => "Macao",
			"133" => "Madagascar",
			"134" => "Malawi",
			"135" => "Malaysia",
			"136" => "Maldives",
			"137" => "Mali",
			"138" => "Malta",
			"139" => "Marshall islands",
			"140" => "Martinique",
			"141" => "Mauritania",
			"142" => "Mauritius",
			"143" => "Mayotte",
			"144" => "Mexico",
			"145" => "Micronesia, federated states of",
			"146" => "Moldova, republic of",
			"147" => "Monaco",
			"148" => "Mongolia",
			"149" => "Montenegro",
			"150" => "Montserrat",
			"151" => "Morocco",
			"152" => "Mozambique",
			"153" => "Myanmar",
			"154" => "namibia",
			"155" => "nauru",
			"156" => "nepal",
			"157" => "netherlands",
			"158" => "netherlands antilles",
			"159" => "new caledonia",
			"160" => "nicaragua",
			"161" => "niger",
			"162" => "nigeria",
			"163" => "niue",
			"164" => "norfolk island",
			"165" => "northern mariana islands",
			"166" => "norway",
			"167" => "oman",
			"168" => "pakistan",
			"169" => "palau",
			"170" => "palestinian territory, occupied",
			"171" => "panama",
			"172" => "papua new guinea",
			"173" => "paraguay",
			"174" => "peru",
			"175" => "philippines",
			"176" => "pitcairn",
			"177" => "poland",
			"178" => "portugal",
			"179" => "puerto rico",
			"180" => "qatar",
			"181" => "reunion",
			"182" => "romania",
			"183" => "russian federation",
			"184" => "rwanda",
			"185" => "saint helena",
			"186" => "saint kitts and nevis",
			"187" => "saint lucia",
			"188" => "saint pierre and miquelon",
			"189" => "saint vincent and the grenadines",
			"190" => "samoa",
			"191" => "san marino",
			"192" => "sao tome and principe",
			"193" => "saudi arabia",
			"194" => "senegal",
			"195" => "serbia",
			"196" => "seychelles",
			"197" => "sierra leone",
			"198" => "singapore",
			"199" => "slovakia",
			"200" => "slovenia",
			"201" => "solomon islands",
			"202" => "somalia",
			"203" => "south africa",
			"204" => "spain",
			"205" => "sri lanka",
			"206" => "sudan",
			"207" => "suriname",
			"208" => "svalbard and jan mayen",
			"209" => "swaziland",
			"210" => "sweden",
			"211" => "switzerland",
			"212" => "syrian arab republic",
			"213" => "taiwan, province of china",
			"214" => "tajikistan",
			"215" => "tanzania, united republic of",
			"216" => "thailand",
			"217" => "timor-leste",
			"218" => "togo",
			"219" => "tokelau",
			"220" => "tonga",
			"221" => "trinidad and tobago",
			"222" => "tunisia",
			"223" => "turkey",
			"224" => "turkmenistan",
			"225" => "turks and caicos islands",
			"226" => "tuvalu",
			"227" => "uganda",
			"228" => "ukraine",
			"229" => "united arab emirates",
			"230" => "united states minor outlying islands",
			"231" => "uruguay",
			"232" => "uzbekistan",
			"233" => "vanuatu",
			"234" => "venezuela",
			"235" => "viet nam",
			"236" => "virgin islands, british",
			"237" => "virgin islands, u.s.",
			"238" => "wallis and futuna",
			"239" => "western sahara",
			"240" => "yemen",
			"241" => "zambia",
			"242" => "zimbabwe",
		);

return $companies;
}
}