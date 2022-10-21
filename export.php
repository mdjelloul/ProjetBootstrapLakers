<?php
include ('Login.php');
$req=$pdo->prepare("select * from legendes where id=? limit 1");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute(array($_GET["id"]));
$tab=$req->fetchAll();
echo $tab[0]["Photo"];
?>