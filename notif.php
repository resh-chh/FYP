<?php
//$type=$_REQUEST["q"];

if(isset($_GET['q']))
{

$type=$_GET["q"];

mysql_connect("localhost","root","");
mysql_select_db("petfinder");
$result=mysql_query("select bread from animal where type='$type' group by bread");
/*$array=mysql_fetch_assoc($result);
print_r($array);
*/
while($array=mysql_fetch_assoc($result))
{
	
	
	$row[]=$array;

}}


/*

for($i=0;$i> sizeof($row);$i++)
{
	echo "<option value='".$row[$i]."'>".$row[$i]."</option>";
}
}
*/
if( empty($row))
echo(json_encode(false));
else
echo(json_encode($row));




?>




        
