<?php
require '../includes/database.php';

$page_title = "Modifier un produit";
require '../includes/header.php';

$current = basename($_SERVER['PHP_SELF']);
$produit = null;

// Vérifie l'ID
if (isset($_GET['id_produit']) && ctype_digit($_GET['id_produit'])) {
    $id_produit = (int) $_GET['id_produit'];

    $sql = "SELECT * FROM produits WHERE id_produit = :id_produit";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_produit', $id_produit, PDO::PARAM_INT);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produit) {
        echo "<p class='text-red-600'>Produit introuvable.</p>";
        require '../includes/footer.php';
        exit;
    }
} else {
    echo "<p class='text-red-600'>ID invalide.</p>";
    require '../includes/footer.php';
    exit;
}

// Traitement de la mise à jour
if (!empty($_POST['modifier'])) {
    $sql = "UPDATE produits SET 
                categorie = :categorie,
                nom_produit = :nom_produit,
                description = :description,
                prix = :prix,
                quantite = :quantite,
                date_fabrication = :date_fabrication,
                date_expiration = :date_expiration
            WHERE id_produit = :id_produit";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':categorie', $_POST['categorie']);
    $stmt->bindValue(':nom_produit', $_POST['nom_produit']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':prix', $_POST['prix']);
    $stmt->bindValue(':quantite', $_POST['quantite']);
    $stmt->bindValue(':date_fabrication', $_POST['date_fabrication']);
    $stmt->bindValue(':date_expiration', $_POST['date_expiration']);
    $stmt->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
    $stmt->execute();

    echo "<p class='text-green-600 font-bold'>Produit mis à jour avec succès.</p>";
}
?>
<div class="ml-[-256px]">
<h2 class="text-xl font-bold mb-4">Modifier le produit</h2>

<form method="post" class="space-y-4">
    <div>
        <label>Catégorie</label>
        <input type="text" name="categorie" value="<?= htmlspecialchars($produit['categorie']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <label>Nom</label>
        <input type="text" name="nom_produit" value="<?= htmlspecialchars($produit['nom_produit']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <label>Description</label>
        <textarea name="description"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"><?= htmlspecialchars($produit['description']) ?></textarea>
    </div>

    <div>
        <label>Prix</label>
        <input type="number" name="prix" step="0.01" value="<?= htmlspecialchars($produit['prix']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <label>Quantité</label>
        <input type="number" name="quantite" value="<?= htmlspecialchars($produit['quantite']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <label>Date de fabrication</label>
        <input type="date" name="date_fabrication" value="<?= htmlspecialchars($produit['date_fabrication']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <label>Date d'expiration</label>
        <input type="date" name="date_expiration" value="<?= htmlspecialchars($produit['date_expiration']) ?>"  class="border px-2 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
        <input type="submit" name="modifier" value="Modifier le produit" class="bg-blue-500 text-white px-4 py-2 rounded">
    </div>
</form>
</div>
<?php require '../includes/footer.php'; ?>
