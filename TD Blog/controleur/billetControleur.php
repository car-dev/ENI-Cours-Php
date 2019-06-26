<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controleurBillet
 *
 * @author Eni Ecole
 */
class billetControleur {

    public function indexAction() {
        
        $dalBillet = new dalBillet();
        $billets = $dalBillet->getBillets();
        // Générer la vue (les données sont "injectées" dans le gabarit).
        require './vue/Accueil.php';
        
    }

}
