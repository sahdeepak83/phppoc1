<?php
// include core and response files
	include("config/core.php");
	include("response.php");
	/*$jsonD='{
				"token": "1609dd95b29704c37faebf92a64fcde6",
				"query": "Select id,name from public.individual_tip_non_tip_events__c where name=\'t1\'"
			}';*/
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA'];		
	$jsonResult=json_decode($jsonD,true);
	// instantiate token and  object
	if(isset($jsonResult['token'])){
		$newObj = new Dbdata();
		$gettoken=trim($jsonResult['token']);
		$tokenData = $newObj->getToken($gettoken);
			if(!empty($tokenData)){
				foreach($tokenData as $key => $tok) {
					$tokenVal=$tok;
				}
				$matchedToken=$tokenVal['token'];
			}else{
				$matchedToken='false';
			}
		
	}else{
		echo json_encode(
						array("message" => "Invalid Token Parameter.")
					  );
					  return ;
	}
	$gettoken=trim($jsonResult['token']);
		//check conditions basis of token trure or false
	if(isset($matchedToken) && $matchedToken!="false" && $matchedToken==$gettoken){ 
       // for check condition basis of urls and redirect to functions
	
			if(isset($jsonResult['query'])) {
				// instantiate database and  object
				$newObj = new Dbdata();
				$data = $newObj->getAllWithQuery($jsonResult['query']);
				// products array
				$products_arr=array();
				$products_arr["results"]=array();
					if(!empty($data)){
						foreach($data as $key => $emp) {
							array_push($products_arr["results"], $emp);
						}
					// make it json format	
					echo json_encode($products_arr);
					}else{
						echo json_encode(
						array("message" => "No data found.")
					  );
					}
				
			}
	}else{
		echo json_encode(
						array("message" => "Unauthorized Token || Expired Token")
					  );
	}
    //delete token
	$newObj = new Dbdata();
	$tokenData = $newObj->delToken($gettoken);
 ?>
