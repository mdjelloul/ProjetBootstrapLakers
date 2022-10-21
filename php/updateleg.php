<?php
include "Login.php";
try{
    $id=$_GET["id"];
    
    $req = $bdd->prepare("UPDATE legendes SET NomJoueur=?, PrenomJoueur=?, AgeJoueur=?, Photo=? WHERE idlegende=?");
    $req->execute ([$_POST["nom"],$_POST["prenom"],$_POST["age"],$_POST["photo"],$_POST["id"]]);
}catch(PDOException $e){
    echo $e->getMessage();
}
header("Location : LégendesForm.php");
?>
   