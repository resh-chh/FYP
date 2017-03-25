<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "", "ait");

$result = mysqli_query($conn, "select * from details where username = '$username' and password = '$password'") or die("Failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
	echo "Login Successful ".$row['username'];
	header('location: ../html/home.php');
} else {
	echo "Login failed";
}

?>