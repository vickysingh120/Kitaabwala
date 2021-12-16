<?php

  	include 'dbconnect.php';
  	$sql="Select * From category";
  	$result=mysqli_query($conn,$sql);
  
?>

<div id="admin_content_panel">
	<div class="category-bar">
	<div data-toggle="modal" data-target="#addCat"><i class="fa fa-list-alt fa-2x"></i><i class="fa fa-plus"></i><div>Add Category</div></div>
	</div>
	<table class="table table-bordered table-hover">
		<tr>
			<th>S.No.</th>
			<th>Category Name</th>
			<th>Edit Category</th>
			<th>Delete Category</th>
		</tr>
		<?php $i=1;
			
		 while($row=mysqli_fetch_assoc($result)){?>
           
			<tr id="<?=$i;?>">
				<td><?=$i++; ?></td>
				<td><?=$row['cat_name'];?></td>
				<td><button type="buton" onclick="editCategory(<?= $row['cat_id']?>) " class="btn btn-warning btn-sm">Edit</button></td>
				<td><button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory(<?= $row['cat_id'];?>,<?=$i-1;?>)">Delete</button></td>
			</tr>
		<?php } ?>
	</table>
	
</div>

<script>

</script>