<?php 
include_once "createOO.php";//This creates the table
include 'header.php';
include 'leftnav.php';

  function displayData($result){

  print "<table border = 1 >"; 

  while ($row = $result->fetch_assoc()){ 

  print "  <tr>"; 

  print "    <td>" . $row["id"] . "</td>"; 

  print "    <td>" . $row["email"] . "</td>"; 

  print "    <td>" . $row["password"] . "</td>"; 

  print "  </tr>"; 

  } 

  print "</table>"; 

  }


//Select Data

  $result = $mysqli->query("SELECT * FROM Members");

  print " Query returned ". $result->num_rows . " rows ";; 

  displayData($result); 


//update

  $mysqli->query("UPDATE Members SET password='secret'");

  print "Changing Password to 'Secret' - Affected rows (UPDATE): = ";

  print $mysqli->affected_rows;

  $result = $mysqli->query("SELECT * FROM Members");

  displayData($result); 

  //delete

  print "Deleting row with email = green@leedsmet.ac.uk";

  $mysqli->query("DELETE FROM Members WHERE email = 'green@leedsmet.ac.uk'");

  $result = $mysqli->query("SELECT * FROM Members");

  displayData($result); 

include 'footer.php';

?>