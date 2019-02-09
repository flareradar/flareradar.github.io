<?php
/**
 * Ranking Alexa dengan PHP
 * 
 * @param string $domain (www.jurnalweb.com)
 * @return int || void
 */
function AlexaRank($domain){
	$uri = 'http://data.alexa.com/data?cli=10&dat=snbamz&url=';
	$uri .= $domain;
	$xml = simplexml_load_file($uri);
	
	// Data apa saja yang didapat bisa Anda lihat dengan fungsi print_r($xml)
	//print_r($xml); die;
	if (isset($xml->SD[1]->POPULARITY))
	return (int) $xml->SD[1]->POPULARITY->attributes()->TEXT;
}
echo "Ranking Alexa Jurnalweb.com adalah: ".AlexaRank('jurnalweb.com');
?>
