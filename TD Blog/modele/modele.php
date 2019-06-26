<?php

abstract class Modele {

    protected static $bdd;

    /**
     * Execute la requete sql passée en parametre
     * Lie les parametres si présent
     * @param type $sql
     * @param string[] $params
     * @return \PDOStatement
     */
    protected function executeRequete($sql, $params = null) {

        if ($params == NULL) {
            $resultat = self::getBdd()->query ($sql);
        } else
        {
            $resultat = self::getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    /**
     * Fonction d'obtention de la connexion à la base de données.
     * @return \PDO Objet connexion ouvert.
     */
    protected function getBdd() {
        if (self::$bdd == NULL) {
            self::$bdd = new PDO(configuration::get('connectionString'), 
                    configuration::get('login'), 
                    configuration::get('password'), 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }

}
