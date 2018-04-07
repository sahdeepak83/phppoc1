<?php
include("config/core.php"); 
Class dbObj{
	
	// specify your own database credentials
	var $servername = "ec2-107-21-126-193.compute-1.amazonaws.com";
	var $username = "lotrzwxbkchfiq";
	var $password = "82e8c8108ebaf0d14b7ef05f1ea61ec2620fd40fb20fecd6029bf2f67b5a7712";
	var $dbname = "d8rsl2jff9g6rq";
	var $port = "5432";
	var $conn;
	var $sslmode= "require";
	
	  /*
	 Function Name: getConnstring
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : connection for Postgres server in Heroku
    */
	function getConnstring() {
		$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password." sslmode=".$this->sslmode."") or die("Connection failed: ".pg_last_error());
      
		/* check connection */
		if (pg_last_error()) {
			 echo json_encode(
				array("message" => "Connect failed")
			  );
			exit();
		} else {
			$this->conn = $con;
		}
		 // pg_close($con);
		return $this->conn;
	}
}
?>