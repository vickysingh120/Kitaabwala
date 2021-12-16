<?php

session_start();

include '../pages/dbconnect.php';

 $name=$_FILES['myfile']['name'];
 $tmp=$_FILES['myfile']['tmp_name'];

   
   $ext=explode('.',$name);
   $ext=end($ext);
$name=$_SESSION['book_id'].".".$ext;

 $store="../img/book/".$name;

$book_id=$_SESSION['book_id'];

  $sql="Update book Set book_image='$name' Where  book_id=$book_id";

  $result=mysqli_query($conn,$sql);

  $upload=move_uploaded_file($tmp,$store);

  if($result && $upload)
  {
  	echo "Uploaded";
  }
  else
  {
  	echo "Something went wrong";
  }




unset($_SESSION['book_id']);
?>