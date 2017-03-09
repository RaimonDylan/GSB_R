<?php

    require_once("connexionBdd.php");



        $requete = $bd->query("SELECT * FROM PERSONNEL");
        echo json_encode(array_filter($requete->fetchAll())); // Retourne tous les employes
    
?>
