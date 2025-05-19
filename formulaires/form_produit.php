<?php
require_once '../includes/database.php';
require "../functions/function.php";
require_once "../configuration/config_produit.php";
require_once '../includes/header.php';
?>

<section class="min-h-screen flex items-center justify-center bg-blue-100 p-4 w-full">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-3xl ml-64">
        <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">Ajouter un produit</h2>

        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="Nom" class="block text-blue-900 font-semibold">Nom produit</label>
                <input type="text" name="nom" id="Nom" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            <div>
                <label for="image" class="block text-blue-900 font-semibold">Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border border-blue-300 rounded bg-white">
            </div>

            <div>
                <label for="categorie" class="block text-blue-900 font-semibold">Catégorie</label>
                <select name="categorie" id="categorie" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 bg-white">
                    <option value="lourd">Lourd</option>
                    <option value="leger">Léger</option>
                </select>
            </div>

            <div>
                <label for="quantite" class="block text-blue-900 font-semibold">Quantité</label>
                <input type="number" name="quantite" id="quantite" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            <div>
                <label for="prix" class="block text-blue-900 font-semibold">Prix unitaire</label>
                <input type="number" name="prix" id="prix" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            <div>
                <label for="date" class="block text-blue-900 font-semibold">Date d'expiration</label>
                <input type="date" name="date_expiration" id="date" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 bg-white">
            </div>

            <div>
                <label for="date_fabrication" class="block text-blue-900 font-semibold">Date de fabrication</label>
                <input type="date" name="date_fabrication" id="date_fabrication" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700 bg-white">
            </div>

            <div>
                <label for="description" class="block text-blue-900 font-semibold">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700"></textarea>
            </div>

            <div class="text-center">
                <input type="submit" value="Ajouter" name="okay" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
            </div>
        </form>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
