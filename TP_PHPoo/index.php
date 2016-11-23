<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP OBJET TP</title>
</head>
<?php
try{
  define('RACINE', __DIR__);
  include_once('config/conf.php');
  // AutoLoader
  require 'autoload.php';
  AutoLoader::Register();
  $bdd = new Bdd();
  //$Connexion = Connexion::getInstance();
  ?>
  <body>
    <div>
      <p><?php Client::findAll($bdd);?> </p>
    </div>
  </body>
  <?php
}catch (Exception $ex){
  echo $ex->getMessage();
} ?>
</html>
