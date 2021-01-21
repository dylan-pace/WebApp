<?php
include 'header.php';
include 'leftnav.php';
if (!isset($_SESSION['admin_id'])&&empty($_SESSION['admin_id'])){

    print "You do not have permisson to access this page.";
    header("location: login.php");
    
}
?>

<html>
<head>
<title>User Login</title>
</head>
<body>

<form name="frmUser" method="POST" action="changeCheck.php">
      <label><b>New Username</b></b></label>
      <input type="text" placeholder="username" name="username" required>
      
      <label><b>New Password</b></label>
      <input type="password" placeholder="password" name="password" required>
      
      <label><b>Old Password</b></label>
      <input type="password" placeholder="password" name="passrep" required>
      
      <button type="submit" class="loginbtn" name="subButton" id="subButton">Login</button>
</form>

<?php
include 'footer.php';
?>