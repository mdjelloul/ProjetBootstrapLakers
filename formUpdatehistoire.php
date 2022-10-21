<?php
include "Login.php";
$id=$_GET["id"];

$req = $bdd->prepare("select * from histoire where idHistoire=?");
$req->execute([$id]);
$hist = $req->fetch();
$titre = $hist["TitrePeriode"];
$id = $hist["idHistoire"];
$photo = $hist["Photo"];
?>

<fieldset>
    <legend>Mettre à jour une histoire</legend>
    <form  method="post" action="updatehistoire.php">

<table>

<div>

<tr>   
    <td><label for="id">Saisir le titre de la période</label></td>
    <td>
        <?php echo "<input type=\"text\" name=\"nom\" \" value=\"$titre\">";?>
</td>
</tr>

<tr>
    <td><label for="photo">Saisir l'id de l'histoire</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"id\" readonly=\"true\" value=\"$id\">";?>
</td>
</tr>
<tr>
    <td><label for="photo">Saisir la photo de l'histoire</label></td>
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