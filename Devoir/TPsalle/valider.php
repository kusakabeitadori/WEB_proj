<?php

$tp=new PDO('mysql:host=localhost;dbname=tp','root','');
if ($_SERVER['REQUEST_METHOD']=='post'){
    $Prenom=$_POST['Prenom'];
    $Nom=$_POST['Nom'];
    $Age=$_POST['Age'];
    $Sexe=$_POST['Sexe'];


$sql="INSERT INTO personne(Prenom,Nom,Age,Sexe) VALUES(:Prenom,Nom,Age,Sexe)";



}


?>