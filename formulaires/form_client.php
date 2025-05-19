<?php
require_once '../includes/database.php';
require "../functions/function.php";
require_once "../configuration/config_client.php";
require_once '../includes/header.php'; // Header déjà complet (HTML, HEAD, BODY)
?>

<section class="min-h-screen flex items-center justify-center bg-blue-200 p-4 w-full">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl ml-64">
        <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">Ajouter un client</h2>
        <form action="" method="post" class="space-y-4">
            <div>
                <label for="Nom" class="block text-blue-900 font-semibold">Nom</label>
                <input type="text" name="nom" id="Nom" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>
            <div>
                <label for="prenom" class="block text-blue-900 font-semibold">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>
            <div>
                <label for="adresse" class="block text-blue-900 font-semibold">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>
            <div>
                <label for="email" class="block text-blue-900 font-semibold">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>
            <div>
                <label for="telephone" class="block text-blue-900 font-semibold">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="w-full p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>
            <div>
                <span class="block text-blue-900 font-semibold mb-1">Sexe</span>
                <label class="mr-4">
                    <input type="radio" name="sexe" value="Masculin" class="mr-1"> Masculin
                </label>
                <label>
                    <input type="radio" name="sexe" value="Feminin" class="mr-1"> Féminin
                </label>
            </div>
            <div class="text-center">
                <input type="submit" value="Ajouter" name="okay" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            </div>
        </form>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
