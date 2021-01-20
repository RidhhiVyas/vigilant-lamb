<?php
		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "jobloc";
	$conn = mysqli_connect($servername, $username, $password ,$db_name);
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
	else
		{

			mysqli_select_db ($conn ,$db_name );
			echo "Connected successfully"."</br>";
		}

?>


