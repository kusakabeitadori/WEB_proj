<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple PHP et MySQL</title>
    <link rel="stylesheet" href="Array.css">
</head>
<body>
    <?php
    // Connexion à la base de données
    $host = "localhost"; 
    $dbname = "formulaire"; 
    $username = "root"; 
    $password = ""; 

    try {
        $pdo = new PDO("mysql:host='localhost';dbname=formulaire", 'root');
        
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }

    // Requête pour récupérer les utilisateurs
    try {
        $query = "SELECT * FROM users";
        $conn = $pdo->query($query);
    } catch (PDOException $e) {
        die("Erreur lors de la récupération des utilisateurs : " . $e->getMessage());
    }
    ?>
    <section class="table">
        <h2>Liste des utilisateurs</h2>
        <table border="2">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['firstname']; ?></td>
                        <td><?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><?php echo $user['telephone']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $user['id']; ?>">Éditer</a> |
                            <a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Aucun utilisateur trouvé</td>
                </tr>
            <?php endif; ?>
        </table>
    </section>
</body>
</html>
