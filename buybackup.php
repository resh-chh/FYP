<?php

$path = $_GET['q'];
//$path= "images/ac1.jpg";
$conn=mysqli_connect("localhost","root","", "petfinder");
// mysql_select_db("petfinder");
$result = mysqli_query($conn, " Select Description , Price from animal where path = '$path'");
while ($row = mysqli_fetch_assoc($result)) {

$array[] = $row;

	}

	if (empty($array)) {
		echo(json_encode(false));
		
	}
	else{
		echo(json_encode($array));
	}

?>