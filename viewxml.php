<?php  
ini_set('display_errors', 0);
error_reporting(E_ALL);
//header("Access-Control-Allow-Origin: *");
include("config/databasewithsoap.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
$xmlOutput = file_get_contents('php://input');
//for save xml get data
//$querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$xmlOutput."')";
			 //pg_query($conn, $querytest) or die("error to save  data"); 


$xml = simplexml_load_string($xmlOutput);
 echo "<pre>";print_r($xml);die;

 ?>
