<?php
// Connexion à MySQL (sans sélectionner de base au départ)
$host = 'localhost';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $pdo->exec("CREATE DATABASE IF NOT EXISTS gestion_utilisateurs");
    $pdo->exec("USE gestion_utilisateurs");

    // Création de la table "utilisateurs" si elle n'existe pas
    $pdo->exec("CREATE TABLE IF NOT EXISTS utilisateurs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        telephone VARCHAR(20) NOT NULL
    )");
} catch (PDOException $e) {
    die("Erreur de connexion ou de création de la base : " . $e->getMessage());
}
?>
