<?php
include "Login.php";
$id = $_GET["id"];

$req = $bdd->prepare("delete from news where idNews=?");
$req->execute([$id]);

header("Location: FormNews.php");

?>