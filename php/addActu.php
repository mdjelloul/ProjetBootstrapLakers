<?php

include "Login.php";

$req=$bdd->prepare("insert into joueursactuel (NomJoueur,PrenomJoueur,AgeJoueur,idJoueur,Photo) values(?,?,?,?,?)");
$req->execute([$_POST["nom"],$_POST["prenom"],$_POST["age"],$_POST["id"],$_FILES["photo"]["name"]]);

header("Location:FormJoueurActu.php");




?>