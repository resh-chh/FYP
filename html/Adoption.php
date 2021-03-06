<!DOCTYPE>
<html>
<head>
  <title>
    FindYourPet
  </title>
  <meta charset="utf-8">
  <meta name="description" content="Find a pet to adopt">
  <meta name="keywords" content="pet, pet finder, puppy finder, dog, cat, kitten, puppy, adopt a pet, rabbit, donate for pets, dog finder, adopt a kitten, adopt a pet near you, petfinder dogs, adopt a cat">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style type="text/css">
  @media only screen and (max-width: 470px){


.textoverimage{
  width: 75%;
 margin-right: 10%;
}
  .imagebox{

   margin-top: 3%;
   margin-right: 10%;
   margin-left: 10%;
   background-color: black;
   opacity: 0.8;
   height: auto;
   border-radius: 4px;
   box-shadow: 4px 4px lightgrey;
   width: 75%;
  }
.search{
   margin-right: 10%;
   margin-left: 10%;
   background-color: grey;
   opacity: 1;
   height: 80%;
   width: 75%;
   border-radius: 4px;
   box-shadow: 4px 4px lightgrey;
  }  


}

@media only screen and (min-width: 470px) and (max-width: 720px){

.textoverimage{
  width: 32%;

}
.imagebox{
  width: 80%;
}

.search{
  
   margin-right: 10%;
   margin-left: 10%;
   background-color: grey;
   opacity: 1;
   height: 50%;
   width: 80%;
   border-radius: 4px;
   box-shadow: 4px 4px lightgrey;
  }

.field-input{
display: inline;
position: relative;
float: left;



}
#button{
  vertical-align: center;
}
}

@media only screen and (min-width: 720px) and (max-width: 1204px){

.textoverimage{
  width: 40%;
}
 .imagebox{
  width: 80%;
 }
.search{
   margin-right: 10%;
   margin-left: 10%;
   background-color: grey;
   opacity: 1;
   width: 80%;
   height: auto;
   border-radius: 4px;
   box-shadow: 4px 4px lightgrey;
  }

.field-input{
display: inline;
position: relative;
float: left;
}

}
  
</style>
<body >
<nav id="navbar">
<?php include '../html/header.php' ;?>
</nav>

<div class="search col-12" style="background-color: lavender;">

<h2 style="margin: 10px">Search</h2>
<form method="POST">
<div class="field is-focused">
<label for="animal" class="field-label">Location</label>
<input type="text" id="location" name="location" class="field-input ">
</div>
<div class="field">
<label for="animal" class="field-label">Category</label>
<select class="field-input " id="type" name="typee"  onclick="getbreed();">
    <option></option>
  <option>Dog</option>
  <option>Cat</option>
  <option>Rabbit</option>
</select>
</div>
<div class="field bread">
<label for="animal" class="field-label">Breed</label>
<select class="field-input " name="breed" id="inputbreed" ></select>
</div>
<div class="field gender">
<label for="animal" class="field-label">Gender</label>
<select class="field-input " id="gender" name="gender">
<option></option>
  <option >Male</option>
  <option>Female</option>
</select>
</div>
<div class="field">
<label for="animal" class="field-label ">Age</label>
<select class="field-input" id="age" name="age" >
<option></option>
  <option>Baby</option>
  <option>Young</option>
  <option>Adult</option>
  <option>Senior</option>
  </select>
</div>

<div class="field">

<input type="submit" name="submit" class="field-input" id="button" style="border-radius: 20px;transform: translateY(20px); margin-left: 10px; margin-right: 15px" 
onclick="validate();" ></input>

</div>
</form>

</div>


<div class="imagebox col-12" id="displaybox" style="background-color: lavender;">
<?php
$ab="abc";
$conn= mysqli_connect("localhost","root","", "petfinder");
// mysqli_select_db("petfinder");
$result=mysqli_query($conn, "select path,Description,id from animal order by rand() LIMIT 9");
while ($row=mysqli_fetch_array($result)) {
?><div class="col-4 textoverimage" style="background-image: url(<?php echo $row[0] ?>); color: coral; font-size: 20px; " data-text="<?php echo $row[1] ?>">
 <button id="<?php echo $row[2] ?>" style="bottom: 0;right: 0; float: right;padding: 10px;"  onclick="redirect(this.id);">Adopt</button></div>
<?php
}
?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>

