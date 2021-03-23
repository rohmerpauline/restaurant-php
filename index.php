<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <title>Chez Mauricette - Accueil</title>
    </head>
    
    <body>
<!--NAVBAR-->
        <?php include 'navbar.php'; ?>

<!--MAIN CONTENT--> 

<!--LOGO-->
        <main class="pt-5">
            <div class="justify-content-center text-center pt-5">
                <img class="w-100 px-4 mt-5 d-block d-sm-block d-md-none "src="images/logo.png" alt="Logo Mauricette">
                <img class="w-50 px-5 mx-auto mt-5 d-none d-md-block justify-content-center" src="images/logo.png" alt="Logo Mauricette">
            </div>

<!--Jumbotron--> 
            <div class="container">
                <div class="row mx-1 mt-5">
                    <div class="col marron p-5 rounded">
                        <h1 class="text-center text-white fw-b mb-4">Chez Mauricette, </br>on ne lésine par sur la qualité de notre nourriture !</h1>
                        <p class="lead text-center text-white fw-lighter">Vous savez ce que vous mangez, nous savons que vous aimez savoir ce que vous mangez, et nous aimons savoir que vous aimez savoir ce que vous mangez…
                            </p>
                        <hr class="my-4 text-white">
                        <p class="text-center text-white">Alors convaincus ? On se voit quand ?</p>
                        <div class="text-center">
                            <a class="btn rose fw-bold fs-md-3" href="nouscontacter.php" role="button">Réserver une table </a>
                        </div>
                    </div>
                </div>
            </div>

<!--Panels actualités et events--> 
            <div class="container mb-5">
                <div class="row mx-2 mt-3">
                    <div class="col col-sm-12 col-md me-md-1 p-5 rounded rosef mb-3">
                        <h1 class="display-4 text-uppercase mb-4 text-center">Nos actualités</h1>
                        <div>
                            <p class="fs-5 fw-bold text-center">Nous restons ouverts !</p>
                            <img class="w-100 mb-4" src="images/takeaway.png">
                            <p class="align-item-top">Nos restaurants restent ouverts en <i>take away</i> ! Nous ne pouvons plus vous accueillir pour le moment, mais nous mettons tout notre cœur à vous préparer des bons petits plats à ramener à la maison. Commandez par téléphone ou via notre <a href="nouscontacter.php">formulaire de contact</a> !</p>
                        </div>
                        <hr class="my-4 my-sm-5">
                        <div>
                            <p class="fs-5 fw-bold text-center">Le retour de la soupe à l'oignon</p>
                            <img class="w-100 mb-4" src="images/soupe.png">
                            <p class="align-item-top"> Nous avons le plaisir de vous annoncer le retour de la soupe à l’oignon ! Un classique incontournable pour se réchauffer les corps et les cœurs lors des longues soirées d’hiver. La soupe est en-train de mijoter, elle n’attend plus que vous. Et pour découvrir le menu complet de nos restaurants, <a href="menu.php">c’est ici.</a> !</p> 
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md ms-md-1 rosec p-5 rounded mb-3">
                        <h1 class="display-4 text-uppercase mb-4 text-center">Nos événements</h1>
                        <div>
                            <p class="fs-5 fw-bold text-center">Mardi 4 février 2020, à 20h</p>
                            <img class="w-100 mb-4" src="images/pouletactu.png">
                            <p class="align-item-top">Rendez-vous pour un live cuisine sur notre page Instagram. Nous apprendrons ensemble à faire notre célèbre recette de poulet à la crème, riz brun et quinoa. La liste des courses pour préparer ensemble cette recette se trouve sur <a href="https://www.instagram.com" target="_blank">notre page Instagram</a>. Pensez à suivre notre page pour plus de surprises !</p>
                        </div>
                        <hr class="my-4 my-sm-5">
                        <div>
                            <p class="fs-5 fw-bold text-center">24 octobre 2020, à 20h30</p>
                            <img class="w-100 mb-4" src="images/pull.png">
                            <p class="align-item-top">Samedi 24 octobre, c’est soirée pull moche dans nos restaurants ! Réservez votre soirée et venez dîner avec votre pull le plus ignoble. Comme chaque année, dans chacun de nos restaurant ce soir-là, le pull le plus moche se verra récompenser d’un repas gratuit pour 4 personnes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<!--FOOTER-->
    <?php include 'footer.php'; ?>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>