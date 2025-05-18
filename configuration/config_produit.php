<?php
if (isset($_POST['okay'])) {
    $errors = [];
    $nom = htmlspecialchars($_POST['nom']);
    $categorie = htmlspecialchars($_POST['categorie']);
    // $image = htmlspecialchars($_POST['image']);
    $quantite = htmlspecialchars($_POST['quantite']);
    $prix = htmlspecialchars($_POST['prix']);
    $description = htmlspecialchars($_POST['description']);
    $date_expiration = $_POST['date_expiration'];
    $date_fabrication = htmlspecialchars($_POST['date_fabrication']);
    if (empty($nom) || empty($quantite) || empty($prix) || empty($date_fabrication)  || empty($date_expiration)) {
        $errors['insertion'] = "Veuillez entrer tous les champs";
    }
    //traitement d'images
    if (isset($_FILES['image']) && !empty($_FILES['image'])) {
        //extensions valides...
        $extensionValides = array('jpeg', 'png', 'pdf', 'jpg', 'sql'); //extension valides
        $file_name = $_FILES['image']['name']; // nom de notre image
        $file_tmp = $_FILES['image']['tmp_name']; //
        if($_FILES['image']['size']>5*1024*1024){
            $errors['size']="image tres longue";
        }
        $extension = pathinfo($file_name, PATHINFO_EXTENSION); //nom de l'extension
        if (in_array($extension, $extensionValides)) {
            $image_path = "../images/".$file_name;
            if (!move_uploaded_file($file_tmp,$image_path )) {
                $errors['fichier non deplacer'];
            }
        } else {
            echo "veuillez choisir une extension valide";
        }
    }




    if (empty($errors)) {
        $tableName = "produits";
        $colums = "categorie,nom_produit,description,image, prix, quantite, date_fabrication, date_expiration";
        $values = [$categorie,$nom, $description, $file_name, $prix, $quantite, $date_fabrication, $date_expiration];

        if (insertIntoDatabase($tableName, $colums, $values)) {
            $message = "produit reussie";
        }
    }
}
