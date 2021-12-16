<?php
session_start();
include('dbconnect.php');

if(isset($_POST['submit']))//$_REQUEST
{
	$user_mob_email=$_POST['user_mob_email'];
	$user_password=$_POST['user_password'];

	if($user_mob_email=="Admin@gmail.com" && $user_password=='1234')
	{
		$_SESSION['fname']="Admin";
	  	$_SESSION['email']="Admin@gmail.com";
		header('location:../adminportal.php');
	}

	$sql="Select * From tb_user Where user_email='$user_mob_email' and user_password='$user_password'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1)
	{
		$row=mysqli_fetch_array($result);
	  	$_SESSION['fname']=$row['user_fname'];
	  	$_SESSION['email']=$row['user_email'];
	  	echo "Welcome, ". $_SESSION['fname'];
	  	header('location:../index.php');
	}
	else{
		echo "Invalid User";

	}

}

?>
