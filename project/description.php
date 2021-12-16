<?php
  session_start();
  $book_id=$_GET['book_id'];
  include 'pages/dbconnect.php';

  	$sql="Select * from book where book_id=$book_id";

  	$result=mysqli_query($conn,$sql);
    

    $row=mysqli_fetch_assoc($result);
    $book_image=$row['book_image'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Description</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
	<?php
		include 'pages/header.php';
		include 'pages/nav.php';
	?>
	<div class="container-fluid product_back">
		<div class="row">
			<div class="product_section p-4">
				<div class="product_img">
					<?php echo "<img src=img/book/".$book_image.">"; ?>
					<div>
					<button class="add-to-cart">Add to cart</button>
					<button class="buy-now">Buy Now</button>
					</div>
				</div>

			</div>
			<div class="product_description p-4">
				
				<div class="book-title"><?= $row['book_name'] ?></div>
				<hr>
				<h3>About Book</h3>
				<p>
					<?= $row['book_description'];?>
				</p>
				
				<div>
					<h3>Author</h3>
					<p class="book-author"><?=$row['book_author'];?></p>
					
				</div>
				<div>
					<h2 >Price <div class="book_price" style="font-size: 30px;
			color: #abdb6f;"><i class="fa fa-rupee-sign ">
						<?= $row['book_price'];?>
					</i>
				    </div></h2>

					</div>
			</div>
		
			
		</div>
	</div>

    <?php
		include 'pages/login.php'; //Login Form
		include 'pages/signup.php'; //Signup Form
	?>
	<?php
		include 'pages/footer.php';
	?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="js/myjs.js"></script>
</body>
</html>