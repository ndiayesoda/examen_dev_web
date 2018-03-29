<?php
$server="localhost";
$login="root";
$passwd="";
$dbname="school";
  
  // Création d'un objet de connexion à la base de données
  	$con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);
?>
