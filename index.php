<?php
	  // required headers
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: access");
		header("Access-Control-Allow-Methods: GET");
		header("Access-Control-Allow-Credentials: true");
		header('Content-Type: application/json');
		include("config/core.php"); 
    // for check condition basis of urls and redirect to functions
	
	echo json_encode(
				array("message" => "wrong parameter pass")
			);
 ?>

