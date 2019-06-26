<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilisation des filtres (exemple 1)</title></head>
    <body>
        <div>

            <?php
            echo "<b>Filtrer un nombre entier</b><br />";
            $valeurs = array('123', 'abc', '1.2', NULL);
            foreach ($valeurs as $x) {
                echo "$x => ";
                var_dump(filter_var($x, FILTER_VALIDATE_INT));
                echo "<br />";
            }
            echo "<b>+ NULL au lieu de FALSE en cas d'erreur</b><br />";
            $x = 'abc';
            // indicateur passé en option directement
            $options = FILTER_NULL_ON_FAILURE;
            echo "$x => ";
            var_export(filter_var($x, FILTER_VALIDATE_INT, $options));
            echo "<br />";
            echo "<b>Filtrer un nombre entier (0-100)</b><br />";
            // options du filtre définies via un tableau associatif
            $options = array
                        (
                        'options' => array('min_range' => 0, 'max_range' => 100)
            );
            $valeurs = array('0', '100', '101');
            foreach ($valeurs as $x) {
                echo "$x => ";
                var_export(filter_var($x, FILTER_VALIDATE_INT, $options));
                echo "<br />";
            }
            echo "<b>+ NULL au lieu de FALSE en cas d'erreur</b><br />";
            // indicateur ajouté dans le tableaux des options
            $options = array
                        (
                        'options' => array('min_range' => 0, 'max_range' => 100),
                        'flags' => FILTER_NULL_ON_FAILURE
            );
            $x = '101';
            echo "$x => ";
            var_export(filter_var($x, FILTER_VALIDATE_INT, $options));
            echo "<br />";
            echo "<b>Filtrer avec une expression régulière</b><br />";
            $regexp = '<^[0-9]{2}/[0-9]{2}/[0-9]{4}$>';
            $options = array
                        (
                        'options' => array('regexp' => $regexp)
            );
            $valeurs = array('01/01/2007', '01/01/07');
            foreach ($valeurs as $x) {
                echo "$x => ";
                var_export(filter_var($x, FILTER_VALIDATE_REGEXP, $options));
                echo "<br />";
            }
            ?>

        </div>
    </body>
</html>
