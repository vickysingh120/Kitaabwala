<!DOCTYPE html>
<html>
<head>
	<title>Card</title>
	
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
	<style>
	
	
	</style>
</head>
<body>

<div >
	<div class="card-box">
		<div class="card-head">
			<h4 class="ml-3 mt-2">Popular books</h4>
			<hr>
		</div>
		<?php 
			// include 'pages/dbconnect.php';
			// $path = "UploadedBooks/";
			// $sql = "SELECT * FROM books";
			// $result = mysqli_query($conn, $sql);
			// $count =1;
			// while($row = mysqli_fetch_array($result) AND $count!=6 )
			// {
		 ?>
		<div class="card-item bg-light">
			<div class="item-image">
				<!-- <?php 
				// echo "<img src=".$path.$row['book_image'].">";
				$count++;
				?> -->
				<img src="img/book.jpg">
			</div>
			<div class="item-name">
				 <?php 
				 // echo $row['book_name']; 
				 ?>
				 My Book
			</div>
			<div class="item-price-now">
				<?php 
				// echo $row['book_price']; 
				?>
				<span class="initial-price"><i class="fa fa-rupee-sign">500</i></span>
				<i class="fa fa-rupee-sign">200</i>
			</div>			
		</div><!-- card item ends -->

		<?php 
	// }

		?>
	</div><!-- Card box ends -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="./js/myjs.js"></script>
	<script>
		
	</script>
</body>
</html>