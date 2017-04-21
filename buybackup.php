<?php

$path = $_GET['q'];
//$path= "images/ac1.jpg";
mysql_connect("localhost","root","");
mysql_select_db("petfinder");
$result = mysql_query(" Select Description , Price from animal where path = '$path'");
while ($row = mysql_fetch_assoc($result)) {

$array[] = $row;

	}

	if (empty($array)) {
		echo(json_encode(false));
		
	}
	else{
		echo(json_encode($array));
	}

?>