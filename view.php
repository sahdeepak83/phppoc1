<?php
header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST");
	header("Access-Control-Allow-Credentials: true");
	header('Content-Type: application/json'); 
include("config/databasewithsoap.php");
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];
	$jsonResult=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $jsonD), true );
echo json_encode(array("jsonD" => $jsonD));
echo json_encode(array("jsonResult" => $jsonResult));
	if(!empty($jsonResult)){
		$db = new dbObj();
		$connString =  $db->getConnstring();
		$conn= $connString;
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$jsonD."')";
	  $queryRecord=pg_query($conn, $querytest);
		if(!empty($queryRecord)){
			$message="The item has been saved";	
		}else{
		   $message="The item could not be saved";	
		}
	}else{
		$message="Invalid Data";
	}
	
	    echo json_encode(
						array("message" => $message)
					  );;			   
	?>
