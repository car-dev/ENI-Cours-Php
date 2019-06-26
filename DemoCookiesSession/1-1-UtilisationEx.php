<?php
// Premier cookie expirant à la fin de la session.
$ok1 = setcookie('prenom','titi');
// Deuxième cookie expirant dans 30 jours.
$ok2 = setcookie('nom','Toto',time()+(30*24*3600));
// Résultat.
if ($ok1 and $ok2) {
   $message = 'Cookies déposés (du moins, a priori)';
} else {
   $message = 'L\'un des cookies n\'a pas pu être déposé';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemple d'utilisation</title>
    </head>
    <body>
    <?php echo $message; ?><br />
    <!-- lien vers la page 2 -->
    <a href="1-2-UtilisationEx.php">Page 2</a>
  </body>
</html>