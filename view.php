<?php
// include core and response files
include("config/core.php"); 
include("config/database.php");
	$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
	/*$jsonD='{
				"token": "1609dd95b29704c37faebf92a64fcde6",
				"query": "Select id,name from public.individual_tip_non_tip_events__c where name=\'t1\'"
			}';*/
	/*$jsonD='{
	"token": "b3404a00cdfc1eef0f89fae6cac5df04",
	"query": "select id,name,tip_lat_lon__latitude__s, tip_lat_lon__longitude__s from Individual_Tip_Non_Tip_Events__c"
}';*/
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];		
	$jsonResult=json_decode($jsonD,true);
	$querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$jsonD."')";
			 pg_query($conn, $querytest) or die("error to save  data"); 
	echo json_encode(
						array("message" => $jsonResult)
					  );
	?>