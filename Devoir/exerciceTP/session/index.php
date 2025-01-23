<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
$_SESSION["nom"]="Norbert";
$_SESSION["color"]="yellow";
echo $_SESSION["color"];
echo $_SESSION["nom"];
//session_destroy(); ?>

<div class="form">
        <form action="save.php" method="POST">
            <h1>Entrez vos informations</h1>
            <div class="input-group">
                <label for="lastname">Lastname :</label>
                <input type="text" name="Lastname" id="lastname" placeholder="Entrez votre nom">
            </div>
            <div class="input-group">
                <label for="firstname">Firstname :</label>
                <input type="text" name="Firstname" id="firstname" placeholder="Entrez votre prénom">
            </div>
            <div class="input-group">
                <label for="age">Age :</label>
                <input type="number" name="age" id="age" placeholder="Sélectionner votre age ">
            </div>
            <div class="input-group">
                <label for="Phone">Phone :</label>
                <input type="text" name="phone" id="phone" placeholder="Entrez votre numéro de téléphone">
            </div>
            <button type="submit">Valider !</button>
        </form>
</div>        
</body>
</html>