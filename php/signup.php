<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['telephone'];
$location = $_POST['location'];

$conn = mysqli_connect("localhost", "root", "", "ait");


$eresult = mysqli_query($conn, "select email from details where email = '$email'");
$enoor = mysqli_num_rows($eresult);

$result = mysqli_query($conn, "select name from details where name = '$username'");
$noor = mysqli_num_rows($result);

if($enoor>=1){
	echo "Email already exists";
}
elseif($noor>=1){
	echo "Username already exists";
}
else{
	$sql = "Insert into details (name, email, username, password, phone, location) values ('".$name."', '".$email."', '".$username."', '".$password."', '$phone', '".$location."')";
	mysqli_query($conn, $sql);
	echo "Signup Successful";
	header('location: ../html/loginpage.php');
}

?>