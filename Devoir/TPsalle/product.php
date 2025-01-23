
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $connexion = new mysqli('localhost', 'root', '', 'formulaire');

    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    $result = $connexion->query("SELECT * FROM personnes");
    $utilisateurs = $result->fetch_all(MYSQLI_ASSOC);
    ?>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Âge</th>
                <th>Téléphone</th>
                <th>Modifier</th>
                <th>Effacer</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($utilisateurs as $utilisateur) : ?>
        <tr>
            <td><?= htmlspecialchars($utilisateur["Nom"]) ?></td>
            <td><?= htmlspecialchars($utilisateur["Prenom"]) ?></td>
            <td><?= htmlspecialchars($utilisateur["Age"]) ?></td>
            <td><?= htmlspecialchars($utilisateur["Tel"]) ?></td>
            <td>
                <a href="edit.php?id=<?= $utilisateur["id"] ?>">Editer</a>
            </td>
            <td>
                <a href="delete.php?id=<?= $utilisateur["id"] ?>">
				<form method="post" action="delete.php" style="display:inline;">
					<input type="hidden" name="id" value="<?= $utilisateur['id'] ?>">
					<button type="submit">Supprimer</button>
				</form>
				</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>