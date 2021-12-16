<?php
  include '../pages/dbconnect.php';

	parse_str($_POST['form_data'],$form_data);
		extract($form_data);
 
		$sql="Insert Into book (sub_cat_id,cat_id, book_name,book_price, book_description, book_author, book_publication) Values($sub_cat_id,$cat_id, '$book_name',$book_price, '$book_description', '$book_author', '$book_publication')";
		$result=mysqli_query($conn,$sql);

		if($result)
		{
			echo("Book Added");
		}
		else
		{
			echo "Oops! something went wrong. \n Try Again";
		}
  
?>