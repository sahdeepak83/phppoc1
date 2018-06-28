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
	if(!empty($jsonResult)){
		$data="hi";
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$data."')";
	  $queryRecord=pg_query($conn, $querytest);
	}
	if(!empty($queryRecord)){
		echo json_encode(
					array("message" => 'data  saved')
					  ); 
	}else{
	echo json_encode(
					array("message" => 'data not saved')
					  ); 
	}
					   
	?>
