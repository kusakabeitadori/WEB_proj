<?php
    include 'pdo.php'; // Assurez-vous que 'pdo.php' contient la connexion à la base de données
    
    $query = "SELECT Nom, Prenom, Age, Tel FROM user";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $user = $statement->fetchAll(PDO::FETCH_ASSOC); // Utilisation correcte de $statement
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Liste des Utilisateurs</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($user as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['Nom']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Prenom']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Age']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Tel']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
