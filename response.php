<?php 
// include database files
include("config/database.php");
 
class Dbdata {
	protected $conn;
	protected $data = array();
	//initialize db connection 
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	 /*
	 Function Name: getEmployees
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : get all data from dbs
    */
	public function getIndividual() { 
		$sql = "SELECT * FROM public.individual_tip_non_tip_events__c ORDER BY id ASC ";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch  data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	 /*
	 Function Name: getEmployeesWithId
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : get data from db using ids
    */
	public function getIndividualWithId($id) { 
		$sql = "SELECT * FROM public.individual_tip_non_tip_events__c WHERE id= '" . trim($id) . "';"; 
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch  data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	/*
	 Function Name: postData
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : post data to db
    */
	public function postData($post) { 
			
		// sanitize
		$id=htmlspecialchars(strip_tags($this->name));
		$name=htmlspecialchars(strip_tags($this->name));		
		$query ="INSERT INTO public.individual_tip_non_tip_events__c VALUES ('$id','".$name."')";
	    $result = pg_query($query); 
		
	}
	
	/*
	 Function Name: editData
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : edit data basis of ids
    */
	public function editData($post) { 
			
		// sanitize
		$id=htmlspecialchars(strip_tags($this->name));
		$name=htmlspecialchars(strip_tags($this->name));		
		$query ="UPDATE public.individual_tip_non_tip_events__c
		SET  name='".$name."'
		WHERE id = $id;";
			$result = pg_query($query); 
		
	}
}

?>