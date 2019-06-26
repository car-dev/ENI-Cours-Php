<?php

/**
 * Description of commentaireControleur
 *
 * @author Eni Ecole
 */
class commentaireControleur {

    public function ajouterAction() {

        $btAjouter = filter_input(INPUT_POST, 'btAjouter', FILTER_SANITIZE_STRING);

        $idBillet = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        // vérification que l'identifiant du billet ne soit pas nul
        if (empty($idBillet))
            throw new Exception('Identifiant de billet non valide.');

        // Vérification du clic sur le bouton
        if ($btAjouter == 'ajouter')
            $this->traitementAjout($idBillet);
        else
            require './vue/AjouterCommentaire.php';
    }

    private function traitementAjout($idBillet) {

        $dalCommentaire = new dalCommentaire();
        // Récupération des données du formulaire et de l'url (id)
        $auteur = filter_input(INPUT_POST, 'auteur', FILTER_SANITIZE_STRING);
        $contenu = filter_input(INPUT_POST, 'contenu', FILTER_SANITIZE_STRING);

        $dalCommentaire->ajouter($idBillet, $auteur, $contenu);

        require './vue/AjouterSucces.php';
    }

}
