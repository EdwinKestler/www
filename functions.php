<?php
require 'dbconfig.php';
function checkuser($fbid,$fbfullname,$femail){
    $check = mysql_query("select * from Users where Fuid='$fbid'");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
        $query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fbid','$fbfullname','$femail')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
        $query = "UPDATE Users SET Ffname='$fbfullname', Femail='$femail' where Fuid='$fbid'";
	mysql_query($query);
	}

}?>
