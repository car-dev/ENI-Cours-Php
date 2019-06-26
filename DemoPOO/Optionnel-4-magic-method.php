<?php

// tester la méthode magique __set, __get, __isset, __unset
class MaClasse {

    private $attPrive = array();
    public $attPublic;
    static private $nbinstances = 0;

    function __construct() {
        MaClasse::$nbinstances++;
    }

    function __destruct() {
        MaClasse::$nbinstances--;
    }

    static function getNbinstances() {
        return MaClasse::$nbinstances;
    }

    function __set($name, $value) {
        //echo "la propriété $name n'existe pas ! ($value)";
        //
        // La valeur associée au nom de la propriété assignée
        // est stockée dans le tableau interne de l'objet.
        $this->attPrive[$name] = $value;
    }

    function __get($name) {
        // echo "$name n'est pas une propriété de la classe";
        if (isset($this->attPrive[$name])) {
            return $this->attPrive[$name];
        }
    }

    function __isset($name) {
        //echo "L'attribut $name n'existe pas dans la classe";
        return isset($this->attPrive[$name]);
    }

    function __unset($name) {
        // echo "unset $name<br />";
        if (isset($this->attPrive[$name])) {
            unset($this->attPrive[$name]);
        }
    }

    function __call($name, $arguments) {
        echo "Vous avez appelé la méthode <strong>$name</strong><br/>";
        echo "avec les paramètres suivants :  ";
        echo implode(', ', $arguments);
        echo "<br />";
    }

    function __invoke($argument){
        return "Valeur de l'argument : $argument";
    }

    static function __callStatic($name, $arguments) {
        echo "Vous avez appelé la méthode statique <strong>$name</strong><br/>";
        echo "avec les paramètres suivants :  ";
        echo implode(', ', $arguments);
        echo "<br />";
    }

}

echo "Nombre d'instances de MaClasse : ", MaClasse::getNbinstances(), "<br/>";
$obj = new MaClasse();
echo "Nombre d'instances de MaClasse : ", MaClasse::getNbinstances(), "<br/>";
$obj->attPublic = 'test simple';



if (isset($obj->attPublic)) {
    echo "Valeur de \$obj->attPublic : $obj->attPublic<br />";
}

if (isset($obj->autreAttribut)) {
    echo "Valeur de \$obj->autreAttribut : $obj->autreAttribut<br />";
} else {
    echo "pas de valeur correspondante dans l'objet<br />";
}

$obj->autreAttribut = 'autre valeur';

if (isset($obj->autreAttribut)) {
    echo "Valeur de \$obj->autreAttribut : $obj->autreAttribut<br />";
} else {
    echo "pas de valeur correspondante dans l'objet<br />";
}

echo "Valeur de \$obj->autreAttribut : $obj->bidon";
var_dump($obj);
echo "unset \$obj->attPublic :<br />";
unset($obj->attPublic);
echo "unset \$obj->autreAttribut :<br />";
unset($obj->autreAttribut);
var_dump($obj);
echo "<hr/>";
echo "Test avec les méthodes<br/>";
$obj->methode(123, 'test');
MaClasse::methodeStatique(345, 'test2');

echo "<hr/>";
echo "Test d'appel de l'objet<br/>";
echo $obj(5),"<br />";

// Destruction de l'objet
$obj = NULL;
//unset($obj);
echo "Nombre d'instances de MaClasse : ", MaClasse::getNbinstances(), "<br/>";
?>
