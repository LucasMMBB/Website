<!--
* Author: MAOXU LIU
* Create date: April 21, 2016
* Last improvement date: April 21, 2016
* Description: main php file for oworld chat website
-->
<?php
// connection
	$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306") or die("unable to connect!");
// login script
	if(isset($_POST["username"])){
		$username=$_POST["username"] or die("error with username");
		$password=$_POST["password"] or die("error with password");

		//$md5password=md5($password) or die("error with md5password");//create md5 hash for password
		$md5password=$password or die("error with md5password");

		$query="SELECT * FROM `users` WHERE username ='$username' AND password='$md5password' LIMIT 1;";
		$query_result = mysqli_query($con,$query) or die("error with query result!");
		$get = mysqli_fetch_assoc($query_result);// or die("error with fetch assoc");

		if($get==""){
			echo "<div class= 'error'>User does not exit!<div>";
		}else{
			echo "<div class= 'success'>User exits!</div>";
		}


	}else{
		// alert users to input!
	}
?>