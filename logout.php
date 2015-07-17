<?php
/*
Author: Edwiwn Kestler
Website: http://flatbox.io
Date: 17 July, 2015
*/
require_once("configure.php");
$facebook->destroySession();
session_destroy();
redirectURL(SITE_URL);
exit;
?>
