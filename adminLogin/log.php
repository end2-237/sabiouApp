<?php
session_start();

include_once '../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin WHERE user_name = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        header("Location: ../index.php");
        exit;
    } else {
        echo "<script>
                alert('Identifiants non valides. verifiez vos donnes de connexion');
                
                window.location.href = './index.php';
            </script>";
    }

    $stmt->close();
}

$conn->close();
?>