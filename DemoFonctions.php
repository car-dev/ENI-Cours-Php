<?php
//require 'functions2.inc.php';
include_once 'fonctions.inc.php';


include './header_page.php';
?>

<article>
    
    <?php
    echo '5 x 2 = ', produit(5, 2), '<br />';
    echo '5 x 2 = ', produit(5), '<br />';
    echo '5 x 2 = ', produit(), '<br />';
    echo 'produit(4,3,5,10) = ', produit(4, 3, 5, 10), '<br />';
    ?>
    <hr />
    <?php
    $val = 5;
    echo "Valeur initiale : $val <br />";
    multiplie($val, 2);
    echo "Valeur après exécution : $val <br />";
    ?>
    <hr />
    <?php
    $operation = 'somme';
    if (function_exists($operation)) {
        echo 'Somme de 2 et 4 : ', $operation(2, 4), '<br />';
    }
    $operation = 'prod';
    if (function_exists($operation)) {
        echo 'Produit de 2 et 4 : ', $operation(2, 4), '<br />';
    } else {
        echo 'Fonction inexistante dans le script. <br />';
    }

    echo 'Utilisation d\'une fonction avec parmètre callable : <br />';
    echo 'produit : ', operation('produit', 10, 5), '<br />';
    $operation = function ($v1, $v2) {
        return $v1 - $v2;
    }; // déclaration anonyme de la fonction à executer.
    var_dump($operation);
    echo 'produit : ', operation($operation, 10, 5), '<br />';
    ?>
    <hr />
    <?php
    $tab = getTableau();
    $index = 1;
    echo "$tab[$index]", '<br />';
    // depuis php5.4
    echo getTableau()[1];
    ?>
</article>

<?php
    include './footer_page.php';
    