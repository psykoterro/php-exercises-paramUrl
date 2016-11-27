<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 23:13
 */
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
if (isset($nom) && isset($prenom)){
    echo htmlspecialchars($nom)." ".htmlspecialchars($prenom);
}else{
    echo '<a href="index.php?nom=Nemare&prenom=Jean">index.php?nom=Nemare&prenom=Jean</a>';
}