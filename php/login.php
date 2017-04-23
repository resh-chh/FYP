<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "", "petfinder");

$result = mysqli_query($conn, "select * from details where username = '$username' and password = '$password'") or die("Failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
	// echo "Login Successful ".$row['username'];
	setcookie('user', $row['username'], time()+84000, '/');
	setcookie('role', $row['role'], time()+86400, '/');
	if($row['role']=='user')
	header('location: ../html/home.php');
	elseif($row['role']=='admin')
		header('location: ../html/admin.php');
} else {
	// echo "Login failed";
	setcookie('err', 'Incorrect username/password', time()+60, '/');
	// $_SESSION['err'] = 'Incorrect username/password';
	header('location: ../html/loginpage.php');

}

?>