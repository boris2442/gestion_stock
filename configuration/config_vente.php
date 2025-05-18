<?php
if (isset($_POST['okay'])) {
    $errors = [];
    $id_article = htmlspecialchars($_POST['nom']);
    $id_client = htmlspecialchars($_POST['client']);
    $quantite = htmlspecialchars($_POST['quantite']);
    $prix = htmlspecialchars($_POST['prix']);
    // $telephone = $_POST['telephone'];
    // $sexe = htmlspecialchars($_POST['sexe']);
    if (empty($id_article) || empty($id_client) || empty($quantite) || empty($prix)  ) {
        $errors['insertion'] = "Veuillez entrer tous les champs";
    }
    
    if (empty($errors)) {
        $tableName="ventes";
        $colums="id_client, id_produit, quantite, prix,date_vente ";
        $date=date('Y-m-d H:i:s', strtotime('now'));
        $values=[$id_article,$id_client, $quantite, $prix, $date];
       
        if( insertIntoDatabase($tableName,$colums, $values)){
            $message="Insertion reussie";
        }
    }
}
