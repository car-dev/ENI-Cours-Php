<?php
// Dépôt d'un cookie nommé "nom" contenant
// la valeur "Test Formateur" et expirant à la fin de
// la session.
$ok = setcookie('nom', 'Test Formateur');
// Idem mais expirant à la date du jour (time() en secondes)
// plus 30 fois 24 fois 3600 secondes (soit 30 jours).
$ok = setcookie('nom', 'Test Formateur 2', time() + (30 * 24 * 3600));
// Suppression du cookie nommé 'nom'.
$ok = setcookie('nom');﻿
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Initialisation d'un cookie</title>
    </head>
    <body>


    </body>
</html>