<?php
// Récupération dans des variables PHP des valeurs
// saisies dans le formulaire en utilisant un
// tableau $_* ($_POST ici).
$form_nom = (isset($_POST['nom'])) ? $_POST['nom'] : '';
$form_prénom = (isset($_POST['prénom'])) ? $_POST['prénom'] : '';
// Etc. pour chaque zone.
// Ensuite, on utilise les variables dans les traitements
// et éventuellement dans le réaffichage du formulaire.
if (!empty($form_nom)) {
    echo ($form_nom);
    echo '<br/>';
    echo ($form_prénom);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Saisie</title>
        <meta charset="UTF-8" />
    </head>
    <body> 
        <form action="" method="post">
            <div>
                Nom : <input type="text" name="nom"
                             value="<?php echo $form_nom ?>" /><br/>
                Prénom : <input type="text" name="prénom"
                                value="<?php echo $form_prénom ?>" /><br/>
                <input type="submit" name="ok" value="OK" />
            </div>
        </form>
    </body>
</html>