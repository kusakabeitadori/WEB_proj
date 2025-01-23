<?php
$connexion = new mysqli('localhost', 'root', '', 'formulaire');

if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $connexion->prepare("SELECT * FROM personnes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $utilisateur = $result->fetch_assoc();
    } else {
        echo "Utilisateur introuvable !";
        exit;
    }
} else {
    echo "Aucun ID fourni !";
    exit;
}

$connexion->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un utilisateur</title>
</head>
<body>
    <form method="post" action="update.php">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?= htmlspecialchars($utilisateur['id']) ?>">
        <label>Nom : <input type="text" name="nom" value="<?= htmlspecialchars($utilisateur['nom']) ?>"></label><br>
        <label>Prénom : <input type="text" name="prenom" value="<?= htmlspecialchars($utilisateur['prenom']) ?>"></label><br>
        <label>Âge : <input type="number" name="age" value="<?= htmlspecialchars($utilisateur['age']) ?>"></label><br>
        <label>Téléphone : <input type="text" name="telephone" value="<?= htmlspecialchars($utilisateur['telephone']) ?>"></label><br>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>