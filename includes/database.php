<?php
try{
    $db=new PDO("mysql:host=localhost; dbname=gestion_client", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $db->SET NAMES ("charset utf8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo "connexion a la database echouer:".$e->getMessage();
}