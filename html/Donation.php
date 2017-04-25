<!DOCTYPE html>
<html>
<head>
	<title>Adoption</title>
	<style type="text/css"  href="https://fonts.googleapis.com/css?family=Tangerine&effect=outline">
		#navig 
         {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
         }


     nav li 
         {
    float: left;
    margin-left: 40px: 
         }

    nav  li a {
  display: inline-block;
  color: #f2f2f2;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 21px;
}

  #out{
  margin: 0 auto;
  margin-top: 10px;
  width: 50%;
  background-color: white;
  filter: opacity(80%);
  border: 1px solid black;
}

body 
{
	background: url("../img/Background2.jpg");
}

nav li a:hover {background-color: #555;}

 @font-face {
    font-family: FontTitle;
    src: url(../Painter.ttf);
}
 #title
  {
   	font-family: FontTitle;
    font-size: 50px;
    font-style: italic;
  } 

  #donation_form
  {
    border-height: 100px;
    border-width: 100px;
    border-style: solid 5px;
    border-color: black;
    font-family: sans-serif;
    font-size: 22px;
  }

#box
{
  border-radius: 5px;
  border-color: red;
  font-size: 20px;
  margin-left: 10px;
  padding-left: 15px;
  padding : 5px;
  

}


  li:last-child{
    float: right;
  }
  nav{
    width: 100%;
  }
::-webkit-input-placeholder { color:darkgrey; }


li:last-child{
  float: right;
}
    .bot{
      width: 90%;
      margin: 0 auto;
      margin-top: 3%;
      padding: 5px;
      border: 5px solid lavender;
      background-color: white;
      filter: opacity(80%);
      text-align: center;
    }
#sub{
      background-color: black;
      color: white;
      padding: 15px;
      font-family: 'Merienda One', cursive;
      font-size: 15px;
    }

 @media screen and (max-width: 800px)
 {
     #box
{
  border-radius: 4px;
  border-color: red;
  font-size: 15px;
  margin-left: 7px;
  padding-left: 15px;
  padding : 6px;
  width: 150px;

  

} 

 #donation_form
  {
    border-height: 100px;
    border-width: 100px;
    border-style: solid 5px;
    border-color: black;
    font-family: sans-serif;
    font-size: 15px;
  }
 }



	</style>
</head>
<body>
<h1 align="center" id="title">Find Your Pet</h1> 
      

   <nav id="navig">
      <li> <a href="../html/home.php">Home</a></li>
      <li> <a href="../html/Adoption.php">Adoption</a></li>
      <li> <a href="../html/Donation.php">Donation</a></li>
      <li> <a href="../html/AboutUs.php">About Us</a></li>
      <li> <?php if (isset($_COOKIE['user'])) { ?>
              <a href="../php/logout.php"> Logout </a>
            <?php }else{ ?>
              <a href="../html/loginpage.php"> Login</a>
            <?php }?></li>

      
   </nav>

<div id="out">

<h1 id="border_box" align="center">Donate for the Pets</h1>
   <form id="donation_form" action="../php/donate.php" method="POST" align="center">
     
     
        <div >
         Name <input id="box" name="name" type="text" class="inputText" required placeholder="Enter your name" />
        
      </div><br>
        <div >
         Email-Id <input id="box" name="email" type="text" class="inputText" required placeholder="Enter your Email-Id" />
        
      </div><br>
         
         <div >
         Contact <input id="box" name="phone" type="text" class="inputText" required placeholder="Enter your Contact Number" />
         
      </div><br>

      <div >
         Address <input id="box" name="add" type="text" class="inputText" required placeholder="Enter your Address" />
        
      </div><br>

          <div>
         Donation <input id="box" name="amount" type="text" class="inputText" required placeholder="Enter the amount" />
         
      </div><br>

       <div>
         DOB <input id="box" name="dob" align="center" type="date" class="inputText" required />
        
      </div><br>

      <input  type="submit" data-inline="true" value="Donate Now" id="sub"><br><br>
      </div>



   </form>
</div>
<div class="bot">
  <?php include '../html/footer.php' ;?>
</div>
</body>
</html>