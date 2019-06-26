<?php
include 'function.calendrier.php';

if (isset($_SERVER['HTTP_REFERER'])) {
    $cible = explode('?', $_SERVER['HTTP_REFERER'])[0];
} else {
    $cible = 'formulairecalendrier.php';
}

$erreur = 0;

if (filter_has_var(INPUT_POST, 'm') && filter_has_var(INPUT_POST, 'a')) {
    $filtres = array(
        'm' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range' => 1, 'max_range' => 12)
        ),
        'a' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array('min_range' => 2014, 'max_range' => 2024)
        )
    );
    $saisie = filter_input_array(INPUT_POST, $filtres);
    if (!$saisie['m']) {
        $erreur += 2;
    }
    if (!$saisie['a']) {
        $erreur += 4;
    }
} else {
    $erreur = 1;
}
if ($erreur) {
    $cible .= "?erreur=$erreur";
    header("location: $cible");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Calendrier</title>
        <style type='text/css'>
            table#calendrier {
                background-color : transparent ;
                border-spacing  : 0 ;
                border-collapse : collapse ;
            }
            table#calendrier td, table#calendrier th {
                background-color : transparent ;
                text-align : right ;
                padding : 0.2em ;
                width : 1.5em ;
                height : 1.5em ;
                border-right : solid 1px black ;
                border-left : solid 1px black ;
            }
            table#calendrier th {
                text-align : center ;
                background-color : #DDD ;
            }
            table#calendrier td.weekend {
                background-color : #9D9 ;
            }
        </style>
    </head>
    <body>
<?php
echo calendrier($saisie['m'], $saisie['a']);
?>
<br />
<a href=<?=  $cible ?>>Retour</a>

    </body>
</html>