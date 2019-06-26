<?php
$message = "";
if (filter_has_var(INPUT_GET,'erreur')) {
    $erreur = filter_input(INPUT_GET,'erreur',FILTER_VALIDATE_INT);
    
    if ($erreur){
      $couleur = 'green';
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
            <fieldset>
                <legend>Choisissez un mois et une année</legend>
                <form action='calendrier.php' method='POST'>
                    <select name="m">
                        <option value="0">Mois</option>
<?php
// Affichage des mois en toutes lettres
/* Version "de base" :
  $mois = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre') ;
  foreach ($mois as $k => $m)
  {
  echo "<option value='$k'>$m\n" ;
  }
 */
// ou  : 
// Demande de formatage des dates en français
setlocale(LC_TIME, "fra", "fr_FR.UTF-8");
for ($m = 1; $m <= 12; $m++) {
    echo "                        <option value='$m'>" . 
        mb_convert_case(
            utf8_encode(
                strftime("%B", mktime(0, 0, 0, $m))
                    ), MB_CASE_TITLE, "utf-8"
                ) . "</option>\n";
}
?>
                    </select>
                    <select name="a">
                        <option value="0">Année</option>
<?php
// Affichage des années
for ($a = date('Y') - 1; $a <= 2024; $a++) {
    echo "                        <option>$a</option>\n";
}
?>
                    </select>
                   <input type="submit" value="Voir le calendrier">
                </form>
                <span id="erreur"><?= $message ?></span>
        </fieldset>
    </div>
</body>
</html>
