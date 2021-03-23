<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <title>Chez Mauricette - Contact</title>
    </head>

    <body>
<!--NAVBAR-->
<?php include 'navbar.php'; ?>

<!--MAIN CONTENT--> 
        <main class="pt-5">
            <div class="container my-5 pt-5">
                <form class="row justify-content-center" method="post">
                    <h1 class="text-uppercase display-2 mb-5 text-center">Nous contacter</h1>
                    <div class="mb-3 col-10 col-md-8">
                        <label for="prenom_client" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenom_client" name="prenom_client" placeholder="Mauricette" required>
                    </div>
                    <div class="mb-3 col-10 col-md-8">
                        <label for="nom_client" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom_client" name="nom_client" placeholder="Dupont" required>
                    </div>               
                    <div class="mb-3 col-10 col-md-8">
                        <label for="email_client" class="form-label">E-mail :</label>
                        <input type="email" class="form-control" id="email_client" name="email_client" aria-describedby="emailHelp" placeholder="mauricettedupont@example.com" required>
                    </div>
                    <div class="mb-3 col-10 col-md-8">
                        <label for="objet_message" class="form-label">Objet de votre message :</label>
                        <select required id="objet_message" name="objet_message" class="form-select">
                            <option value="">Sélectionner</option>
                            <option value="Réserver une table">Réserver une table</option>
                            <option value="Une question sur le restaurant">Une question sur le restaurant</option>
                            <option value="Privatisation">Privatisation</option>
                            <option value="Commander">Commander</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-floating mb-2 col-10 col-md-8">
                        <textarea class="form-control" placeholder="Votre message" id="message_contenu" name="message_contenu" style="height: 100px" required></textarea>
                        <label class="ps-4" for="message">Votre message</label>
                    </div>
                    <div class="mb-3 form-check col-10 col-md-8">
                        <input type="checkbox" class="form-check-input" id="confidentialite" required>
                        <label class="form-check-label" for="confidentialite">J'ai lu et j'accepte la <a href=#>Politique de confidentialité</a></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="envoyer" id="envoyer" onclick="alert('Merci pour votre message')" class="btn marron text-white fs-md-4">Envoyer <i class="far fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </main>

        <?php
        // Connexion à la base de données
            try
            {
                $bdd = new PDO('mysql:host=localhost; dbname=restaurant_mauricette; charset=utf8', 'root', 'root');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
        
        if (isset($_POST['envoyer'])){
            // On stocke les input dans des variables
            $prenom = $_POST['prenom_client'];
            $nom = $_POST['nom_client'];
            $email = $_POST['email_client'];
            $objet = $_POST['objet_message'];
            $message = $_POST['message_contenu'];

            // On ajoute les entrées à la table formulaire_contact
            $req = $bdd->prepare('INSERT INTO formulaire_contact(prenom_client, nom_client, email_client, objet_message, message_contenu) VALUES(:prenom_client, :nom_client, :email_client, :objet_message, :message_contenu)');
            $req->execute(array(
                'prenom_client'=> $prenom,
                'nom_client'=> $nom,
                'email_client'=> $email,
                'objet_message'=> $objet,
                'message_contenu'=> $message
            ));
        }
        ?>
        <!--FOOTER-->
        <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>