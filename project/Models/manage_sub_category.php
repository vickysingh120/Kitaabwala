<?php
  include '../pages/dbconnect.php';
 	
 	// if($_POST['type']=="fetch_sub_cat")
 	// {
 	// 	$cat_id=$_POST['cat_id'];



 	// } 


  if($_POST['type']=="sub-category")
	{
		$cat_id=$_POST['cat_id'];
		$sub_cat=$_POST['sub_cat'];


		$sql="Insert Into sub_category (cat_id, sub_cat_name) Values('$cat_id','$sub_cat')";
		$result=mysqli_query($conn,$sql);

		if($result)
		{
			echo("Category Added");
		}
	}


?>