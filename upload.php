<?php

    if(isset($_POST['submit'])) {
        $file = $_FILES['fichierimage'];
        $fileName = $_FILES['fichierimage']['name'];
        $fileTmpName = $_FILES['fichierimage']['tmp_name'];
        $fileSize = $_FILES['fichierimage']['size'];
        $fileError = $_FILES['fichierimage']['error'];
        $fileType = $_FILES['fichierimage']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0){
                if ($fileSize < 500000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "<p style='color:green'>Image ajouté à la galerie.</p>";

                    /* On ajoute les entrées à la table photos_restaurant */
                    $req = $bdd->prepare('INSERT INTO photos_restaurant(filename_photo, path_photo) VALUES(:filename_photo, :path_photo)');
                    $req->execute(array(
                        'filename_photo'=> $fileNameNew,
                        'path_photo'=> $fileDestination
                    ));

                } else {
                    echo "<p style='color:red'>Votre fichier est trop lourd.</p>";
                }
            } else {
                echo "<p style='color:red'>Il y eu une erreur de chargement de votre image.</p>";
            }
        } else {
            echo "<p style='color:red'>Ce type de fichier n'est pas accepté. Merci de charger un fichier jpg, jpeg ou png.</p>";
        }
    };
?>