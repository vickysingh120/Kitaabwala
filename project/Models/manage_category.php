<?php
  include '../pages/dbconnect.php';

	parse_str($_POST['form_data'],$form_data);

	if($form_data['type']=="category")
	{
		extract($form_data);
		$sql="Insert Into category (cat_name) Values('$cat_name')";
		$result=mysqli_query($conn,$sql);

		if($result)
		{
			echo("Category Added");
		}
	}
  
?>