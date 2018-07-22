<?php
var $conn;
	function pg_connection_string_from_database_url() {
  		extract(parse_url($_ENV["DATABASE_URL"]));
  		return "user=$user password=$pass host=$host dbname=" . substr($path, 1) . "port=$port sslmode=require"; # <- you may want to add sslmode=require there too
	}
# Here we establish the connection. Yes, that's all.
$pg_conn = pg_connect(pg_connection_string_from_database_url());
echo "<pre>";print_r($pg_conn );die;
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
	var $conn;
?>
