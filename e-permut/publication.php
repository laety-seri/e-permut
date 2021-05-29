<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="POST">
			<h1>Inscrivez vous</h1>
			<input type="text" name="nom" placeholder="Votre nom" />
			<input type="text" name="prenom" placeholder="Votre prenoms" />
			<input type="email" name="mail" placeholder="Votre email" />
			<input type="tel" name="tel" placeholder="Votre n° téléphone" />
			<input type="tel" name="tel_v" placeholder="Confirmez votre n° téléphone" />
			<select type="text" name="ville" class="ville">
			<option> Selectionner votre ville d'origine</option>
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


</body>
</html>