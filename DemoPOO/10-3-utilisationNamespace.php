<?php
include_once '10-1-namespaceProjet.php';
include_once '10-2-namespaceSpecifiqueClient.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Déclaration d'une instance ma classe "maClasse" se trouvant dans 
        // le namespace MonProjet;
        $objProjet = new MonProjet\maClasse();
        echo $objProjet->mafonction();
        // Déclaration d'une instance ma classe "maClasse" se trouvant dans 
        // le namespace maLibrairieSpecifique;
        $objMaLivrairie = new maLibrairieSpecifique\maClasse();
        echo $objMaLivrairie->mafonction();
        // Création d'un alias sur la classe du namespace monProjet
        use MonProjet\maClasse as mc;
        $objAlias = new mc();
        echo $objAlias->mafonction();
        ?>
    </body>
</html>
