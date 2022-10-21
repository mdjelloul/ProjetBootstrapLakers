<?php
include "Login.php";
try{
    $id=$_GET["id"];
    
    $req = $bdd->prepare("UPDATE histoire SET TitrePeriode=?, Photo=? WHERE idHistoire=?");
    $req->execute ([$_POST["nom"],$_POST["id"],$_POST["photo"]]);
}catch(PDOException $e){
    echo $e->getMessage();
}
header("Location : FormHistoire.php");
?>
   