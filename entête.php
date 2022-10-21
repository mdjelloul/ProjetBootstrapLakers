<html>
<head>
        <title>Lakers</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../cssboot/bootstrap.min.css">
        <link rel="stylesheet" href="../css/Index.css">
        <link rel="icon" href="../images/Logo.png">
        <?php
        $serverPath = "http://".$_SERVER["HTTP_HOST"]."ProjetBootstrapLakers/images";
        
        ?>
        
</head>

<body>
    <!--C'est le menu-->
    <div class="mt-20 p-5 bg-custom" style="text-align: center;">
    <img src="../images/Titre/Lakers.png" class="rounded mx-auto d-block">
        <br>
        <br>
        <img class=logo src="../images/Logo.png" alt="logo des Lakers" width="250">   

        <div class="BTN">
            <a class="btn btn-primary cool" href="../php/Index1.php" role="button"><b>ACCUEIL</b></a>
            <a class="btn btn-primary cool" href="../php/Histoire.php" role="button"><b>HISTOIRE</b></a>
            <button class="btn btn-secondary dropdown-toggle cool" type="button"
              id="PageAD-dropdown" data-bs-toggle="dropdown">
              <b>JOUEURS</b>
            </button>
            <ul class="dropdown-menu" aria-labelledby="PageAD-dropdown">
              <li><a class="dropdown-item" id="lol" href="../php/JoueursActuels.php"><b>JOUEURS ACTUELS</b></a></li>
              <li><a class="dropdown-item" id="lol" href="../php/Légendes.php"><b>LEGENDES</b></a></li>
            </ul>
            <a class="btn btn-primary cool" href="../php/News.php" role="button"><b>NEWS</b></a>
        </div>
    </div>


