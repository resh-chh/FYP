<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
<?php if(isset($_COOKIE['role'])){if($_COOKIE['role']=='admin') header('location: ../html/admin.php');}?>
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

	  <div><p style="color: red;">
    <?php 
    if( isset($_COOKIE['err']) )
    {
        echo $_COOKIE['err'];

        setcookie('err', '', time()-60, '/');

    }  ?></p></div>
<input type="Submit" name="submit" value="Submit" id="sub">
</form>

</div>
</body>
</html>