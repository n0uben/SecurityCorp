<?php

require_once 'config.php';

$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
//echo $bdd;
echo "<p>salut</p>";
//$requete = $bdd->prepare('SELECT * FROM publications');
//$requete->execute();
//$publications = $requete->fetchall();

//foreach ($publications as $publication) {
//    echo "coucou";
//}


