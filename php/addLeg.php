<?php

include "Login.php";

$req=$bdd->prepare("insert into legendes (idlegende,NomJoueur,PrenomJoueur,AgeJoueur,Photo) values(?,?,?,?,?)");
$req->execute([$_POST["id"],$_POST["nom"],$_POST["prenom"],$_POST["age"],$_FILES["photo"]["name"]]);

header("Location:LégendesForm.php");




?>