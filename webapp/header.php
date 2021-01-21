<?php 
include 'config/init.php';
require 'config/core.inc.php';
if (isset($_SESSION['admin_id'])&&!empty($_SESSION['admin_id'])){
    session_start();
    echo 'Access your account: ' ?><a href="myAccount.php">My Account</a><?php
    echo '<br/>';
    echo 'Change credentials: ' ?><a href="changeCreds.php">Change Credentials</a><?php
    }
else{
  echo 'not logged in';
}
?>

    <!DOCTYPE html>.

	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/skeleton.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<class="container">
		<div class="two columns">

		</div>
		<div class="ten columns">
			<h2  class="remove-bottom" style="margin-top: 10px">Internet Application Development</h2>
		</div>
		
		<div class="remove-bottom" style="margin-top: 10px" id="nav" class="four columns">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
		</ul>
		
		</div>
		<div class="sixteen columns">
		<hr />
		</div>
		