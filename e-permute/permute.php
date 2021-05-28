<!DOCTYPE html>
<html>
<head>
	<title>e-permute</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>e-permute</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Inscrivez vous</h1>
			<input type="text" name="" placeholder="Votre nom " />
			<input type="email" name="" placeholder="Votre email" />
			<input type="password" name="" placeholder="Votre mot de passe" />
			<button type="submit" name="" >Inscription</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Connectez vous</h1>
			<input type="email" name="" placeholder="Votre email" />
			<input type="password" name="" placeholder="Votre mot de passe" />
			<a href="#">Mot de passe oublier ?</a>
			<button type="submit" name="" >Connexion</button>
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
				<h1>Hello, Friend !</h1>
				<p>Entrez vos informations personnelles et affichez vos annonces maintenant</p>
				<button class="ghost" id="signUp">Inscription</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<marquee><p>
		Joindre l'assistance e-permute en ligne 24h/24h -  
		<a target="_blank" href="#">Administrateur</a>.
	</p></marquee>
</footer>

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