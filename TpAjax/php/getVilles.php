<?php
  $pdo = new PDO('mysql:host=localhost;dbname=requetemagique',"root","");
  $villes = $pdo->query("SELECT DISTINCT VILLE FROM PERSONNEL");
  echo json_encode($villes->fetchAll(PDO::FETCH_COLUMN, 0));
?>
