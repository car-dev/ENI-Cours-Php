<?php
include 'util/autoregister.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Entreprise : ", Utilisateur::ENTREPRISE, " ", Utilisateur::getNombre(), "<br />";

        $u = new Utilisateur("Titi", "Toto");
        echo "Nombre d'utilisateurs : ", Utilisateur::getNombre(), "<br />";

//        $u->nom = "Ollivier";
//        $u->prenom = "Stéphane";
//        echo "Utilisateur : $u->nom $u->prenom";
//        $u->setNom("Ollivier");
//        $u->setPrenom("Stéphane");
        $u->setPrenom("Stéphane")->setNom("Ollivier");
//        echo "Utilisateur : ",$u->getNom()," ",$u->getPrenom(),"<br />";
        echo "Utilisateur : $u<br />";
        echo 'Information : ', $u->information(), '<br />';

        $u->emploi = "formateur";
        echo 'Emploi de l\'utilisateur : ', $u->emploi, '<br />';
        echo 'Autre propriété non définie : ', is_null($u->test) ? 'NULL' : $u->test, '<br />';

        $u->faireUnTruc();

        var_dump($u);
        // unset($u);


        $uclone = clone $u;
        var_dump($uclone);

        echo "Nombre d'utilisateurs : ", Utilisateur::getNombre(), "<br />";

        $chaineSerial = serialize($u);
        var_dump($chaineSerial);
        var_dump(serialize($u->getPrenom()));
        
        
        echo 'Destruction de l\'instance $u <br />';
        $u = NULL;
        
        $udeserialise = unserialize($chaineSerial);
        var_dump($udeserialise);
        
        //$u->setNom("Toto"); // Fatal Error : méthode n'est plus disponible
        echo "Nombre d'utilisateurs : ", Utilisateur::getNombre(), "<br />";
        ?>
    </body>
</html>
