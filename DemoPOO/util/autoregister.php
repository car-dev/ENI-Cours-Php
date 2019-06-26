<?php

function chargementClasse($nomClasse){
    $filename = 'classes/'.$nomClasse.'.class.php';
    if (file_exists($filename)){
            include_once $filename;
    } 
//    else {
//        die("Fichier de classe $nomClasse introuvable.");
//    }
}

spl_autoload_register('chargementClasse');
