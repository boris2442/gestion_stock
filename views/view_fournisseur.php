<?php
require_once "../functions/function.php";
require_once "../includes/header.php";

if (isset($_GET['id_fournisseur'])) {
    $id = $_GET['id_fournisseur'];
    deleteEntity("fournisseurs", $id, "id_fournisseur");
}
?>
<div class="ml-[256px] p-4">
<!-- ✅ Ajout d'un conteneur cohérent comme dans view_client -->
<main class="p-6  min-h-screen">
    <h2 class="text-2xl font-bold mb-6 text-blue-900">Liste des fournisseurs</h2>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full border-collapse table-auto">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="py-3 px-5 border border-blue-700 text-left">ID</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Nom</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Prénom</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Adresse</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Email</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Téléphone</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Sexe</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Modifier</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Supprimer</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php foreach (get("fournisseurs") as $fournisseur): ?>
                    <tr class="even:bg-gray-100 hover:bg-blue-50 transition">
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['id_fournisseur'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['nom'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['prenom'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['adresse'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['email'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['telephone'] ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= $fournisseur['sexe'] ?></td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="update_fournisseur.php?id_fournisseur=<?= $fournisseur['id_fournisseur'] ?>" class="text-blue-600 hover:underline font-semibold">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="view_fournisseur.php?id_fournisseur=<?= $fournisseur['id_fournisseur'] ?>" class="text-red-600 hover:underline font-semibold" onclick="return confirm('Voulez-vous vraiment supprimer ce fournisseur ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>
  </div>
<?php require_once "../includes/footer.php"; ?>
