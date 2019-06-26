<?php
//    include_once './Utilisateur.class.php';
//    include './UtilisateurEmploye.class.php';
//
//    
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
         $uc = new UtilisateurEmploye("OLLIVIER","Stéphane",1200000);
         echo $uc;
         $uc->setNom("NACEUR")->setPrenom("Luc");
         var_dump($uc);
         
         $test = new Bidon();
         var_dump($test);
         
         $test = new ClasseFille();
         $test->put("test");
         echo $test->get();
         
        ?>
    </body>
</html>
