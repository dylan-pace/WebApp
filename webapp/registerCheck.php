<?php 
include 'config/init.php';

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['fullName'];
$email = $_POST['Email'];
$repPass = $_POST['passwordRep'];


$captcha;
if(isset($_POST['g-recaptcha-response']))
  $captcha=$_POST['g-recaptcha-response'];

if(!$captcha){
  echo '<h2>Please check the the captcha form.</h2>';
  exit;
}
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf3ooYUAAAAAHqjfYiht11bp7ppq-YUo0YnOPJX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false)
{
  echo '<h2>Failed.</h2>';
}
else
{

if(strlen($username) <6){
    ob_start();
    header('Location: usernameShort.php');
    ob_end_flush();
    die();
}

if(strlen($password) <6){
    ob_start();
    header('Location: passwordShort.php');
    ob_end_flush();
    die();
}

if($password !== $repPass){
    ob_start();
    header('Location: passwordMatch.php');
    ob_end_flush();
    die();
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $insert = $mysqli_conn->query("INSERT INTO user (username, password, fullName, Email) VALUES ('$username', '$password', '$name', '$email')");
    
    // the message
    $msg = "Thanks for registering!";

// use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

// send email
    mail($email,"Thanks for registering!",$msg);

    ob_start();
    header('Location: index.php');
    ob_end_flush();
    die();
} else {
    ob_start();
    header('Location: invalidEmail.php');
    ob_end_flush();
    die();
}
}
?>