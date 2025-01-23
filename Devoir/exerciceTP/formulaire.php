<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Array.css">
    <title>Formulaire</title>
</head>

<body>
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