<?php
include "Login.php";
try{
    $id=$_GET["id"];
    
    $req = $bdd->prepare("UPDATE news SET TitreNews=?,DateNews=?, Photo=? WHERE idNews=?");
    $req->execute ([$_POST["titre"],$_POST["date"],$_POST["photo"],$_POST["id"]]);
}catch(PDOException $e){
    echo $e->getMessage();
}
header("Location : FormNews.php");
?>
   