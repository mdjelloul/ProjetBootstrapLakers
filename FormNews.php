<?php

// inclure la page connexion.php pour récuper les informations de la connexion.
include ("Login.php");

$req = $bdd->prepare("SELECT * from news");
$req->execute();
$news = $req->fetchAll();
?>
<table border="10">
<tr>
<th>Titre</th><th>Date</th><th>Image</th><th>ID</th><th>MAJ</th><th>Supprimer</th>
</tr>

<?php
foreach ($news as $new){
	$titre = $new["TitreNews"];
	$date = $new["DateNews"];
    $photo = $new["Photo"];
    $id = $new["idNews"];
	echo "<tr>";
	echo "<td>$titre</td>";
	echo "<td>$date</td>";
    echo "<td>$photo</td>";
    echo "<td>$id</td>";
    echo "<th><a href=\"FormUpdateNews.php?id=$id\">Modifier</a></th>";
    echo "<th><a href=\"SuppNews.php?id=$id\">Supprimer</a></th>";
    echo "</tr>";
      
}
?>

<table>

<div>

<form method="post" action="addNews.php" enctype="multipart/form-data">


<tr>   
    <td><label for="nom">Saisir le titre de la news</label></td>
    <td><input type="name" id="titre" name="titre"></td>
</tr>
<tr>   
    <td><label for="prenom">Saisir la date de la news</label></td>
    <td><input type="name" id="date" name="date"></td>
</tr>   
<tr>
<td><label for="id">Saisir la photo de la news</label></td>
    <td><input type="file" name="photo" /></td>
</tr> 

<tr>
    <td><label for="id">Saisir l'id de la news</label></td>
    <td><input type="name" id="id" name="id" readonly="true"></td>
</tr>

 
<tr>
    <td><input type="submit" name= Envoyer Value = Envoyer></td>
    <td><input type="reset" name= Annuler Value = Annuler></td>
</tr>
</div> 

</form>
</table>