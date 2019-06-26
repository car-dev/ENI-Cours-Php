<?php

/**
 * Se charge d'instancier le controleur demandé et d'appeler l'action présente si
 * nécessaire
 * @author Eni Ecole
 */
class routeur {

    public function routerRequete() {

        $controleur = $this->getControleur();

        $action = $this->getAction();

        $this->executeAction($controleur, $action);
    }

    /**
     * Retourn l'instance d'un controleur
     * @return \controleur
     * @throws Exception
     */
    private function getControleur() {

// récupération du controleur : url du type index.php?controleur=xxxx
        $controleur = filter_input(INPUT_GET, 'controleur', FILTER_SANITIZE_STRING);
// on conserve uniquement 20 caractères
        $controleur = substr($controleur, 0, configuration::get('longueurMaxNomControleur'));

        if ($controleur == '') {
            $controleur = configuration::get('defaultControleur');
        }
// on complete le nom de la classe avec le suffixe Controleur
        $controleur = $controleur . 'Controleur';

// Vérification de l'existance de la classe
        if (class_exists($controleur)) {
// instanciation du controleur
            return new $controleur();
        } else {
            throw new Exception('<br>Controleur non trouvé.' . $controleur);
        }
    }

    /**
     * Retourne le nom de l'action pour une url du type index.php?controleur=xxxx&action=yyyyy
     * @return string nom de l'action
     */
    private function getAction() {

        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        $action = substr($action, 0, configuration::get('longueurMaxNomAction'));

        // on définit la méthode index par défaut
        if ($action == '')
            $action = 'index';

        $action = $action . 'Action';

        return $action;
    }

    /**
     * Execute l'action du controleur 
     * @param \controleur $controleur
     * @param string $action
     * @throws Exception
     */
    private function executeAction($controleur, $action) {

        if (method_exists($controleur, $action))
            $controleur->$action();
        else
            throw new Exception("L'action demandée ($action) "
                    . "n'existe pas pour le controleur (" . get_class($controleur) . ')' );
    }

}
