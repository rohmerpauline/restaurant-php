<?php
    if(isset($_POST['submit'])) {

        //Stocke les informations de l'image dans des variables
        $file = $_FILES['fichierimage'];
        $fileName = $_FILES['fichierimage']['name'];
        $fileTmpName = $_FILES['fichierimage']['tmp_name'];
        $fileSize = $_FILES['fichierimage']['size'];
        $fileError = $_FILES['fichierimage']['error'];
        $fileType = $_FILES['fichierimage']['type'];

        // Vérifie que le format de l'image est jpg, jpeg ou png
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        // Si l'image remplit toutes les bonnes conditions 
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0){
                if ($fileSize < 500000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;

                    // charge image dans dossier uploads
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "<p style='color:green'>Image ajouté à la galerie.</p>";

                    // Ajoute image à la Table photos_restaurant dans db
                    $req = $bdd->prepare('INSERT INTO photos_restaurant(filename_photo, path_photo) VALUES(:filename_photo, :path_photo)');
                    $req->execute(array(
                        'filename_photo'=> $fileNameNew,
                        'path_photo'=> $fileDestination
                    ));

                // si fichier trop gros
                } else {
                    echo "<p style='color:red'>Votre fichier est trop lourd.</p>";
                }

            // si fichier rencontre erreur
            } else {
                echo "<p style='color:red'>Il y eu une erreur de chargement de votre image.</p>";
            }

        // si fichier n'a pas la bonne extension 
        } else {
            echo "<p style='color:red'>Ce type de fichier n'est pas accepté. Merci de charger un fichier jpg, jpeg ou png.</p>";
        }
    };
?>