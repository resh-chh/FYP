<!DOCTYPE html>
<html>
<head>
	<title>Adopt Now</title>
	
</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash|Pacifico|Supermercado+One" rel="stylesheet');
	body{
background-image: url('back2.jpg');
background-size: 100%;
background-repeat: repeat;

	}
	section{
		margin-right: 10%;
		margin-left: 10%;
	}
	.textoverimage{	
float: left;
border-radius: 5px;
margin: 12px;
border: double 2px black;
box-shadow:5px 4px 5px black; 
background-size: 100% 100%;
background-repeat: no-repeat;
background-origin: content-box;
height: 200px;
transition: 0.5s;
}

.col-1 {width: 5.33%;}
.col-2 {width: 10.66%;}
.col-3 {width: 19%;}
.col-4 {width: 27.33%;}
.col-5 {width: 31.66%;}
.col-6 {width: 40%;}
.col-7 {width: 48.33%;}
.col-8 {width: 5.66%;}
.col-9 {width: 65%;}
.col-10 {width: 75.33%;}
.col-11 {width: 85.66%;}
.col-12 {width: 78%;}
	[class*="col-"] {
    float: left;
    padding: 15px;
}
/*
.row::after {
    content: "";
    clear: both;
    display: table;

}*/

	header{
		font-size: 30px;
		text-align: center;
		color: black;
		margin: 20px;
		padding: 20px;
		font-family: 'Berkshire Swash', cursive;
	}

</style>
<body>
<header>
	<h1>Adopt Your Pet</h1>
</header>
<nav>
</nav>

<section class="col-12">
     <div class=" textoverimage col-4" style="background-image: url('<?php echo $_REQUEST['q'];  ?>'); height: 250px;"></div>
     <div class="col-4"><?php  

$path=$_REQUEST['q'];
$conn= mysqli_connect("localhost","root","", "petfinder");
// mysql_select_db("petfinder");
$result=mysqli_query($conn, "select Description ,Price from animal where path='$path'");
$price=0;
while($row=mysqli_fetch_assoc($result))
{?>

<p style="font-size: 25px; font-family: 'Berkshire Swash', cursive"; >Details<br>Description:<?php echo $row["Description"]; ?></p>
<p id="photodetails" style="font-size: 25px; font-family: 'Berkshire Swash', cursive"; >Price: <?php echo $row['Price']; ?></p>
<?php
	
}

 ?>
</div>
<div class="col-4" style="float: left;">
<br><br><br><br><br><br><br><br><br><br>
<div id="paypal-button-container" style="float: left;"></div>
</div>    
       
	

</section>	
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>

//alert(price);
    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: 'Aco85QiB9jk8Q3GdsidqKVCXuPAAVbnqm0agscHCL2-K2Lu2L6MxDU2AwTZa-ALMn_N0z-s2MXKJBxqJ'
        },

        // Wait for the PayPal button to be clicked

        payment: function() {

            // Make a client-side call to the REST api to create the payment

            return paypal.rest.payment.create(this.props.env, this.props.client, {
                transactions: [
                    {
                        amount: { total: '20', currency: 'USD' }
                    }
                ]
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {

            // Execute the payment

            return actions.payment.execute().then(function() {
                document.querySelector('#paypal-button-container').innerText = 'Payment Complete!';
            });
        }

    }, '#paypal-button-container');

</script>
    
</body>
</html>








<?php
/*
if(isset($_GET["q"]))
{
$path=$_GET["q"];
mysql_connect("localhost","root","");
mysql_select_db("petfinder");


$row=mysql_query("select Description from animal where path='$url'");

if( empty($result))
echo(json_encode(false));
else
echo(json_encode($result));




}
/*


while($row=mysql_fetch_assoc($row))
{
	$result[]=$row;
	print_r($result);
	
}

*/
?>





