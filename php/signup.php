<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['telephone'];
$location = $_POST['location'];

$conn = mysqli_connect("localhost", "root", "", "petfinder");


$eresult = mysqli_query($conn, "select email from details where email = '$email'");
$enoor = mysqli_num_rows($eresult);

$result = mysqli_query($conn, "select name from details where name = '$username'");
$noor = mysqli_num_rows($result);

if($enoor>=1){
	setcookie('err', 'Email already exists', time()+60, '/');
	// $_SESSION['err']='Email already exists';
	header('location: ../html/signuppage.php');
}
elseif($noor>=1){
	setcookie('err', 'Username already exists', time()+60, '/');
	// $_SESSION['err']="Username already exists";
	header('location: ../html/signuppage.php');
}
else{
	$sql = "Insert into details (name, email, username, password, phone, location) values ('".$name."', '".$email."', '".$username."', '".$password."', '$phone', '".$location."')";
	mysqli_query($conn, $sql);
	// echo "Signup Successful";
	setcookie('user', $username, time()+84000, '/');
	header('location: ../html/home.php');
	// header('location: ../html/loginpage.php');
}

?>