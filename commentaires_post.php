<?php
// Effectuer ici la requête qui insère le message

//Connexion à la base de données
include('connexion_bdd.php');

// Si tout va bien, on peut continuer

//Mise en place d'un cookie valable 1 an avec le pseudo du visiteur
setcookie('auteur',$_POST['auteur'],time()+365*24*3600);

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire,date_commentaire) VALUES(?,?,?,NOW())');
$req->execute(array($_POST['billet'],$_POST['auteur'],$_POST['commentaire']));

$id_billet = htmlspecialchars($_POST['billet']);
$page_comms = htmlspecialchars($_POST['page_comms']);

$req->closeCursor();
// Puis rediriger vers commentaires.php comme ceci :
//header('Location: commentaires.php?billet='.$_POST['billet']);
header('Location:commentaires.php?billet=' . $id_billet . '&page_comms=' . $page_comms);
