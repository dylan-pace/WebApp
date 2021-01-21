<?php
include 'config/init.php';

$username = $_SESSION['authenticatedUsername'];
$password = $_SESSION['authenticatedPassword'];

$user = $_POST['username'];
$pass = $_POST['password'];
$rep = $_POST['passrep'];

//Construct DELETE query to remove record where WHERE id provided equals the id in the table
$delete = $mysqli_conn->query("DELETE FROM users WHERE username = '$username'  AND password = '$password'");

$insert = $mysqli_conn->query("INSERT INTO user (username, password) VALUES ('$user', '$pass')");

header("Location: index.php");


?>