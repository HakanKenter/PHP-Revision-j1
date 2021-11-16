<?php

/**##############
 * # Les CONDITIONS
 * ############# */
 
// Les structures conditionnelles
if(true) { }
elseif(true) { }
else { }

// Les types de conditions
$number = 5;
if( $number >= 5) { }
if( $number <= 5) { }
if( $number != 5) { }
if( $number == 5) { }
if( $number !== 5) { }
if( $number === 5) { }
if( $number > 5) { }
if( $number < 5) { }

// Les opérateur logiques
if( $number < 10 && $number > 5) {}
if( $number < 10 || $number > 5) {}

/**##############
 * # Les SWITCHES
 * ############# */

switch($number) {
    case 0:
        /* qqchose */
        break;
    case 1:
        /* qqchose */
        break;
    case 2:
        /* qqchose */
        break;
    default:
        /* qqchose */
}

/**##############
 * # Les BOUCLES
 * ############# */

// La boucle WHILE
while(true) { break; }

// La boucle for
for($i = 0; $i < 10; $i++) {}

// La boucle foreach
$array = [0,1,2];

foreach($array as $elm){
    echo "$elm <br />";
}

$associtativ = [
    "key1" => 1,
    "key2" => 2 
];

foreach($associtativ as $key =>$value) {
    echo "$key: $value <br />";
}

// La boucle do...while 
// (execute une seul fois et si la condition est vérifié elle continue)
do {
    echo 'coucou <br />';
    break;
} while(false);