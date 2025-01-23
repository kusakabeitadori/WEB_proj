<?php
// Connexion à la base de données
try {
    $conn = new PDO("mysql:host=localhost;dbname=personne;charset=utf8", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $age = $_POST['age'] ?? '';
    $numero = $_POST['numero'] ?? '';

    // Validation des champs
    if (!empty($name) && !empty($prenom) && !empty($age) && !empty($numero)) {
        try {
            // Préparer la requête d'insertion
            $req = $conn->prepare("INSERT INTO user (Nom, Prenom, Age, Tel) VALUES (:name, :prenom, :age, :numero)");
            $req->execute([
                ':name' => $name,
                ':prenom' => $prenom,
                ':age' => $age,
                ':numero' => $numero
            ]);

            // Redirection ou confirmation
            echo "Les données ont été ajoutées avec succès !";
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion des données : " . $e->getMessage();
        }
    } else {
        echo "Tous les champs sont requis. Veuillez les remplir correctement.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>
