<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Chez Mauricette - Nos Photos</title>
    </head>
    
    <body>
<!--NAVBAR-->
<?php include 'navbar.php'; ?>


<!--MAIN CONTENT--> 
        <main class="pt-5">
        
        <!--Galerie photos-->
            <div class="container pt-5">
                <div class="row mt-5">
                        <picture class="col-12 px-5 px-sm-5 px-md-2 col-md w-100 mb-3">
                            <source srcset="images/soupesmall.png" media="(min-width : 768px)">
                            <img src="images/soupe2.jpg" alt="Soupe" width="100%">
                        </picture>
                        <picture class="col-12 px-5 px-sm-5 px-md-2 col-md w-100 mb-3">
                            <source srcset="images/fondatsmall.png" media="(min-width : 768px)">
                            <img src="images/fondant.jpg" alt="Fondant" width="100%">
                        </picture>
                        <picture class="col-12 px-5 px-sm-5 px-md-2 col-md w-100 mb-3">
                            <source srcset="images/crumblesmall.png" media="(min-width : 768px)">
                            <img src="images/crumble.jpg" alt="Crumble" width="100%">
                        </picture>
                </div>
            </div>

            <!--Pagination-->

            <nav aria-label="pagination galerie">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link text-white marron" href="galeriepage2.php" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link text-white marron" href="galerie.php">1</a></li>
                  <li class="page-item"><a class="page-link text-white marron" href="galeriepage2.php">2</a></li>
                  <li class="page-item"><a class="page-link active text-secondary" href="galeriepage3.php">3</a></li>
                  <li class="page-item"><a class="page-link text-white marron" href="galeriepage4.php">4</a></li>
                  <li class="page-item">
                    <a class="page-link text-white marron" href="galeriepage4.php" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </main>

<!--FOOTER-->
    <?php include 'footer.php'; ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>