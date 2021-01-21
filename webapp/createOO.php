       			       			
<?php 
 // include_once 'config/init.php';//Contains $hostname, $username, $password, $databaseName connection details
 $hostname = 'dylpace97.com.mysql';
$username = 'dylpace97_com';
$password = 'dz4jLnKKZp4jdeCiTbSRZLUH';
$database = 'dylpace97_com';
$dbdriver = 'MariaDB';

		//Open the database connection - exit with error message otherwise 
$mysqli = mysqli_connect($hostname, $username, $password, $database) or exit("Unable to connect to database!");

$tableCreate = "CREATE TABLE Members (    id int(11) NOT NULL auto_increment,

  email varchar(255) NOT NULL, 

  password varchar(255) NOT NULL, 

  PRIMARY KEY (id)

  )";


//$mysqli = new mysqli($hostname,$username, $password,$databaseName);

  if ($mysqli->connect_errno) { //check the connection

  print "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

  }


//Drop the table

  $query = "DROP TABLE IF EXISTS Members CASCADE "; 

  $mysqli->query($query);


//Call the query method 

  if ($mysqli->query($tableCreate) === TRUE) {

 // print " Table  'Members' successfully created.";

  }

  $query = "INSERT INTO `Members` VALUES (1, 'brown@leedsmet.ac.uk','jenny') "; 

  $mysqli->query($query);

  $query = "INSERT INTO `Members` VALUES (2, 'green@leedsmet.ac.uk','ray') "; 

  $mysqli->query($query);

  $query = "INSERT INTO `Members` VALUES (3, 'hashmi@leedsmet.ac.uk','rehana')"; 

  $mysqli->query($query);


?>
