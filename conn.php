<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "comm";
  
  $conn = new mysqli($servername, $username, $password, $database);
   $conn->set_charset("utf8");

   if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
  }
?>