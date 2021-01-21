<?php 
require_once 'config/init.php';

$message="";
if(count($_POST)>0) {
    session_start();
    include 'init.php';
	$result = "SELECT * FROM user WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'";
	mysqli_query($init, $query);
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
		print_r($message);
	} else {
		$message = "You are successfully authenticated!";
		print_r($message);
	}
}

?>


<div class="one-third column">
 <h3>Navigation Panel</h3>
 <ul>
<li><a href="index.php">Home</a></li>
<li><a href="initialtests.php">Initial Tests</a></li>
<li><a href="testFunctions.php">Function Tests</a></li>
<li><a href="">Database Tests</a></li>
<li><a href="accessDatabase.php">Form to DB Test</a></li>
<li><a href="OOClassTest.php">OO Class Tests</a></li>
<li><a href="crud.php">Crud Application</a></li>
<li><a href="API.php">Data Transfer and Web Services</a></li>
<li><a href="react.php">React</a></li>
</ul>
</div>
