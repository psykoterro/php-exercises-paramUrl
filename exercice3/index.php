<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 23:53
 */
$dateDebut = $_GET["dateDebut"];
$dateFin = $_GET["dateFin"];
if (isset($dateDebut) && isset($dateFin)){
    echo htmlspecialchars($dateDebut)." ".htmlspecialchars($dateFin);
}else{
    echo '<a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">index.php?dateDebut=2/05/2016&dateFin=27/11/2016</a>';
}