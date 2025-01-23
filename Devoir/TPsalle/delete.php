<?php
$connexion = new mysqli('localhost', 'root', '', 'formulaire');

if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];

    $stmt = $connexion->prepare("DELETE FROM personnes WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Suppression réussie !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$connexion->close();
?>