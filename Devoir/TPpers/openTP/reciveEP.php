<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" required><br>
    <label for="prenom_etud">Prenom :</label>
    <input type="text" name="prenom" required><br>
    <label for="sexe">Sexe:</label>
    <label for="sexe">Homme</label>
    <input type="radio" name="sexe" required>
    <label for="sexe">Femme</label>
    <input type="radio" name="sexe" required><br>
    <label for="date_na">Date de naissance:</label>
    <input type="date" name="date_de_naissance" required><br>
    <label for="lieu_na">Lieu de naissance : </label>
    <input type="text" name="lieu" required><br>
    <label for="nationalite">Nationalite:</label>
    <select name="nationalite" id="nationalite">
        <option value="Togolais">Togolaise</option>
        <option value="Americain">Americaine</option>
        <option value="chinois">Chinoise</option>
    </select><br> 
    <label for="contact_etud">Contact:</label>
    <input type="number" name="contact" required><br>
    <button>send</button>
</body>
</html>