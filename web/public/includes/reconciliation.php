<?php

require('reconciliation_api.php');
require('datasets.php');

//--------------------------------------------------------------------------------------------------
class TermenNetwerkService extends ReconciliationService
{
	//----------------------------------------------------------------------------------------------
	function __construct($service_code,$service_name) {
		$this->name 			= $service_name.' - demo Termennetwerk';
		$this->service          = $service_code;
		$this->identifierSpace 	= 'http://demo.netwerkdigitaalerfgoed.nl/termennetwerk/reconciliation';
	
		$this->Types();
	
		$view_url = '{{id}}';

		if ($view_url != '')
		{
			$this->View($view_url);
		}
	}

	//----------------------------------------------------------------------------------------------
	function Types() {
		$type = new stdclass;
		$type->id = '/term';
		$type->name = 'Term';
		$this->defaultTypes[] = $type;
	}
	
	//----------------------------------------------------------------------------------------------
	// Handle an individual query
	function OneQuery($query_key, $text, $limit = 1, $properties = null) {	
		$dataset='erfgeo';
		$url = 'http://demo.netwerkdigitaalerfgoed.nl:8080/nde/graphql?query=';
		$url.= rawurlencode('{terms(match:"'.$text.'" dataset:["'.$dataset.'"]){dataset terms {uri prefLabel}}}');

		$limit = 5;
	
		$json = get($url);	
		$obj = json_decode($json);
	
		$result_count=$limit;
	
		foreach ($obj->data->terms[0]->terms as $terms) {
			if ($result_count>0) {			
				$hit = new stdclass;
				$hit->match = ($terms->name_strings_total == 1);
				$hit->name 	= $terms->prefLabel[0];
				$hit->id 	= $terms->uri;
				similar_text($text, $hit->name, $hit->score);
				$this->StoreHit($query_key, $hit);
			}
			$result_count--;
		}
	}
}
