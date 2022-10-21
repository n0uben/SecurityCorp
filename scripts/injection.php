<?php

require_once '../config.php';

$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);


//VERSION 1 (FORMULAIRE AVEC FAILLE)
if(isset($_POST['messageFaille'])):
    $message =  $_POST['messageFaille'];
    $requeteFaille = "INSERT INTO publications (message) VALUES(\" $message \")";
    $bdd->exec($requeteFaille);
endif;

if(isset($_POST['message'])):
    $requete = $bdd->prepare('INSERT INTO publications (message) VALUES(:message)');
    $requete->bindParam('message', $_POST['message']);
    $requete->execute();
endif;

echo '<h2>Les publications</h2>';
$requete = $bdd->prepare('SELECT * FROM publications');
$requete->execute();
$publications = $requete->fetchall();

if (count($publications) == 0) {
    echo "<p>Il n' y aucune publication à afficher !</p>";
} else {
    foreach ($publications as $publication) {
        echo '<h3>Publications # '.$publication['id'] . '</h3>';
        echo '<p> >> ' . $publication['message'] . '</p>';
    }
}

