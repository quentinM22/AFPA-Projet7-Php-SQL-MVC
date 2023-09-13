<?php
// variable contenant le total des articles voulus par page
$nb_billets_par_page = 3;

// On récupère le nombre total de messages :
$reponse = $bdd->query('SELECT COUNT(*) AS nb_billets FROM billets');
$total_billets = $reponse->fetch();
$nb_billets = $total_billets['nb_billets'];

// On détermine le nombre de pages :
$nb_pages = ceil($nb_billets / $nb_billets_par_page);

// On fait une boucle pour écrire les liens vers chacunes des pages :
?>
<div style="text-align: center;">
    <p>
        <?php
        echo 'Page : ';
        for ($i = 1; $i <= $nb_pages; $i++) {
            echo '<a href="blog.php?page=' . $i . '">' . $i . '</a> ';
        }?>
    </p>
</div>

<?php
// Maintenant on va afficher les billets :
if (isset($_GET['page'])) {
    if ($_GET['page'] < 100) {
        $page = $_GET['page']; // on récupère le numéro de la page indiqué dans l'adresse.
    } else {
        header('Location:blog.php');
    }
} else {
    $page = 1; // page par défaut si la variable n'existe pas.
}

// On calcule le numéro du premier article qu'on prend pour le LIMIT :
$premier_billet_a_afficher = ($page - 1) * $nb_billets_par_page;

// On ferme la requête avant d'en faire une autre :
$reponse->closeCursor();
