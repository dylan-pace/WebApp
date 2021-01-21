<?php 
include "config/init.php";

$query = "SELECT * FROM films"; 
$result = $mysqli_conn->query($query) or die ("Error in query: $query. ".mysql_error()); 
  $jsondata = array();
  while($row=mysqli_fetch_row($result)){
  $jsondata['Films'][]=$row;
  }
  echo json_encode($jsondata);


?>
    