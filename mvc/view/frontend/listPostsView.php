<?php $title = 'AFPA DWWM Mission 7 - Blog'; ?>

<?php ob_start(); ?>
<!-- le menu de la page -->
<div class="bg-dark">
    <div class="container">
        <div class="row">
            <nav class="col navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php">
                    <img src="./public/images/logo.png" width="50" height="50" alt="Info Logo" />
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
            <h1>Le blog (version MVC)</h1>
            <p><a href="../liste_travaux.php">Retour liste des travaux</a></p>
            <h2>Billets du blog :</h2>

            <?php
            while ($data = $posts->fetch()) {
                ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a
                            href="./index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                </p>
            </div>
            <?php
            }
            $posts->closeCursor();
            ?>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php');?>

<div class="bg-light mt-5">
    <div class="container">
      <div class="row pt-4 pb-3">
        <div class="col">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="#">À propos</a></li>
            <li class="list-inline-item">&middot;</li>
            <li class="list-inline-item"><a href="#">Vie privée</a></li>
            <li class="list-inline-item">&middot;</li>
            <li class="list-inline-item"><a href="#">Conditions d'utilisations</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


