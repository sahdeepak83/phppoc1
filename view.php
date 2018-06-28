<?php
include("config/databasewithsoap.php");
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];
	$jsonResult=json_decode($jsonD,true); 
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
