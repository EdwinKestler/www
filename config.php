<?php
// database connection
define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', 'FBx_admin2012');
define('DB_DATABASE', 'login_system');
 
// site URL and facebook credentials
define("APP_ID", "823674294347763");
define("APP_SECRET", "313ca5703fe23ab44173babb859e24bd");
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://flatbox.io");
/* the page where you will be redirected after login */
define("REDIRECT_URL", SITE_URL."facebook_login.php");
/* Email permission for fetching emails. */
define("PERMISSIONS", "email");
 
// create a facebook object
$facebook = new Facebook(array('appId' => APP_ID, 'secret' => APP_SECRET));
$userID = $facebook->getUser();
 
// Login or logout url will be needed depending on current user login state.
if ($userID) {
  $logoutURL = $facebook->getLogoutUrl(array('next' => SITE_URL . 'logout.php'));
} else {
  $loginURL = $facebook->getLoginUrl(array('scope' => PERMISSIONS, 'redirect_uri' => REDIRECT_URL));
}
?>
