<?php
// dashboard.php
// session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: connexion.php");
//     exit();
// }

$page = $_GET['page'] ?? 'view_produit'; // page par défaut

$allowed_pages = [
    'view_produit',
    'view_client',
    'view_fournisseur',
    'update_produit',
    'update_client',
    'update_fournisseur',
    'ajout_produit',
    'ajout_client',
    'ajout_fournisseur',
    'vente',
    // ajoute d'autres fichiers ici
];

if (in_array($page, $allowed_pages) && file_exists("views/$page.php")) {
    include "views/$page.php";
} else {
    include "views/404.php"; // ou une autre page d'erreur personnalisée
}


$page = isset($_GET['page']) ? $_GET['page'] : 'view_produit';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
    </script>
</head>

<body class="flex bg-gray-100 h-screen">
    <!-- Sidebar -->
    <aside id="sidebar" class="bg-blue-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out z-30">
        <a href="dashboard.php" class="text-white text-2xl font-bold px-4">STOCKPROJECT</a>
        <nav class="mt-10">
            <a href="dashboard.php?page=view_produit" class="block py-2.5 px-4 rounded hover:bg-blue-600 flex items-center gap-2">
                📄 <span>Produits</span>
            </a>

            <a href="dashboard.php?page=ajout_produit" class="block py-2.5 px-4 rounded hover:bg-blue-600"><span>➕</span> Ajouter Produit</a>
            <a href="dashboard.php?page=view_client" class="block py-2.5 px-4 rounded hover:bg-blue-600"><span>👥</span> Clients</a>
            <a href="dashboard.php?page=view_fournisseur" class="block py-2.5 px-4 rounded hover:bg-blue-600"><span>🚚</span> Fournisseurs</a>
            <a href="dashboard.php?page=vente" class="block py-2.5 px-4 rounded hover:bg-blue-600"><span>💰</span> Ventes</a>
            <a href="deconnexion.php" class="block py-2.5 px-4 rounded hover:bg-red-600 mt-10"><span>❌</span> Déconnexion</a>
        </nav>
    </aside>

    <!-- Content -->
    <div class="flex-1 flex flex-col">
        <header class="bg-white shadow-md w-full p-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-blue-800">Dashboard</h1>
            <button class="md:hidden text-blue-800" onclick="toggleSidebar()">☰</button>
        </header>

        <main class="flex-1 p-4 overflow-auto">
            <?php
            $fichier = $page . '.php';
            if (file_exists($fichier)) {
                include($fichier);
            } else {
                include('404.php');
            }
            ?>
        </main>
    </div>
</body>

</html>