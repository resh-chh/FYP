<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<?php if(isset($_COOKIE['role'])){if($_COOKIE['role']=='admin') header('location: ../html/admin.php');}?>
<?php if (isset($_COOKIE['user'])) { header('location: ../html/home.php');} ?>
<div>
	
	<?php include 'header.php' ;?>

<form action="../php/login.php" method="post">
<h2>Login</h2>
	Username: <br><input type="text" name="user" required autocomplete autofocus>
	
	Password: <br><input type="Password" name="pass" required>
	<br>
	
	  <div><p style="color: red;">
    <?php 
    if( isset($_COOKIE['err']) )
    {
        echo $_COOKIE['err'];

        setcookie('err', '', time()-60, '/');
    }  ?></p></div>

	<input type="Submit" name="Submit" value="Login" id="sub">
	
	<hr>
<h4>No Account?</h4>
<input type="button" name="Signup" value="Signup" id="b1" onclick="location.href='signuppage.php'">

</form>

</div>
</body>
</html>
