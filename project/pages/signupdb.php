<?php
session_start();
include('dbconnect.php');

if(isset($_POST['submit']))//$_REQUEST
{
	extract($_POST);

$sql="Insert into tb_user(user_fname,user_lname,user_email,user_mobile,user_password) values('$user_fname','$user_lname','$user_email',$user_mobile,'$user_password')";
	$result=mysqli_query($conn,$sql);

	if($result)
	{
		echo "User registered";
	}
	else
	{
		echo "Oops! Something went wrong <br> Try again";
	}
	



}

?>
