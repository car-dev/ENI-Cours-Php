<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemple d'utilisation 2</title>
    </head>
    <body>
    <?php
    if ( isset($_COOKIE["prenom"]) ) {
      echo '$_COOKIE["prenom"] = ' . $_COOKIE['prenom'] .'<br />';
    } else {
      echo '$_COOKIE["prenom"] = <br />';
    }
    if ( isset($_COOKIE["nom"]) ) {
      echo '$_COOKIE["nom"] = ' . $_COOKIE['nom'] . '<br />';
    } else {
      echo '$_COOKIE["nom"] = <br />';
    }
    ?>
  </body>
</html>