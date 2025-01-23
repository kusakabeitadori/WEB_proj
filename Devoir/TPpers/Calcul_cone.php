<?php
function calcul_du_volume($rayon,$hauteur)
{
    $volume =$rayon*$rayon*3.14*$hauteur*(1/3);
    return $volume;
}
$resultat = calcul_du_volume(3,5);
echo "le calcul du volume de votre est : " . $resultat;
?>vn hhje