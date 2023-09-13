<?php
// Effectuer ici la requête qui insère le message


//Appel de la Connexion à la base de données
include('connexion_bdd.php');

// Si tout va bien, on peut continuer

//Mise en place d'un cookie valable 1 an avec le pseudo du visiteur
setcookie('pseudo',$_POST['pseudo'],time()+365*24*3600);

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES (?,?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');


