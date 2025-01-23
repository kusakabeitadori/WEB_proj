<?php
$connexion = new mysqli('localhost', 'root', '', 'formulaire');

if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $input);

    $id = (int) $input['id'];
    $firstname = htmlspecialchars($input['Nom']);
    $lastname = htmlspecialchars($input['Prenom']);
    $age = (int) $input['Age'];
    $phone = htmlspecialchars($input['Tel']);

    $stmt = $connexion->prepare("UPDATE personnes SET Nom = ?, Prenom = ?, Age = ?, Tel = ? WHERE id = ?");
    $stmt->bind_param("ssisi", $firstname, $lastname, $age, $phone, $id);

    if ($stmt->execute()) {
        echo "Mise à jour réussie !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$connexion->close();
?>