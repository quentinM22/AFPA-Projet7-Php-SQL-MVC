<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Codes NASA</title>
</head>

<body>

    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <?php
    // Si le mot de passe n'a pas été envoyé
   if (!isset($_POST['motDePasse'])) {
       ?>
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <p>Rentrez le mot de pase pour accéder aux codes secrets de la NASA</p>
                <form action="codes_nasa.php" method="post">
                    <p><input type="password" name="motDePasse" /></p>
                    <p> <input type="submit" class="btn btn-primary" value="Valider" /></p>
                </form>
            </div>
        </div>
    </div>
    <?php
    // Sinon (donc le mot de passe a été envoyé) et est le bon
   } elseif ($_POST['motDePasse'] == 'kangourou') {
       $autorisation_entrer = 'OUI';
       echo '<div class="container"><div class="row my-3">
       <div class="col"><p>Avez-vous l\'autorisation d\'entrer ? La reponse est : ' . $autorisation_entrer . '</p><p>Le code secret est  : <strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p><p><a href="liste_travaux.php"><input style="background-color:green;" type="button" value="Retour"></a></p></div></div></div>';
   // Sinon (donc le mot de passe a été envoyé) si le champs du mdp est resté vide
   } elseif ($_POST['motDePasse'] == null) {
       echo '<div class="container"><div class="row my-3">
       <div class="col"><p>Il faut renseigner un Mot De Passe</p><p><a href="codes_nasa.php"><input style="background-color:orange;" type="button" value="Retour"></a></p></div></div></div>';
   // Sinon (donc le mot de passe a été envoyé) mais n'est pas le bon
   } else {
       $autorisation_entrer = 'NON';
       echo '<div class="container"><div class="row my-3">
       <div class="col"><p> Mot de passe erroné ... Veuillez entrer le bon mot de passe </p><p>Avez-vous l\'autorisation d\'entrer ? La reponse est : ' . $autorisation_entrer .'</p><p><a href="codes_nasa.php"><input style="background-color:orange;" type="button" value="Retour"></a></p></div></div></div>';
   }
    ?>

    <!-- le pied de la page -->
    <?php include('pieddepage.php'); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="./js/research.js"></script>

</body>

</html>