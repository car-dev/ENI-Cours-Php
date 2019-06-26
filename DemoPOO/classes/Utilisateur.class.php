<?php

/**
 * Description of Utilisateur
 *
 * @author sollivier
 */
class Utilisateur {

    // Définition des attributs.
    private $nom; // nom de l'utilisateur
    private $prenom; // prénom de l'utilisateur.
    private $tableauProp; // tableau des propriétés dynamiques.
    
    
    // membres statiques
    const ENTREPRISE = "E.N.I.";
    private static $nombre = 0;


    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        Utilisateur::$nombre++;
        
    }

    public function __destruct() {
        //echo "destruction de l'instance $this->nom <br />";
        Utilisateur::$nombre--;
    }

    public function __toString() {
        return $this->information(TRUE);
        //return $this->nom.' '.$this->prenom;
    }

    public function information($avecPrenom = FALSE) {
        $info = $this->nom;
        if ($avecPrenom) {
            $info .= " " . $this->prenom;
        }
        $info .= " (Entreprise : ". self::ENTREPRISE.")";
        return $info;
    }

    public function __set($name, $value) {
        $this->tableauProp[$name] = $value;
    }

    public function __get($name) {
        if (isset($this->tableauProp[$name])) {
            return $this->tableauProp[$name];
        } else {
            return null;
        } 
    }

   function __call($name, $arguments) {
       echo "La méthode $name n'existe pas !";
   }
   
   public function __clone() {
       Utilisateur::$nombre++;
   }
   
   public function __wakeup() {
       Utilisateur::$nombre++;
       
   }
   
   public function __sleep() {
       return array('nom','prenom');
   }
   
   public static function getNombre() {
       return self::$nombre;
   }
}
