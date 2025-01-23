<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'formulaire';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}

// Vérifier si la méthode de la requête est POST et que le champ _method est PUT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
    // Récupérer les données du formulaire
    $id = $_GET['id'];  // L'id de l'élément à modifier, passé via l'URL
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Préparer et exécuter la requête de mise à jour
    $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
    $conn = $pdo->prepare($sql);

    $conn->bindParam(':name', $name);
    $conn->bindParam(':email', $email);
    $conn->bindParam(':id', $id);

    if ($conn->execute()) {
        echo "Données mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
?>
