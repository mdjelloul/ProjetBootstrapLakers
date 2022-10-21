<?php

// inclure la page connexion.php pour récuper les informations de la connexion.
include ("Login.php");

$req = $bdd->prepare("SELECT * from legendes");
$req->execute();
$legendes = $req->fetchAll();
?>
<table border="10">
<tr>
<th>ID</th><th>Nom</th><th>Prénom</th><th>Age</th><th>Photo</th><th>MAJ</th><th>Supprimer</th>
</tr>

<?php
foreach ($legendes as $leg){
	$nom = $leg["NomJoueur"];
	$prenom = $leg["PrenomJoueur"];
    $age = $leg["AgeJoueur"];
    $photo = $leg["Photo"];
    $id = $leg["idlegende"];
	echo "<tr>";
    echo "<td>$id</td>";
	echo "<td>$nom</td>";
	echo "<td>$prenom</td>";
    echo "<td>$age</td>";
    echo "<td>$photo</td>";
    echo "<th><a href=\"formUpdatelegende.php?id=$id\">Modifier</a></th>";
    echo "<th><a href=\"SuppLeg.php?id=$id\">Supprimer</a></th>";
    echo "</tr>";
      
}
?>

<table>

<div>

<form method="post" action="addLeg.php" enctype="multipart/form-data">

<tr>
    <td><label for="id">Saisir l'id du joueur</label></td>
    <td><input type="name" id="id" name="id" readonly="true"></td>
</tr>

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
    <td><label for="photo">Saisir la photo du joueur</label></td>
    <td><input type="name" id="photo" name="photo1"></td>
</tr>

<tr>
<td><label for="id">Saisir l'image du joueur</label></td>
    <td><input type="file" name="photo" /></td>
</tr>    
<tr>
    <td><input type="submit" name= Envoyer Value = Envoyer></td>
    <td><input type="reset" name= Annuler Value = Annuler></td>
</tr>
</div> 

</form>
</table>