<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fonctions utiles</title>
    </head>
    <body>
        <h1>Changements de casse</h1>
        <?php
        $x = 'NOM forMatEur';
        echo "strtolower('$x') = " . strtolower($x) .  '<br />';
        echo "strtoupper('$y') = " . strtoupper($x) . '<br />';
        echo "ucwords('$y') = " . ucwords($x) . '<br />';
        ?>
        <h1>Formatage de valeurs</h1>
        <?php
        echo 'Mise en forme d\'une date : ' . sprintf('%02d/%02d/%04d', 1, 1, 2001) . '<br />';
        ?>
        <h1>Mise en forme de numériques</h1>
        <?php
        $x = 1234.567;
        echo "number_format($x) = " . number_format($x) . '<br />';
        echo "number_format($x,1) = " . number_format($x, 1) . '<br />';
        echo "number_format($x,2,',',' ') = " . number_format($x, 2, ',', ' ') . '<br />';
        ?>
        <h1>Recherches de positions</h1>
        <?php
        $mail = "cnicolas@eni-ecole.fr";
        // strrpos
        $position = strrpos($mail, '@');
        echo "@ est à la position $position dans $mail<br />";

        // Occurrence non trouvée
        $position = strpos($mail, 'test');
        if ($position === FALSE) { // bon test : ===
            echo "'test' est introuvable dans $mail<br />";
        } else {
            echo "'test' est à la position $position dans $mail<br />";
        }
        ?>
    </body>
</html>
