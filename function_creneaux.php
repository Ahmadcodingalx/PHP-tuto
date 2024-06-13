<?php

function demander_creneau ($message = 'Veuillez entrer un creneau') {
    echo $message . "\n";

    while (true) {
        $ouverture = readline('Heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = readline('Heure de fermeture : ');
        if ($fermeture >= 0 && $fermeture <= 23) {
            break;
        }
    }

    return $creneau = [$ouverture, $fermeture];

}

// $resultat = repond_oui_ou_non('Voulez-vous continuer ?');

// var_dump($resultat);

function demander_creneaux (string $message = 'Veuillez entrer un creneau'): array {
    $continuer = true;
    while ($continuer) {
        $creneaux0[] = demander_creneau();
        $continuer = repond_oui_ou_non('Voulez vous continuez ? ');
    }
    return $creneaux0;
}

$creneaux = demander_creneaux('Entreer vos creneaux');
var_dump($creneaux);