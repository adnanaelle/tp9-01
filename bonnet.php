<?php

$connexion = mysqli_connect("localhost", "root", " ", "ARTICLE"); 
$requete = "SELECT * FROM `ARTICLE` ";
$LesPersonnes = $connexion->query($requete);
print_r($LesPersonnes);

foreach($LesPersonnes as $UnePersonne){ 
    echo $UnePersonne['couleur']."<br>"; 
    echo $UnePersonne['prix']."<br>";
    echo $UnePersonne['stock']."<br>";
}

$connexion->close();

?>