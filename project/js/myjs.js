
// For controlling carousel

	$('.carousel').carousel({
		interval:9000
	})


// ------------------------------------

// For controlling admin page

	$('#admin_cat').click(function(){
		$('#admin_content').load('pages/manage_category.php');
	})

	$('#admin_sub_cat').click(function(){
		$('#admin_content').load('pages/manage_sub_category.php');
	})

	$('#admin_book').click(function(){
		$('#admin_content').load('pages/manage_book.php');
	})

	
// ------------------------------------


// For controlling manage_category



	// Adding Category
	$('#add_category').submit(function(e)
	{		
		  e.preventDefault();
		  var form_data=$(this).serialize();	
		  $.ajax({
			url:'models/manage_category.php',
			method:'POST',
			data:{form_data},
			success:function(data)
			{
				alert(data);
			   $("#add_category").trigger('reset');
			   $('#addCat').modal('hide');
			   $('#admin_content').load('pages/manage_category.php');
			}
		})
	})


	// Deleting Category
	function deleteCategory(cat_id, sn)
	{
		 if(confirm("Are you sure you want to delete"))
		 {
		 	
		 	$.ajax({
		 		url:'models/delete_category.php',
				method:'POST',
				data:{"cat_id":cat_id,"type":"delete-category"},
				success:function(data)
				{
					$('tr#'+sn).css({'background-color':'#aaa'});
					$('tr#'+sn).fadeOut('8000')
					if(data.length>0)
					alert(data);
				}
		 	})
		 }
	}


	//Editing Category
	var cat_id;
	function editCategory(cat)
	{
		cat_id=cat;
		
		$.ajax({
			url:'models/edit_category.php',
			method:'post',
			data:{'cat_id'  :cat_id},
			success:function(data)
			{
				$('#edit_cat_name').val(data);
			}
		})

		$('#editCat').modal();		

	}

	$('#edit-cat-form').submit(function(e)
	{
			e.preventDefault();
			var cat_name=$('#edit_cat_name').val();
			 
		      $.ajax({
		 		url:'models/edit_category.php',
				method:'POST',
				data:{'cat_id':cat_id,'cat_name':cat_name},
				success:function(data)
				{
					$("#editCat").trigger('reset');
			      $('#editCat').modal('hide');
					$('#admin_content').load('pages/manage_category.php');
					if(data.length>0)
					alert(data);

				}
		 	})

		     
		})
// ------------------------------------
	 // Sub-Cat adding

$('#add-sub-cat').submit(function(e)
	{		
		  e.preventDefault();
		  var cat_id=$('#cat-name1').val();
		  var sub_cat=$("#sub-cat").val();
		  var type="sub-category";
		  $.ajax({
			url:'models/manage_sub_category.php',
			method:'POST',
			data:{cat_id:cat_id,sub_cat:sub_cat,type:type},
			success:function(data)
			{
				alert(data);
			 	  $("#add-sub-cat").trigger('reset');
			      $('#addSubCat').modal('hide');
			      $('#admin_content').load('pages/manage_sub_category.php');
			}
		})
	})	









	// $('#cat-name-for-sub-option').change(function(){

 //      var $cat_id=$(this).val();
 //      var $type="fetch_sub_cat";

 //      alert($cat_id);

        // $.ajax({
      		// url:'manage_sub_category.php',
      		// method:'post',
      		// data:'cat_name:$cat_name,type:$type',
      		// success:function(data)
      		// {
      		// 	$('#sub-cat-load').html(data);
      		// }
        // })
  	// })	
// ==============================================
// Managing books
// Adding books






 

