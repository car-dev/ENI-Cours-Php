<?php

//define('CINQ', 5);
        const CINQ = 5;

/**
 * Réalise le produit des deux nombres passés en paramètres.
 * @param mixed $val1
 * @param mixed $val2
 * @return mixed
 */
function produit($val1 = CINQ, $val2 = 2) {
//    echo '<br />Nombre de paramètres reçus : ', func_num_args(),'<br />';
//    echo 'Liste de paramètres reçus : <br /> ';
//    foreach ($params=func_get_args() as $cle=>$param){
//        echo "$cle : $param <br />";
//    }
    return $val1 * $val2;
}

/**
 * Multiplie  le premier paramètre par le second
 * @param type $valeur paramètre passé par référence
 * @param type $multiplicateur
 */
function multiplie(&$valeur, $multiplicateur = 1) {
    $valeur *= $multiplicateur;
    echo 'Valeur multiplié dans la fonction : ', $valeur, '<br />';
}

function somme($val1, $val2) {
    return $val1 + $val2;
}

/**
 * 
 * @param callable $operation fonction à appeler pour réaliser l'operation sur 
 *                            les deux autres valeurs.
 * @param type $valeur1
 * @param type $valeur2
 * @return type
 */
function operation($operation, $valeur1, $valeur2) {
    return $operation($valeur1, $valeur2);
}

/**
 * 
 * @return array
 */
function getTableau(){
    return array("1er élémént","2ème élément","3eme élément");
}