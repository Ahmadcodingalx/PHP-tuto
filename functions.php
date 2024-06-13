<?php

function bonjour1 ($prenom = null, $nom = null) {
    if ($nom === null) {
        return "Bonjour\n";
    }
    return 'Bonjour ' . $prenom . " " . $nom . "\n";
}

$nom = 'MAMAM MOROU ';

function bonjour ($prenom = null) {
    global $nom;
    if ($nom === null) {
        return "Bonjour\n";
    }
    return 'Bonjour ' . $prenom . " " . $nom . "\n";
}

// // bonjour('jean');
// // bonjour('ahmad');

// $salutation = bonjour('ahmad');

// echo $salutation;

// echo bonjour('ahmad');

function repond_oui_ou_non (?string $message = null): bool {
    while (true) {
        $reponse = readline($message . ' Oui => o ou Non => n : ');
        if ($reponse === 'o') {
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
}

require_once 'function_creneaux.php';