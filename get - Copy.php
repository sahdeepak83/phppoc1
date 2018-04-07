<?php
	  // required headers
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: access");
		header("Access-Control-Allow-Methods: GET");
		header("Access-Control-Allow-Credentials: true");
		header('Content-Type: application/json');
		include("config/core.php"); 
    // for check condition basis of urls and redirect to functions
	if(isset($_GET['method'])) {
		$requeslUrl=$_GET['method'];
		$param=$_GET['id'];
		   if($requeslUrl=='add'){
			   add($requeslUrl);
		   }elseif($requeslUrl=='get'){
				get($param);
		   }else{
			   echo json_encode(
				array("message" => "wrong urls")
			  );
		   }
		}else{
			echo json_encode(
				array("message" => "wrong parameter pass")
			);
		}
	
	/*---- created by - suraj-------------------------------------------------
	       funcitons - get
		   descriptions -function for get data from postgress db basis of url ids
    ---------------------------------------------------------------------------**/
	
	function get($param){
        include("response.php");
		// instantiate database and  object
		$newObj = new Employee();
		$emps = $newObj->getEmployees('2');
		// products array
		$products_arr=array();
		$products_arr["results"]=array();
			if(!empty($emps)){
				foreach($emps as $key => $emp) {
					array_push($products_arr["results"], $emp);
				}
			echo json_encode($products_arr);
			}else{
				echo json_encode(
				array("message" => "No data found.")
			  );
			}
	    }
 ?>

