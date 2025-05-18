<?php
function insertIntoDatabase($tableName, $columns, $values)
{
    try {
        require "../includes/database.php";
        $placeholder = implode(',', array_fill(0, count($values), "?"));
        $sql = "INSERT INTO $tableName ($columns) VALUES($placeholder)";
        $stmt = $db->prepare($sql);
        $stmt->execute($values);
    } catch (PDOException $e) {
        echo "Une erreur produite lors de l'insertion:" . $e->getMessage();
    }
}

//fonctions afficher les differents clients
function get($entityName)
{
    require "../includes/database.php";
    $stmt = $db->prepare("SELECT * FROM $entityName");
    $stmt->execute();
    $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

//function qui permet de modifier les elements dans notre database
function updateEntity($table, $params, $id, $idName)
{
    require '../includes/database.php';
    $setClause = '';
    $values = [];
    foreach ($params as $key => $value) {
        $setClause .= "$key=?,";
        $values = [];
    }
    $trimClause = trim($setClause, ",");
    $sql = "UPDATE $table SET $trimClause WHERE $idName=$id";
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
}

//function qui nous permettra de supprimer un element dans notre database
function deleteEntity($tableName, $id, $idName)
{
    require '../includes/database.php';
    //   $values = [];
    $sql = "DELETE FROM $tableName WHERE $idName=$id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
//function permettant de recuperer les valeurs pour l'update en temps reels

function getEntityById($tableName, $id, $idName) {
    require '../includes/database.php';
    $sql = "SELECT * FROM $tableName WHERE $idName = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(); // retourne un seul tableau associatif ou false
}
