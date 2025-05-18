<?php
if (isset($_POST['okay'])) {
    $errors = [];
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = $_POST['telephone'];
    $sexe = htmlspecialchars($_POST['sexe']);
    if (empty($nom) || empty($prenom) || empty($adresse) || empty($telephone)  || empty($sexe)) {
        $errors['insertion'] = "Veuillez entrer tous les champs";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "veullez entrer une adresses mail";
    }
    if (empty($errors)) {
        $tableName="clients";
        $colums="nom, prenom, adresse, email, telephone, sexe";
        $values=[$nom,$prenom, $adresse, $email, $telephone, $sexe];
       
        if( insertIntoDatabase($tableName,$colums, $values)){
            $message="Insertion reussie";
        }
    }
}
