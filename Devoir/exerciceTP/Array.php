<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp</title>
    <link rel="stylesheet" href="Array.css">
</head>
<body>
    <?php
    $Users = array(
        array("firstname" => "WADJA", "lastname" => "Norbert", "age" => 18, "telephone" => "93256799"),
        array("firstname" => "Reine", "lastname" => "Marie", "age" => 20, "telephone" => "79043217"), 
        array("firstname" => "GOJO", "lastname" => "Saturo", "age" => 23, "telephone" => "99873421"),
        array("firstname" => "yuji", "lastname" => "itaderi", "age" => 17, "telephone" => "71734532"),
        array("firstname" => "LaBelle", "lastname" => "LaMeuf", "age" =>20, "telephone" => "90876543"),
    );
    ?>

    <section class="table">
        <h2>Utilisateurs</h2>
        <table border="2">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($Users as $user): ?>
                <tr>
                    <td><?php echo $user['firstname']; ?></td>
                    <td><?php echo $user['lastname']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                    <td><?php echo $user['telephone']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user['firstname']; ?>">Editer</a> |
                        <a href="delete.php?id=<?php echo $user['firstname']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>
</html>
