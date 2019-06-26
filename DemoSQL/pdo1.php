<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion MySQLi avec PDO</title>
    </head>
    <body>
        <?php
        /*
         * Etablir une  connexion PDO
         */
        try {
        $dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
        $pdo = new PDO($dsn, 'root', '', $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion effectuée avec le driver {$pdo->getAttribute(PDO::ATTR_DRIVER_NAME)} <br />";
        $query = 'SELECT * FROM articles where identifiant = 1';
        $arr = $pdo->query($query)->fetch(PDO::FETCH_OBJ);
        var_dump($arr);
        echo '<br />';
        $query = 'SELECT identifiant as id, libelle, prix FROM articles where prix < 40';
        $stmt = $pdo->query($query);
        $arrAll = $stmt->fetchAll(PDO::FETCH_NUM);
        var_dump($arrAll);
        $stmt->closeCursor();

        $query = 'DELETE FROM articles WHERE prix < 10;';
        echo "Nombre de lignes supprimées : " . $rowcount = $pdo->exec($query);
        
        } catch (PDOException $e) {
            
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
            
        }

        ?>

    </body>
</html>
