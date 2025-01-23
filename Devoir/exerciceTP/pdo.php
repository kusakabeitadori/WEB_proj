<?php
try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', '');
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

// Requête pour récupérer les données de la table 'users'
try {
    $query = $bdd->query('SELECT * FROM users');
   } 
catch (PDOException $e) {
    die('Erreur lors de la récupération des données : ' . $e->getMessage());
}
?>