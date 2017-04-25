<!DOCTYPE html>
<html>
<head>
	<title>
		FindYourPet
	</title>
	<link rel="stylesheet" type="text/css" href="../css/mystyle1.css">
</head>
<body>

<?php if(isset($_COOKIE['role'])){if($_COOKIE['role']=='admin') header('location: ../html/admin.php');}?>
<div>
<?php include 'header.php' ;?>
</div>
<div>
	<a href="../html/loginpage.php"><div class="dat">
		<h1 id=sec>Dogs Available For Adoption</h1>
		<p id=sec1><q>The Journey of Life is sweeter when traveled with a Dog</q></p>
	</div></a>
	<div class="tex">
		<h2 id=te>About Pets</h2>
		<hr>
		<p id=te1>
		A pet or companion animal is an animal kept primarily for a person's company, protection, or entertainment rather than as a working animal, sport animal, livestock, or laboratory animal. Popular pets are often noted for their attractive appearances and their loyal or playful personalities.

		Pets provide their owners physical and emotional benefits. Walking a dog can supply both the human and pet with exercise, fresh air, and social interaction. Pets can give companionship to elderly adults who do not have adequate social interaction with other people, as well as other people that are living alone. There is a medically approved class of therapy animals, mostly dogs or cats, that are brought to visit confined humans. Pet therapy utilizes trained animals and handlers to achieve specific physical, social, cognitive, and emotional goals with patients.
		</p>
	</div>
	<div class="vid">
		<iframe width="100%" height="450px" src="https://www.youtube.com/embed/S1ql2eNo2BY?autoplay=0"></iframe>
	</div>
	
	<div class="photo">

	<h2 id=te>Daily Updates</h2>
	<hr>
	<div class="col">
	<img src="../img/ado4.jpg" class="cir" style="width: 300px">
	<p class="imgtex">
		For a Cat Loving Couple, Two is Better than One.
	</p>
	</div>
	<div class="col">
	<img src="../img/ado2.jpg" class="cir" style="width: 300px">
	<p class="imgtex">
		Pony Prance's into a Couple's Life and Heart.
	</p>
	</div>
	<div class="col">
	<img src="../img/ado3.jpg" class="cir" style="width: 300px">
	<p class="imgtex">
		A Lifetime of Love and Companionship.
	</p>
	</div>
	
	</div>

</div>
<div class="bot">
	<?php include 'footer.php' ;?>
</div>
</body>
</html>