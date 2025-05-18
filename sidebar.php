 <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gradient-to-b from-blue-800 to-violet-700 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="flex items-center justify-center h-16 p-4">
      <img src="logo.png" alt="Logo" class="h-10 mr-2">
      <span class="text-xl font-bold">STOCKPROJECT</span>
    </div>
    <nav class="mt-5">
      <a href="?page=view_produit" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="package" class="w-5 h-5 mr-3"></i> Liste Produits
      </a>
      <a href="?page=ajout_produit" class="flex items-center px-4 py-2 hover:bg-blue-700">
        <i data-feather="plus-circle" class="w-5 h-5 mr-3"></i> Ajouter Produit
      </a>
      <a href="views/view_client.php" class="flex items-center px-4 py-2 hover:bg-blue-700">
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