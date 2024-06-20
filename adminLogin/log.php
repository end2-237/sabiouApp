<?php
session_start();

include_once '../conn.php';
 $error = "connexion reussie";
 $user = $_POST['user'];
 $password = $_POST['password'];

 $requete = "SELECT * FROM admin";
        $resultat = $conn->query($requete);
        if ($resultat->num_rows > 0) {
            while ($row = $resultat->fetch_assoc()) {
                if ($row['user_name'] == $user && $row['password'] == $password) {

                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['name'] = $row['user_name'];

                    header("Location: ../index.php");
                    exit;
                }
            }
            echo "échec de connexion!!!!!";
        }
        
        
        else{
            echo "no user!!!!!";
            if (!$resultat) {
                die("Invalid query: " . $conn->error);
                 }
        }
$conn->close();
?>