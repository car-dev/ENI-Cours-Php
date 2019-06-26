<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Modification de mon php.ini à travers PHP :
        ini_set('date.timezone', 'Europe/Paris');
        setlocale(LC_TIME, 'fr_FR', 'fra');
        echo "Date au format JJ/MM/AAAA : " . date('d/m/Y') . "<br />";
        echo "<br /> " . date("H:i:s");

        echo "<br />Unix a fêté sa milliardième seconde le " .
        date("d/m/Y H:i:s", 1000000000);

        // Construction d'un timestamp :
        echo "<br />" . mktime(11, 45, 30, 4, 1, 2014);
        echo "<br />" . date("d/m/Y H:i:s", mktime(11, 45, 30, 4, 1, 2014));
        echo "<br />", strftime('%A');

        // Autres exemples de manipulation des dates.
        var_dump(date("n"));
        var_dump(date("Y"));
        $jour1 = mktime(0, 0, 0, date('n'), 1, date('Y'));
        var_dump(strftime('%d %B %Y', $jour1));
        var_dump(date('N', $jour1));
        var_dump(date('t', $jour1));
        ?>
    </body>
</html>