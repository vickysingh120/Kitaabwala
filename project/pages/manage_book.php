<?php

  	include 'dbconnect.php';
  	$sql="Select * From book";
  	$result=mysqli_query($conn,$sql);
  
?>

<div id="admin_content_panel">
	<div class="category-bar">
	<div data-toggle="modal" data-target="#addBook"><i class="fa fa-book fa-2x"></i><i class="fa fa-plus"></i><div>Add Book </div></div>
	</div>
	<table class="table table-bordered table-hover">
		<tr>
			<th>S.No.</th>
			<th>Book Name</th>
			<th>Book Price</th>
			<th>Book Author</th>
			<th>Book Publication</th>
			<th>Update Pic</th>
			<th>Delete Book</th>
		</tr>
		<?php $i=1;
			
		 while($row=mysqli_fetch_assoc($result)){?>

			<tr id="<?=$i;?>">
				<td><?=$i++; ?></td>
				<td><?=$row['book_name']; ?></td>
				<td><?=$row['book_price']; ?></td>
				<td><?=$row['book_author']; ?></td>
				<td><?=$row['book_publication']; ?></td>

				<td><button type="buton" class="btn btn-warning btn-sm" onclick="updatePic(<?=$row['book_id'];?>)">update pic</button> 
				</td>
				<td><button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory(<?= $row['book_id'];?>,<?=$i-1;?>)">Delete</button></td>
			</tr>
		<?php } ?>
	</table>
	
</div>


<?php
	include 'dbconnect.php'
?>
<!--Modal for Adding Book Pic-->
<div class="modal fade" id="addBookPic">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Updating Book Pic</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
   <div class="modal-body">
        <form  id="update-book-pic">
          <div class="form-group">
            <label>Book Pic</label>
            <input type="file" class="form-control" name="myfile">
            <input type="hidden" name="book_id" id="book_id">
          </div>
          <div class=" form-group">
             <button style="width:100%" type="submit"  value="submit" class="btn btn-success" name="submit">Update Pic</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>


<script>
	 function updatePic(book_id)
    {
    	$('#book_id').val(book_id);

    		 $.ajax({
                 url:'models/set_book_id.php',
                        method:'POST',
                        data:{book_id:book_id},
                        success:function(data)
                        {
           				   // alert(data);
                        }
                   })

    	$('#addBookPic').modal();
    }
	$(document).ready(function(){
           $('#update-book-pic').submit(function(e){
                    e.preventDefault();
                var formData = new FormData($(this)[0]);
                   // form_data.append('cat_id', cat_id);
                   // form_data.append('image', $(this)[0]);

                    $.ajax({
                        url:'models/add_book_pic.php',
                        method:'POST',
                        data:formData,
                        contentType: false,
                        processData:false,
                        success:function(data)
                        {
                             $("#update-book-pi").trigger('reset');
			                 $('#addBookPic').modal('hide');
                            alert(data);
                        }
                    })
                })
            })
</script>





