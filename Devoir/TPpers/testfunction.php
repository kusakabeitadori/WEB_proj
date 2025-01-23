<?php
$chaine_car=" salut chef c'etait juste pour tester ";
echo strlen($chaine_car) . '<br/>';
/*

$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');

echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' .
$annee . 'et il est ' . $heure. ' h ' . $minute;
*/
function Dire_bonjour($nom)
{
$affiche =  "bonjour " . $nom;
return $affiche;

}
echo Dire_bonjour("Norbert");

?>