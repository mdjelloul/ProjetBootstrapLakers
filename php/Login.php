<?php
 
$bdd = new PDO ( 
    'mysql: host=localhost;dbname=bdlakers; charset=utf8',
    'adminLakers',
    'adminLakers'
);
if (isset($_COOKIE["login"])) {
  $login = $_COOKIE["login"];
}else {
  $login = 0;
}

?>