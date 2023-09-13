<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Commentaires</title>
    <link href="./css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h1>Le blog</h1>
                <p><a href="blog.php">Retour à la liste des billets</a></p>
                <h2>Billet du blog :</h2>

                <?php
                //Connexion à la base de données
                include('connexion_bdd.php');

                // Récupération du billet
                $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
                $req->execute([$_GET['billet']]);
                $donnees = $req->fetch();
                
                // On teste si la variable $donnees est vide     
                if(!empty($donnees)) {?>

                    <!-- Si la variable est remplie on affiche le contenu -->
                    <div class="billets">
                        <h3>
                            <?php
                            echo htmlspecialchars($donnees['titre']);
                            ?>
                            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
                        </h3>

                        <p>
                            <?php
                            echo nl2br(htmlspecialchars($donnees['contenu']));
                            ?>
                        </p>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <h2>Commentaires</h2>
                            <?php
                            //Appel de la pagination des commentaires
                            include('pagination_commentaires.php');

                            $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

                            // Récupération des commentaires
                            $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'le %d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire LIMIT ' . $premier_comm_a_afficher . ', ' . $nb_comms_par_billet);
                            $req->execute([$_GET['billet']]);

                            while ($donnees = $req->fetch()) {
                                ?>
                                <p>&#128073<strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong>
                                    <?php echo $donnees['date_commentaire_fr']; ?>
                                </p>
                                <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?>
                                </p>
                                <?php
                            } // Fin de la boucle des commentaires
                            $req->closeCursor();
                            ?>
                        </div>
                        <div class="col-6">
                            <h2>Commenter</h2>
                            <!-- On rajoute un formulaire pour permettre d'ajouter des commentaires -->
                            <!-- On verifie si le cookie à deja été crée et si c'est le cas on l'integre dans le champs "Auteur"-->
                            <?php if(isset($_COOKIE['auteur'])){?>
                            <p>Veuillez taper votre pseudo :</p>

                            <form action="commentaires_post.php" method="POST">

                                <!--petite zone de texte-->
                                <p><input type="text" name="auteur" value=<?php echo $_COOKIE['auteur']; ?> required/></p>
                                <!--grande zone de texte-->
                                <p>et votre message ici:</p>
                                <p><textarea name="commentaire" rows="8" cols="45" required>
                                </textarea></p>
                                <p><input type="hidden" name="billet" value="<?php echo $_GET['billet']?>"></p>
                                <p><input type="hidden" name="page_comms" value="<?php echo $page_comms?>"></p>
                                <p><input type="submit" class="btn btn-primary" value="Envoyer" /></p>
                            <?php
                            // Sinon on laisse le champs "Auteur" vide
                            } else {?>
                                <p>Veuillez taper votre pseudo :</p>

                                <form action="commentaires_post.php" method="post">
                                    <!--petite zone de texte-->
                                    <p><input type="text" name="auteur" value="" required/></p>
                                    <!--grande zone de texte-->
                                    <p>et votre message ici:</p>
                                    <p><textarea name="commentaire" rows="8" cols="45" required>
                                    </textarea></p>
                                    <p><input type="hidden" name="billet" value="<?php echo $_GET['billet']?>"/></p>
                                    <p><input type="hidden" name="page_comms" value="<?php echo $page_comms?>"></p>
                                    <p><input type="submit" class="btn btn-primary" value="Envoyer" /></p>
                                </form>
                            <?php
                            }
                            // Sinon (la variable $donnees est vide) on affiche un message d'erreur
                            } else {
                                echo 'Il y a une erreur dans l\'affichage du billet, raisons possibles:
                                <ul>
                                <li>Soit le champ n\'existe pas</li>
                                <li>Soit le champ est vide</li>
                                <li>Soit le champ vaut zéro</li>
                                </ul> ';
                            }?>
                        </div>
                    </div>
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