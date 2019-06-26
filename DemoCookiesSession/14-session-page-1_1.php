<?php
session_start();
// Enregistrer deux informations dans la session.
$_SESSION['prenom'] = 'prenom';
// On enregistre un tableau ...
$_SESSION['informations'] =  
      array('prenom'=>'titi','nom'=>'Toto');
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Session - Page 1</title>
  <meta charset="UTF-8" />
  </head>
  <body>
    <div><a href="14-session-page-2_1.php">Page 2</a></div>
  </body>
</html>