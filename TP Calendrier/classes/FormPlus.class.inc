<?php

class FormPlus extends Form {

    public function __construct($action, $titre, $methode = "POST") {
        parent::__construct($action, $titre, $methode);
    }

    //********************************************
    public function setRadio($name, $libelle, $value) {
        $this->code .=
            '<b>' . $libelle . '</b>'
            . '<input type="radio" name="' . $name . '" value="' . $value . '"/><br />'."\n";
    }

    //************************************************
    public function setCase($name, $libelle, $value) {
        $this->code .= 
            '<b>' . $libelle . '</b>'
            . '<input type="checkbox" name="' . $name . '" value="' . $value . '" /><br />'."\n";
    }

}
