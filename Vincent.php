<!DOCTYPE HTML>
<html>
    <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/Logo.png">
        <link rel="stylesheet" href="../cssboot/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <?php
        include 'Artiste.php';
        ?>
        <title>Artiste</title>
    </head>
    
    <body>
        
    <?php
    
    $req = $bdd->prepare("SELECT * from artiste");
    $req->execute();
    $legendes = $req->fetchAll();
    echo "<br>";
    echo "<div class='row'>";

    ?>