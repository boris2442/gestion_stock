<?php
require "../functions/function.php";
if (isset($_GET['id_produit'])) {
    $id = $_GET['id_produit'];
    deleteEntity("produits", $id, "id_produit");
}
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
    <h2>Listes des produits</h2>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>categorie</td>
                <td>Nom</td>
                <td>description</td>
                <td>image</td>
                <td>prix</td>
                <td>quantite</td>
                <td>date_fabrication</td>
                <td>date_expiration</td>
                <td>Supprimer</td>
                <td>Modifier</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (get("produits") as $produit): ?>
                <tr>
                    <td><?= $produit['id_produit'] ?></td>
                    <td><?= $produit['categorie'] ?></td>
                    <td><?= $produit['nom_produit'] ?></td>
                    <td><?= $produit['description'] ?></td>
                    <td>  <img src="../images/<?= $produit['image'] ?>" alt="image" style="width: 20px; height: 20px; object-fit:cover"> </td>
                    <td><?= $produit['prix'] ?></td>
                    <td><?= $produit['quantite'] ?></td>
                    <td><?= $produit['date_fabrication'] ?></td>
                    <td><?= $produit['date_expiration'] ?></td>
                    <td><a href="view_produit.php?id_produit=<?= $produit['id_produit'] ?>">supprimer</a></td>
                    <td><a href="update_produit.php?id_produit=<?= $produit['id_produit'] ?>">editer</a></td>
                   

                </tr>
            <?php endforeach ?>


        </tbody>
    </table>

</body>

</html>