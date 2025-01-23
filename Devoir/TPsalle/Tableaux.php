<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo php</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $Users = array(
            array(
                "Nom" => "YUJI",
                "Prenom" => "Itadori",
                "Age" => 15,
                "Tel" => 91245447,
            ),
            array(
                "Nom" => "KODJO",
                "Prenom" => "Max",
                "Age" => 15,
                "Tel" => 91245447,
            ),
            array(
                "Nom" => "KODJO",
                "Prenom" => "Max",
                "Age" => 15,
                "Tel" => 91245447,
            ),
            array(
                "Nom" => "KODJO",
                "Prenom" => "Max",
                "Age" => 15,
                "Tel" => 91245447,
            ),
            array(
                "Nom" => "KODJO",
                "Prenom" => "Max",
                "Age" => 15,
                "Tel" => 91245447,
            ),
        );
    ?>
    <session class="table">
        <?php
        echo "<h2>Tableau des utilisateurs</h2>";
        echo "<table border='2'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Âge</th><th>Téléphone</th></tr>";
        foreach ($Users as $user) {
            echo "<tr>";
            echo "<td>" . $user['Nom'] . "</td>";
            echo "<td>" . $user['Prenom'] . "</td>";
            echo "<td>" . $user['Age'] . "</td>";
            echo "<td>" . $user['Tel'] . "</td>";
  

            echo "</tr>";
        }
        echo "</table>";
        ?>
    </session>
</body>
</html>
