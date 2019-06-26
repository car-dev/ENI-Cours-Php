<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p><b>Sérialisation d'éléments simples</b><BR/>
            <?php
            echo "entier >  ";
            $entier = 7;
            $serial = serialize($entier);
            echo $serial;
            var_dump(unserialize($serial));
            echo "booléen >  ";
            $bool = FALSE;
            echo serialize($bool);
            var_dump(unserialize(serialize($bool)));
            echo "réel >  ";
            $float = 0.75669;
            $float = serialize($float);
            echo $float;
            var_dump(unserialize($float));

            echo "chaine > ";
            $chaine = "ma ; chaine";
            echo serialize($chaine);
            ?></p>
        <p><b>Sérialisation d'éléments complexes</b><BR/>
            <?php
            $array = array(0, 4, 7, 3);
            echo "Tableau indexé > ";
            echo serialize($array);
            var_dump(unserialize(serialize($array)));

            $array2 = array('truc' => 'machin', 'chose' => 8, 9 => 'yeah !');
            echo "Tableau associatif > ";
            echo serialize($array2);
            var_dump(unserialize(serialize($array2)));
            ?></p>
        <p><b>Sérialisation d'objets</b>
<?php

            class Test {

                private $att1;
                private $att2;
                private $att;

                function __construct() {
                    $this->att1 = 'a';
                    $this->att2 = mt_rand(1, 24);
                    $this->att = "construction";
                }

                function __sleep() {
                    $this->att2 +=5;
                    $this->att2 *=25;
                    return array('att1', 'att2');
                }

                function  __wakeup() {
                    $this->att="delinéarisation";
                    $this->att2/=25;
                    $this->att2-=5;
                }
            }

            $o1 = new Test;

            echo "avant :";
            var_dump($o1);
            $serial = serialize($o1);
            echo "Objet o1 sérialisé > ";
            var_dump($serial);
            unset($o1);
            $o1 = unserialize($serial);
            echo "après : ";
            var_dump($o1);
?>
        </p>
    </body>
</html>
