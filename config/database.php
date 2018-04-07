<?php
include("config/core.php"); 
Class dbObj{
	
	// specify your own database credentials
	var $servername = "ec2-107-21-126-193.compute-1.amazonaws.com";
	var $username = "sdcwquuyqnuzob";
	var $password = "8c9ce3759a97627fa8f326b1a2f35d66613fbf4c2223ef5542500f33cf57ec98";
	var $dbname = "d6nattbs2cro6v";
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