<?php

class TestClone {

    private $attribut;
    private static $instances = 0;
    public $objet;

    public function __construct() {
        self::$instances++;
        $this->attribut = "test";
    }

    public static function getInstances() {
        return self::$instances;
    }

    public function __clone() {
        self::$instances++;
        if ($this->objet != null) {
            $this->objet = clone $this->objet;
        }
    }

    public function setAttribut($valeur) {
        $this->attribut = $valeur;
    }

}

class ObjetCible {

    public $membre = 1;

}

// Test de clonage
$a = new TestClone();
$a->objet = new ObjetCible;

$b = clone $a;
$b->setAttribut('toto');
if ($b->objet) {
    $b->objet->membre = 2;
}

var_dump($a);
var_dump($b);

echo "nombre d'instances de la classe : ", TestClone::getInstances();
?>
