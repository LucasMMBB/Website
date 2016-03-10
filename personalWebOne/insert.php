<?php
	echo "fuck you all";
	/*
  	$con=mysqli_connect('50.62.209.42:3306','maoxul','Lmx248679');
  	if (!$con) {
    	echo "Error: Unable to connect to MySQL.";
/*
    	 . PHP_EOL;
    	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    	exit;

	}
	else{
		echo "Success: A proper connection to MySQL was made! The my_db database is great." ;
/*
		. PHP_EOL;
		echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

	}
	if (!mysql_select_db($con,'TestDatabase')) {
		# code...
		echo "Database not Selected";
	}


	//$Name = $_POST["name"];
        $Name = filter_input(INPUT_POST, 'name');
	//$Email = $_POST["email"];
        $Email = filter_input(INPUT_POST, 'email');
	//$Username = $_POST["username"];
        $Username = filter_input(INPUT_POST, 'username');
	//$Password = $_POST["password"];
	$Password = filter_input(INPUT_POST, 'password');
	$sqlExpression = "INSERT INTO SignupTable (Name,Email,username,Password) VALUES ('$Name','$Email','$Username','$Password')";
	if(!mysqli_query($con,$sqlExpression)){
		echo 'Not Inserted';
	}
	else{
		echo 'Inserted successfully!!! ';
	}
	header("refresh:2; url=eGridTest.html");
        
        