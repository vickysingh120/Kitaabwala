<?php session_start();
	if(isset($_SESSION['fname']))
	{
		if($_SESSION['fname']=="Admin")
		header('location:adminportal.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Kitaabwala</title>
	<link rel="shortcut icon" href="img/brand.png"/>
	<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<link rel="stylesheet"  href="css/mystyle.css"/>
	<link rel="stylesheet"  href="css/animate.css"/>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
<body>
		
	<?php
	include 'pages/header.php';
	?>
	<?php
	include 'pages/nav.php';
	?>
	

   <?php
   		include 'pages/carousel.php';
   ?>


 <!-- Books Showcase -->
 	
 	<?php
 		include 'pages/books.php';
 	?>
 
 <!-- Why Us -->
 	<div class="about-us container text-center">
 		<hr>
 		<h3 style="font-size: 50px; color: #4e5147">Why Us</h3>
 		<p>
 			Kitaabwala is a new online book delivery system. You are provided a variety of options to choose from and get your book at your doorsteps.
 			We offer reduced rates and excellent service.
 		</p>
 		<hr>
	</div>
	<?php
		include 'pages/login.php'; //Login Form
		include 'pages/signup.php'; //Signup Form
	?>

<!-- Footer -->
   <?php
   		include 'pages/footer.php';
   ?>




<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myjs.js"></script>
<script>
	$('#search-box').focus(function(){
	

	})
</script>

</body>
</html>