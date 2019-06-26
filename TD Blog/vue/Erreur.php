<?php
ob_start();
?>

<!-- Construire le code html de la page -->
<p>Une erreur s'est produite : <?= $message ?></p>

<?php
$titre = 'Mon blog - Erreur';
$contenu = ob_get_clean();
require './gabarit.php';