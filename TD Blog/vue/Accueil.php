<?php
ob_start();
?>

<?php foreach ($billets as $billet): ?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
        <a href="index.php?controleur=commentaire&action=ajouter&id=<?= $billet['id'] ?>">Ajouter commentaire</a>
    </article>
    <hr />
<?php endforeach; ?>

<?php
$titre = 'Mon blog - Accueil';
// Récupération du code HTML construit dans le tampon
$contenu = ob_get_clean();
// Construction de la page avec le gabarit
require './gabarit.php';

