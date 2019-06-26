<?php
class Form
{
    protected $code;
    /**
     * 
     * @param type $action
     * @param type $titre
     * @param type $methode
     */
    public function __construct($action="#",$titre="",$methode="post")
    {
        $this->code = '<form action="' . $action . '" method="' . $methode . '">'."\n";
        $this->code .= "<fieldset>\n<legend><b>" . $titre . "</b></legend>\n";
    }
    
    /**
     * Ajoute un input type texte au formulaire
     * @param type $name
     * @param type $libelle
     * @param type $methode
     */
    public function setText($name, $libelle, $id="")
    {
        if($id=="")
            $id =  uniqid();
        $this->code .= 
           '<label for="' . $id . '">' . $libelle .':</label>'
           . '<input id="' . $id . '" type="text" name="' . $name . '" /><br />'."\n";
    }
    /**
     * Ajout un bouton de type submit au formulaire
     * @param string $name attribut name de l'input
     * @param string $value attribut value de l'input
     */
    public function setSubmit($name="envoi",$value="Envoyer")
    {
        $this->code .= '<input type="submit" name="' . $name . '" value="' . $value . '"/><br />'."\n";
    }
    /**
     * Retourne le code HTML du formulaire
     * @return String 
     */
    public function getForm()
    {
        $this->code.="</fieldset>\n</form><br />\n";
        return $this->code;
    }
}
?>

