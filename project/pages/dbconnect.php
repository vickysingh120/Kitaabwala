<?php

	$host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="kitaabwala";

	$conn=mysqli_connect($host,$db_user,$db_pass,$db_name);


	if(!$conn)
	{
		die("Database connection Failed");
	}



?>