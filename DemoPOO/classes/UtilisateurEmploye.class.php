<?php
/**
 * Description of UtilisateurCouleur
 *
 * @author sollivier
 */
class UtilisateurEmploye extends Utilisateur {
    
    private $salaire;
    
    public function __construct($nom,$prenom,$salaire) {
        parent::__construct($nom, $prenom);
        $this->salaire=$salaire;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
        return $this;
    }

    public function information($avecPrenom = FALSE) {
        $info = parent::information($avecPrenom);
        $info .= " Salaire : $this->salaire";
        return $info;
    }

    
}
