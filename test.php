<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form methode="post" action="">
        <label for="nom">Nom</label><input type="text" name="Nom" >
        <input type="submit" value="envoyer">
    </form>
    <?php
                                   $servername = "localhost";
                                   $username = "root";
                                   $password = "";
                                   $database = "teste";
                                   $nom = $_POST['Nom'];

                                   // Create connection
                                   $connection = new mysqli($servername, $username, $password, $database);

                                   // Check connection
                                   if ($connection->connect_error){
                                   die ("Connection failed: " . $connection->connect_error);
                                    }
            
                                   // read all row from database table
                                   $sql = "SELECT * FROM nom";
                                   $result = $connection->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $connection->error);
                                   }

                                   "INSERT INTO `teste`.`nom` (`nom`) VALUES ('$nom')";
    ?>
</body>
</html>