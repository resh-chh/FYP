<!DOCTYPE>
<html>
<head>
  <title>
    FindYourPet
  </title>
<link rel="stylesheet" type="text/css" href="stylewaste.css">

</head>
<body>
<header>
  Find A Pet To Adopt
</header>

<div class="search">

<h2 style="margin: 10px">Search</h2>
<form action="" method="POST" onsubmit="return validate();">
<div class="field is-focused">
<label for="animal" class="field-label">Location</label>
<input type="text" name="location" class="field-input">
</div>
<div class="field">
<label for="animal" class="field-label">Category</label>
<select class="field-input" id="type" name="typee" style="width: 120px;" onchange="window.getbreed()">
    <option></option>
  <option>Dog</option>
  <option>Cat</option>
  <option>Rabbit</option>
</select>
</div>
<div class="field bread">
<label for="animal" class="field-label">Breed</label>
<select class="field-input" name="breed" id="inputbreed" style="width: 120px;"></select>
</div>
<div class="field gender">
<label for="animal" class="field-label">Gender</label>
<select class="field-input" name="gender" style="width: 120px;">
  <option >Male</option>
  <option>Female</option>
</select>
</div>

<div class="field">
<label for="animal" class="field-label">Age</label>
<select class="field-input" name="age" style="width: 120px;">
  <option>Baby</option>
  <option>Young</option>
  <option>Adult</option>
  <option>Senior</option>
  

</select>
</div>

<div class="field">

<button class="field-input" id="button" style="border-radius: 20px;transform: translateY(20px); margin-left: 10px; margin-right: 15px" onclick="window.getImages();" >Search</button>

</div>
</form>

</div>


<div class="imagebox col-12">
<?php
mysql_connect("localhost","root","");
mysql_select_db("petfinder");
$result=mysql_query("select path,Description from animal order by rand() LIMIT 9");
while ($row=mysql_fetch_array($result)) {
?>
<div class="container">
<img src="<?php  echo $row[0] ?>" alt="Avatar" class="image col-4 ">
<div class="overlay">
    <div class="text"> <?php  echo $row[1] ?></div>
  </div>
  </div>
<?php
}
?>
</div>



<div id="searchimages">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
/*
$('#type').change(function(){
   var type=document.getElementById("type");
    if(type.value.length >=1){
      document.getElementById("inputbread").disabled = false;
   
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
    $("button").click(function(event){
        event.preventDefault();
    });
});
</script>
<script type="text/javascript">

$("form").validate();
/*
  function validate(){
  var a=document.getElementById("location").value;

  var b=document.getElementById("type").value;

  var c=document.getElementById("inputbreed").value;

  var d=document.getElementById("gender").value;

  var e=document.getElementById("age").value;

  if(a == "" || b == "" || c == "" || d == "" || e == ""  )
  {
    alert("Enter all fields");
    return false;
  }
  else {

    return true;}
}
*/

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
        xhttp.open("GET","notif.php?q="+type,true);
       xhttp.onreadystatechange=function()
       {
        if(this.readyState ==4 ){
          
          var s=this.responseText;
                    var data="";
          var ss=JSON.parse(s);

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
        var data='type='+type+'&breed='+breed;
        xhttp.open("GET","images.php?q="+type,true);
       xhttp.onreadystatechange=function()
       {
        if(this.readyState ==4 ){
          
          var s=this.responseText;
          alert(s);
          var ss=JSON.parse(s);
          alert(ss);
          var data=[];
          var desc=[];
          $.each(ss,function(i,item){
           data[i]=item.path;
          desc[i]=item.Description
          });

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
  
    xhttp.open("GET","notif.php?q="+str,true);
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
    
</body>
</html>
























"location.href='buy.php?q='+document.getElementById("adoptbutton").previousSibling.style.backgroundImage;