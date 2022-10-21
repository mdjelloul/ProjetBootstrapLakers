<?php

// inclure la page connexion.php pour récuper les informations de la connexion.
include ("Login.php");

$req = $bdd->prepare("SELECT * from joueursactuel");
$req->execute();
$actuel = $req->fetchAll();
?>
<table border="10">
<tr>
<th>Nom</th><th>Prénom</th><th>Age</th><th>ID</th><th>Photo</th><th>MAJ</th><th>Supprimer</th>
</tr>

<?php
foreach ($actuel as $act){
	$nom = $act["NomJoueur"];
	$prenom = $act["PrenomJoueur"];
    $age = $act["AgeJoueur"];
    $id = $act["idJoueur"];
    $photo = $act["Photo"];
	echo "<tr>";
	echo "<td>$nom</td>";
	echo "<td>$prenom</td>";
    echo "<td>$age</td>";
    echo "<td>$id</td>";
    echo "<td>$photo</td>";
    echo "<th><a href=\"formUpdateactu.php?id=$id\">Modifier</a></th>";
    echo "<th><a href=\"SuppActu.php?id=$id\">Supprimer</a></th>";
    echo "</tr>";
      
}
?>

<table>

<div>

<form method="post" action="addActu.php" enctype="multipart/form-data">


<tr>   
    <td><label for="nom">Saisir le nom du joueur</label></td>
    <td><input type="name" id="nom" name="nom"></td>
</tr>
<tr>   
    <td><label for="prenom">Saisir le prénom du joueur</label></td>
    <td><input type="name" id="prenom" name="prenom"></td>
</tr>   

<tr>
    <td><label for="age">Saisir l'âge du joueur</label></td>
    <td><input type="name" id="age" name="age"></td>
</tr>   
<tr>
    <td><label for="id">Saisir l'id du joueur</label></td>
    <td><input type="name" id="id" name="id" readonly="true"></td>
</tr>

<tr>
<td><label for="id">Saisir la photo du joueur</label></td>
    <td><input type="file" name="photo" /></td>
</tr>    
<tr>
    <td><input type="submit" name= Envoyer Value = Envoyer></td>
    <td><input type="reset" name= Annuler Value = Annuler></td>
</tr>
</div> 

</form>
</table>