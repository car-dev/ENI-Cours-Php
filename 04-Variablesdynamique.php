<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variable dynamique</title>
    </head>
    <body>
        <div>

            <?php
            $une_variable = 10;
            
            $nom_variable = 'une_variable';
            
            echo '$une_variable = ' . $une_variable . '<br />';
            echo '$nom_variable = ' . $nom_variable . '<br />';
            echo '$$nom_variable = ' . $$nom_variable . '<br />';
            ?>

        </div>
    </body>
</html>