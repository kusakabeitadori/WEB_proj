<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php</title>
    <link rel="stylesheet" href="dex_un.css">
</head>
<body>
    
    <?php
    $Users = array (
        array ("nom" => "KOUA", "prenom" => "Jean", "age" => 30, "tel" => "1243490"),
        array ("nom" => "Martin", "prenom" => "Marie", "age" => 25, "tel" => "095937321"), 
        array ("nom" => "WADJA", "prenom" => "Norbert", "age" => 19, "tel" => "114394455"),
        array ("nom" => "kevin", "prenom" => "Pierre", "age" => 12, "tel" => "1148744455"),
        array ("nom" => "zak", "prenom" => "Patrick", "age" => 13, "tel" => "192344455"),
        array ("nom" => "david", "prenom" => "rich", "age" => 10, "tel" => "140924455"),
        array ("nom" => "marco", "prenom" => "jean", "age" => 60, "tel" => "8948334455"),
        array ("nom" => "blaise", "prenom" => "pikolo", "age" => 65, "tel" => "11263455"),
        array ("nom" => "tom", "prenom" => "Paul", "age" => 44, "tel" => "1891334455"),
        array ("nom" => "charle", "prenom" => "Paul", "age" => 23, "tel" => "196334455")
    );
   
    ?>
     <session class="table">
    <?php
    echo "<h2>Tableau des utilisateurs</h2>";
    echo "<table border='2'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Âge</th><th> Téléphone </th></tr>";
    foreach ($Users as $user) {
        echo "<tr>";
        echo "<td>" . $user['nom'] . "</td>";
        echo "<td>" . $user['prenom'] . "</td>";
        echo "<td>" . $user['age'] . "</td>";
        echo "<td>" . $user['tel'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </session>
   
</body>
</html>
