
<?php

// declare(strict_types=1);

/* 

--------------------------------------------------------------

$grosMots = ['voyou', 'con', 'merde', 'fou'];

$phrase = readline("Entrer une phrase : ");

foreach ($grosMots as $grosMot) {

    $lettrePrem = substr($grosMot, 0, 2);

    $asterisque[] = $lettrePrem . str_repeat('*', (strlen($grosMot) - 2));
}

$phrase2 = str_replace($grosMots, $asterisque, $phrase);
$phrase3 = strtolower($phrase);

if ($phrase !== $phrase2) {
    $phrase = 'Message supprimer';
    // echo strtolower($phrase);
    echo $phrase;
    exit;
} elseif ($phrase !== $phrase3) {
    echo 'Attention, pas de majiscule';
    exit;
}


// foreach ($grosMots as $grosMot) {
    
//     $replace = str_repeat('*', strlen($grosMot));

//     $phrase = str_replace($grosMot, $replace , $phrase);
// }

echo $phrase;

-----------------------------------------------------------------

*/

// include 'functions.php';
require_once 'functions.php';
require_once 'functions_creneaux.php';

var_dump(repondre_oui_ou_non('test'));

echo "zdfsfzesfde";