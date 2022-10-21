<?php
    $req = $bdd->prepare("SELECT * from legendes");
    $req->execute();
    $legendes = $req->fetchAll();
    foreach ($legendes as $legende){
        echo "test";
    ?>
            
        <div class="col-4" >
            <div class="Jerry ">   
                <a target=_blank href="JerryWest.php" title="Jerry"><img src="<?php echo $serverPath,"/",$legende['Photo'];?>" width="280"></a>
        </div>
</div>
<?php
    }
    
?>