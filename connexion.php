<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css" />
	<title>AFPA DWWM Mission 7 - Connexion</title>
</head>

<body>
	<!-- le menu de la page -->
	<?php include('menu.php'); 
	
	// La connexion à la base de données
	require('config.php');
	session_start();

	if (isset($_POST['pseudo'])) {
		$pseudo = stripslashes($_REQUEST['pseudo']);
		$pseudo = mysqli_real_escape_string($bdd, $pseudo);
		$_SESSION['pseudo'] = $pseudo;
		$pass = stripslashes($_REQUEST['pass']);
		$pass = mysqli_real_escape_string($bdd, $pass);
		$query = "SELECT * FROM `membres` WHERE pseudo='$pseudo' and pass='" . hash('sha256', $pass) . "'";
		$result = mysqli_query($bdd, $query) or die(mysql_error());

		if (mysqli_num_rows($result) == 1) {
			$utilisateur = mysqli_fetch_assoc($result);
			// vérifier si l'utilisateur est un administrateur ou un utilisateur
			if ($utilisateur['type'] == 'admin') {
				header('location: admin2/administration.php');
			} else {
				header('location: espace_membres.php');
			}
		} else {
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
	}
	?>
	<form class="box" action="" method="post" name="login">
		<h1 class="box-title">Se connecter</h1>
		<input type="text" class="box-input" name="pseudo" placeholder="Nom d'utilisateur" required>
		<input type="password" class="box-input" name="pass" placeholder="Mot de passe" required>
		<input type="submit" value="Connexion " name="submit" class="box-button">
		<p class="box-register">Vous êtes nouveau ici? <a href="inscription.php">S'inscrire</a></p>
		<?php if (! empty($message)) { ?>
		<p class="errorMessage"><?php echo $message; ?>
		</p>
		<?php } ?>
	</form>
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