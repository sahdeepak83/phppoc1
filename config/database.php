<?php
include("config/core.php"); 
Class dbObj{
	
	// specify your own database credentials
	/*
	var $servername = "ec2-54-83-1-94.compute-1.amazonaws.com";
	var $username = "trtclzwzsolgjp";
	var $password = "67390df03544f17e1db60bdb91c8650501d56f0c4b5267b475d3408ce47315e8";
	var $dbname = "dduntehkvcp8cu";
	var $port = "5432";
	var $sslmode= "require";
	*/
	/*
	function pg_connection_string_from_database_url() {
  		extract(parse_url($_ENV["DATABASE_URL"]));
		echo json_encode(
				array("user=$user password=$pass host=$host dbname=" . substr($path, 1) . "port=$port sslmode=$sslmode")
			  );
  		return "user=$user password=$pass host=$host dbname=" . substr($path, 1) . "port=$port sslmode=$sslmode"; # <- you may want to add sslmode=require there too
	}*/
	
	$parts = parse_url($url_string);
	var $servername = $parts['host'];
	var $username = $parts['user'];
	var $password = $parts['pass'];
	var $dbname = substr($parts['path'], 1);
	var $port = $parts['port'];
	var $sslmode= "require";
	var $conn;
	  /*
	 Function Name: getConnstring
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : connection for Postgres server in Heroku
    	*/
	function getConnstring() { 
		$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password." sslmode=".$this->sslmode."") or die("Connection failed: ".pg_last_error());
    	/*	
		//$con = pg_connect(pg_connection_string_from_database_url());
		extract(parse_url($_ENV["DATABASE_URL"]));
  		$url = "user=$user password=$pass host=$host dbname=" . substr($path, 1);  
		$con = pg_connect(url);
	*/	
		
		/* check connection */
		if (pg_last_error()) {
			 echo json_encode(
				array("message" => "Connection failed")
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
