<?php
// variable contenant le total des commentaires voulus par article
$nb_comms_par_billet = 4;

// On récupère la variable GET billet:
if (isset($_GET['billet'])) {
    $id_billet = $_GET['billet'];
}

// On récupère le nombre total de commentaires :
$request_comms_pagination = $bdd->query('SELECT COUNT(*) as nb_comms FROM commentaires WHERE id_billet =' . $id_billet);
$total_comms = $request_comms_pagination->fetch();
$nb_commentaires = $total_comms['nb_comms'];

// On détermine le nombre de pages :
$nb_pages_comm = ceil($nb_commentaires / $nb_comms_par_billet);

// On fait une boucle pour écrire les liens vers chacun des commentaire :
?>
<div style="text-align: center;">
    <p>
        <?php
            echo 'Page : ';
            for ($i = 1; $i <= $nb_pages_comm; $i++) {
                echo '<a href="commentaires.php?billet=' . $id_billet . '&amp;page_comms=' . $i . '">' . $i . '</a> ';
            }
        ?>
    </p>
</div>

<?php
    // On affiche les commentaires
    if (isset($_GET['page_comms']) && $_GET['page_comms'] < 100) {
        if (empty($_GET['page_comms'])) {
            echo 'Pas de commentaires / erreur.';
        } else {
            $page_comms = htmlspecialchars($_GET['page_comms']);
        }
    } else {
        $page_comms = 1;
    }

    // Calcule le numéro du premier commentaire qu'on prend pour le LIMIT :
    $premier_comm_a_afficher = ($page_comms - 1) * $nb_comms_par_billet;

    // Ferme la requête
    $request_comms_pagination->closeCursor();
