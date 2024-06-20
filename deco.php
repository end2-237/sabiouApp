<?php
session_start();

// Détruit toutes les variables de session
session_destroy();

// Redirige l'utilisateur vers la page de connexion
header("Location: ./index.php");
exit;
?>