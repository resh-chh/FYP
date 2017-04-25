<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<style type="text/css">
		
		.bot{
			width: 100%;
			margin: 0 auto;
			margin-top: 3%;
			padding: 5px;
			border: 5px solid lavender;
		}

		@media only screen and (max-width: 750px){
			form{
				width: 70%;
			}
		}

		@media only screen and (max-width: 450px){
			div, form{
				width: 90%;
			}
		}
	</style>
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
<br>
<div class="bot">
	<?php include 'footer.php' ;?>
</div>
</body>
</html>
