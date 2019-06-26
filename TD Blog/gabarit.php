<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <!-- Titre spécifique à chaque page -->
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Bienvenue sur ce petit blog.</p>
            </header>

            <div id="contenu">
                <!-- contenu spécifique de chaque page -->
                <?= $contenu ?>

            </div> <!-- #contenu -->
            <footer id="piedBlog">
                TD MVC DL/CDI
            </footer>
        </div> <!-- #global -->
    </body>
</html>