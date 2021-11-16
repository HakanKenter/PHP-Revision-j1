<?php 
    $array = [10, 20, 30, 40, 50];
    // foreach($array as $value) {
    //     if( $value > 35){
    //         echo $value . "<br />"; 
    //     }
    // }

    // ex: factorielle de 5: 1*2*3*4*5; 
    // Retourne le Factorielle de l'element en paramètre
    function fact($n){ 
        $f = 1; 
        for ($i = 1; $i <= $n; $i++){ 
            $f = $f * $i; 
        } 
        return $f; 
    } 

    foreach($array as $value) {
        echo fact($value) . "<br />"; 
    }

?>