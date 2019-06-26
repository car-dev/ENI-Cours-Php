<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilisation des filtres avec un tableau</title>
    </head>
    <body>
        <div>

            <?php
            echo '<b>Filtrer un tableau de nombres entier</b><br />';
            $valeurs = array('1232', 'abc');
            var_export($valeurs);
            echo '<br /> => ';
            // Même filtre à appliquer à toutes les données,
            // sans indicateur ni option.
            //var_dump(filter_var($valeurs[1], FILTER_VALIDATE_INT));

            var_dump(filter_var_array($valeurs, FILTER_VALIDATE_INT));
            echo '<br />';


            echo '<b>Filtrer un tableau de données diverses (1)</b><br />';
            $valeurs = array
                (
                'age' => 123,
                'taille' => 'abc',
                'mail' => 'contact@olivier-heurtel.fr'
            );
            // Filtre différent mais "simple" (sans indicateur
            // ni option) à appliquer aux données.
            $filtres = array
                (
                'age' => FILTER_VALIDATE_INT,
                'taille' => FILTER_VALIDATE_INT,
                'mail' => FILTER_VALIDATE_EMAIL
            );
            var_dump($valeurs);
            echo '<br /> => ';
            var_dump(filter_var_array($valeurs, $filtres));
            echo '<br />';

            echo '<b>Filtrer un tableau de données diverses (2)</b><br />';
            $valeurs = array
                (
                'age' => 85,
                'taille' => 'abc',
                'mail' => 'contact@olivier-heurtel.fr'
            );
            // Filtre avec options et indicateur à appliquer à une
            // des données.
            $filtre_age = array
                (
                'filter' => FILTER_VALIDATE_INT,
                'options' => array('min_range' => 0, 'max_range' => 100),
                'flags' => FILTER_NULL_ON_FAILURE
            );
            // Noter la mention d'un filtre pour une donnée
            // qui n'existe pas.
            $filtres = array
                (
                'age' => $filtre_age,
                'taille' => FILTER_VALIDATE_INT,
                'poids' => FILTER_VALIDATE_INT, // n'existe pas
                'mail' => FILTER_VALIDATE_EMAIL
            );
            var_export($valeurs);
            echo '<br />';
            var_export(filter_var_array($valeurs, $filtres));
            ?>

        </div>
    </body>
</html>