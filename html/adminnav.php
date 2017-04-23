<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<style type="text/css">
	nav{
		width: 90%;
		margin: 0 auto;
	}
</style>
</head>
<body>
<header>Find Your Pet</header>
<div>
	<nav>
		<ul>
			<li><a href="../html/admin.php">Home</a></li>
			<li><a href="../html/transaction.php">View Pets</a></li>
			<li class="ri"><?php if (isset($_COOKIE['user'])) { ?>
							<a href="../php/logout.php"> Logout </a>
						<?php }?>
							</li>

		</ul>
	</nav>

</body>
</html>