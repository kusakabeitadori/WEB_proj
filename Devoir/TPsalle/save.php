<?php
$connexion = new mysqli('localhost', 'root', '', 'formulaire');

if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = htmlspecialchars($_POST['Nom']);
    $lastname = htmlspecialchars($_POST['Prenom']);
    $age = (int) $_POST['Age'];
    $phone = htmlspecialchars($_POST['Tel']);


    $stmt = $connexion->prepare("INSERT INTO personne (Nom, Prenom, Age, Tel) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $firstname, $lastname, $age, $phone);

    if ($stmt->execute()) {
        echo "Enregistrement réussi !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$connexion->close();
?>