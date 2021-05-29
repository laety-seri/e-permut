<!DOCTYPE html>
<html>
<head>
	<title>e-permut</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<marquee><p>
		Joindre l'assistance e-permute en ligne 24h/24h -  
		<a target="_blank" href="#">Administrateur</a>.
	</p></marquee>
</header>
<h1>e-permut</h1>
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
			<h1>Connectez vous</h1>
			<input type="tel" name="" placeholder="Votre n° téléphone">
			<!--
			<input type="email" name="" placeholder="Votre email" />
			<input type="password" name="" placeholder="Votre mot de passe" />
			-->
			<a href="#">Numéro oublier ?</a>
			<button type="submit" name="connexion" >Connexion</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenu !</h1>
				<p>Pour rester connecter avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button class="ghost" id="signIn">Connexion</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour !!!</h1>
				<p>Entrez vos informations personnelles et affichez vos annonces maintenant</p>
				<button class="ghost" id="signUp">Inscription</button>
			</div>
		</div>
	</div>
</div>

<!-- footer>
	<marquee><p>
		Joindre l'assistance e-permute en ligne 24h/24h -  
	</p></marquee>
</footer -->


<?php include('connect.php');

if(isset($_POST['inscription'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$tel = $_POST['tel'];
	$ecole = $_POST['ecole'];
	$ville = $_POST['ville'];

	$insc = "INSERT INTO utilisateur (nom, prenom, mail, telephone, ecole_origine, idv_origine) 
	VALUES ('$nom', '$prenom','$mail','$tel','$ecole','$ville') ";

	if (mysqli_query($conn,$insc)){

		header("location: index.php");
		echo ' inscription validée ';
	} else {
		echo 'quelque chose s"est mal passé';
	}


}

if(isset($_POST['connexion'])) {
	
	
		header("location: profil.php");
		
	


}

?>




<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
</body>
</html>