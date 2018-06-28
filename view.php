<?php
include("config/database.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];
	$jsonResult=json_decode($jsonD,true); 
	if(empty($jsonD)){
		$jsonD='null data';
	}
	if(!empty($jsonD )){
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$jsonD."')";
	  pg_query($conn, $querytest) or die("error to save  data"); 
	}
	echo json_encode(
					array("message" => 'message test')
					  ); 
					   
	?>
