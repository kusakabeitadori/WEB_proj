<?php
$conn = new PDO("mysql:host=localhost;dbname=personne", 'root', '');

//$reponse = $conn->query('SELECT * FROM user');
//$personnes = $reponse->fetchAll();
//var_dump($personnes);

$req = $conn->prepare("INSERT INTO user (Nom, Prenom, Age, Tel) VALUES ('ABLI','Milla',20,78451236)");
/*$req->execute([
    $_POST['ABLI'],
    $_POST['Milla'],
    $_POST['20'], $_POST['785412']
]); 
*/
?>
