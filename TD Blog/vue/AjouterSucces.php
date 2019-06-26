<?php
ob_start();
?>
<h1>Commentaire</h1>
<p>Enregistrement effectué avec succès !</p>
<a href="index.php?controleur=commentaire&action=ajouter">Nouvel enregistrement</a>
<?php
$titre = 'Mon blog - Ajouter commentaire';
// Récupération du code HTML construit dans le tampon
$contenu = ob_get_clean();
// Construction de la page avec le gabarit
require './gabarit.php';
