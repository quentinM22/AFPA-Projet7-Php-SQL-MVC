<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Minichat</title>
</head>

<body>
    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <div class="container">
        <div class="row my-3">
            <div class="form col-6">
                <?php if(isset($_COOKIE['pseudo'])){?>
                    <h1>Minichat</h1>
                    <p>Veuillez taper votre pseudo :</p>

                    <form action="minichat_post.php" method="POST">
                        <!--petite zone de texte-->
                        <p><input type='text' name='pseudo' value=<?php echo $_COOKIE['pseudo']; ?> required></p>
                        <!--grande zone de texte-->
                        <p>et votre message ici:</p>
                        <p><textarea name="message" rows="8" cols="45" required></textarea></p>
                        <p><input type="submit" class="btn btn-primary" value="Envoyer" /></p>
                    </form>
                <?php
                } else {?>
                    <h1>Minichat</h1>
                    <p>Veuillez taper votre pseudo :</p>

                    <form action="minichat_post.php" method="POST">
                        <!--petite zone de texte-->
                        <p><input type='text' name='pseudo' value="" required></p>
                        <!--grande zone de texte-->
                        <p>et votre message ici:</p>
                        <p><textarea name="message" rows="8" cols="45" required></textarea></p>
                        <p><input type="submit" class="btn btn-primary" value="Envoyer" /></p>
                    </form>
                <?php
                }?>
            </div>
            <div class="messages col-6">
                <h2>Messages</h2>
                <?php
                //Appel de la Connexion à la base de données
                include('connexion_bdd.php');

                // Si tout va bien, on peut continuer

                // On récupère tout le contenu de la table
                $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 100');
                // et on affiche chaque entrée une à une
                while ($donnees = $reponse->fetch()) {
                    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
                }

                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
                <a href="minichat.php"><input type="button" class="btn btn-success" value="rafraichir"></a>
            </div>
        </div>
    </div>

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