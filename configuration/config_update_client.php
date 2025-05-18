<?php
if(isset($_GET['id_client'])){
    $id_client=$_GET['id_client'];
    var_dump($id_client);
    $sql="SELECT * FROM  `clients` WHERE id_client=:id_client";
    $requete=$db->prepare($sql);
    $requete->bindParam(':id_client', $id_client);
    $requete->execute();
    $client=$requete->fetch();
    // echo "<pre>";
    // var_dump($client);
    // echo "</pre>";
}