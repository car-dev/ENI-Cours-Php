<?php
class Mere {
    public static function quiSuisJe(){
        echo "Je suis la classe <strong>Mère</strong><br />";
    }

    public static function test(){
        //self::quiSuisJe();
        static::quiSuisJe();
    }
}

class Enfant extends Mere{
    public static function  quiSuisJe() {
        echo "Je suis la classe <strong>Enfant</strong><br />";
   }
}

Mere::test();
Enfant::test();

$e = new Enfant();
$e->test();
?>
