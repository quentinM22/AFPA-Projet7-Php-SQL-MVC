<?php $title = htmlspecialchars($post['title']); ?>

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
            <h2>Billet du blog :</h2>

            <div class="news">
                <h3>
                    <?= htmlspecialchars($post['title']) ?>
                    <em>le <?= $post['creation_date_fr'] ?></em>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <h2>Commentaires</h2>

                    <?php
                    while ($comment = $comments->fetch()) {
                        ?>
                            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?><a href="index.php?action=viewComment&amp;id=<?= $comment['id'] ?>"> &#x270F</a></p>
                            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-6">
                    <h2>Commenter</h2>
                    <p>Veuillez taper votre pseudo :</p>
                    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                        <div>
                            <label for="author">Auteur</label><br />
                            <input type="text" id="author" name="author" />
                        </div>
                        <div>
                            <label for="comment">Commentaire</label><br />
                            <textarea id="comment" name="comment"></textarea>
                        </div>
                        <div>
                            <input type="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>

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




