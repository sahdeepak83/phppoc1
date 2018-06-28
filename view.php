<?php
include("config/database.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
	$jsonD = $GLOBALS['HTTP_RAW_POST_DATA']; echo "<pre>";print_r($jsonD);die;
	
	?>
