<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
<div>
<?php include 'header.php' ;?>

<form action="../php/signup.php" method="POST"> 
<h2>Sign Up</h2>
Name: <input type="name" name="name" required>
E-mail: <input type="email" name="email" required>
Username: <input type="name" name="username" required>
Password: <input type="Password" name="password" required>
Mobile Phone: <input type="tel" name="telephone">
Location: <input list="location" name="location" default="Mumbai">
				<datalist id="location" >
					<option value="Mumbai">Mumbai</option>
					<option value="Navi Mumbai">Navi Mumbai</option>
					<option value="Thane">Thane</option>
					<option value="Ulhasnagar">Ulhasnagar</option>
				</datalist>
				<br>
<input type="Submit" name="submit" value="Submit" id="sub">
</form>

</div>
</body>
</html>