<?php
/*
Author: Edwin Kestler
Website: http://flatbox.io
Date: 17 July, 2014
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
<title>Facebook Login using PHP</title>

</head>

<body>

<div id="container">
<div id="body">
    <div class="mainTitle" >Login With Facebook</div>
    <div style="text-align:center;">
    <a href="<?php echo $loginURL; ?>" title="Login With Facebook" ><img src="facebook_login.png" width="209" height="40" border="0" alt="Facebook Login" /></a>    
    </div>
   <footer>
        <div class="copyright">
        &copy; 2013 <a href="http://flatbox.io" target="_blank">flatbox</a>. All rights reserved
        </div>
        <div class="footerlogo"><a href="http://flatbox.io" target="_blank"><img src="http://flatbox.io/flatbox-logo-small.png" width="200" height="47" alt="flatbox logo" /></a> </div>
   </footer>
</div></div>

</body>
</html>