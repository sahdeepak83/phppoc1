<?php
// show error reporting
  //0 for hide warning errors
  //1 for show all errors
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
// index/Home page url
$SITEURL="http://localhost:8000/herokuapi/";
 
// required headers
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access");
	header("Access-Control-Allow-Methods: GET");
	header("Access-Control-Allow-Credentials: true");
	header('Content-Type: application/json');
?>