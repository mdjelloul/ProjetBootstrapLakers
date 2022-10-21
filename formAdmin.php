<?php

include ("Login.php");

$req = $bdd->prepare("SELECT * from legendes");
$req->execute();
$categorie = $req->fetchAll();
?>
<table border="10">
<tr>
<th>Nom</th><th>Prenom</th><th>Age</th><th>MAJ</th><th>Supprimer</th>
</tr>
<?php
foreach ($legendes as $legend){
	$nom = $legend["NomJoueur"];
	$prenom = $legend["PrenomJoueur"];
    $age = $legend["AgeJoueur"];
	echo "<tr>";
	echo "<td>$nom</td>";
	echo "<td>$prenom</td>";
    echo "<td>$age</td>";
    echo "<th><a href=\"formUpdateLegend.php?id=",$id."\">Modifier</a></th>";
    echo "<th><a href=\"fonctionsModSupp.php?id=",$id."\">Supprimer</a></th>";
    echo "</tr>";
      
?>
