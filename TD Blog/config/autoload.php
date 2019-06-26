<?php

function chargementClasse($classe)
{
    $repertoires = array('config', 'modele', 'controleur', 'outils', 'test') ;
    foreach($repertoires as $repertoire)
    {
        $file = __DIR__ . '/../' . $repertoire . '/' . $classe . '.php';
        //echo $file . "<br>";
        if(file_exists($file)) {
            include_once $file;
            break;
        }
    }
}

spl_autoload_register('chargementClasse');