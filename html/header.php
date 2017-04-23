<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>

<header>Find Your Pet</header>

<div>
	<nav>
		<ul>
			<li><a href="../html/home.php">Home</a></li>
			<li><a href="../html/Adoption.php">Find A Pet</a></li>
			<li><a href="../Donation.php">Donation</a></li>
			<li><a href="#">About Us</a></li>
			<li class="rig"><a href="#"><img src="../img/shop.png" style="width: 40px; height: 30px"></a></li>

			<li class="ri">
						<?php if (isset($_COOKIE['user'])) { ?>
							<a href="../php/logout.php"> Logout </a>
						<?php }else{ ?>
							<a href="../html/loginpage.php"> Login</a>
						<?php }?>
			</li>

		</ul>
	</nav>

</body>
</html>