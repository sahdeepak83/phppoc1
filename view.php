<?php
include("config/database.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];
	$jsonResult=json_decode($jsonD); 
	if(empty($jsonD)){
		$jsonD='null data';
	}
	if(isset($jsonResult)){
		$data='hi';
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$data."')";
	  $queryRecord=pg_query($conn, $querytest);
	}
	if(isset($queryRecord)){
		echo json_encode(
					array("message" => 'data  saved')
					  ); 
	}else{
	echo json_encode(
					array("message" => 'data not saved')
					  ); 
	}
					   
	?>
