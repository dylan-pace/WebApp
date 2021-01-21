<?php
include 'config/init.php';

//Gather id from $_GET[]
	$id = $_GET['id'];

$name = $_POST['filmname'];
$length = $_POST['filmlength'];
$rating = $_POST['filmrating'];
$image=$_POST['text'];


$delete = $mysqli_conn->query("DELETE FROM films WHERE id = '$id' ");

$insert = $mysqli_conn->query("INSERT INTO films (filmName, filmRating, filmLength, filmImage) VALUES ('$name', '$rating', '$length', '$image')");


    header("Location: formToDB.php");
?>

