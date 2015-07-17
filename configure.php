<?php
/*
Author: Edwin Kestler
Website: http://flatbox.io
Date: 17 July, 2015
*/
session_start();
require 'facebook_library/facebook.php';
define("APP_ID", "823674294347763");
define("APP_SECRET", "313ca5703fe23ab44173babb859e24bd");
define("SITE_URL", "http://flatbox.io/");
define("PERMISSIONS", "email,user_hometown,user_about_me");

// create a facebook object
$facebook = new Facebook( array('appId'  => APP_ID, 'secret' => APP_SECRET) );
$userID = $facebook->getUser();


// Login or logout url will be needed depending on current user state.
if ($userID) {
  $logoutURL = $facebook->getLogoutUrl(array('next'=> SITE_URL.'logout.php'));
} else {
  $loginURL = $facebook->getLoginUrl( array('scope' => PERMISSIONS,'redirect_uri' => SITE_URL) );
}

// Only if user is logged in, we an fetch user details
if ($userID) {
  try {
	  $_SESSION["user_id"] = $userID;
    // fetch user details.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
	#debugResults($e);
    $userID = NULL;
  }
	
}


/*
This function output the results based on the datatype.
If strict mode is turned on will show the variable datatype too.
It can come very handy when you need to debug your code.
*/
function debugResults($var, $strict = false) {
	if ($var != NULL) {
		if ($strict == false) {

			if( is_array($var) ||  is_object($var) ) {
				echo "<pre>";print_r($var);echo "</pre>";
			} else {
				echo $var;
			}
			
		} else {

			if( is_array($var) ||  is_object($var) ) {
				echo "<pre>";var_dump($var);echo "</pre>";
			} else {
				var_dump($var) ;
			}

		}

	} else {
		var_dump($var) ;
	}
}

function redirectURL($url) {
	echo '<script> window.location.href="'.$url.'"</script>"';
}
?>