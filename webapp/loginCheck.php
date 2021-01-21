<?php
include 'config/init.php';
session_start();

//Gather details submitted from the $_POST array and store in local vars
$username = $_POST['username'];
$password = $_POST['password'];

//build query to SELECT records from the users table WHERE
//the username AND password in the table are equal to those entered.
$result = $mysqli_conn->query("SELECT * FROM user WHERE username = '" . $_POST["username"] . "' AND password = '". $_POST["password"]. "'");

if($result->num_rows > 0){
        $admin_id='2';
        $_SESSION['admin_id']=$admin_id;
        $_SESSION["authenticatedUsername"] = $username;
        $_SESSION['authenticatedPassword'] = $password;
        ob_start();
        header("Location: myAccount.php");
        exit();
} else {
   header("Location: login.php");
}
 
?>