<?php
/*
* Author: MAOXU LIU
* Create date: April 20, 2016
* Last improvement date: April 20, 2016
* Description: configure php file for oworld chat website
*/
$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306") or die("Unable to connect");
if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	// echo "Connectting to server is good!<br/>";
}

//echo "Stuff from config.php<hr/><hr/>";

//$data="INSERT INTO users VALUES('','testtest','testF','testL','test@gmail.com','testpassword','I love coding!');";
//mysqli_query($con,$data);

//mysqli_close($con);
?> 