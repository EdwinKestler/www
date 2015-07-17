<?php
/*
Author: Edwin Kestler
Website: http://flatbox.io
Date: 17 August, 2015
*/
require_once("configure.php");
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "" ) {
	// check if session expired
	redirectURL(SITE_URL);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Facebook Login using PHP - thesoftwareguy</title>
<link rel="icon" href="http://flatbox.io/flatbox.ico" type="image/x-icon" />
<!--iOS/android/handheld specific -->	
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>Facebook Login using PHP - thesoftwareguy</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="body">
    <div class="mainTitle" >User Information</div>
    <div style="text-align:center;">
        <a href="<?php echo $logoutURL; ?>"><img src="fb_logout.png" width="72" height="21" border="0" alt="Facebook Logout" /></a>   <br><br>
    </div>
	<?php  
	// uncomment to see all details of user
	#debugResults($user_profile);
	?> 
    <div class="resultRow">
        <strong>Name:</strong> <?php echo stripslashes($user_profile["name"]); ?>
    </div>
    <div class="resultRow">
        <strong>Profile Pic:</strong> <img src="https://graph.facebook.com/<?php echo $userID; ?>/picture">
    </div>
    <div class="resultRow">
        <strong>Gender:</strong> <?php echo stripslashes($user_profile["gender"]); ?>
    </div>
    <div class="resultRow">
        <strong>Email:</strong> <?php echo stripslashes($user_profile["email"]); ?>
    </div>
    <div class="resultRow">
        <strong>Profile Link:</strong> <a href="<?php echo stripslashes($user_profile["link"]); ?>" target="_blank"><?php echo stripslashes($user_profile["link"]); ?></a>
    </div>
    <div class="resultRow">
	    <strong>Hometown:</strong> <?php echo stripslashes($user_profile["hometown"]["name"]); ?>
    </div>
    <div class="resultRow">
        <strong>Bio:</strong> <?php echo stripslashes($user_profile["bio"]); ?>
    </div>
    <div class="resultRow">
        <strong>Quote:</strong> <?php echo stripslashes($user_profile["quotes"]); ?>
    </div>
    
    <?php
	  try {
		// fetch user details.
		$user_friends = $facebook->api('/me/friends/');
		#debugResults($user_friends);	
	  } catch (FacebookApiException $e) {
		#debugResults($e);
	  }
	?>
    <div class="title">My Friends</div>
    <div class="friendBox">
    <?php 
	if(count($user_friends["data"]) > 0 ) { 
		foreach($user_friends["data"] as $friends) {
	?>
   
	<div>
	<em><?php echo stripslashes($friends["name"]); ?></em><br>
    <img src="https://graph.facebook.com/<?php echo $friends["id"]; ?>/picture" height="50;">
    </div>
    
     <?php } }  ?>
    </div>
    <div style="clear:both;"></div>
    <footer>
            <div class="copyright">
            &copy; 2013 <a href="http://flatbox.io" target="_blank">flatbox</a>. All rights reserved
            </div>
            <div class="footerlogo"><a href="http://flatbox.io" target="_blank"><img src="http://flatbox.io/flatbox-logo-small.png" width="200" height="47" alt="flatbox logo" /></a> </div>
       </footer>
</div>
</div>

</body>
</html>