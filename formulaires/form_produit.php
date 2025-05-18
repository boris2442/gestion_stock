<?php
require_once '../includes/database.php';
require "../functions/function.php";
require_once "../configuration/config_produit.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<title>Document</title>
</head>

<body>
    <h1>Ajouter un produit</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="">
            <label for="Nom">Nom produit</label>
            <input type="text" name="nom" id="Nom">
        </div>
        <div class="">
            <label for="image">image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="">
            <select name="categorie" id="">
                <option value="lourd">lourd</option>
                <option value="leger">leger</option>
            </select>
        </div>
        <div class="">
            <label for="quantite">quantite</label>
            <input type="number" name="quantite" id="quantite">
        </div>
        <div class="">
            <label for="prix">prix unitaire</label>
            <input type="number" name="prix" id="prix">
        </div>
        <div class="">
            <label for="date">date expiration</label>
            <input type="date" name="date_expiration" id="date">
        </div>
        <div class="">
            <label for="date_fabrication">date fabrication</label>
            <input type="date" name="date_fabrication" id="date_fabrication">
        </div>
        <div class="">
            <label for="description">description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="">
            <input type="submit" value="Ajouter" name="okay">
        </div>
    </form>
</body>

</html>