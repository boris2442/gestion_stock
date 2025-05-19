<?php
require '../includes/database.php';
require '../configuration/config_vente.php';
require_once '../includes/header.php';
?>

<section class="min-h-screen flex items-center justify-center bg-blue-100 p-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl -ml-64">
        <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">Effectuer une nouvelle vente</h2>

        <form method="post" class="space-y-4">

            <div>
                <label for="produit" class="block text-blue-900 font-semibold mb-1">Produit</label>
                <select name="produit" id="produit" class="w-full p-2 border border-blue-300 rounded bg-white focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <?php foreach (get("produits") as $produit): ?>
                        <option prix="<?= $produit['prix'] ?>" value="<?= $produit['id_produit'] ?>">
                            <?= $produit['nom_produit'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div>
                <label for="client" class="block text-blue-900 font-semibold mb-1">Client</label>
                <select name="client" id="client" class="w-full p-2 border border-blue-300 rounded bg-white focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <?php foreach (get("clients") as $client): ?>
                        <option value="<?= $client['id_client'] ?>">
                            <?= $client['nom'] . ' ' . $client['prenom'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div>
                <label for="quantite" class="block text-blue-900 font-semibold mb-1">Quantité</label>
                <input type="number" name="quantite" id="quantite" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            <div>
                <label for="price" class="block text-blue-900 font-semibold mb-1">Prix total</label>
                <input type="number" name="prix" id="price" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            <div class="text-center">
                <input type="submit" value="Enregistrer la vente" name="okay" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
            </div>
        </form>
    </div>
</section>

<script src="../script/script.js"></script>
<?php require_once '../includes/footer.php'; ?>







