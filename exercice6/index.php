<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 28/11/16
 * Time: 00:00
 */
$batiment = $_GET["batiment"];
$salle = $_GET["salle"];
if (isset($batiment) && isset($salle)){
    echo htmlspecialchars($batiment)." ".htmlspecialchars($salle);
}else{
    echo '<a href="index.php?batiment=12&salle=101">index.php?batiment=12&salle=101</a>';
}