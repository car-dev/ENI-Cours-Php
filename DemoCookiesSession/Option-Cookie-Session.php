<?php
// Ouvrir/réactiver la session.
session_start();
// Effacer toutes les informations de session.
$_SESSION = array();
// Supprimer le cookie de session (si utilisé).
// Le cookie porte le nom de la variable qui stocke
// l'identifiant de session.
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(),'',time()-1,'/');
}
// Détruire la session.
session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Cookie - Session</title>
	</head>
	<body>
    
    <?php
		echo 'Bonjour ',$_SESSION['nom'],'<br />';
		echo 'session_id() = ',session_id(),'<br />';
    ?>
	
	</body>
</html>