<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "memgba";
  
  $conn = new mysqli($servername, $username, $password, $database);
   $conn->set_charset("utf8");

   if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
  }else {
   $requete = "INSERT INTO         
   eleve(nom, prenom) VALUES('".$_POST['nom']."', '".$_POST['prenom']."')";

   $resultat = $conn->query($requete);
   if ($resultat) {
    echo " Ajouter avec succés";
   }
   
  }
?>