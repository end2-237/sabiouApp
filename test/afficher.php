<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFFICHER|BD</title>
</head>
<body>
    <caption>ELEVE</caption>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "memgba";

              // Create connection

               $conn = new mysqli($servername, $username, $password, $database);
               $conn->set_charset("utf8");

               if ($conn) {
                echo "connecxion reussite";
               }else{
                echo"échec de connexion";
               }

               $sql = "SELECT * FROM eleve";
               $resultat = $conn->query($sql);

               //read data of each row
               while ($row = $resultat->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nom"] . "</td>
                <td>" . $row["prenom"] . "</td>
                <td>" . $row["tel"] . "</td>
                </tr>";

                }
            ?>
        </tbody>
    </table>
</body>
</html>