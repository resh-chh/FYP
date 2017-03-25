<?php
$type = $_POST['type'];
$breed = $_POST['breed'];
//$image = $_POST['imag']
$location = $_POST['location'];
$description = $_POST['description'];

$conn = mysqli_connect("localhost", "root", "", "ait");

$sql = "Insert into pets (name, type, breed, location, description) values ('".$name."', '".$type."', '".$breed."', '".$location."', '".$description."')";
	mysqli_query($conn, $sql);
	header('location: ../html/admin.php');

?>