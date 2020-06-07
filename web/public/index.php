<?php

include('includes/reconciliation.php');

if (isset($_GET["dataset"]) && !empty($_GET["dataset"]) && isset($datasets[$_GET["dataset"]])) {
	header('Content-type: application/json; charset=utf-8');
	header('Access-control-allow-origin: *');
	$service = new TermenNetwerkService($_GET["dataset"],$datasets[$_GET["dataset"]]);
	$service->Call($_REQUEST);
} else {
	include('documentation.php');
}
