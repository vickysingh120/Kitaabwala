<?php session_start(); 
// error_reporting(0);
   if($_SESSION['fname']!="Admin")
   {?>
   		<script> 
   			window.location="index.php";
   			alert("Login as Admin to get Access.");
   		</script>

   <?php die(); }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Kitaabwala</title>
	<link rel="shortcut icon" href="img/brand.png"/>
	<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/mystyle.css"/>
	<link rel="stylesheet"  href="css/animate.css"/>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	
<body>
		
	<?php
		include 'pages/admin_header.php';
	?>
	<?php
		include 'pages/admin_nav.php';
	?>
<div class="container-fluid" id="admin_container">
<div class="row">
	<div class="col-md-3" id="admin_submenu">
		<ul>
			<li id="admin_cat">Manage Category</li>
			<li id="admin_sub_cat">Manage Subcategory</li>
			<li id="admin_book">Manage Books</li>
		</ul>
		
	</div>
	<div class="col-md-9" id="admin_content">
			<img src="img/admin.jpg" width="100%">	
	</div>

	

</div>
</div>


 <?php
 	include 'pages/admin_modals.php';
 ?>




<!-- Footer -->

<?php
	include 'pages/footer.php';
?>


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myjs.js"></script>
</body>
</html>