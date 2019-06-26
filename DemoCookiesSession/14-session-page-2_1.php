<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Session - Page 2</title>
  <meta charset="UTF-8" />
</head>
  <body>
    <div>

    <?php
    // Affichage.
    echo '$_SESSION[\'prenom\'] =',
         isset($_SESSION['prenom'])?$_SESSION['prenom']:'',
         '<br />';
    echo '$_SESSION[\'informations\'][\'nom\'] =',
         isset($_SESSION['informations']['nom'])?
                     $_SESSION['informations']['nom']:'',
         '<br />';
             echo 'session_id() = ',session_id(),'<br />';

    ?>

    </div>
  </body>
</html>