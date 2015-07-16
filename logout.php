<?php 
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: " ."http://flatbox.io");        // you can enter home page here ( Eg : header("Location: " ."http://flatbox.io"); 
?>
