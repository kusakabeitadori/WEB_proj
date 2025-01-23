<?php
  include'pdo.php';
  // $Insertion= $bdd->query("INSERT INTO users(firstname, lastname, age,telephone) VALUES (?,?,?,?)");
  $result = $bdd->query("SELECT * FROM users")->fetchAll();
  var_dump($result);

?>