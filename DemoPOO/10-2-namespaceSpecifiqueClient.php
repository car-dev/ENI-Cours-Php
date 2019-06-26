<?php
// Définition de l'espace de nom maLibrairie
namespace maLibrairieSpecifique;

class maClasse {

    public function mafonction() {
        return "<br />Namespace : " . __NAMESPACE__. ", class : " . __CLASS__ .
                ", fonction : " . __FUNCTION__;
    }

}
