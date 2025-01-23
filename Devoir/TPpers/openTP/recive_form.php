<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voici les informations sur votre nouveau chef:</h1>
</body>
</html>
<?php
echo "NOM : " . $_GET['nom'] . '<br>';
//echo "Voici l'email du candidat " . $_GET['nom'] . "avec pour prenom " . $_GET['prenom'] . " avec pour age " . $_GET['Age'] . $_GET['Email'];
/*if(isset($_GET['nom']) || isset($_GET['prenom']) || isset($_GET['Age']) || isset($_GET['Email']))
{
echo "NOM : " . $_GET['nom'] . '<br>';
echo "PRENOM : " . $_GET['prenom'] . '<br>';
echo "AGE: " . $_GET['Age'] . '<br>';
echo "EMAIL: " . $_GET['Email'] . '<br>';
}
else{
    echo "VEILLEZ ENTREZ LES DONNEES BIEN DEMANDER DANS CE FORMULAIRE S'IL VOUS PLAIT ";
}*/

?>