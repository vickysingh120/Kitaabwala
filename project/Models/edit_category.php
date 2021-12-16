<?php
 include '../pages/dbconnect.php';

  if(isset($_POST['cat_name']))
  {
 	$cat_id=$_POST['cat_id'];
 	$cat_name=$_POST['cat_name'];

  		$sql="Update category set cat_name='$cat_name' Where cat_id=$cat_id";
  		$result=mysqli_query($conn,$sql);
  }
  else
  {
  	$cat_id=$_POST['cat_id'];

  	$sql="Select * from category where cat_id='$cat_id'";
   
  	$result=mysqli_query($conn,$sql);
  	$cat_name='';
  	if($row=mysqli_fetch_assoc($result))
  		$cat_name=$row['cat_name'];

  	echo $cat_name;

  	
  }

  	


?>