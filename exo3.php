<?php 

    // Vous parcourez tout les nombre
    // de 1 à 100.

    // Vous affichez "Fizz" si le nombre est multiple de 3
    // Vous affichez "Buzz" si le nombre est multiple de 5
    // Vous affichez "FizzBuzz" si le nombre est multiple de 3 et 5
    // Sinon vous affichez le nombre

    function multiple($a, $b) {
        return $a % $b === 0;
    }

    for($i = 1; $i <= 100; $i++){
        if (multiple($i, 3)) {
            echo "Fizz";
        } 
        if (multiple($i, 5)) {
            echo "Buzz";
        } 
        if(!multiple($i, 3) && !multiple($i, 5)) {
            echo $i;
        }
        echo "<br />";
    }

?>