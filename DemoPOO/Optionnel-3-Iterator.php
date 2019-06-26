<?php

class MaClasse implements SeekableIterator, ArrayAccess {

    public $prop1 = 1;
    private $tableau = array('elm1', 'elm2', 'elm3', 'elm4', 'elm5');
    private $position = 0;



    /*
     * METHODES DE SeekableIterator
     *
     * Retourne l'élément courant du tableau
     */

    public function current() {
        return $this->tableau[$this->position];
    }

    /*
     * Retourne la clé actuelle = position ici
     */

    public function key() {
        return $this->position;
    }

    /*
     * Déplace le curseur vers l'élément suivant
     */

    public function next() {
        $this->position++;
    }

    /*
     * Remet le curseur à sa position initiale
     */

    public function rewind() {
        $this->position = 0;
    }

    /*
     * Indique si la position courante est valide (TRUE) ou non (FALSE)
     */

    public function valid() {
        return isset($this->tableau[$this->position]);
    }

    /*
     * Définit la position du pointeur de lecture
     */

    public function seek($position) {
        $ancienne = $this->position;
        $this->position = $position;
        // en cas de position invalide : erreur + restaure l'ancienne.
        if (!$this->valid()) {
            trigger_error("La position spécifiée n'est pas valide",
                    E_USER_WARNING);
            $this->position = $ancienne;
        }
    }

    /*
     * Méthode le l'interface ArrayAccess
     */

    // Vérifier si l'indice demandé existe
    public function offsetExists($offset) {
        return isset($this->tableau[$offset]);
    }

    // Retourne la valeur correspondant à la clé demandée
    // Comme pour un array, une notice sera émise si la position n'existe pas
    public function offsetGet($offset) {
        return $this->tableau[$offset];
    }

    // Assigner la valeur $value à l'index $offset
    public function offsetSet($offset, $value) {
        $this->tableau[$offset] = $value;
    }

    // Supprime l'entrée du tableau pointée par $offset
    // provoque une l'erreur standard des tableax si l'offset n'existe pas
    public function offsetUnset($offset) {
        unset($this->tableau[$offset]);
    }

}

$objet = new MaClasse();

foreach ($objet as $key => $value) {
    echo "$key => $value<br />";
}

$objet->seek(2);
echo "L'élément à la position 2 est : ", $objet->current(), "<br />";

//$objet->seek(6);
//echo "L'élément à la position 6 est : ", $objet->current(), "<br />";

$objet[6] = "elm6";

echo "L'élément à la position 6 est : ", $objet[6], "<br />";

if (isset($objet[2]))
    echo "L'élément à la position 2 est : ", $objet[2], "<br />";
else
    echo "Pas d'élément avec la clé 2 dans l'objet <br />";

unset($objet[6]);
echo "L'élément à la position 6 est : ", $objet[6], "<br />";
?>
