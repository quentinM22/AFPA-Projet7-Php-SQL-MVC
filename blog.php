<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Blog</title>
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>

    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h1>Le blog</h1>
                <p><a href="./admin/liste_billets.php">Administration du Blog</a></p>
                <h2>Billets du blog :</h2>

                <?php
                //Appel de la Connexion à la base de données
                include('connexion_bdd.php');

                //Appel de la pagination des billets
                include('pagination_billets.php');

                // On récupère les billets
                $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\')AS date_creation_fr  FROM billets ORDER BY date_creation DESC LIMIT ' . $premier_billet_a_afficher . ', ' . $nb_billets_par_page );

                while ($donnees = $req->fetch()) {
                    ?>
                    <div class="billets">
                        <h3>
                            <?php echo htmlspecialchars($donnees['titre']); ?>
                            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
                        </h3>

                        <p>
                            <!-- On affiche le contenu du billet -->
                            <?php
                            echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
                            <br />
                            <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
                        </p>
                    </div>
                    <?php
                } // Fin de la boucle des billets
                $req->closeCursor();
                ?>
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

</body>

</html>
