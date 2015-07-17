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
    <meta charset="utf-8" />
        <title>CSS3 Animated Navigation Menu | Tutorialzine Demo</title>

        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />

		<!-- Font Awesome Stylesheet -->
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />

		<!-- Including Open Sans Condensed from Google Fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

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