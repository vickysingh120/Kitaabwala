

	<div class="card-box">
		<div class="card-head">
			<h4 class="ml-3 mt-2">Popular books</h4>
			<hr>
		</div>
		<?php 
			include 'pages/dbconnect.php';
			$path = "img/book/";
			$sql = "SELECT * FROM book";
			$result = mysqli_query($conn, $sql);
			$count =1;
			$upper=mysqli_num_rows($result);
			?>
			  <input type="hidden" id="num_rows" value="<?=$upper?>">
			<?php
			while($row = mysqli_fetch_array($result)  )
			{
		
		 if($count==1 || $count%5==0)
		 {?>
		<div class="card-item bg-light ml-5" onclick="bookClick(<?=$row['book_id'];?>)">
			<div class="item-image">
		<?php } else{ ?>
				<div class="card-item bg-light" onclick="bookClick(<?=$row['book_id'];?>)">
			<div class="item-image">

		<?php }?>
				<?php 
				echo "<img src=".$path.$row['book_image'].">";
				$count++;
				?> 
			</div>
			<div class="item-name">
				 <?php 
				 echo $row['book_name']; 
				 ?>
			 </div>
			<div class="item-price-now">
				<!-- <span class="initial-price"><i class="fa fa-rupee-sign">500</i></span> -->
				<i class="fa fa-inr"><?= $row['book_price']; ?></i>
			</div>			
		</div><!-- card item ends -->
	
		<?php 
	   }

		?>
		
	</div><!-- Card box ends -->


	<script src="js/jquery.js"></script>
	<script>
		function bookClick(book_id)
		{
		   var book_id="?book_id="+book_id;
		   window.location="description.php"+book_id;
		}

		
	</script>