<?php
include_once '../verif.php';
include_once '../conn.php';

if (!isset($_SESSION['user_id'])) {
    echo "User ID is not set.";
    exit;
}
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = basename($_FILES['image']['name']);
        $targetDir = 'adminPp/'; 
        $targetFile = $targetDir . $user_id . '_' . $imageName;

        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            
            $imagePath = $conn->real_escape_string($targetFile);
            $user_id = (int)$user_id;

            $query = "UPDATE admin SET pp = '$imagePath' WHERE id = $user_id";
            $stmt = $conn->query($query);

            if ($stmt) {
                $_SESSION['user_pp'] = $imagePath;
                header("Location: ../index.php");
            } else {
                echo 'Erreur lors de la mise à jour de la photo de profil : ' . $conn->error;
            }
        } else {
            echo 'Erreur lors du téléchargement de l\'image.';
        }
    } else {
        echo 'Aucune image téléchargée ou une erreur est survenue.';
    }
}
?>