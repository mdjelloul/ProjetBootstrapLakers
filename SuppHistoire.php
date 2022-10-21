<?php
include "Login.php";
$id = $_GET["id"];

$req = $bdd->prepare("delete from histoire where idHistoire=?");
$req->execute([$id]);

header("Location: FormHistoire.php");

?>