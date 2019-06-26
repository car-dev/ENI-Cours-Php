<?php

if (filter_has_var(INPUT_POST, 'valider')) {
    // simule un traitement normalement masqué à l'utilisateur :
    // enregistrement / modification d'infos dans le magasin de données, etc.
    $filtres = array('valeur' => array('filter' => FILTER_SANITIZE_STRING,
                                       'flags' => FILTER_FLAG_ENCODE_HIGH + FILTER_FLAG_ENCODE_LOW));
    $saisie = filter_input_array(INPUT_POST, $filtres);
    if ($saisie['valeur']) {
        header("location: PRG_confirmation.php?traitement={$saisie['valeur']}");
    } else {
        header("location: PRG_saisie.php?erreur=1");
    }
} else {
    header('location: PRG_saisie.php');
}
