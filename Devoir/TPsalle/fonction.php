<?php
function produit($nbre){
    $produit=1;
    foreach($nbre as $value){
        $produit=$produit*$value;

}





$valeurs=[12,3,4];
$resultat=produit($valeurs);
echo "le produit des valeurs est ".$resultat;

}
?>