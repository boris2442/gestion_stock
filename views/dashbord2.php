<!-- dashboard.php -->
<?php
//  session_start();
// if (!isset($_SESSION['user'])) {
//     header('Location: connexion.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau de bord</title>
  <link rel="stylesheet" href="../src/output.css">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="flex h-screen bg-gray-100">

  <!-- Sidebar -->
  <?php include('../includes/sidebar.php'); ?>

  <!-- Contenu principal -->
  <div class="flex-1 p-4 overflow-auto">
    <?php
      // $page = $_GET['page'] ?? 'view_produit'; // page par défaut
      // $allowedPages = [
      //   'view_produit',
      //   'ajout_produit',
      //   'view_client',
      //   'ajout_client',
      //   'view_fournisseur',
      //   'ajout_fournisseur',
      //   'update_produit',
      //   'update_client',
      //   'update_fournisseur',
      //   'vente'
      // ];

      // if (in_array($page, $allowedPages)) {
      //     include("$page.php");
      // } else {
      //     include("404.php"); // page 404 personnalisée
      // }
    ?>
  </div>

</body>
</html>
