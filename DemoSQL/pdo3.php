<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion MySQLi avec PDO</title>
    </head>
    <body>
        <?php
        echo "<br /><b>Requete avec des paramétres nommés avec PDO :</b><br />";

        // Mise en place de la connexion
        try {
            $dsn = 'mysql:host=localhost;dbname=test';
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            );
            $pdo = new PDO($dsn, 'root', '', $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connexion effectuée avec le driver {$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)} <br />";

            // Préparer la requète
            $statement = 'SELECT * FROM articles WHERE prix < :prix';
            $prep = $pdo->prepare($statement);
            // associer des valeurs au 'placeholders'
            $prix = 25.5;
            
            $prep->bindParam(':prix', $prix);
            // compiler et exécuter la requète
            $prep->execute();
            // Récupérer les données retournées.
            $arrAll = $prep->fetchAll(PDO::FETCH_ASSOC);
            var_dump($arrAll);

            $prix = 30.5;
            $prep->execute();
            // Récupérer les données retournées.
            $arrAll = $prep->fetchAll(PDO::FETCH_ASSOC);
            var_dump($arrAll);
            
            echo "<br /><b>Utilisation de PDOStatement::rowCount :</b><br />";
            echo $prep->rowCount() . ' résultat(s) <br />';

            // Fermer la requéte préparée.
            $prep->closeCursor();
            $prep = NULL;
            
        } catch (PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
        ?>

    </body>
</html>
