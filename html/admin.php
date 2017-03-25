<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

<div>
	<?php include 'adminnav.php' ;?>

<div class="forms">
	<form action="../php/admin.php" method="POST">
		<h3>More Pets For Everyone</h3>
		<label>Type: </label><input type="radio" name="type" value="Cat" checked> Cat
							<input type="radio" name="type" value="Dog"> Dog
							<input type="radio" name="type" value="Rabbit"> Rabbit
		<label>Breed: </label><input type="radio" name="breed" value="american_curl" checked> American Curl
							<input type="radio" name="type" value="beagle"> Beagle
							<input type="radio" name="type" value="bunny"> Bunny
							<input type="radio" name="type" value="bengal"> Bengal
							
		<label>Image: </label><input type="file" name="image">
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

</body>
</html>