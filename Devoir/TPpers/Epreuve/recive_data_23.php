<?php
$nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$age = $_POST['age'];
$competence = $_POST['competence'];
$langue =$_POST['langue'];
echo "Bnienvenue sur notre page. Voici vos informations";echo"<br>";
echo "Nom: " . $nom;echo"<br>";
echo "prenom: " . $Prenom;echo"<br>";
echo "AGE : " . $age;echo"<br>";
echo "Langue : " . $langue;echo"<br>";
echo "Voici avec les competences suivantes";echo"<br>";
// $competence=explode(",",$_POST['competence']);
foreach($competence as $competences){echo "<li>" .$competences."</li>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong><?php echo "Nom: " . $nom;echo"<br>"; ?></strong>
</body>
</html>
