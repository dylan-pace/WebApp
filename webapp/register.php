<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form name="frmUser" method="POST" action="registerCheck.php">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="0"  width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Register Details</td>
			</tr>
			
			<tr class="tablerow">
			<td>
			<input type="text" name="fullName" placeholder="Full Name" class="reg-input" required></td>
			</tr>
			
			
			<tr class="tablerow">
			<td>
			<input type="text" name="Email" placeholder="Email" class="reg-input" required></td>
			</tr>
			
			<tr class="tablerow">
			<td>
			<input type="text" name="username" placeholder="User Name" class="reg-input" required></td>
			</tr>
			
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Password" class="reg-input" required></td>
			</tr>
			
			<tr class="tablerow">
			<td>
			<input type="password" name="passwordRep" placeholder="Repeat Password" class="reg-input" required></td>
			</tr>
			
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
			
			<p>By ticking this box you agree to our <a href="#">Terms & Privacy</a>: <input type="checkbox" checked="checked" name = "tp"></p>
		</table>
		<div class="g-recaptcha" data-sitekey="6Lf3ooYUAAAAAA3U_F9mybQuwNaScvoJALnabBNi"></div>

</form>

<?php include 'footer.php';?>