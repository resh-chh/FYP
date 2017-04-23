<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
<?php if($_COOKIE['role']=='user') header('location: ../html/home.php');?>
<div>
	<?php include 'adminnav.php' ;?>

<div class="forms">
	<form action="../php/admin.php" method="POST">
		<h3>More Pets For Everyone</h3>
		<label>Type: </label><input type="radio" name="type" value="Cat" checked> Cat
							<input type="radio" name="type" value="Dog"> Dog
							<input type="radio" name="type" value="Rabbit"> Rabbit
		<label>Breed: </label><input type="name" name="breed"> 
							
		<label>Image: </label><input type="file" name="image"><br><br>
		<label>Location: </label><input list="location" name="location" default="Mumbai">
				<datalist id="location" >
					<option value="Mumbai">Mumbai</option>
					<option value="Navi Mumbai">Navi Mumbai</option>
					<option value="Thane">Thane</option>
					<option value="Ulhasnagar">Ulhasnagar</option>
				</datalist>
		<label>Description: </label><textarea rows="2" cols="30"></textarea>
				<br>
<input type="Submit" name="submit" value="Submit" id="sub">
</form>
</div>

</div>
<div class="bot">
	<?php include 'footer.php' ;?>
</div>
</body>
</html>