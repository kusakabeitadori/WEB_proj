<?php
$host = 'localhost';
$dbname = 'personne'; 
$username = 'root'; 
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("La connexion a échoué: " . $e->getMessage());
}

$query = "SELECT * FROM user";
$stmt = $conn->query($query);

$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <h2 class="text-center text-2xl font-bold mb-6">Liste des Clients</h2>
        <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-left">Nom</th>
                    <th class="py-2 px-4 text-left">Prénom</th>
                    <th class="py-2 px-4 text-left">Code Postal</th>
                    <th class="py-2 px-4 text-left">Téléphone</th>
                    <th class="py-2 px-4 text-center">Editer</th>
                    <th class="py-2 px-4 text-center">Suppression</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($user as $User) {
                    echo "<tr class='border-t border-gray-200'>";
                    echo "<td class='py-2 px-4'>" . htmlspecialchars($User['Nom']) . "</td>";
                    echo "<td class='py-2 px-4'>" . htmlspecialchars($User['Prenom']) . "</td>";
                    echo "<td class='py-2 px-4'>" . htmlspecialchars($User['Age']) . "</td>";
                    echo "<td class='py-2 px-4'>" . htmlspecialchars($User['Tel']) . "</td>";
                    echo "<td class='py-2 px-4 text-center'><a href='edit.php?id=" . htmlspecialchars($User['id']) . "' class='text-blue-500 hover:text-blue-700'>Editer</a></td>";
                    echo "<td class='py-2 px-4 text-center'><a href='delete.php?id=" . htmlspecialchars($User['id']) . "' class='text-red-500 hover:text-red-700' onclick='return confirm(\"Voulez-vous vraiment supprimer cet utilisateur ?\");'>Supprimer</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
