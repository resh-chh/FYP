<?php
$check = $_POST['pet'];

$conn = mysqli_connect("localhost", "root", "", "petfinder");

foreach ($check as $value) {
	echo $value;
	mysqli_query($conn, "Delete from animal where Id='$value'");
	header('location: ../html/admin.php');
}


?>