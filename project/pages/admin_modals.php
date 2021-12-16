<?php

    function loadCategory()
    {
      include 'dbconnect.php';
      $sql="Select * from category";
      $result=mysqli_query($conn,$sql);
      $output='';
      while($row=mysqli_fetch_assoc($result))
      {
        $output .="<option value=".$row['cat_id'].">".$row['cat_name']."</option>";
      }

      return $output;
    }
?> 


<!--Modal for Adding Category-->
<div class="modal fade" id="addCat">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
   <div class="modal-body">
        <form  id="add_category">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="cat_name">
          </div>
        <input type="hidden" name="type" value="category">
          <div class=" form-group">
             <button style="width:100%" type="submit"  value="submit" class="btn btn-success" name="submit">Add Category</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>


<!--Modal for Editing Category-->
<div class="modal fade" id="editCat">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Edit Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form  id="edit-cat-form">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="cat_name" id="edit_cat_name">
          </div>
        <input type="hidden" name="type" value="category">
          <div class=" form-group" >
             <button style="width:100%" type="submit" value="submit" class="btn btn-success" name="submit">Save Category</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>






<!--Modal for Adding Sub-Category-->
<div class="modal fade" id="addSubCat">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Add Sub-Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form  id="add-sub-cat">
          <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" id="cat-name1" required>
              <option value="">Select Category</option>
              <?php echo loadCategory();?>
              
            </select>
          </div>
          <div class="form-group">
            <label>Sub-category Name</label>
             <input type="text" class="form-control" name="sub-cat" id="sub-cat" required>
          </div>
          <div class=" form-group" >
             <button style="width:100%" type="submit" value="submit" class="btn btn-success" name="submit">Add Sub-Category</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<script src="js/jquery.js"></script>
<!--Modal for Adding  Book-->
<div class="modal fade" id="addBook">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Add Sub-Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form  id="add-books"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
          <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" id="cat-name-change" name="cat_id" required>
              <option value="">Select Category</option>
              <?php echo loadCategory();?>
              
            </select>
          </div>
        </div>


          <div class="col-md-6">
          <div class="form-group">
            <label>Sub-category Name</label>
             <select class="form-control" id="sub-cat2" name="sub_cat_id" required>
               <option value="">Select Sub-category</option>
             </select>
          </div>
        </div>


        </div>
        <!-- First row ends -->
            <div class="row">
            <div class="col-md-6">
          <div class="form-group">
            <label>Book Name</label>
            <input class="form-control" type="text" name="book_name" required />
          </div>
        </div>


          <div class="col-md-6">
          <div class="form-group">
            <label>Book Price</label>
            <input class="form-control" type="text" name="book_price" required />
          </div>
        </div>


        </div>
<!-- Second row ends -->
   <div class="row">
            <div class="col-md-6">
          <div class="form-group">
            <label>Book Description</label>
            <input class="form-control" type="text" name="book_description" required />
          </div>
        </div>
 <div class="col-md-6">
          <div class="form-group">
            <label>Book Author</label>
            <input class="form-control" type="text" name="book_author" required />
          </div>
        </div>

        

        </div>
        <!-- Third row ends -->
         <div class="row">
            <div class="col-md-6">
          <div class="form-group">
            <label>Book Publication</label>
            <input class="form-control" type="text" name="book_publication" required />
          </div>
        </div>


         <!--  <div class="col-md-6">
          <div class="form-group">
            <label>Book Image</label>
            <input class="form-control" type="file" name="book_image" required />
          </div>
        </div> -->


        </div>
        <!-- Fourth row ends -->





          <div class=" form-group" >
             <button style="width:100%" type="submit" value="submit" class="btn btn-success" name="submit">Add Book</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<script>
  $('#cat-name-change').change(function(){
      var cat_id=$('#cat-name-change').val();
      var type="load-sub-category";
      $.ajax({
            url:'models/manage_book.php',
            method:'post',
            data:{cat_id:cat_id,type:type},
            success:function(data){
                $('#sub-cat2').html(data);
                // alert(data);

            }
      })

})






  $('#add-books').submit(function(e)
  { 

    e.preventDefault();
      var form_data=$(this).serialize();
  
      $.ajax({
     url:'models/add_book.php',
     method:'POST',
     data:{form_data},
     success:function(data)
     {
       alert(data);
       $("#add-books").trigger('reset');
        $('#addBook').modal('hide');
        $('#admin_content').load('pages/manage_book.php');
     }
    })
  })  
</script>

