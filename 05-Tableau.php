<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accéder à un élément individuel d'un tableau</title>
    </head>
    <body>
            <?php
            $nb[] = 'zero';
            $nb[] = 'un';
            $nb[] = 'deux';
            $nb[] = 'trois';
            $nb[5] = 'cinq';
            $nb[] = 'six';
            $nb['un'] = 1;
            $nb[] = 'sept';
            $nb[-1] = "moins un";
            $nb[1.5] = 'réel';
            var_dump($nb);

            $villes_france[] = 'Paris';
            $villes_france[] = 'Lyon';
            $villes_france[] = 'Nantes';
            var_dump($villes_france);

            $villes_italie[] = 'Rome';
            $villes_italie[] = 'Venise';
            var_dump($villes_italie);

            $villes['FRANCE'] = $villes_france;
            $villes['ITALIE'] = $villes_italie;
            var_dump($villes);

            $nombres = array('zéro', 'un', 'deux', 'trois', 5 => 'cinq', 'six', 'un' => 1, 'sept', -1 => 'moins un');
            var_dump($nombres);
            echo $nombres[1], '<br />';
            echo $nombres['un'], '<br />';
            $villes = array(
                'FRANCE' => array('Paris', 'Lyon', 'Nantes'), 
                'ITALIE' => array('Rome', 'Venise'),
                'ANDORRE'=> 'Andorre'
                );
            echo "\$villes['FRANCE'][0] = {$villes['FRANCE'][0]}<br />";
            echo "\$villes['ITALIE'][1] = {$villes['ITALIE'][1]}<br />";
            var_dump($villes);
            


            foreach ($nombres as $nombre) {
                echo "$nombre<br/>";
            }
            echo '<br>';
            foreach ($nombres as $key=>$value){
                echo "$key : $value <br />";
            }
            
            // Explode : 
            $liste = "bleu, vert, orange, rouge, blanc" ;
            // Construction d'un tableau à partir d'une chaine de caractère :
            $couleur = explode(", ", $liste) ;
            var_dump($couleur) ;
            // Transformation de mon tableau en chaine de caractère dont les mots sont séparés 
            // par un |
            var_dump(implode("|", $couleur)) ;
        
            
            ?>
    </body>
</html>
