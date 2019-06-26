<?php


/**
 * Description of ClasseMere
 *
 * @author sollivier
 */
abstract class ClasseMere implements Lecture,  Ecriture {
 // Attribut protégé.
    protected $x;

    // Deux méthodes pour accéder à l'attribut protégé :
    // - pour lire
    public function get() {
        return "GET = $this->x";
    }

    // - pour écrire
    //   > méthode abstraite
    abstract public function put($valeur);

}
