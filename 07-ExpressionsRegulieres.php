<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Expressions régulières</title>
    </head>
    <body>
        <?php
        // Vérification qu'une chaine à une structure conforme à celle d'une
        // date en français [J]J/[M]M/AAAA et récupérer les 3 composants jour, mois, année.
        $motif = '#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})$#';

        // Tableau contenant les chaines à tester :
        $dates[] = '1/4/2014'; // OK
        $dates[] = '10/04/2014'; // OK
        $dates[] = '10/04/14'; // KO
        // Utilisation de preg_match :
        foreach ($dates as $date) {
            $ok = (preg_match($motif, $date, $resultat) > 0);
            if ($ok) {
                echo '<br />' . $date . " est valide et <br /> jour : " . $resultat[1] .
                "<br /> mois " .
                $resultat[2] . ", <br />année " . $resultat[3];
            } else {
                echo '<br />' . $date . ' : date non valide';
            }
        }


        // Réorganisation d'une chaine de caractère avec preg_replace :
        // JJ/MM/AAAA au format AAAA-MM-JJ
        $avant = "01/04/2014" ;
        $apres = preg_replace($motif, "$3-$2-$1", $avant) ;
        echo '<br />' . $avant . ' > ' . $apres;
        
        ?>
    </body>
</html>













