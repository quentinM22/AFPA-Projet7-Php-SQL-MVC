<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css" />
	<title>AFPA DWWM Mission 7 - Ajout d'un membre</title>
</head>

<body>
	<!-- le menu de la page -->
	<div class="bg-dark">
		<div class="container">
			<div class="row">
				<nav class="col navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand" href="index.php">
						<img src="../images/logo.png" width="50" height="50" alt="Info Logo" />
						Mission 7
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div id="navbarContent" class="collapse navbar-collapse">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="../index.php">Accueil</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="../liste_travaux.php">Travaux</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<?php
	// La connexion à la base de données
	require('../config.php');

	if (isset($_REQUEST['pseudo'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['pass'])) {
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$pseudo = stripslashes($_REQUEST['pseudo']);
	$pseudo = mysqli_real_escape_string($bdd, $pseudo);
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($bdd, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$pass = stripslashes($_REQUEST['pass']);
	$pass = mysqli_real_escape_string($bdd, $pass);
	// récupérer le type (utilisateur | admin)
	$type = stripslashes($_REQUEST['type']);
	$type = mysqli_real_escape_string($bdd, $type);

	$query = "INSERT into `membres` (pseudo, email, type, pass, date_inscription)
	VALUES ('$pseudo', '$email', '$type', '" . hash('sha256', $pass) . "', NOW())";
	$res = mysqli_query($bdd, $query);

	if ($res) {
	echo "<div class='container'>
		<div class='row my-3'>
			<div class='success col-6'>
				<h3>L'utilisateur a été créée avec succés.</h3>
				<p>Cliquez pour <a href='administration.php'>retourner à l'accueil</a></p>
			</div>
		</div>
	</div>";
	}
	} else {
	?>
	<form class="box" action="" method="post">
		<h1 class="box-title">Ajouter un membre</h1>
		<input type="text" class="box-input" name="pseudo" placeholder="Nom d'utilisateur" required />
		<input type="text" class="box-input" name="email" placeholder="Email" required />
		<div class="input-group">
			<select class="box-input" name="type" id="type">
				<option value="" disabled selected>Type</option>
				<option value="admin">Administrateur</option>
				<option value="utilisateur">Utilisateur</option>
			</select>
		</div>
		<input type="password" class="box-input" name="pass" placeholder="Mot de passe" required />
		<input type="submit" name="submit" value="Ajouter" class="box-button" />
		<p class="box-register">Vous voulez annuler? <a href="administration.php">Retournez à l'accueil</a></p>
	</form>
	<?php
    } ?>
	<!-- le pied de la page -->
	<?php include('../pieddepage.php'); ?>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
		integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
		integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
	</script>
	<script src="../js/research.js"></script>
</body>

</html>