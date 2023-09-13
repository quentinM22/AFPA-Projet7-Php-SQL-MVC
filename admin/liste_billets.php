<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Page d'administration</title>
    <link href="../css/style.css" rel="stylesheet" />
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

    <div class="container">
        <div class="row my-3">
            <div class="col">

                <?php
            //Appel de la Connexion à la base de données
            include('../connexion_bdd.php');?>

                <div id="section">
                    <br />
                    <p>ADMINISTRATION</p>
                    <hr><br />
                    <div id="texte">
                        <p><a href="../blog.php">Retour au blog</a></p>
                        <a href="edition_billet.php">Ajouter un billet</a><br /><br /><br />
                        <?php

                    // Vérification 1 : est-ce qu'on veut poster un billet ?
                    if (isset($_POST['titre']) and isset($_POST['auteur']) and isset($_POST['contenu'])) {
                        $titre = htmlspecialchars($_POST['titre']);
                        $auteur = htmlspecialchars($_POST['auteur']);
                        $contenu = addslashes(htmlspecialchars($_POST['contenu']));

                        // On vérifie si c'est une modification de billet ou non
                        if ($_POST['id_billets'] == 0) {

                            // Si ce n'est pas une modification, on crée une nouvelle entrée dans la table.
                            $req = $bdd->prepare('INSERT INTO billets(titre, auteur, contenu, date_creation) VALUES(:titre, :auteur, :contenu, NOW())');
                            $req->execute([

                            ':titre' => $_POST['titre'],
                            ':auteur' => $_POST['auteur'],
                            ':contenu' => $_POST['contenu'], ]);
                        } else {
                            // Sinon c'est une modification, on met juste à jour le titre et le contenu.
                            $bdd->exec("UPDATE billets SET titre='" . $titre . "', auteur='" . $auteur . "', contenu='" . $contenu . "' WHERE id='" . $_POST['id_billets'] . "'");
                        }
                    }

                    // Vérification 2 : est-ce qu'on veut supprimer un billet ?
                    // Si l'on demande de supprimer un billet
                    if (isset($_GET['supprimer_billet'])) {

                        // Alors on supprime le billet correspondant
                        $bdd->exec('DELETE FROM billets WHERE id=\'' . $_GET['supprimer_billet'] . '\'');
                    }
                    ?>
                        <!--Tableau d'affichage des billets -->
                        <table>
                            <tr>
                                <th></th>
                                <th></th>
                                <th><h3>Titre</h3></th>
                                <th><h3>Auteur</h3></th>
                                <th><h3>Date</h3></th>
                            </tr>
                            <?php
                        // On fait une boucle pour lister les billets

                        $req = $bdd->query('SELECT id, titre, auteur, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC');
                        while ($donnees = $req->fetch()) {
                            ?>
                            <tr>
                                <td><?php echo '<a href="edition_billet.php?modifier_billet=' . $donnees['id'] . '">'; ?>Modifier</a>
                                </td>
                                <td><?php echo '<a href="liste_billets.php?supprimer_billet=' . $donnees['id'] . '">'; ?>Supprimer</a>
                                </td>
                                <td><?php echo stripslashes($donnees['titre']); ?>
                                </td>
                                <td><?php echo stripslashes($donnees['auteur']); ?>
                                </td>
                                <td><?php echo $donnees['date_creation_fr']; ?>
                                </td>
                            </tr>
                            <?php
                        } // Fin de la boucle qui liste les billets
                        ?>
                        </table><br /><br />
                    </div>
                </div>
            </div>
        </div>
    </div>

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