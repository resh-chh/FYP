<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'petfinder';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
/*
//phpinfo();
 $sql=mysqli_query($conn,"INSERT INTO donation (Amount,Name,Phone,Email,Address,DOB)
 VALUES(\"".$_POST["amount"]."\",\"".$_POST["name"]."\",\"".$_POST["phone"]."\",\"".$_POST["add"]."\",\"".$_POST["dob"]."\",\"));*/
 $name = mysqli_real_escape_string($conn,$_POST['name']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$contact = mysqli_real_escape_string($conn,$_POST['phone']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$address = mysqli_real_escape_string($conn,$_POST['add']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

 	$sql = "INSERT INTO donation (Amount,Name,Phone,Email,Address,DOB)
VALUES ('$amount','$name','$contact','$email','$address','$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: Donation.html'); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 

?>