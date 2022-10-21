<?php

// inclure la page connexion.php pour récuper les informations de la connexion.
include ("Login.php");

$req = $bdd->prepare("SELECT * from histoire");
$req->execute();
$histoire = $req->fetchAll();
?>
<table border="10">
<tr>
<th>Titre</th><th>ID</th><th>Photo</th><th>MAJ</th><th>Supprimer</th>
</tr>

<?php
foreach ($histoire as $hist){
	$titre = $hist["TitrePeriode"];
    $id = $hist["idHistoire"];
    $photo = $hist["Photo"];
	echo "<tr>";
	echo "<td>$titre</td>";
    echo "<td>$id</td>";
    echo "<td>$photo</td>";
    echo "<th><a href=\"formUpdatehistoire.php?id=$id\">Modifier</a></th>";
    echo "<th><a href=\"SuppHistoire.php?id=$id\">Supprimer</a></th>";
    echo "</tr>";
      
}
?>

<table>

<div>

<form method="post" action="addHistoire.php" enctype="multipart/form-data">


<tr>   
    <td><label for="nom">Saisir le titre de la période</label></td>
    <td><input type="name" id="nom" name="nom"></td>
</tr>

<tr>
    <td><label for="id">Saisir l'id de l'histoire</label></td>
    <td><input type="name" id="id" name="id" readonly="true"></td>
</tr>

<tr>
<td><label for="id">Saisir la photo de l'histoire</label></td>
    <td><input type="file" name="photo" /></td>
</tr>    
<tr>
    <td><input type="submit" name= Envoyer Value = Envoyer></td>
    <td><input type="reset" name= Annuler Value = Annuler></td>
</tr>
</div> 

</form>
</table>