<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <title>Chez Mauricette - Menu</title>
    </head>

    <body>
<!--NAVBAR-->
<?php include 'navbar.php'; ?>


<!--MAIN CONTENT-->
        <main class="pt-5">
            <div class="container pt-5">
                <div class="row justify-content-center text-center my-5">
                    <h1 class="col-12 text-uppercase display-2">Menu</h1>
                    <p class="col-12">Plusieurs formules sont disponibles dans nos restaurants :</p>
                    <p class="col-12 fst-italic mt-0">Entrée + Plat = 20€</p>
                    <p class="col-12 fst-italic mt-0">Entrée + Dessert = 25€</p>
                    <p class="col-12 fst-italic mt-O">Entrée + Plat + Dessert = 30€</p>
                </div>
            </div>
            
            <div class="container">
                <div class="row mb-md-5">
                <!--Entrées-->
                    <div class="col mx-3 mb-3 col-md">
                        <h1 class="display-4 text-uppercase mb-2 text-center">Entrées</h1>
                        <ul class="list-group fw-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Carpaccio de légumes
                              <span class="badge bg-success rounded-pill"><i class="fas fa-leaf"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Soupe à l'oignon
                              <span class="badge bg-success rounded-pill"><i class="fas fa-leaf"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Assiette de tartinades
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Salade d'haricots verts, carottes et maïs
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-leaf"></i>
                                </span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Entrée du jour
                              </li>
                          </ul>
                    </div>
                    <!--Plats-->
                    <div class="col mx-3 mb-3 col-md">
                        <h1 class="display-4 text-uppercase mb-2 text-center">Plats</h1>
                        <ul class="list-group fw-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            Boulettes de boeuf, purée de patates douces
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            Filet de daurade, poivrons rôtis
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Poulet  à la crème de soja, riz brun et quinoa
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Quiche légumes de saion, salade verte
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-leaf"></i>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Salade de chou kale, quinoa, poivrons, pommes et radis
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-leaf"></i>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Plat du jour
                            </li>
                        </ul>
                    </div>
                    <!--Desserts-->
                    <div class="col mx-3 mb-3 col-md">
                        <h1 class="display-4 text-uppercase mb-2 text-center">Desserts</h1>
                        <ul class="list-group fw-light">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Fondant au chocolat
                                <span class="badge bg-success rounded-pill"><i class="fas fa-leaf"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Crumble de pommes et fruits rouges
                                <span class="badge bg-success rounded-pill"><i class="fas fa-leaf"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pain perdu
                            <span class="badge bg-success rounded-pill"><i class="fas fa-leaf"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Glaçe maison (mangue, chocolat, fraise, vanille)
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-leaf"></i>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dessert du jour
                                <span class="badge bg-success rounded-pill">
                                    <i class="fas fa-leaf"></i>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
        </main>

        <!--FOOTER-->
        <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>