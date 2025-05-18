<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<aside class="bg-blue-800 text-white w-64 min-h-screen p-4 fixed md:relative transition-transform duration-300 ease-in-out" id="sidebar">
    <div class="text-2xl font-bold mb-6">STOCKPROJECT</div>
    <nav class="flex flex-col gap-2">
        <a href="view_produit.php" class="py-2 px-4 rounded flex items-center gap-2 <?= $current == 'view_produit.php' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">📦 Produits</a>
        <a href="view_client.php" class="py-2 px-4 rounded flex items-center gap-2 <?= $current == 'view_client.php' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">👤 Clients</a>
        <a href="view_fournisseur.php" class="py-2 px-4 rounded flex items-center gap-2 <?= $current == 'view_fournisseur.php' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">🚚 Fournisseurs</a>
        <a href="vente.php" class="py-2 px-4 rounded flex items-center gap-2 <?= $current == 'vente.php' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">💰 Ventes</a>
        <a href="deconnexion.php" class="py-2 px-4 rounded hover:bg-red-600 flex items-center gap-2 mt-10">🚪 Déconnexion</a>
    </nav>
</aside>