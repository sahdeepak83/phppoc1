<?php
// include core and response files
	include("config/core.php"); 
	include("response.php");
	include("token.php");
	
	// instantiate token and  object
		$newToken = new TokenData();
		$gettoken=$_GET['token'];
		$tokenCond = $newToken->matchToken($gettoken);
		//check conditions basis of token trure or false
		if(isset($tokenCond) && $tokenCond=="true"){
       // for check condition basis of urls and redirect to functions
	
			if(isset($_GET['id'])) {
				$geId=$_GET['id'];
				// instantiate database and  object
				$newObj = new Dbdata();
				$emps = $newObj->getIndividualWithId($geId);
				// products array
				$products_arr=array();
				$products_arr["results"]=array();
					if(!empty($emps)){
						foreach($emps as $key => $emp) {
							array_push($products_arr["results"], $emp);
						}
					// make it json format	
					echo json_encode($products_arr);
					}else{
						echo json_encode(
						array("message" => "No data found.")
					  );
					}
				
			}else{
					
				// instantiate database and  object
				$newObj = new Dbdata();
				$emps = $newObj->getIndividual();
				// products array
				$products_arr=array();
				$products_arr["results"]=array();
					if(!empty($emps)){
						foreach($emps as $key => $emp) {
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
						array("message" => "Unauthorized Token.")
					  );
	}

 ?>

