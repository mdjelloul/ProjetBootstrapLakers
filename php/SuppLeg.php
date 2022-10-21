<?php
include "Login.php";
$id = $_GET["id"];

$req = $bdd->prepare("delete from legendes where idlegende=?");
$req->execute([$id]);

header("Location: LégendesForm.php");

?>