<!DOCTYPE html>
<html>
<head>
	<title>Delete Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/trans.css">
</head>
<body>

<?php include 'adminnav.php';?>

<div>
<form action="../php/trans.php" method="POST">

<table id="a1">
	<tr >
	<th> ID </th>
	<th> Type </th>
	<th> Breed </th>
	<th> Price </th>
	</tr>
</table>
<?php 
$conn = mysqli_connect("localhost", "root", "", "petfinder");
$result = mysqli_query($conn, "select * from animal");
// $row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
        echo '<input type="checkbox" name="pet[]" value="'.$row['Id'].'">
        	<table>
        	<tr>
        		<td> '.$row['Id'].' </td> 
        		<td> '.$row['Type'].' </td> 
        		<td> '.$row['Bread'].' </td> 
        		<td> '.$row['Price'].' </td>
        	  <tr> 
        	  </table> </input> <br>';
        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<input type="submit" name="submit" value="Delete" id="sub">

</form>
</div>
<div class="bot">
    <?php include 'footer.php' ;?>
</div>
</body>
</html>