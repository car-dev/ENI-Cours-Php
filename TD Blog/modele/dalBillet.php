<?php

/**
 * Description of billet
 *
 * @author Eni Ecole
 */
class dalBillet extends modele {

    /**
     * Fonction d'accès aux données de la table Billets.
     */
    public function getBillets() {
        $billets = $this->executeRequete('select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from BILLETS'
                . ' order by BIL_ID desc');
        return $billets;
    }

    /**
     * Récupération d'un billet à partir de son identifiant.
     * @param int $id
     * @return type
     */
    public function getBillet($id) {
        $resultat = $this->executeRequete('select BIL_ID as id, BIL_DATE as date,'
                . ' BIL_TITRE as titre, BIL_CONTENU as contenu from BILLETS'
                . ' WHERE BIL_ID = ? ', array($id) );
        
        if($resultat->rowCount()==1)
            return $resultat->fetch ();
        else
            throw new Exception("Aucun billet avec cet identifiant.");
    }

}
