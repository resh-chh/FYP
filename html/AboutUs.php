<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>

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
  background: url(../img/Background2.jpg);
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

  #title1
  {
    font-family: FontTitle;
    font-size: 30px;
    text-align: center;
    font-style: italic;
  } 
  #para
  {
    font-family: all;
    font-size: 20px;
    text-align: center;
    font-style: italic;
   height: 500px;
    width: 800px;
    border: solid 2px;
    margin-left: 350px;
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

  <h1 id="title1"> About Us </h1>
  <p id="para" >Our mission is to help ensure that no adoptable pet is euthanized for lack of a good home
  <br><br>Pets are said to be a man’s best friend, so FindYourPet welcomes all those homes that want a friend and every stray animal that needs a family.
FindYourPet India is an online platform specifically designed to address the concerns of awareness about adoption and donation, and the communication needs between NGOs, pet stores and the common man (public).
<br><br>This portal has two major features, namely, Pet Adoption and Pet Selling:<br>
Pet Adoption is conducted in the form of fairs organized by NGOs that specifically dedicate themselves in giving shelters to these stray animals and taking care of them until they find them a home. Whereas Pet Selling is what connects the buyers to the sellers, i.e. the pet stores and pet centers can sell their pets at reasonable costs online which is made available to the common people to buy them.
Other modules include sponsorship, where in interested people can help the NGOs by sponsoring to them, and enquiry, where people can request for further details about a pet they are interested in.
This platform also includes basic functionalities such as filter searching according to breeds, client login with G+ and contact support along with admin panel.
<br><br>FindYourPet is the solution to all the worries concerning pets and a reachout to all the people for spreading awareness and finding a home filled with love for all those stray animals who deserve a better life.
</p>
  <div class="bot">
  <?php include '../html/footer.php' ;?>
</div>
</body>
</html>