<?php

// inclusion du fichier de chargement automatique des classes
require './config/autoload.php';
try {
    $routeur = new routeur();
    $routeur->routerRequete();
} catch (Exception $exc) {
    $message = $exc->getMessage();
    require './vue/Erreur.php';
}



