<?php
include_once('interfaces/IRepository.php');
class ClientRepository implements IRepository {
  public function findById($id){

  }
  public function findAll(){
    function afficheTousClients($unObjetPdo){
      $sql = "select * from CLIENT";
      $lignes = $unObjetPdo->query($sql);
      $lignes->setFetchMode(PDO::FETCH_OBJ);
      while($unClient = $lignes->fetch()){
        echo "Numéro du client : " . $unClient->NOCLI . "Nom du client : " . $unClient->NOMCLI . " Prénom : " .$unClient->PRENOMCLI . "<br>";
      }
    }
  }
  public function findByCp($unCp){

  }
  public function findByVille($uneVille){

  }
} ?>
