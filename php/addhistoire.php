<?php

include "Login.php";

$req=$bdd->prepare("insert into histoire (TitrePeriode,idHistoire,Photo) values(?,?,?)");
$req->execute([$_POST["nom"],$_POST["id"],$_FILES["photo"]["name"]]);

header("Location:FormHistoire.php");




?>