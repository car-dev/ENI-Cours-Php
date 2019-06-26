<?php
function chargerClasse($nom){
    $nomFichier = 'classes/'.$nom.'.class.inc';
    include_once $nomFichier;
}

spl_autoload_register('chargerClasse');
