<?php
include("config/core.php"); 
Class dbObj{
	
	// specify your own database credentials
	/*
	var $servername = extract(parse_url($_ENV["servername"]));
	var $username = extract(parse_url($_ENV["username"]));
	var $password = extract(parse_url($_ENV["password"]));
	var $dbname = extract(parse_url($_ENV["dbname"]));
	var $port = extract(parse_url($_ENV["port"]));
	var $conn;
	var $sslmode= extract(parse_url($_ENV["sslmode"]));
	*/
	var $servername;
	var $username;
	var $password;
	var $dbname;
	var $port;
	var $conn;
	var $sslmode;
	function __construct() {
		$this->servername = getenv('servername');
		$this->username = getenv('username');
		$this->password = getenv('password');
		$this->dbname = getenv('dbname');
		$this->port = getenv('port');
		$this->sslmode = getenv('sslmode');
	}
	
	function pg_connection_string_from_database_url() {
  		extract(parse_url($_ENV["DATABASE_URL"]));
  		return "user=$user password=$pass host=$host dbname=" . substr($path, 1) . "port=$port sslmode=require"; # <- you may want to add sslmode=require there too
	}
	/*
	$parts = parse_url($_ENV["DATABASE_URL"]);
	echo json_encode(
				array("$parts")
			  );
	var $servername = $parts['host'];
	var $username = $parts['user'];
	var $password = $parts['pass'];
	var $dbname = substr($parts['path'], 1);
	var $port = $parts['port'];
	var $sslmode= "require";
	var $conn;*/
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
		//$con = pg_connect(pg_connection_string_from_database_url());
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
