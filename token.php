<?php 
// include core files
include("config/core.php");
 
class TokenData {


	 /*
	 Function Name: matchToken
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : match session token with form tokes
    */
	function matchToken($token)
    {
        if(!isset($token))
            return false;
        // I would clear the token after matched
        if($token === $_SESSION['token']) {
            $_SESSION['token']   =   NULL;
            return true;
        }
        // I would return false by default, not true
        return false;
    }
	
}

?>