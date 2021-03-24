<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <title>Chez Mauricette - Admin</title>
    </head>

    <body>
        <!-- NAVBAR -->
        <?php include 'navbar.php'; ?>

        <!--MAIN CONTENT--> 
        <main class="pt-5">
            <div class="container my-5 pt-5">

                <!-- Formulaire de connexion admin -->
                <form class="row justify-content-center" action="backoffice.php" method="post">
                        <h3 class="text-uppercase display-2 mb-5 text-center">Log in :</h3>
                        <div class="mb-3 col-10 col-md-8">
                            <label for="pseudo" class="form-label">Pseudo :</label>
                            <input type="text" name="pseudo" id="pseudo" class="form-control">
                        </div>
                        <div class="mb-3 col-10 col-md-8">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn marron text-white fs-md-4" name="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <!-- FOOTER -->
        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>