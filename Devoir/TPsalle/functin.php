<?php
function produit($nbr) {
  
    $produit = 1;

    foreach ($nbr as $value) {
        $produit *= $value;
    }

    return $produit;
}


$valeurs = [2, 3, 4];
$resultat = produit($valeurs);
echo "Le produit des valeurs est : " . $resultat;
?>
