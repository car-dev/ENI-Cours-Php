<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion MySQLi avec PDO</title>
    </head>
    <body>
        <?php
        echo "<br /><b>Requête paramétrée avec PDO :</b><br />";

        try {
            // Mise en place de la connexion
            $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
            $pdo = new PDO($dsn, 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connexion effectuée avec le driver {$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)} <br />";

            // Préparer la requête
            $sql = 'SELECT * FROM articles WHERE prix < ?';
            $statement = $pdo->prepare($sql);
            //var_dump($statement);
            // associer des valeurs au 'placeholders'
            $statement->bindValue(1, 30.5, PDO::PARAM_INT);
            // compiler et exécuter la requête
            $statement->execute();
            $arrAll = $statement->fetchAll(PDO::FETCH_ASSOC);
            var_dump($arrAll);

            $statement->closeCursor();
            $statement = NULL;
            
        } catch (PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
        ?>

    </body>
</html>
