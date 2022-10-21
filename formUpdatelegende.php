<?php
include "Login.php";
$id=$_GET["id"];

$req = $bdd->prepare("select * from legendes where idlegende=?");
$req->execute([$id]);
$leg = $req->fetch();
$nom = $leg["NomJoueur"];
$prenom=$leg["PrenomJoueur"];
$age = $leg["AgeJoueur"];
$photo= $leg["Photo"];
$id = $leg["idlegende"];
?>

<fieldset>
    <legend>Mettre à jour une légende</legend>
    <form  method="post" action="updateleg.php">

<table>

<div>

<tr>   
    <td><label for="id">Saisir le nom de la légende</label></td>
    <td>
        <?php echo "<input type=\"text\" name=\"nom\" \" value=\"$nom\">";?>
</td>
</tr>

<tr>   
    <td><label for="nom">Saisir le prénom de la légende</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"prenom\"  value=\"$prenom\">";?>
</td>
</tr>   

<tr>
    <td><label for="photo">Saisir l'âge de la légende</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"age\" value=\"$age\">";?>
</td>
</tr>
<tr>
    <td><label for="photo">Saisir la photo de la légende</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"photo\" value=\"$photo\">";?>
</td>
</tr>
<tr>
    <td><label for="photo">Saisir l'id de la légende</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"id\" readonly=\"true\" value=\"$id\">";?>
</td>
</tr>

<tr>
   <td><input type="submit" value="MAJ"></td>
</tr>

</div> 

</form>
</table>