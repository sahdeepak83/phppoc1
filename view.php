<?php
include("config/database.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
	$jsonD = file_get_contents('php://input');
	$jsonResult=json_decode($jsonD,true);
	if(!empty($jsonD )){
	  $querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$jsonD."')";
	  pg_query($conn, $querytest) or die("error to save  data"); 
	}
	echo json_encode(
						array("message" => 'message test')
					  );
					   return $jsonD;
	?>