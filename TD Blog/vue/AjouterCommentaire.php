<?php
ob_start();
?>

<form action="#" method="post">
    <label for="auteur">Auteur</label><input type="text" id="auteur" name="auteur"
                                             maxlength="100"/><br>
    <label for="contenu">Contenu</label><input type="text" id="contenu" name="contenu"
                                               maxlength="200"/><br>
    <input type="submit" name="btAjouter" value="ajouter" />
</form>

<?php
$titre = 'Mon blog - Ajouter commentaire';
// Récupération du code HTML construit dans le tampon
$contenu = ob_get_clean();
// Construction de la page avec le gabarit
require './gabarit.php';
