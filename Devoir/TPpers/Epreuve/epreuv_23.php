<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     
</head>
<body>
    <form action="recive_data_23.php" method="POST">
        <fieldset>
            <legend>FORMULAIRE</legend>
            <label for="name">Nom:</label>
            <input type="text" name="nom"><br>
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom"><br>
            <label for="age">Age:</label>
            <input type="number" name="age"><br>
            <select name="langue" id="langue">
                <option value="allemand">allemand</option>
                <option value="français">français</option>
                <option value="ewe">EWE</option>
            </select><br>
            <label for="competence">competence:</label>
            <input type="checkbox" name="competence[]" value="HTML">HTML
            
            <input type="checkbox" name="competence[]" value="JAVA">JAVA
            
            <input type="checkbox" name="competence[]" value="PHP">PHP
        </fieldset><br>
        <button type="submit">Envoyer</button>
        <button type="reset" id="resetButton">Annuler</button>
    </form>
</body>
</html>
<?php

?>