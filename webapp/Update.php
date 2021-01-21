<?php
include 'header.php';
include 'leftnav.php';

$id = $_GET['id'];

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
<?php

if(isset($_POST['ASubButton'])){
	$name=$_POST['filmName'];
	$length=$_POST['filmLength'];
    $rating=$_POST['filmRating'];
    $image = $_POST['filmImage'];
    
    $delete = $mysqli_conn->query("DELETE FROM films WHERE id = '$id' ");

    $insert = $mysqli_conn->query("INSERT INTO films (filmName, filmRating, filmLength, filmImage) VALUES ('$name', '$rating', '$length', '$image')");

	header("Location: formToDB.php");
    
}
else
{
    echo'';	
}
		
?>


<html>
<body>

<form method = "POST" action="">
    <fieldset>
<legend>
    Enter Film Details
</legend>
<input type="hidden" name="id" value="id" />
<label for="">Film Name: </label>
</br>
<input type = "text" name ="filmName" value=""/>
</br>
<label for="">Film Length: </label>
</br>
<input type="text" name="filmLength" value=""/>
</br>
<label for="">Film Rating: </label>
</br>
<input type="text" name="filmRating" value=""/>
</br>
<label for="">Film Image: </label>
</br>
<input type="text" name="filmImage" value=""/>
</br>
<input type="hidden" name="text">
<input type="file" name="filmimage" />
</br>
<input type="submit" value="Submit" name="ASubButton"/>
		<input type="reset" value="Clear" />
    </fieldset>
</form>
</body>
</html>

<?php
include 'footer.php';
?>