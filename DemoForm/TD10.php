<?php
// Effet de l'include sur le tampon de sortie.
include 'include.inc';
// Affecter une valeur à $nom si un nombre tiré aléatoirement
// entre 0 et 1 est égal à 1.
$nom = (rand(0,1)==1)?'Olivier':'';
// Tester si $nom est renseigné.
//echo 'test'.$nom;
if ($nom == '') {
  // La variable $nom est vide, ce n'est pas normal :
  // => rediriger l'utilisateur vers une page d'erreur.
  header('location: erreur.html');
  // Interrompre l'exécution de ce script.
  exit;
}
// La variable $nom n'est pas vide, laisser le script se poursuivre.
$message = "Bonjour $nom !"; // préparer un message
?>
<!DOCTYPE HTML>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
      <p><?php echo $message; ?></p>
</body>
</html>