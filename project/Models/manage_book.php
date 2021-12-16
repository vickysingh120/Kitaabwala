<?php

  include '../pages/dbconnect.php';


   if($_POST['type']=='load-sub-category')
   {
   		$cat_id=$_POST['cat_id'];

   		$sql="Select * From sub_category Where cat_id=$cat_id";

   		  $result=mysqli_query($conn,$sql);
 
      $output='<option>Select Sub-category</option>';
      while($row=mysqli_fetch_assoc($result))
      {
        $output .="<option value=".$row['sub_cat_id'].">".$row['sub_cat_name']."</option>";
      }

      echo $output;
   }


?>