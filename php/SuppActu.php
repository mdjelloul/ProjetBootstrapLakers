<?php
include "Login.php";
$id = $_GET["id"];

$req = $bdd->prepare("delete from joueursactuel where idJoueur=?");
$req->execute([$id]);

header("Location: FormJoueurActu.php");

?>