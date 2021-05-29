<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylecss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profil</title>
</head>
<body>




<div class="container-fluid">

<nav class="navbar navbar-light" style="background-color: grey; width: 100%;">
<center><h2 style="color: white">Bienvenue</h2></center>
</nav>

<div class="sidebar">
	<center>
		<img src="images/avatarl.jpg" alt="Avatar" class="avatar">
	</center><br>
	<h2 style="color: black; fontsize: 18;">Nom & Prenoms</h2><br><br><br>
  <a href="profil.php"><i class="fas fa-clipboard-list"></i> Publication</a><br><br>
  <a href="publication.php"><i class="fas fa-exchange-alt"></i> Permutation</a><br><br>
  <a href="#"><i class="fa fa-cogs"></i> Parametre</a><br><br>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Deconnexion</a>
</div>

</div><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
	        <h2>FORMULAIRE DE PERMUTATION</h2><br><br>
            <div class="form-container sign-up-container">
		<form action="" method="POST">
			
=======
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="POST">
			<h1>Inscrivez vous</h1>
>>>>>>> f0800c431d9cf9b75551522633a65e93bbebe115
			<input type="text" name="nom" placeholder="Votre nom" />
			<input type="text" name="prenom" placeholder="Votre prenoms" />
			<input type="email" name="mail" placeholder="Votre email" />
			<input type="tel" name="tel" placeholder="Votre n° téléphone" />
			<input type="tel" name="tel_v" placeholder="Confirmez votre n° téléphone" />
			<select type="text" name="ville" class="ville">
<<<<<<< HEAD
			<option value=""> Selectionner votre ville d'origine</option>
=======
			<option> Selectionner votre ville d'origine</option>
>>>>>>> f0800c431d9cf9b75551522633a65e93bbebe115
				<?php
					include('connect.php');
					$sql = "SELECT * FROM ville";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) { 
						echo '<option>'.$row['nom_ville'].'</option>';
					}
				?> 
			</select>
			<input type="text" name="ecole" placeholder="Votre école d'origine" />
			
			<!-- <input type="text" name="" placeholder="Votre ville d'origine"  />-->
			<!-- <input type="password" name="" placeholder="Votre mot de passe" /> -->
			<button type="submit" name="inscription" >Inscription</button>
		</form>
	</div>
<<<<<<< HEAD
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
=======
	<div class="form-container sign-in-container">
		<form action="" method="POST">
			<h1>Publier une demande</h1>
			
			<input type="text" name="ecole" placeholder="Ecole souhaitée" />
			<input type="text" name="filiere" placeholder="Filière souhaitée" />
			
			<select type="text" name="ville" class="ville">
			<option> Ville souhaitée </option>
				<?php
					include('connect.php');
					$sql = "SELECT * FROM ville";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) { 
						echo '<option>'.$row['nom_ville'].'</option>';
					}
				?> 
			</select>
            <textarea class="description" id="" cols="30" rows="10" name="description" placeholder="Description">

            </textarea>
			<br>
			
			<button type="submit" name="publier" >Publier</button>
			
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenu sur le portail de publication !</h1>
				<!-- <p>Pour rester connecter avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button class="ghost" id="signIn">Connexion</button> -->
			</div>
			<!-- <div class="overlay-panel overlay-right">
				<h1>Bonjour !!!</h1>
				<p>Entrez vos informations personnelles et affichez vos annonces maintenant</p>
				<button class="ghost" id="signUp">Inscription</button>
			</div> -->
		</div>
	</div>
</div>



<?php


?>


>>>>>>> f0800c431d9cf9b75551522633a65e93bbebe115
</body>
</html>