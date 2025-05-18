<?php
require "../functions/function.php";
if (isset($_GET['id_fournisseur'])) {
    $id = $_GET['id_fournisseur'];
    deleteEntity("fournisseurs", $id, "id_fournisseur");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

    <title>Document</title>
</head>

<body>
    <h2>Listes des fournisseurs</h2>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Adresse</td>
                <td>email</td>
                <td>Telephone</td>
                <td>Modifier</td>
                <td>Supprimer</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (get("fournisseurs") as $fournisseur): ?>
                <tr>
                    <td><?= $fournisseur['id_fournisseur'] ?></td>
                    <td><?= $fournisseur['nom'] ?></td>
                    <td><?= $fournisseur['prenom'] ?></td>
                    <td><?= $fournisseur['email'] ?></td>
                    <td><?= $fournisseur['adresse'] ?></td>
                    <td><?= $fournisseur['telephone'] ?></td>
                    <td><?= $fournisseur['sexe'] ?></td>
                    <td><a href="update_fournisseur.php?id_fournisseur=<?= $fournisseur['id_fournisseur'] ?>">editer</a></td>
                    <td><a href="view_fournisseur.php?id_fournisseur=<?= $fournisseur['id_fournisseur'] ?>">supprimer</a></td>
                    <td></td>
                </tr>
            <?php endforeach ?>


        </tbody>
    </table>
</body>

</html>