<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exceptions</title></head>
    <body>
        <div>

            <?php

            // Définition d'une classe.
            class uneClasse {

                // Un attribut quelconque.
                private $x;

                // Méthode constructeur.
                public function __construct($valeur) {
                    $this->x = $valeur;
                }

                // Méthode qui effectue une action quelconque.
                public function action() {
                    // Pour une raison donnée l'action est interdite
                    // si l'attribut est négatif : une exception est levée.
                    if ($this->x < 0) {
                        throw new Exception('Action interdite', 123);
                    }
                }

            }

            // Créer deux objets.
            $objet = new uneClasse(1);
            try {
                echo 'Objet 1 : ';
                $objet->action(); // ne va pas lever d'exception
                echo 'OK<br />';
            } catch (Exception $e) {
                echo 'ERREUR ' . $e->getCode() . ' - ' . $e->getMessage() . '<br />';
            }
            
            $objet = new uneClasse(-1);
            //$objet->action();
            try {
                echo 'Objet 2 : ';
                $objet->action(); // va lever une exception
                echo 'OK<br />';
            } catch (Exception $e) {
                echo 'ERREUR ' . $e->getCode() . ' - ' . $e->getMessage() . '<br />';
            }
            ?>

        </div>
    </body>
</html>
