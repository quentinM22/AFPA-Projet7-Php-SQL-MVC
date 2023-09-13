<?php
    // Initialiser la session
    session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if (!isset($_SESSION['pseudo'])) {
        header('Location: connexion.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css" />
	<title>AFPA DWWM Mission 7 - Espace membres</title>
</head>

<body>
	<!-- le menu de la page -->
	<?php include('menu.php'); ?>

	<div class="container">
		<div class="row my-3">
			<div class="success col-6">
				<h1>Bienvenue <?php echo $_SESSION['pseudo']; ?>!
				</h1>
				<p>Ceci est votre espace utilisateur</p>
				<a href="deconnexion.php">Déconnexion</a>
			</div>
		</div>
	</div>
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