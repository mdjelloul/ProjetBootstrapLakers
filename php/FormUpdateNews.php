<?php
include "Login.php";
$id=$_GET["id"];

$req = $bdd->prepare("select * from news where idNews=?");
$req->execute([$id]);
$new = $req->fetch();
$titre = $new["TitreNews"];
$date=$new["DateNews"];
$photo = $new["Photo"];
$id = $new["idNews"];
?>

<fieldset>
    <legend>Mettre à jour une news</legend>
    <form  method="post" action="updatenews.php">

<table>

<div>

<tr>   
    <td><label for="id">Saisir le titre de la news</label></td>
    <td>
        <?php echo "<input type=\"text\" name=\"nom\" \" value=\"$titre\">";?>
</td>
</tr>

<tr>   
    <td><label for="nom">Saisir la date de la news</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"prenom\"  value=\"$date\">";?>
</td>
</tr>   

<tr>
    <td><label for="photo">Saisir la photo de la news</label></td>
    <td>
    <?php echo "<input type=\"text\" name=\"age\" value=\"$photo\">";?>
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