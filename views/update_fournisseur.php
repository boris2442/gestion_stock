<?php
require '../includes/database.php';

$fournisseur = null;

if (isset($_GET['id_fournisseur']) && ctype_digit($_GET['id_fournisseur'])) {
    $id_fournisseur = (int) $_GET['id_fournisseur'];

    // Récupération du fournisseur
    $sql = "SELECT * FROM fournisseurs WHERE id_fournisseur = :id_fournisseur";
    $requete = $db->prepare($sql);
    $requete->bindParam(':id_fournisseur', $id_fournisseur, PDO::PARAM_INT);
    $requete->execute();
    $fournisseur = $requete->fetch(PDO::FETCH_ASSOC);

    if ($fournisseur) {
        echo "on a recuperé<br>";
        echo "<pre>";
        var_dump($fournisseur);
        echo "</pre>";

        // Mise à jour si formulaire soumis
        if (!empty($_POST['okay'])) {
            $sql = "UPDATE fournisseurs SET nom = :nom, prenom = :prenom, email = :email, adresse = :adresse, telephone = :telephone, sexe = :sexe WHERE id_fournisseur = :id_fournisseur";
            $requete = $db->prepare($sql);
            $requete->bindValue(':nom', $_POST['nom']);
            $requete->bindValue(':prenom', $_POST['prenom']);
            $requete->bindValue(':email', $_POST['email']);
            $requete->bindValue(':adresse', $_POST['adresse']);
            $requete->bindValue(':telephone', $_POST['telephone']);
            $requete->bindValue(':sexe', $_POST['sexe']);
            $requete->bindValue(':id_fournisseur', $id_fournisseur, PDO::PARAM_INT);
            $requete->execute();

            echo "<p>Le fournisseur a bien été modifié.</p>";
        }
    } else {
        echo "<p>fournisseur introuvable.</p>";
        exit;
    }
} else {
    echo "<p>Identifiant invalide.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier fournisseur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-blue-400 text-white p-6">
    <h1 class="text-2xl font-bold mb-4">Modifier le fournisseur</h1>
    <form method="post" class="space-y-4">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($fournisseur['nom'] ?? '') ?>" class="text-black border-2 border-solid border-[#333] p-1">
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($fournisseur['prenom'] ?? '') ?>" class="text-black border-2 border-solid border-[#333] p-1">
        </div>
        <div>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value="<?= htmlspecialchars($fournisseur['adresse'] ?? '') ?>" class="text-black border-2 border-solid border-[#333] p-1">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($fournisseur['email'] ?? '') ?>" class="text-black border-2 border-solid border-[#333] p-1">
        </div>
        <div>
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" value="<?= htmlspecialchars($fournisseur['telephone'] ?? '') ?>" class="text-black border-2 border-solid border-[#333] p-1">
        </div>
        <div>
            <label>Sexe</label>
            <label>
                <input type="radio" name="sexe" value="Masculin" <?= ($fournisseur['sexe'] ?? '') === 'Masculin' ? 'checked' : '' ?>> Masculin
            </label>
            <label>
                <input type="radio" name="sexe" value="Feminin" <?= ($fournisseur['sexe'] ?? '') === 'Feminin' ? 'checked' : '' ?>> Féminin
            </label>
        </div>
        <div>
            <input type="submit" value="Enregistrer les modifications" name="okay" class="bg-white text-black px-4 py-2 rounded">
        </div>
    </form>
</body>
</html>
