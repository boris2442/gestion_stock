<?php
require '../includes/database.php';
require '../configuration/config_vente.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-blue-400 text-white p-6">
    <h1 class="text-2xl font-bold mb-4">Effectuer une nouvelle vente</h1>
    <form method="post" class="space-y-4">

        <div class="">
            <label for="article">produit</label>
            <select name="clients" id="">
                <?php
                foreach (get("produits") as $produit): ?>
                    <option prix="<?= $produit['prix'] ?>" value="<?= $produit['id_produit'] ?>"><?= $produit['nom_produit'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="">
            <label for="article">clients</label>
            <select name="clients" id="">
                <?php
                foreach (get("clients") as $client): ?>
                    <option value="<?= $client['id_client'] ?>"><?= $client['nom'] ?><?= $client['prenom'] ?></option>
                <?php endforeach ?>
            </select>
            <!-- <input type="text" name="article" id="article"> -->
        </div>
        <div class="">
            <label for="quantite">quantite</label>
            <input type="number" name="quantite" id="quantite">
        </div>
        <div class="">
            <label for="price">prix Total vente</label>
            <input type="number" name="prix" id="price">
        </div>
        

        <div>
            <input type="submit" value="Enregistrer les modifications" name="okay" class="bg-white text-black px-4 py-2 rounded">
        </div>
    </form>
    <script src="../script/script.js"></script>
</body>

</html>