<?php
include_once('interfaces/IRepository.php');
class ClientRepository implements IRepository {
  public function findById($id){

  }
  public function findAll(){
      $bdd = new Bdd();
      $sql = "select * from CLIENT";
      $lignes = $bdd->query($sql);
      $lignes->setFetchMode(PDO::FETCH_OBJ);
      while($unClient = $lignes->fetch()){
        echo "Numéro du client : " . $unClient->NOCLI . "Nom du client : " . $unClient->NOMCLI . " Prénom : " .$unClient->PRENOMCLI . "<br>";
      }
  }
  public function findByCp($unCp){

  }
  public function findByVille($uneVille){

  }
} ?>
