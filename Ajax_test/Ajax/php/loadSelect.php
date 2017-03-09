<?php

    require_once("connexionBdd.php");
    
    // CHARGEMENT DES VILLES
    $requete = $bd->query('SELECT DISTINCT VILLE FROM personnel');

    while($donnee = $requete->fetch()){
        echo $donnee['VILLE'] . ',';
    }
    

    echo ";";
    // CHARGEMENT DES SEXES
    $requete = $bd->query('SELECT DISTINCT SEXE FROM personnel');

    while($donnee = $requete->fetch()){
        echo $donnee['SEXE'] . ',';
    }


    echo ";";
    // CHARGEMENT DES CODE PROJET
    $requete = $bd->query('SELECT DISTINCT CODEPROJET FROM personnel');

    while($donnee = $requete->fetch()){
        if(isset($donnee['CODEPROJET'])){
            echo $donnee['CODEPROJET'] . ',';
        }
    }
    

?>