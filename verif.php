<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_pp'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $user_pp = $_SESSION['user_pp'];
} else {
    // Rediriger l'utilisateur vers la page de connexion
    header("Location: ./adminLogin/index.php");
    exit;
}
?>