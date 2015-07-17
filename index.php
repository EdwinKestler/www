<?php
/*
Author: Shahrukh Khan
Website: http://www.thesoftwareguy.in
Date: 18 August, 2013
*/
require_once("configure.php");
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "" ) {
	// user already logged in the site
	redirectURL(SITE_URL."home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Facebook Login using PHP - thesoftwareguy</title>
<link rel="icon" href="http://localhost/tsg-blog/wp-content/uploads/2013/04/favicon.ico" type="image/x-icon" />
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
    <div class="mainTitle" >Login With Facebook using PHP</div>
    <div style="text-align:center;">
    <a href="<?php echo $loginURL; ?>" title="Login With Facebook" ><img src="facebook_login.png" width="209" height="40" border="0" alt="Facebook Login" /></a>    
    </div>
   <footer>
        <div class="copyright">
        &copy; 2013 <a href="http://www.thesoftwareguy.in" target="_blank">thesoftwareguy</a>. All rights reserved
        </div>
        <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png	" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
   </footer>
</div></div>

</body>
</html>