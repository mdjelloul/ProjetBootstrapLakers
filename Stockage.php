<?php
if(isset($_POST["valider"])){
    include("Login.php");
    $req=$pdo->prepare("insert into legendes(Photo) values(?)");
    $req -> execute(array($_FILES["images"]["Photo"])$_FILES["images"]["TaillePhoto"]);
}

?>
<hmtl>
    <head>
        <meta charset="UTF-8" />
</head>
<body>
    <form name="fo" method="post" action="" enctype="multipart/form-data">
        <input type="file" name="images" /><br />
        <input type="submit" name="Valider" value="Charger" />
    </form>
</body>
</html>

    