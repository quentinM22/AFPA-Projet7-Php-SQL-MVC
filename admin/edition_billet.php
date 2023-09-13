<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Edition de billet</title>
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
          <p>EDITION BILLET</p>
          <hr>

          <div id="texte">
            <p><a href="liste_billets.php">Retour à la liste des billets</a></p><br />

            <?php

                    if (isset($_GET['modifier_billet'])) { // Si on demande de modifier un billet
                        // On récupère les informations du billet correspondant
                        $req = $bdd->query('SELECT * FROM billets WHERE id=\'' . $_GET['modifier_billet'] . '\'');
                        while ($donnees = $req->fetch()) {

                            // On place le titre et le contenu dans des variables simples.
                            $titre = $donnees['titre'];
                            $auteur = $donnees['auteur'];
                            $contenu = $donnees['contenu'];
                            $id_billets = $donnees['id']; // Cette variable va servir pour se souvenir que c'est une modification.
                        }
                    } else { // Sinon c'est qu'on rédige un nouveau billet
                        // Les variables $titre et $contenu sont vides, puisque c'est un nouveau billet
                        $titre = '';
                        $auteur = '';
                        $contenu = '';
                        $id_billets = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
                    }
                    ?>
            <form method="post" action="liste_billets.php">

              <label for="titre">Titre de l'article :</label><br />
              <input type="text" size="30" name="titre" id="titre" placeholder="" required
                value="<?php echo $titre; ?>" /><br /><br />

              <label for="auteur">Auteur de l'article :</label><br />
              <input type="text" size="30" name="auteur" id="auteur" placeholder="" required
                value="<?php echo $auteur; ?>" /><br /><br />

              <label for="contenu">Contenu de l'article :</label><br />
              <textarea name="contenu" id="contenu" placeholder="" cols="50" rows="10">
                              <?php echo addslashes(stripslashes($contenu)); ?></textarea><br /><br />

              <input type="hidden" name="id_billets"
                value="<?php echo $id_billets; ?>" />

              <input type="submit" value="Envoyer" /><br />

            </form><br />
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