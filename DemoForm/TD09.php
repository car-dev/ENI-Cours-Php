<?php
$url_relative = 'erreur.html';
echo '$url_relative = ', $url_relative, '<br />';
echo '$_SERVER[\'HTTP_HOST\'] = ', $_SERVER['HTTP_HOST'], '<br />';
echo '$_SERVER[\'PHP_SELF\'] = ', $_SERVER['PHP_SELF'], '<br />';
echo 'dirname($_SERVER[\'PHP_SELF\']) = ',
 dirname($_SERVER['PHP_SELF']), '<br />';
$url_absolue = 'http://' . $_SERVER['HTTP_HOST'] .
        rtrim(dirname($_SERVER['PHP_SELF']), '/\\') .
        '/' . $url_relative;

echo '$url_absolue = ', $url_absolue, '<br />';
header('location:'.$url_absolue);
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>