//alert(price);


</script>

<script type="text/javascript">
/*
document.getElementById("adoptbutton").onclick=function(){
  location.href="buy.php";
};

/*
$('#type').change(function(){
   var type=document.getElementById("type");
    if(type.value.length >=1){
      document.getElementById("inputbread").disabled = false;
      window.getbreed();
   
    }
      
    else
      document.getElementById("inputbread").disabled = true;
});
/*
$("input[type='text'], select").on("keyup", function(){
    if($(this).val() != "" && $("select").val() != "" ){
        $("button").removeAttr("disabled");
    } else {
        $("button").attr("disabled", "disabled");
    }
});
*/
</script>
  

<script type="text/javascript">
$(document).ready(function(){
    $("#button").click(function(event){
        event.preventDefault();
    });
});
</script>

 <script type="text/javascript">
    function getbreed(){


      var xhttp;
      try{

        xhttp=new XMLHttpRequest;
      }
      catch(e)
      {
        xhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      if(xhttp)
      {

        var type=document.getElementById("type").value;
        xhttp.open("GET","../php/notif.php?q="+type,true);
       xhttp.onreadystatechange=function()
       {
        if(this.readyState ==4 ){
          
          var s=this.responseText;
          var data="";
          //alert(s);
          var ss=JSON.parse(s);
          //alert(s);
          $.each(ss,function(i,item){
          data=data+"<option value="+item.bread+">"+item.bread+"</option>";
          });
          
          $("#inputbreed").html(data);

        
        }
       }
        xhttp.send(null);
      }
    }
   </script>

<script type="text/javascript">

  function validate(){
  var a=document.getElementById("location").value;

  var b=document.getElementById("type").value;

  var c=document.getElementById("inputbreed").value;

  var d=document.getElementById("gender").value;

  var e=document.getElementById("age").value;
  

  if(a == "" || b == "" || c == "" || d == "" || e == ""  )
  {
    alert("Enter all fields");
    
  }
  else
    getImages();
}


</script>

<script type="text/javascript">
 function getImages(){
      var xhttp;
      try{

        xhttp=new XMLHttpRequest;
      }
      catch(e)
      {
        xhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      if(xhttp)
      {

        var type=document.getElementById("type").value;
        var breed=document.getElementById("inputbreed").value;
       
        xhttp.open("GET","../php/images.php?type="+type+"&breed="+breed,true);
       xhttp.onreadystatechange=function()
       {
        if(this.readyState ==4 ){
          
          var s=this.responseText;
          //alert(s);
          var ss=JSON.parse(s);
        // alert(ss);

          var data=[];
          var desc=[];
          var id=[];
          $.each(ss,function(i,item){
           data[i]=item.path;
          desc[i]=item.Description;
          id[i]=item.id;
          });
          
          document.getElementById("displaybox").innerHTML="";
          //console.log($("#displaybox").html());
          //alert(data.length);
          var info="";

          for(i=0;i<data.length;i++)
          {
            
            info=info+"<div class='"+"col-4 textoverimage "+"' style='" +"background-image:url("+data[i]+")"+";color:coral;font-size:20px;"+"'data-text='"+desc[i]+"'><button id='"+id[i]+"' onclick='"+"redirect(this.id);"+"'style='"+"bottom:0;right:0;float:right;padding:10px;"+"'>Adopt</button></div>";
          
           // document.getElementById("searchimages").children[0].innerHTML=info; 
             }
            // $("#displaybox").html(info);
          document.getElementById("displaybox").innerHTML= info;
          // console.log($("#displaybox").html());
               
           //$("#searchimages").html(info);
           
/*
          for(i=0;i<data.length;i++){
            document.getElementById("image").style.backgroundImage="url(data[i])";
            document.getElementById("image").style.dataText="desc[i]";
          }
          
          alert(data);
          alert(desc);
         
        
         
          
          /*
          var s=document.createElement("select");
           s.name="breed";
           s.innerHTML=this.responseText;
           
            $(".breed").insertBefore(s, $('.gender'));
            */
        }
       }
        xhttp.send(null);
      }
    }
   
 

    //var str=document.getElementById("type").value;

    /*
    var xhhtp;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
    if(this.readyState==4 && (this.status==200)){

    $("#inputbread").val(this.responseText);
     }
};
  
    xhttp.open("GET","../php/notif.php?q="+str,true);
    xhttp.send();
  });

*/
  /*
        $.ajax({
        url :'notif.php',
        type: 'POST',
        dataType: 'json',
        data : 'value='+ $('#type').value,
        success:function(json){
     // }).done(function(data){
       // var filler="";
       /*
        for(var i=0;i<data.length;i++)
        {
          filler+="<option value="+data[i]+">"+data[i]+"</option>";
        };
        $('#inputbread').html(filler);


      $.each(json,function(i,optionHtml){
        $('#inputbread').append(optionHtml);
    });
    });
  });
      
  
*/
  </script>

    <script type="text/javascript">
      var price;
      var desc;
      function redirect(id){
      
      //alert(document.getElementById(id)+"   "+id);
    
      var xhttp;
      try{

        xhttp=new XMLHttpRequest;
      }
      catch(e)
      {
        xhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      if(xhttp)
      { 
          imageredirect=document.getElementById(id).parentNode.style.backgroundImage;
          //alert(imageredirect);
          a= imageredirect.replace('url("','');
          b= a.replace('")','');
         //alert(b);
        xhttp.open("GET","../php/buybackup.php?q="+b,true);
       xhttp.onreadystatechange=function()
       {
        if(this.readyState ==4 ){
          //alert("d");
          var s=this.responseText;
          //alert(s);
          var ss=JSON.parse(s);
         //alert(ss);
         
          $.each(ss,function(i,item){
          desc=item.Description;
          price=item.Price;
           });
          //alert(price);
         document.getElementById("displaybox").innerHTML="";
         var info="";
         info=info+"<div class='"+"textoverimage col-4"+"' style='"+"background-image:url("+b+");"+"'></div>"+
         "<div>"+
         "<p style= '"+"font-size: 25px; font-family: 'Berkshire Swash', cursive ;"+"'>Details<br>Description:"+desc+"</p>"+
         "<p style= '"+"font-size: 25px; font-family: 'Berkshire Swash', cursive;"+"' >Price:"+price+"</p></div>"
         document.getElementById("displaybox").innerHTML=info+"<div id='"+"paypal-button-container"+"' style='"+"float: left"+"';></div>"+
         " <form target='"+"sandbox"+"' action='"+"https://www.sandbox.paypal.com"+"' method='"+"post"+"'><input type='"+"hidden"+"' name='"+"business"+"'value='"+"chhabriasonia05-facilitator@gmail.com"+"'> <input type='"+"hidden"+"' name='"+"cmd"+"' value='"+"_cart"+"'> <input type='"+"hidden"+"' name='"+"add"+"' value='"+"1"+"'><input type='"+"hidden"+"' name='"+"item_name"+"' value='"+desc+"'><input type='"+"hidden"+"' name='"+"amount"+"'value='"+price+"'> <input type='"+"hidden"+"'name='"+"currency_code"+"' value='"+"USD"+"'><input type='"+"image"+"' name='"+"submit"+"' src='"+"https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"+"'></form>";

        // document.getElementById("displaybox").innerHTML=info;
         
        paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
             sandbox:    'AXMpvyPs1oEnXyUnq9TpaQuJid4AmwjZMd6kh0INfHoAzyeP5rAbMn6PrUaGw0DZsDyEwnv97yvondcP',
            production: 'EPr74yGVEiI2pm0EEbEklFyXEEukV71mcbK5adCz6fkovK8181mAjQ0mWEYygigSmKHJGGrWi6axVUrd'
        },

        // Wait for the PayPal button to be clicked

        payment: function() {
            //  alert(price);
            // Make a client-side call to the REST api to create the payment

            return paypal.rest.payment.create(this.props.env, this.props.client, {
                transactions: [
                    {
                        amount: { total: price, currency: 'USD' }
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
      
      
      console.log($("#displaybox").html());
    // info=info+"<div class='"+"col-4"+"' ><p>"+ss+"</p></div>"
          
     
          
      
      //  window.location="buy.php?q="+b;
    

        }}
        xhttp.send(null);
        }} 
         
    </script>

</body>

</html>