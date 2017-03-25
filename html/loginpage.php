<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<div>
	
	<?php include 'header.php' ;?>

<form action="../php/login.php" method="post">
<h2>Login</h2>
	Username: <br><input type="text" name="user" required autocomplete autofocus>
	
	Password: <br><input type="Password" name="pass" required>
	<br>
	<input type="Submit" name="Submit" value="Login" id="sub">
	<hr>
<h4>No Account?</h4>
<input type="button" name="Signup" value="Signup" id="b1" onclick="location.href='signuppage.php'">

</form>

</div>
</body>
</html>
