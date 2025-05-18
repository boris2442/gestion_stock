<?php
require "../functions/function.php";

if (isset($_GET['id_client'])) {
    $id = $_GET['id_client'];
    deleteEntity("clients", $id, "id_client");
}
?>

<?php require "header.php"; ?>


<!-- <main class="flex-1 p-6 bg-gray-100 min-h-screen"> -->
    <h1 class="text-3xl font-semibold text-blue-900 mb-6">Liste des Clients</h1>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full border-collapse table-auto">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="py-3 px-5 border border-blue-700 text-left">Id</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Nom</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Prénom</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Adresse</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Email</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Sexe</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Téléphone</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Supprimer</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Modifier</th>
                    <th class="py-3 px-5 border border-blue-700 text-left">Détail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (get("clients") as $client): ?>
                    <tr class="even:bg-gray-100 hover:bg-blue-50 transition">
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['id_client']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['nom']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['prenom']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['adresse']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['email']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['sexe']) ?></td>
                        <td class="py-2 px-4 border border-gray-300"><?= htmlspecialchars($client['telephone']) ?></td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="view_client.php?id_client=<?= $client['id_client'] ?>" class="text-red-600 hover:text-red-800 font-semibold" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?');">Supprimer</a>
                        </td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="update_client.php?id_client=<?= $client['id_client'] ?>" class="text-blue-600 hover:text-blue-800 font-semibold">Modifier</a>
                        </td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="detail_client.php?id_client=<?= $client['id_client'] ?>" class="text-green-600 hover:text-green-800 font-semibold">Détail</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<!-- </main> -->

<?php require "../includes/footer.php"; ?>
