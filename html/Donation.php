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
  

}
::-webkit-input-placeholder { color:darkgrey; }

 #one :focus ~ .floating-label1,
input:not(:focus):valid ~ .floating-label1{
  left: 705px;
  top: 325px;
  font-size: 14px;
  opacity: 1;
}

.inputText {
  padding-left: 10px;
  width: 250px;
  height: 35px;
  font-size: 18px;
}

.floating-label1 {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 290px;
  font-size: 18px;
  transition: 0.2s ease all;
  opacity: 0.5;
}

#two :focus ~ .floating-label2,
input:not(:focus):valid ~ .floating-label2{
  left: 705px;
  top: 390px;
  font-size: 14px;
  opacity: 1;
}


.floating-label2 {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 355px;
  font-size: 18px;
  transition: 0.2s ease all;
  opacity: 0.5;
}

#three :focus ~ .floating-label3,
input:not(:focus):valid ~ .floating-label3{
  left: 705px;
  top: 460px;
  font-size: 14px;
  opacity: 1;
}



.floating-label3  {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 420px;
  font-size: 18px;
  transition: 0.2s ease all;
  opacity: 0.5;
}

#four :focus ~ .floating-label4,
input:not(:focus):valid ~ .floating-label4{
  left: 705px;
  top: 525px;
  font-size: 14px;
  opacity: 1;
}



.floating-label4  {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 490px;
  font-size: 18px;
  transition: 0.2s ease all;
  opacity: 0.5;
}

#five :focus ~ .floating-label5,
input:not(:focus):valid ~ .floating-label5{
  left: 705px;
  top: 590px;
  font-size: 14px;
  opacity: 1;
}



.floating-label5   {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 555px;
  font-size: 18px;
  transition: 0.2s ease all;
   opacity: 0.5;
}

#six :focus ~ .floating-label6,
input:not(:focus):valid ~ .floating-label6{
  left: 705px;
  top: 655px;
  font-size: 14px;
  opacity: 1;
}



.floating-label6   {
  position: absolute;
  pointer-events: none;
  left: 630px;
  top: 615px;
  font-size: 18px;
  transition: 0.2s ease all;
   opacity: 0.5;
}

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
     
        <div id="one">
         Name <input id="box" name="name" type="text" class="inputText" required/>
         <span class="floating-label1">Enter your name</span>
      </div><br>
        <div id="two">
         Email-Id <input id="box" name="email" type="text" class="inputText" required/>
         <span class="floating-label2">Enter your Email-Id</span>
      </div><br>
         
         <div id="three">
         Contact <input id="box" name="phone" type="text" class="inputText" required/>
         <span class="floating-label3">Enter your Contact No</span>
      </div><br>

      <div id="four">
         Address <input id="box" name="add" type="text" class="inputText" required/>
         <span class="floating-label4">Enter your Address</span>
      </div><br>

          <div id="five">
         Donation <input id="box" name="amount" type="text" class="inputText" required/>
         <span class="floating-label5">Enter the amount</span>
      </div><br>

       <div id="six">
         DOB <input id="box" name="dob" align="center" type="date" class="inputText" required/>
        
      </div><br>

      

      <input  type="submit" data-inline="true" value="Donate Now" id="sub"><br><br>




   </form>
</div>
<div class="bot">
  <?php include 'html/footer.php' ;?>
</div>
</body>
</html>