<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <title>Chez Mauricette - Back-Office</title>
    </head>
    <body>
        <!--BARRE DE NAVIGATION-->
        <?php include 'navbar.php'; ?>
        <!--MAIN CONTENT-->
        <?php
            // Connexion à la base de données
            try {
                $bdd = new PDO(
                    'mysql:host=localhost; dbname=restaurant_mauricette; charset=utf8', 'root', 'root'
                );
            } catch(Exception $e) {
                    die('Erreur : '.$e->getMessage());
            };
            // Lire les données de la db
            $reponse = $bdd->query(
                'SELECT id, date_message, prenom_client, nom_client, email_client, objet_message, message_contenu FROM formulaire_contact'
            );
        ?>
        <main class="pt-5 d-none d-sm-block">
            <div class="container my-5 pt-5">
                <h1 class="text-uppercase display-2 mb-5 text-center">Back-office</h1>
                <?php include 'tab_backoffice.php'; ?>
                <!-- TABLEAU DU BACK-OFFICE-->
                <table class="table justify-content-center">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Objet</th>
                        <th scope="col">Message</th>
                        <th scope="col">Supprimer</th>
                        <th scope="col">Répondre</th>
                    </tr>
                    <?php
                        // Recupere les datas de phpmyadmin et les range dans le tableau
                        while ($donnees = $reponse->fetch()){ 
                    ?>
                    <tr>
                        <td><?php echo $donnees['date_message'];?></td>
                        <td><?php echo $donnees['prenom_client'];?></td>
                        <td><?php echo $donnees['nom_client'];?></td>
                        <td><?php echo $donnees['email_client'];?></td>
                        <td><?php echo $donnees['objet_message'];?></td>
                        <td><?php echo $donnees['message_contenu'];?></td>
                        <td>
                        <!--Bouton delete lié à l'id des données de la db-->
                            <form method="post">
                                <button name="delete1" id="delete1" type="submit" value="<?php echo $donnees['id'];?>"><i class="fas fa-trash-alt"></i></button>
                            </form>            
                        </td>
                        <td><a href="mailto:<?php echo $donnees['email_client']?>?subject=RE: <?php echo $donnees['objet_message']?>&body=%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A---Message---%0D%0A<?php echo $donnees['message_contenu'] ?>"><i class="fas fa-reply"></i></a></td>
                    </tr>
                    
                    <?php
                        };
                        //Supprime données de la ligne quand clic sur le bouton (dans la db & sur le site)
                        $id = $_POST['delete1'];
                        if (isset($_POST['delete1'])) {
                            $delete_data = "DELETE FROM formulaire_contact WHERE id= $id";
                            $bdd->exec($delete_data);
                            header("Refresh:0");
                        };
                    ?>
                </table>
            </div>
        </main>
        <main class="pt-5 d-block d-sm-none">
            <div class="container my-5 pt-5">
                <p class="fs-5 fw-bold text-center">Pas d'accès au Back-Office sur mobile, merci de vous reconnecter sur ordinateur !</p>
            </div>
        </main>
        <!--FOOTER-->
        <?php include 'footer.php'; ?>
        <!--SCRIPTS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>