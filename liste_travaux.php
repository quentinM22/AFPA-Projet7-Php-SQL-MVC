<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Travaux</title>
</head>

<body>

    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h1>Travaux pratiques</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input class="form-control" id="searchInput" type="text" placeholder="Search...">
            </div>
        </div>
        <div class="row" id="travauxList1">
            <div class="col-12 col-lg-6">
                <div class="card mb-4 mb-lg-0 border-light shadow-sm">
                    <img src="images/mdp.png" alt="mot de passe" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Page protégée par mot de passe</h5>
                        <p class="card-text">Mettre en ligne une page web pour donner des
                            informations confidentielles à certaines personnes. Cependant, pour limiter l'accès à cette
                            page, il
                            faudra connaître un mot de passe. Dans notre cas, les données confidentielles seront les
                            codes d'accès au
                            serveur central de la NASA. Le mot de passe sera "kangourou".
                            Réaliser une page qui n'affiche ces codes secrets que si l'on a rentré le bon mot de passe ?
                        </p>
                        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913196-tp-page-protegee-par-mot-de-passe"
                            class="btn btn-primary" target="_blank">Voir le TP sur OC</a>
                        <a href="./codes_nasa.php" class="btn btn-primary">Voir le TP réalisé</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card mb-4 mb-lg-0 border-light shadow-sm">
                    <img src="images/minichat.png" alt="Minichat" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Un Minichat</h5>
                        <p class="card-text">On souhaite avoir, sur la même page et en haut, deux zones de texte : une
                            pour écrire
                            votre pseudo, une autre pour écrire votre petit message. Ensuite, un bouton « Envoyer »
                            permettra
                            d'envoyer les données à MySQL pour qu'il les enregistre dans une table.
                            En dessous, le script devra afficher les 10 derniers messages qui ont été enregistrés, en
                            allant du plus
                            récent au plus ancien.</p>
                        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/914663-tp-un-minichat"
                            class="btn btn-primary" target="_blank">Voir le TP sur OC</a>
                        <a href="./minichat.php" class="btn btn-primary">Voir le TP réalisé</a>
                    </div>
                </div>
            </div>
        </div><br /><br />
        <div class="row" id="travauxList2">
            <div class="col-12 col-lg-6">
                <div class="card mb-4 mb-lg-0 border-light shadow-sm">
                    <img src="images/blog.png" alt="Blog avec commentaires" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Un blog avec des commentaires</h5>
                        <p class="card-text"> Je vous propose de réaliser l'affichage de base d'un blog
                            et des commentaires associés aux billets, et je vous inviterai par la suite à l'améliorer
                            pour créer
                            l'interface de gestion des billets et d'ajout de commentaires.
                            Améliorations à apporter: </p>
                        <ul>
                            <li>
                                <p>Un formulaire d'ajout de commentaires</p>
                            </li>
                            <li>
                                <p>Utiliser les includes</p>
                            <li>
                                <p>Vérifier si le billet existe sur la page des commentaires</p>
                            </li>
                            <li>
                                <p>Paginer les billets et commentaires</p>
                            </li>
                            <li>
                                <p>Réaliser une interface d'administration du blog</p>
                            </li>
                            <li>
                                <p>Proteger les accès avec .htaccess et .htpassword</p>
                            </li>
                        </ul>
                        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/6964512-tp-un-blog-avec-des-commentaires"
                            class="btn btn-primary" target="_blank">Voir le TP sur OC</a>
                        <a href="./blog.php" class="btn btn-primary">Voir le TP réalisé</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card mb-4 mb-lg-0 border-light shadow-sm">
                    <img src="images/membres.png" alt="Espace membres" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Un espace membres</h5>
                        <p class="card-text"> Vous avez forcément déjà vu un espace membres, même si le site web ne
                            l'appelle pas exactement comme cela.
                            Vous devriez donc savoir qu'un espace membres nécessite au minimum les éléments suivants :
                        <ul>
                            <li>
                                <p>une page d'inscription</p>
                            </li>
                            <li>
                                <p>une page de connexion</p>
                            </li>
                            <li>
                                <p>une page de déconnexion</p>
                            </li>
                        </ul>
                        On peut ensuite ajouter d'autres pages, par exemple pour afficher et modifier son profil de
                        membre.
                        Cependant, il faut au minimum avoir créé les pages que je viens de mentionner.</p>
                        
                        <br /><br />
                        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/917948-tp-creez-un-espace-membres"
                            class="btn btn-primary" target="_blank">Voir le TP sur OC</a>
                        <a href="./espace_membres.php" class="btn btn-primary">Voir le TP réalisé</a>
                    </div>
                </div>
            </div>
        </div><br /><br />
        <div class="col-12" style="padding:0;">
            <div class="card mb-4 mb-lg-0 border-light shadow-sm">
                <img src="images/mvc.png" alt="Architecture MVC" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Utiliser une architecture MVC</h5>
                    <p class="card-text"> 
                    Un des plus célèbres design patterns s'appelle MVC, qui signifie Modèle - Vue - Contrôleur. C'est celui que nous allons découvrir maintenant.
                    Le pattern MVC permet de bien organiser son code source. Il va vous aider à savoir quels fichiers créer, mais surtout à définir leur rôle. Le but de MVC est justement de séparer la logique du code en trois parties que l'on retrouve dans des fichiers distincts.
                    <ul>
                        <li>
                            <p><b>Modèle :</b> cette partie gère les données de votre site. Son rôle est d'aller récupérer les informations « brutes » dans la base de données, de les organiser et de les assembler pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL.</p>
                        </li>
                        <li>
                            <p><b>Vue :</b> cette partie se concentre sur l'affichage. Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir ce qu'elle doit afficher. On y trouve essentiellement du code HTML mais aussi quelques boucles et conditions PHP très simples, pour afficher par exemple une liste de messages.</p>
                        </li>
                        <li>
                            <p><b>Contrôleur :</b> cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue : le contrôleur va demander au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue. Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur a le droit de voir la page ou non (gestion des droits d'accès).</p>
                        </li>
                    </ul>
                    On peut ensuite ajouter d'autres pages, par exemple pour afficher et modifier son profil de membre.
                    Cependant, il faut au minimum avoir créé les pages que je viens de mentionner.</p>
                    <br /><br />
                    <a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php"
                        class="btn btn-primary" target="_blank">Voir le TP sur OC</a>
                    <a href="./mvc/index.php" class="btn btn-primary">Voir le TP réalisé</a>
                </div>
            </div>
        </div>
        <!-- le pied de la page -->
        <?php include('pieddepage.php'); ?>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
        <script src="./js/research.js"></script>

</body>

</html>