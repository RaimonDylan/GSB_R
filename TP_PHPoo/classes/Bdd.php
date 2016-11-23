<?php
/**
 *
 */
class Bdd
{
  private $_dbmysql;
  function __construct()
  {
    try {
      $connect_str = "mysql:host=localhost;dbname=clientsoo";
      $connect_user = "root";
      $connect_pass = "";
      $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
      $this->_dbmysql = new PDO($connect_str, $connect_user, $connect_pass, $options);
    } catch (Exception $e) {
      throw new Exception("Erreur à la connexion \n" . $e->getException());

    }

  }
  public function requeteSQL($sql){
    
  }
}
 ?>
