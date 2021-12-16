<?php
	include '../pages/dbconnect.php';
  extract($_POST);
  	if($type="delete-category")
  	{
  		$sql="Delete From category Where cat_id=$cat_id";
  		$result=mysqli_query($conn,$sql);

  		if(!$result)
  			echo "Oops! Something went wrong \n Try Again.";
  	}



?>