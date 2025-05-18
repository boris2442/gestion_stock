<?php
// session_start();

// if (!isset($_SESSION['user_id'])) {
//     header('Location: 404.php');
//     exit;
// }
// require 'connexion.php'; 
// $page = $_GET['page'] ?? 'view_produit';
// $allowed = [
//     'view_produit', 'ajout_produit',
//     'view_client', 'ajout_client',
//     'view_fournisseur', 'ajout_fournisseur',
//     'vente'
// ];
// if (!in_array($page, $allowed) || !file_exists("{$page}.php")) {
//     header('Location: 404.php');
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STOCKPROJECT Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Heroicons CDN -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="flex h-screen bg-gray-100">
  <!-- Sidebar -->
  <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-blue-800 to-violet-700 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="flex items-center justify-center h-16 p-4">
      <img src="logo.png" alt="Logo" class="h-10 mr-2">
      <span class="text-xl font-bold">STOCKPROJECT</span>
    </div>
    <nav class="mt-5">
      <a href="views/view_produit.php" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="package" class="w-5 h-5 mr-3"></i> Liste Produits
      </a>
      <a href="?page=ajout_produit" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="plus-circle" class="w-5 h-5 mr-3"></i> Ajouter Produit
      </a>
      <a href="?page=view_client" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="users" class="w-5 h-5 mr-3"></i> Liste Clients
      </a>
      <a href="?page=ajout_client" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="user-plus" class="w-5 h-5 mr-3"></i> Ajouter Client
      </a>
      <a href="?page=view_fournisseur" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="truck" class="w-5 h-5 mr-3"></i> Liste Fournisseurs
      </a>
      <a href="?page=ajout_fournisseur" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="truck-provision" class="w-5 h-5 mr-3"></i> Ajouter Fournisseur
      </a>
      <a href="?page=vente" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="shopping-cart" class="w-5 h-5 mr-3"></i> Ventes
      </a>
    </nav>
    <div class="absolute bottom-0 w-full">
      <a href="deconnexion.php" class="flex items-center px-4 py-3 hover:bg-red-600">
        <i data-feather="log-out" class="w-5 h-5 mr-3"></i> Déconnexion
      </a>
    </div>
  </aside>

  <!-- Content -->
  <div class="flex-1 flex flex-col md:ml-64">
    <!-- Header + burger -->
    <header class="flex items-center justify-between bg-white shadow p-4">
      <button id="btnToggle" class="md:hidden text-gray-700 focus:outline-none">
        <i data-feather="menu" class="w-6 h-6"></i>
      </button>
      <h1 class="text-2xl font-semibold text-gray-800 capitalize"><?= ucfirst(str_replace('_', ' ', $page)) ?></h1>
    </header>

    <!-- Main -->
    <main class="p-6 overflow-auto">
      <?php include "{$page}.php"; ?>
    </main>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      feather.replace();
      const btn = document.getElementById('btnToggle');
      const sidebar = document.getElementById('sidebar');
      btn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
      });
    });
  </script>
</body>
</html>
