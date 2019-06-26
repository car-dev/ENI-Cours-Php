<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClasseFille
 *
 * @author sollivier
 */
class ClasseFille  extends ClasseMere{
 
    public function put($valeur) {
         // Implémentation de la méthode d'écriture.
        $this->x = $valeur;
    }

}
