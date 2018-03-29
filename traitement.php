<?php

extract($_POST);

try{
  require('connexionBD.php');
  // requette d'insertion dans la base de donnée
  $requete=$con->prepare("INSERT INTO personne(NOM,PRENOM,ADRESSE)
                          VALUES(:nom,:prenom,:adresse)"
                          );
 
  $requete->bindParam(':nom',$nom);
  $requete->bindParam(':prenom',$prenom);
  $requete->bindParam(':adresse',$adresse);
  $resultat = $requete->execute();
  if($resultat){
     header('Location: affichelist.php');
  }else{
     header('Location: erreur.php');
  }
         
}catch(PDOException $e){
  echo 'Erreur!!! '.$e->getMessage();
  echo 'Echec de la connexion avec la base de donnée';
}
?>
