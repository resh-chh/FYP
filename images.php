
<?php
//if(isset($r))
//{
//$type=$_REQUEST["type"];
//$breed=$_REQUEST["breed"];

$type=$_GET['type'];
$breed=$_GET['breed'];

$conn = mysqli_connect("localhost","root","", "petfinder");
// mysql_select_db("petfinder");
$result=mysqli_query($conn, "select path,Description,id from animal where Bread='$breed' and type='$type'");

while($row=mysqli_fetch_assoc($result)){
  
   $arr[]=$row;

   
}

if(empty($arr))
echo(json_encode(false));
else
echo(json_encode($arr));



?>