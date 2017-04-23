document.getElementById("inputbread").disabled = false;
			var result="<?php php_call(); ?>";
			alert(result);

<div class="imagebox" id="displaybox" style="background-color: white; margin-left: 30%; margin-right: 30%; border: 2px solid ; height: auto;">
<div class="textoverimage"  style=" background-image: url('<?php echo $_REQUEST['q']; ?>') ;width:50% ;"></div>

</div>  
</section>


</body>
</html>

<?php
function php_call('typevalue'){
$servername="localhost";
$username="root";
$password="";
$dbname="petfinder";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Not connected" . mysqli_conect_error());
}
echo "connected";

$sql=" SELECT bread from animal where type='typevalue' group by typevalue,bread";
$result=mysqli_query($sql);
$count =mysqli_num_rows($result);
echo "count" . $count;
if($count> 0)
{

	while($row=mysqli_fetch_assoc($result)){
		echo "category" . $row[0];
	}
}
}
?>

$.ajax({

        url :"notif.php",
        type: "POST",
        dataType: "json",
        data : "value="+ $('#type').val();

      }).done(function(data){

    alert("lkm");
        var filler="";
        for(var i=0;i<data.length;i++)
        {
          filler+="<option value="+data[i]+">"+data[i]+"</option>";
        };
        $('#inputbread').html(filler);

      });

