<?php
/* This script connect us to the DATABASE*/

// MySQL server address, MySQL username, MySQL password,  Database name
  $id_bd = mysqli_connect("localhost","admin","patatesae23","sae23") 
 
    or die("Connexion au serveur et/ou à la base de données impossible");

  // Data encoding management
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
