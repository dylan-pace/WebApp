<?php
error_reporting(E_ALL); ini_set('display_errors', 'On'); 
//Make connection to database
include 'config/init.php';

//Gather id from $_GET[]
	$id = $_GET['id'];


//Construct DELETE query to remove record where WHERE id provided equals the id in the table
$insert = $mysqli_conn->query("DELETE FROM films WHERE id = '$id' ");

header("Location: formToDB.php");
?>