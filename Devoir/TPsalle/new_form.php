<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <label for="Prenom">Prenom</label>
        <input type="text"name="Prenom"id="Prenom">

        <label for="Nom">Nom</label>
        <input type="text"name="Nom"id="Nom">

        <label for="Age">Age</label>
        <input type="int"name="number"id="Age">

        <div>
            <label for="sexe">Sexe</label>
                <label for="F">
                    <span>F</span>
                    <input type="radio" name="sexe" value="F">
                </label>
                <label for="M">
                    <span>M</span>
                    <input type="radio" name="sexe" value="M">
                </label>
            </div>
        

        <button type="submit"id="Valider">valider</button>
        </fieldset>




    </form>
</body>
</html>