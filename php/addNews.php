<?php

include "Login.php";

$req=$bdd->prepare("insert into news (TitreNews,DateNews,idNews,Photo) values(?,?,?,?)");
$req->execute([$_POST["titre"],$_POST["date"],$_POST["id"],$_FILES["photo"]["name"]]);

header("Location:FormNews.php");




?>