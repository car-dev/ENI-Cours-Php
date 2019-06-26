<?php

/**
 * Description of dalCommentaire
 *
 * @author Eni Ecole
 */
class dalCommentaire extends modele {
    
    public function ajouter($idBillet, $auteur, $contenu) {
        
        $sql = 'INSERT INTO commentaires ' .
                '(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) ' . 
                ' VALUES (?, ?, ?, ?)';
        $date = date('Y-m-d H:i:s');
        $this->executeRequete($sql, array($date,$auteur,$contenu,$idBillet));
        
        
    }
    
    
    
}
