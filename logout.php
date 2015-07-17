<?php
/*
Author: Shahrukh Khan
Website: http://www.thesoftwareguy.in
Date: 18 August, 2013
*/
require_once("configure.php");
$facebook->destroySession();
session_destroy();
redirectURL(SITE_URL);
exit;
?>
