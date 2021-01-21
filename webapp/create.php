<?php
include 'header.php';
include 'leftnav.php';
?>

<html>
<head>
<title>Create</title>
</head>
<body>

<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"assets/images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="createCheck.php" method="POST" enctype="multipart/form-data">
                <label><b>Film Name</b></b></label>
      <input type="text" placeholder="film name" name="filmname">
      
      <label><b>Film Length</b></label>
      <input type="text" placeholder="film length" name="filmlength">
      
      <label><b>Film Rating</b></label>
      <input type="text" placeholder="film rating" name="filmrating">
 
      <input type="file" name="filmimage" />
      <input type="submit"/>
      </form>
      
   </body>
</html>

<?php
include 'footer.php';
?>