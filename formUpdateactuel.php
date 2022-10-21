<?php
include "Login.php";
$id=$_GET["id"];

$req = $bdd->prepare("select * from joueursactuel where idJoueur=?");
$req->execute([$id]);
$act = $req->fetch();
$nom = $act["NomJoueur"];
$prenom=$act["PrenomJoueur"];
$age = $act["AgeJoueur"];
$id = $act["idlegende"];
$photo = $act["Photo"];
?>

<fieldset>
    <legend>Mettre à jour un joueur actuel</legend>
    <form  method="post" action="updateactu.php">

<table>

<div>

<tr>   
    <td><label for="id">Saisir le nom du joueur</label></td>
    <td>
        <?php echo "<input type=\"text\" name=\"nom\" \" value=\"$nom\">";?>
</td>
</tr>

<tr>   
    <td><label for="nom">Saisir le prénom du joueur</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"prenom\"  value=\"$prenom\">";?>
</td>
</tr>   

<tr>
    <td><label for="photo">Saisir l'âge du joueur</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"age\" value=\"$age\">";?>
</td>
</tr>

<tr>
    <td><label for="photo">Saisir l'id de la légende</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"id\" readonly=\"true\" value=\"$id\">";?>
</td>
</tr>
<tr>
    <td><label for="photo">Saisir la photo du joueur</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"photo\" value=\"$photo\">";?>
</td>
</tr>

<tr>
   <td><input type="submit" value="MAJ"></td>
</tr>

</div> 

</form>
</table>