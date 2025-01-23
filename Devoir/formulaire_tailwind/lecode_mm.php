<?php
// Connection à la base de données
$host = 'localhost';
$dbname = 'gestion_utilisateurs';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Gestion des requêtes POST pour ajouter/mettre à jour les données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // Mise à jour des données existantes
        $stmt = $pdo->prepare("UPDATE utilisateurs SET nom = ?, prenom = ?, telephone = ? WHERE id = ?");
        $stmt->execute([$_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['id']]);
    } else {
        // Ajout de nouvelles données
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, telephone) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['nom'], $_POST['prenom'], $_POST['telephone']]);
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Gestion des requêtes GET pour supprimer une entrée
if (isset($_GET['delete'])) {
    $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
    $stmt->execute([$_GET['delete']]);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Récupération des données
$stmt = $pdo->query("SELECT * FROM utilisateurs");
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Gestion des Utilisateurs</h1>

        <!-- Formulaire -->
        <form method="POST" class="bg-white p-6 rounded shadow-md mb-6">
            <input type="hidden" name="id" id="id">
            <div class="mb-4">
                <label for="nom" class="block text-gray-700">Nom</label>
                <input type="text" name="nom" id="nom" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700">Téléphone</label>
                <input type="text" name="telephone" id="telephone" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
        </form>

        <!-- Tableau des utilisateurs -->
        <table class="table-auto w-full bg-white rounded shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Nom</th>
                    <th class="px-4 py-2">Prénom</th>
                    <th class="px-4 py-2">Téléphone</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur): ?>
                    <tr class="border-t">
                        <td class="px-4 py-2"><?php echo htmlspecialchars($utilisateur['nom']); ?></td>
                        <td class="px-4 py-2"><?php echo htmlspecialchars($utilisateur['prenom']); ?></td>
                        <td class="px-4 py-2"><?php echo htmlspecialchars($utilisateur['telephone']); ?></td>
                        <td class="px-4 py-2 flex space-x-2">
                            <button onclick="editUser(<?php echo htmlspecialchars(json_encode($utilisateur)); ?>)" class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</button>
                            <a href="?delete=<?php echo $utilisateur['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        function editUser(utilisateur) {
            document.getElementById('id').value = utilisateur.id;
            document.getElementById('nom').value = utilisateur.nom;
            document.getElementById('prenom').value = utilisateur.prenom;
            document.getElementById('telephone').value = utilisateur.telephone;
        }
    </script>
</body>
</html>
