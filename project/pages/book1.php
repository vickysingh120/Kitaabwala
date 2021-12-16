<?php 
			include 'pages/dbconnect.php';
			$path = "img/book/";
			$sql = "SELECT * FROM book";
			$result = mysqli_query($conn, $sql);
			$count =1;
?>
			
	 <div class="carousel slide" id="popularBooks" data-ride="carousel">


 	<div class="carousel-inner">
 			
 		<?php
			while($row = mysqli_fetch_array($result)  )
			{

				if($count%5==0){
			?>
		<div class="row">	
		<div class="carousel-item">
		<?php }
		if($count==1){
			?>
		<div class="row">
		<div class="carousel-item active">

		<?php } ?>

			<div class="card" style="width:350px">
			<?php echo "<img class='img-card-top' src=".$path.$row['book_image'].">";
			?>
            <div class="card-title h3 text-success"> <?=$row['book_name']; ?>
            </div> 
            <div>
            	<i class="fa fa-inr"><?= $row['book_price']; ?></i>
             </div>
     	</div>
	
		<?php 
			if($count%4==0)
				{ echo "</div></div>";}
		$count++; } ?>
 	</div>
 	<a class="carousel-control-prev" href="#popularBooks" data-slide="prev">
 		<span id="left" class="fa fa-arrow-left fa-4x"></spna>
 	</a>
 	<a class="carousel-control-next" href="#popularBooks" data-slide="next">
 		<spna class="fa fa-arrow-right fa-4x"></spna>
 	</a>

 </div>



	<script src="js/jquery.js"></script>
	<script>
		function bookClick(book_id)
		{
		   var book_id="?book_id="+book_id;
		   window.location="description.php"+book_id;
		}
	</script>