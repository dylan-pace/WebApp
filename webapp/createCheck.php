<?php
include 'config/init.php';
$name = $_POST['filmname'];
$length = $_POST['filmlength'];
$rating = $_POST['filmrating'];
$image=$_POST['text'];


    $insert = $mysqli_conn->query("INSERT INTO films (filmName, filmRating, filmLength, filmImage) VALUES ('$name', '$rating', '$length', '$image')");

    header('Location: formToDB.php');
?>