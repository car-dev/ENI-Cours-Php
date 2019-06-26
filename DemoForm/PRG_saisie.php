<?php
$message = "";
if (isset($_GET['erreur'])){
    $message = "Erreur dans la saisie, veuillez recommencer !";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de saisie</title>
        <style type="text/css">
            h1 { font-family: verdana,arial,helvetica,sans-serif ; font-size: 100% ; margin-top: 20pt }
        </style>
    </head>
    <body>
        <?php if ($message) : ?>
        <h1><?=$message ?></h1>
        <?php endif; ?>
        <form action="PRG_traiteform.php" method="POST">
            Valeur : <input type="text" name="valeur" value="" size="20" />
            <input type="submit" value="Valider" name="valider" />
        </form>
        
    </body>
</html>
