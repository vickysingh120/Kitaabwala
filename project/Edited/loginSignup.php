<!DOCTYPE html>
<html>
<head>
	<title>Login and Signup</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<style type="text/css">
		.login, .signup{
			position: fixed;
			top: 150px;
			left: 30%;
		}
	</style>
</head>
<body>
	<?php
		include('nav.php');
	?>
		<h3 class="text-center">Signup</h3>

		<button onclick="display()" id="loginbtn">Login</button>
		<button onclick="display()" id="signupbtn">Signup</button>


	<form class="form container signup">
		<div class="col-4 ml-5">
			<div class="form-group">
			<label>First Name</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="" class="form-control">
		</div>
		<div class="form-group">
			<label>Mobile</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group"
			<label>Password</label>
			<input type="password" name="" class="form-control">
		</div>
		<button class="btn btn-success">Signup</button>
		</div>
	</form>


		<form class="form  container login">
		<div class="col-4 ml-5">
			<div class="form-group">
			<label>Email / Mobile</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="form-group"
			<label>Password</label>
			<input type="password" name="" class="form-control">
		</div>
		<button class="btn btn-success">login</button>
		</div>
	</form>

	<script>
		function display(){
			
		}
	</script>

</body>
</html>