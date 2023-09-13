<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css" />
	<title>AFPA DWWM Mission 7 - Inscription</title>
</head>
<body>
	<!-- le menu de la page -->
	<?php include('menu.php');
	
	// La connexion à la base de données
	require('config.php');

	if (isset($_REQUEST['pseudo'], $_REQUEST['email'], $_REQUEST['pass'])){
		// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
		$pseudo = stripslashes($_REQUEST['pseudo']);
		$pseudo = mysqli_real_escape_string($bdd, $pseudo); 
		// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($bdd, $email);
		// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
		$pass = stripslashes($_REQUEST['pass']);
		$pass = mysqli_real_escape_string($bdd, $pass);
		
		$query = "INSERT into `membres` (pseudo, email, type, pass, date_inscription)
					VALUES ('$pseudo', '$email', 'utilisateur', '".hash('sha256', $pass)."', NOW())";
		$res = mysqli_query($bdd, $query);

		if($res){
		echo "<div class='container'>
				<div class='row my-3'>
					<div class='success col-6'>
						<h3>Vous êtes inscrit avec succès.</h3>
						<p>Cliquez pour <a href='connexion.php'>vous connecter</a></p>
					</div>
				</div>
			</div>";
		}
	}else{
	?>
	<form class="box" action="" method="post">
		<h1 class="box-title">S'inscrire</h1>
		<input type="text" class="box-input" name="pseudo" placeholder="Nom d'utilisateur" required />
		<input type="text" class="box-input" name="email" placeholder="Email" required />
		<input type="password" class="box-input" name="pass" placeholder="Mot de passe" required />
		<input type="submit" name="submit" value="S'inscrire" class="box-button" />
		<p class="box-register">Déjà inscrit? <a href="connexion.php">Connectez-vous ici</a></p>
	</form>
	<?php } ?>
	<!-- le pied de la page -->
	<?php include('pieddepage.php'); ?>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
		integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
		integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
	</script>
	<script src="./js/research.js"></script>
</body>
</html>