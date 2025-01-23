<?php

$host = 'localhost';
$dbname = 'personne'; 
$username = 'root'; 
$password = ''; 

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    die("Erreur de connexion : " . $e->getMessage());
}

$query = "SELECT * FROM user";
$stmt = $pdo->query($query);

$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <h2 style="text-align:center;">Liste des Clients</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Code Postal</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Utilisation de foreach pour parcourir les clients
            foreach ($user as $User) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($User['Nom']) . "</td>";
                echo "<td>" . htmlspecialchars($User['Prenom']) . "</td>";
                echo "<td>" . htmlspecialchars($User['Age']) . "</td>";
                echo "<td>" . htmlspecialchars($User['Tel']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
