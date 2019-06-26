<?php
    if (!isset($_GET['traitement'])){
        header('location: PRG_saisie.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Message d'information, page de résultat, etc. -->
        <h1>Traitement de <?= $_GET['traitement'] ?> effectué !</h1>
    </body>
</html>
