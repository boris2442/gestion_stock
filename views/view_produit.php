<?php
require_once "../functions/function.php";
require_once "../includes/header.php"; // contient le <head>, la sidebar et l'ouverture du <body>


if (isset($_GET['id_produit'])) {
    $id = $_GET['id_produit'];
    deleteEntity("produits", $id, "id_produit");
}
?>
<div class="ml-64 p-4">
<section class="p-4 w-full transition-all duration-300">
<h2 class="text-3xl font-semibold text-blue-900 mb-6">Liste des produits</h2>

<div class="overflow-x-auto bg-white rounded shadow">
    <table class="min-w-full bg-white rounded shadow-md">
        <thead class="bg-blue-800 text-white">
            <tr>
                <th class="py-2 px-4 text-left">ID</th>
                <th class="py-2 px-4 text-left">Catégorie</th>
                <th class="py-2 px-4 text-left">Nom</th>
                <th class="py-2 px-4 text-left">Description</th>
                <th class="py-2 px-4 text-left">Image</th>
                <th class="py-2 px-4 text-left">Prix</th>
                <th class="py-2 px-4 text-left">Quantité</th>
                <th class="py-2 px-4 text-left">Date fabrication</th>
                <th class="py-2 px-4 text-left">Date expiration</th>
                <th class="py-2 px-4 text-left">Supprimer</th>
                <th class="py-2 px-4 text-left">Modifier</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach (get("produits") as $produit): ?>
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-2 px-4"><?= $produit['id_produit'] ?></td>
                    <td class="py-2 px-4"><?= $produit['categorie'] ?></td>
                    <td class="py-2 px-4"><?= $produit['nom_produit'] ?></td>
                    <td class="py-2 px-4"><?= $produit['description'] ?></td>
                    <td class="py-2 px-4">
                        <img src="../images/<?= $produit['image'] ?>" alt="image" class="w-10 h-10 object-cover rounded">
                    </td>
                    <td class="py-2 px-4"><?= $produit['prix'] ?></td>
                    <td class="py-2 px-4"><?= $produit['quantite'] ?></td>
                    <td class="py-2 px-4"><?= $produit['date_fabrication'] ?></td>
                    <td class="py-2 px-4"><?= $produit['date_expiration'] ?></td>
                    <td class="py-2 px-4">
                        <a href="view_produit.php?id_produit=<?= $produit['id_produit'] ?>" class="text-red-600 hover:underline">Supprimer</a>
                    </td>
                    <td class="py-2 px-4">
                        <a href="update_produit.php?id_produit=<?= $produit['id_produit'] ?>" class="text-blue-600 hover:underline">Éditer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</section>
<!-- </main> -->
 </div>
<?php require_once "../includes/footer.php"; ?>