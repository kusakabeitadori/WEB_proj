<?php
    function prod($tab) {
        $resultat =1;
        $n =0;
        foreach($tab as $element){
            $resultat = $resultat * $element;
            $n = $n + 1;
        }
        print("Le nombre d'élements du tableau est : ".$n);
        return $resultat;
    }

    $tableau = array(2,5,6);
    print(prod($tableau));

  function som($tab){
    $result = 0;

    foreach($tab as $element){
        $result = $result + $element;
    }

    return $result;
  }
?>