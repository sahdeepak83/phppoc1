<?php 
// include core files
include("config/core.php");

   $token  =   md5(uniqid(microtime(), true));
   $_SESSION['token']   =   $token; 
   echo json_encode(
				array("token" => $_SESSION['token'])
			  );

   
?>