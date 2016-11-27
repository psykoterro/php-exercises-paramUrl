<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 23:46
 */
$age = $_GET["age"];
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
if (isset($nom) && isset($prenom) && isset($age)){
    echo htmlspecialchars($nom)." ".htmlspecialchars($prenom);
}elseif (isset($nom) && isset($prenom) && !isset($age)){
    echo htmlspecialchars($nom)." ".htmlspecialchars($prenom)."<br />";
    echo "Vous n'avez pas specifier d'age !<br />";
}else{
    echo "Rien n'as été envoyé, utilisez le lien ci-dessous.<br />";
}
echo '<a href="index.php?nom=Nemare&prenom=Jean">index.php?nom=Nemare&prenom=Jean</a>';