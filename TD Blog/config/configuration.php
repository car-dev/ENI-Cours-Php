<?php

/**
 * Description of configuration
 *
 * @author Eni Ecole
 */
class configuration {

    private static $parametres;

    /**
     * Retourne un tableau issue d'un fichier de configuration
     * Leve une exception si le fichier n'est pas trouvé
     * @return string[]
     * @throws Exception : Fichier non trouvé
     */
    private static function getParametres() {

        $fichier = __DIR__ . '/dev.ini';

        if (self::$parametres == null) {
            if (file_exists($fichier)) {
                self::$parametres = parse_ini_file($fichier);
            } else {
                $fichier = __DIR__ . '/prod.ini';
                if (file_exists($fichier)) {
                    self::$parametres = parse_ini_file($fichier);
                } else {
                    throw new Exception("Pas de fichier de configuration...");
                }
            }
        }
        return self::$parametres;
    }

    /**
     * Retourne la valeur correspondante à la clé recherchée 
     * dans le fichier de configuration
     * @param string $cle
     */
    public static function get($cle, $valeurDefaut = null) {

        if (isset(self::getParametres()[$cle])) {
            return self::getParametres()[$cle];
        } else {
            return $valeurDefaut;
        }
    }

}
