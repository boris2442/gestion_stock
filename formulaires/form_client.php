<?php
require_once '../includes/database.php';
require "../functions/function.php";
require_once "../configuration/config_client.php";
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
    <form action="" method="post">
        <div class="">
            <label for="Nom">Nom</label>
            <input type="text" name="nom" id="Nom">
        </div>
        <div class="">
            <label for="Nom">Prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div class="">
            <label for="adresse">adresse</label>
            <input type="text" name="adresse" id="adresse">
        </div>
        <div class="">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="">
            <label for="telephone">telephone</label>
            <input type="text" name="telephone" id="telephone">
        </div>
        <div class="">
            <input type="radio" name="sexe" id="" value="Maxculin">
            <input type="radio" name="sexe" id="" value="Feminin">
        </div>
        <div class="">
            <input type="submit" value="Ajouter" name="okay">
        </div>
    </form>
</body>

</html>