<?php
// Déclaration de variables qui seront utilisées plus loin.
// Cette section de code PHP ne génère par de sortie dans la page
// HTML (pas d’appel à echo).
$nom = 'formateur'; // nom de l'utilisateur
$titre_page = 'Titre de la page ...'; // titre de la page
$aujourdhui = date("d/m/Y"); // date du jour
$heure = date("H:i:s"); // heure 
// A Utiliser plutot à l'intérieur d'une classe
        const UNE_AUTRE_CONSTANTE = 'PHP 5.3';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $titre_page; ?>
        </title>
    </head>
    <body>
        <p>
            <?php
            // Etape 1 ----------------------------
            /* Affichage du nom de l'utilisateur.
             * * Les tags de mise en gras du nom (<B>) et de retour à la ligne 
             * * (<br />) sont inclus dans la chaîne envoyée par le echo.
             */
            echo "Bonjour <b>$nom</b> !<br />";
            // Affichage de la date et de l'heure
            echo "Nous sommes le $aujourdhui ; il est $heure.<br>";
            // Définir une constante (dont le nom est par défaut sensible à la casse) : 
            // define : à utiliser plutôt à l'extérieur d'une classe.
            define('CONSTANTE', 'ENI ECOLE');
            // Afficher la valeur de CONSTANTE (=> OK).
            echo 'CONSTANTE = ' . CONSTANTE . '<br />';
            // Afficher la valeur de constante (=> vide)
            echo 'constante = ' . constante;
            echo ' => interpr&eacute;t&eacute; en litt&eacute;ral<br />';
            // Utilisation du mot-clé const (depuis la version 5.3)
            echo 'UNE_AUTRE_CONSTANTE = ' . UNE_AUTRE_CONSTANTE, '<br>';
            // Etape 2 ----------------------------
            $ok = defined('constante');
            if ($ok) {
                echo 'CONSTANTE est définie.<br />';
            } else {
                echo 'CONSTANTE n\'est pas définie.<br />';
            }
            // Etape 3 ----------------------------
            var_dump($nom);
            //Conversion de type implicite : Chaine de caractère => entier
            $nom = 3;
            var_dump($nom);

            if (empty($nom)) {
                echo '$nom est déclarée et vide.';
            } else {
                echo '<br />$nom est déclarée et la valeur non vide.';
            }

            $x = "1abc";
            settype($x, 'integer');
            echo "<br />1abc converti en entier " . $x;
            $y = "abc1";
            settype($y, 'integer');
            echo "<br />abc1 converti en entier " . $y;
            
            echo '<br>';
            $__élément1 = "Element 1";
            echo "\$__élément1 : $__élément1";
            echo '<br>';
            $fruit = 'pomme';
            echo "Les ${fruit}s sont des fruits";
            ?>
        </p>
    </body>
</html>
