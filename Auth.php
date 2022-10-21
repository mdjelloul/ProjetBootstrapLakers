<?php

include 'Login.php';

$req = $bdd->prepare("SELECT * FROM administrateur WHERE PseudoAdmin = ?");

$req->execute([$_POST['PseudoAdmin']]);

$user = $req->fetch();



if ($user && ($_POST['MDPAdmin']== $user['MDPAdmin'])){


    header("Location:formAdmin.php");
}

 else {
    echo  $user['MDPAdmin'];
    echo "identifiant ou mdp incorrect";
}
    header("Location : Connexion.php");


//DataBase connection





?>