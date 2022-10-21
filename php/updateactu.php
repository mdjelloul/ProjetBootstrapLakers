<?php
include "Login.php";
try{
    $id=$_GET["id"];
    
    $req = $bdd->prepare("UPDATE joueursactuel SET NomJoueur=?, PrenomJoueur=?, AgeJoueur=?, Photo=? WHERE idJoueur=?");
    $req->execute ([$_POST["nom"],$_POST["prenom"],$_POST["age"],$_POST["id"],$_POST["photo"]]);
}catch(PDOException $e){
    echo $e->getMessage();
}
header("Location : FormJoueurActu.php");
?>
   