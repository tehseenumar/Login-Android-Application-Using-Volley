<?php

	$db_name = "androidtestingone";  
	$mysql_user = "root";  
	$mysql_pass = "";  
	$server_name = "localhost";  

	$conn = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

	mysqli_query($conn, "SET NAMES 'utf8'");

	// Add Parameters
	$username = $_POST["UserName"];
	$password = $_POST["Password"];

	// Select Query
	//$query = 'SELECT * FROM signup WHERE username = "'.$username.'" AND password = "'.$password.'"';
	//$query = 'SELECT * FROM signup WHERE username = "'.$username.'" AND password = "'.$password.'"';
	//$query = 'INSERT INTO signup VALUES("'.$username.'","'.$password.'")';

	// Add Insert Query
	$query = 'INSERT INTO signup (username, password) VALUES ("'.$username.'", "'.$password.'")';
	$result = mysqli_query($conn, $query) or die('error: ' .mysql_error());

	
 	if(mysqli_num_rows($result) == 1 ) {
		echo "success";
	}else{
		echo "error";
	}

?>