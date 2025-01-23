<?php
$host = 'localhost';
$dbname = 'formulaire'; 
$username = 'root'; 
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("La connexion a échoué: " . $e->getMessage());
}
?>
