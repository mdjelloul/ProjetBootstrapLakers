<?php
include "connexion.php";
try{
    $req = $bdd->prepare("UPDATE  etudiant SET nomEtud=?, prenomEtud=? WHERE numEtud=?");
    $req->execute ([$_POST["nom"],$_POST["prenom"],$_POST["id"]]);
}catch(PDOException $e){
    echo $e->getMessage();
}
header("Location : EtudiantCateg.php");
?>