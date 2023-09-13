<?php $title = 'Modifier un commentaire' ?>

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
            <p><a href="./index.php">Retour à la liste des billets</a></p>
            <h2>Modification du commentaire :</h2>

            <form
                action="./index.php?action=editComment&amp;id=<?= $comment['id'] ?>"
                method="post">
                <div>
                    <p>Auteur : <?= $comment['author'] ?>
                    </p>
                    <label for="comment">Commentaire : </label><br />
                    <textarea id="comment" name="comment" rows="8" cols="45"><?= $comment['comment'] ?></textarea>
                </div>
                <div>
                    <input type="submit" value="Modifier" />
                </div>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php');
