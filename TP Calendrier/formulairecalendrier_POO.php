<?php
include 'autoload.inc';

$message = "";
$couleur = 'green';
if (filter_has_var(INPUT_GET,'erreur')) {
    $erreur = filter_input(INPUT_GET,'erreur',FILTER_VALIDATE_INT);
    
    if ($erreur){
      
      $message = "Veuillez saisir ";
      if ($erreur & 2){
        $message .= "le mois ";
        $couleur = 'red';
      }
      if ($erreur & 4){
        $message .= "l'année ";
        $couleur = 'red';
      }
      $message.=" avant de valider";
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Choix d'un mois et d'une année</title>
        <style>
          #erreur {
            color: <?=$couleur?>;
          }
        </style>
    </head>
    <body>
        <div id='page'>
            <h1>Choix d'un mois et d'une année</h1>
 <?php
            
            $myform = new FormPlus("calendrier.php","Saisir le mois et l'année","post");
            $myform->setText("m","N° du mois [1 à 12]");
            $myform->setText("a","Année [4 chiffres]");
            //$myform->setCase('nom', 'Libelle', 'c');
            $myform->setSubmit('ok','Voir le calendrier');
            echo $myform->getForm();
            
?>
            <span id="erreur"><?= $message ?></span>
    </div>
</body>
</html>
